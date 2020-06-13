<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Search for points of interest - Azure Maps Web SDK Samples</title>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=Edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="This tutorial shows how to search for points of interest and display them on the map."
    />
    <meta
      name="keywords"
      content="Microsoft maps, map, gis, API, SDK, services, module, tutorials, search"
    />
    <meta name="author" content="Microsoft Azure Maps" />

    <!-- Add references to the Azure Maps Map control JavaScript and CSS files. -->
    <link
      rel="stylesheet"
      href="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.css"
      type="text/css"
    />
    <script src="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.js"></script>

    <!-- Add a reference to the Azure Maps Services Module JavaScript file. -->
    <script src="https://atlas.microsoft.com/sdk/javascript/service/2/atlas-service.min.js"></script>

    <script>
      function CreateMap(lat, lon) {
        // Instantiate a map object
        var map = new atlas.Map("myMap", {
          view: "Auto",

          //Add your Azure Maps key to the map SDK. Get an Azure Maps key at https://azure.com/maps. NOTE: The primary key should be used as the key.
          authOptions: {
            authType: "subscriptionKey",
            subscriptionKey: "5jCBLWNDk6558sABdC1dfDcYIczkbBg5LCSk1tTrBOc"
          }
        });

        //Wait until the map resources are ready.
        map.events.add("ready", function() {
          //Create a data source and add it to the map.
          datasource = new atlas.source.DataSource();
          map.sources.add(datasource);

          //Add a layer for rendering point data.
          var resultLayer = new atlas.layer.SymbolLayer(datasource, null, {
            iconOptions: {
              image: "pin-round-darkblue",
              anchor: "center",
              allowOverlap: true
            },
            textOptions: {
              anchor: "top"
            }
          });

          map.layers.add(resultLayer);

          // Use SubscriptionKeyCredential with a subscription key
          var subscriptionKeyCredential = new atlas.service.SubscriptionKeyCredential(
            atlas.getSubscriptionKey()
          );

          // Use subscriptionKeyCredential to create a pipeline
          var pipeline = atlas.service.MapsURL.newPipeline(
            subscriptionKeyCredential
          );

          // Construct the SearchURL object
          var searchURL = new atlas.service.SearchURL(pipeline);

          var query = "hospital";
          var radius = 10000;
          // var lat = -1.2855641;
          // var lon = 36.8148144;

          searchURL
            .searchPOI(atlas.service.Aborter.timeout(10000), query, {
              limit: 10,
              lat: lat,
              lon: lon,
              radius: radius,
              view: "Auto"
            })
            .then(results => {
              // Extract GeoJSON feature collection from the response and add it to the datasource
              var data = results.geojson.getFeatures();
              datasource.add(data);

              // set camera to bounds to show the results
              map.setCamera({
                bounds: data.bbox,
                zoom: 10,
                padding: 15
              });
            });

          //Create a popup but leave it closed so we can update it and display it later.
          popup = new atlas.Popup();

          //Add a mouse over event to the result layer and display a popup when this event fires.
          map.events.add("mouseover", resultLayer, showPopup);

          function showPopup(e) {
            //Get the properties and coordinates of the first shape that the event occurred on.

            var p = e.shapes[0].getProperties();
            var position = e.shapes[0].getCoordinates();

            //Create HTML from properties of the selected result.
            var html = [
              '<div style="padding:5px"><div><b>',
              p.poi.name,
              "</b></div><div>",
              p.address.freeformAddress,
              "</div><div>",
              position[1],
              ", ",
              position[0],
              "</div></div>"
            ];

            //Update the content and position of the popup.
            popup.setPopupOptions({
              content: html.join(""),
              position: position
            });

            //Open the popup.
            popup.open(map);
          }
        });
      }

      function Initialize() {
        navigator.geolocation.getCurrentPosition(
          function(p) {
            // console.log(p.coords.latitude,p.coords.longitude);
            CreateMap(p.coords.latitude, p.coords.longitude);
          },
          function(err) {
            console.log(err);
          }
        );
      }
    </script>

    <style>
      html,
      body {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
      }

      #myMap {
        width: 100%;
        height: 100%;
      }
    </style>
  </head>

  <body onload="Initialize()">
    <div id="myMap"></div>
  </body>
</html>
