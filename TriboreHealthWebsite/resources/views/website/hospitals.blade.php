@extends('layouts.website')

@section('content')
{{--    <div class="ui-title-page bg_title bg_transparent">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12">--}}
{{--                    <h1>ONLINE shop</h1>--}}
{{--                    <div class="ui-subtitle-page">Egestas dolor erat vamus suscip ipsum estduin</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- end ui-title-page -->

    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <aside class="sidebar">
                    <div class="widget widget-search">
                        <form method="get" class="form-search clearfix" id="search-global-form">
                            <input class="form-search__input" type="text" name="" id="search2" placeholder="Search Product / Medicine ...">
                            <button class="form-search__submit" type="submit"><i class="icon icon-magnifier"></i></button>
                        </form>
                    </div><!-- end widget-search -->

                    <div class="widget widget-category">
                        <h3 class="widget-title">Categories</h3>
                        <div class="block_content">
                            <ul class="list-categories list-categories_widget">
                                <li><a href="javascript:void(0);"><span class="list-categories__name">Diagnose &amp; Research</span><span class="list-categories__amout color_primary">15</span></a></li>
                                <li><a href="javascript:void(0);"><span class="list-categories__name">Cancer Oncology</span><span class="list-categories__amout color_primary">20</span></a></li>
                                <li><a href="javascript:void(0);"><span class="list-categories__name">Dental Surgery</span><span class="list-categories__amout color_primary">6</span></a></li>
                                <li><a href="javascript:void(0);"><span class="list-categories__name">Neurology</span><span class="list-categories__amout color_primary">74</span></a></li>
                                <li><a href="javascript:void(0);"><span class="list-categories__name">Drug / Medicine</span><span class="list-categories__amout color_primary">101</span></a></li>
                            </ul>
                        </div>
                    </div><!-- end widget-category -->
                </aside><!-- end sidebar -->
            </div><!-- end col -->


            <div class="col-md-9">
                <main class="main-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sorting-title">
                                Sort By:
                                <div role="select" class="jelect">
                                    <input id="jelect" name="tool" value="0" data-text="imagemin" type="text" class="jelect-input">
                                    <div tabindex="0" role="button" class="jelect-current">Select By Towns</div>
                                    <ul class="jelect-options">
                                        <li data-val='0' tabindex="0" role="option" class="jelect-option jelect-option_state_active">Hospital A</li>
                                        <li data-val='1' tabindex="0" role="option" class="jelect-option">Hospital B</li>
                                        <li data-val='2' tabindex="0" role="option" class="jelect-option">Hospital C</li>
                                    </ul>
                                </div>
                            </div><!-- end sorting-title -->
                        </div><!-- end col -->
                    </div><!-- end row -->


                    <ul class="products">
                        <li class="products__item wow bounceInRight" data-wow-delay=".5s">
                            <a class="products__foto helper" href="shop-product.html">
                                <img src="{{asset('website/media/products/9.jpg')}}" height="226" width="226" alt="Goods">
                            </a>
                            <h4 class="products__name">
                                <a href="shop-product.html">Electric Muscle Stimulator</a>

                            </h4>
                            <div class="products__info ui-text">Pellentesque vitae ultrice posu praesent justo laoret sed dignis</div>
                        </li>

                        <li class="products__item wow bounceInRight" data-wow-delay=".5s">
                            <a class="products__foto helper" href="shop-product.html">
                                <img src="{{asset('website/media/products/1.jpg')}}" height="195" width="195" alt="Goods">
                            </a>
                            <h4 class="products__name"><a href="shop-product.html">GlucoTabs™ Orange</a></h4>
                            <div class="products__info ui-text">Pellentesque vitae ultrice posu praesent justo laoret sed dignis</div>
                        </li>

                        <li class="products__item wow bounceInRight" data-wow-delay=".5s">
                            <a class="products__foto helper" href="shop-product.html">
                                <img src="{{asset('website/media/products/2.jpg')}}" height="207" width="186" alt="Goods">
                            </a>
                            <h4 class="products__name"><a href="shop-product.html">Insulin Cool Wallet</a></h4>
                            <div class="products__info ui-text">Pellentesque vitae ultrice posu praesent justo laoret sed dignis</div>
                        </li>

                        <li class="products__item wow bounceInRight" data-wow-delay=".5s">
                            <a class="products__foto helper" href="shop-product.html">
                                <img src="{{asset('website/media/products/3.jpg')}}" height="219" width="170" alt="Goods">
                            </a>
                            <h4 class="products__name"><a href="shop-product.html">Autolet® Impression</a></h4>
                            <div class="products__info ui-text">Pellentesque vitae ultrice posu praesent justo laoret sed dignis</div>


                        </li>

                        <li class="products__item wow bounceInRight" data-wow-delay=".5s">
                            <a class="products__foto helper" href="shop-product.html">
                                <img src="{{asset('website/media/products/4.jpg')}}" height="163" width="236" alt="Goods">
                            </a>
                            <h4 class="products__name"><a href="shop-product.html">CryOmega</a></h4>
                            <div class="products__info ui-text">Pellentesque vitae ultrice posu praesent justo laoret sed dignis</div>



                        </li>

                        <li class="products__item wow bounceInRight" data-wow-delay=".5s">
                            <a class="products__foto helper" href="shop-product.html">
                                <img src="{{asset('website/media/products/5.jpg')}}" height="214" width="170" alt="Goods">
                            </a>
                            <h4 class="products__name"><a href="shop-product.html">Viora Reaction</a></h4>
                            <div class="products__info ui-text">Pellentesque vitae ultrice posu praesent justo laoret sed dignis</div>


                        </li>

                        <li class="products__item wow bounceInRight" data-wow-delay=".5s">
                            <a class="products__foto helper" href="shop-product.html">
                                <img src="{{asset('website/media/products/6.jpg')}}" height="195" width="208" alt="Goods">
                            </a>
                            <h4 class="products__name"><a href="shop-product.html">Viora Pristine</a></h4>
                            <div class="products__info ui-text">Pellentesque vitae ultrice posu praesent justo laoret sed dignis</div>


                        </li>

                        <li class="products__item wow bounceInRight" data-wow-delay=".5s">
                            <a class="products__foto helper" href="shop-product.html">
                                <img src="{{asset('website/media/products/7.jpg')}}" height="229" width="177" alt="Goods">
                            </a>
                            <h4 class="products__name"><a href="shop-product.html">CeliVites Body Health</a></h4>
                            <div class="products__info ui-text">Pellentesque vitae ultrice posu praesent justo laoret sed dignis</div>


                        </li>

                        <li class="products__item wow bounceInRight" data-wow-delay=".5s">
                            <a class="products__foto helper" href="shop-product.html">
                                <img src="{{asset('website/media/products/8.jpg')}}" height="221" width="227" alt="Goods">
                            </a>
                            <h4 class="products__name"><a href="shop-product.html">Blood Pressure Monitor</a></h4>
                            <div class="products__info ui-text">Pellentesque vitae ultrice posu praesent justo laoret sed dignis</div>


                        </li>
                    </ul><!-- end products -->

                    <div class="text-center">
                        <ul class="pagination">
                            <li><a href="javascript:void(0);">Previous</a></li>
                            <li><a href="javascript:void(0);">1</a></li>
                            <li><a href="javascript:void(0);">2</a></li>
                            <li><a href="javascript:void(0);">3</a></li>
                            <li><a href="javascript:void(0);">Next</a></li>
                        </ul>
                    </div>
                </main>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
@endsection

@section('footer-option')
    <div class="footer__block clearfix">
        <div class="block__wrap pull-left">
            <p class="block__title"><i class="block__icon icon-note"></i>Do you wanna be part of our doctors team?</p>
            <p class="block__text">JUST REGISTER AS A DOCTOR & YOU’RE DONE!</p>
        </div>
        <a class="block__btn btn bg-color_second pull-right" href="javascript:void(0);">REGISTER <span class="btn-plus">+</span></a>
    </div>
@endsection
