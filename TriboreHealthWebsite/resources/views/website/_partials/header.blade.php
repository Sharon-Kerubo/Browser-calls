<div class="container">
    <div class="header-inner">
        <div class="row">
            <div class="col-md-4 col-xs-12"> <a href="/" class="logo"> <img class="logo__img" src="{{'website/img/logo_tribo_new.png'}}" height="50" width="294" alt="Logo"> </a> </div>
            <div class="col-md-8 col-xs-12">
                <div class="header-block">
{{--                    <span class="header-label"> <i class="icon-header icon-call-in color_primary"></i>--}}
{{--                        <span class="helper"> Call Us <a href="tel:+522 234 56789">--}}
{{--                                <strong>+522 234 56789</strong></a>--}}
{{--                        </span>--}}
{{--                    </span>--}}
                    <span class="header-label">
                        <i class="icon-header icon-book-open color_primary"></i>
                        <span class="helper"><a href=""><strong>Book an Appointment</strong></a>
                        </span>
                    </span>
                    <span class="header-label">
                        <i class="icon-header icon-users color_primary"></i>
                        <span class="helper"> Don't have an account? <a href=""><strong>Register</strong></a>
                        </span>
                    </span>
                    <span class="header-label header-label_2 bg-color_second color_white">
                        <a class="color_white" href="javascript:void(0);"><i class="icon-header icon-user"></i>
                            <span class="helper">LOGIN</span>
                        </a>
                    </span>
                </div>
                <form class="hidden-md hidden-lg text-center" id="search-global-mobile" method="get">
                    <input type="text" value="" id="search-mobile" name="s" >
                    <button type="submit"><i class="icon fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- end header-inner-->
</div>
<!-- end container-->

<div class="top-nav ">
    <div class="container">
        <div class="row">
            <div class="col-md-12  col-xs-12">
                <div class="navbar yamm " >
                    <div class="navbar-header hidden-md  hidden-lg  hidden-sm ">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="#" class="navbar-brand">Menu</a> </div>
                    <div id="navbar-collapse-1" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="{{ Route::current()->getName() == 'website.home' ? ' active' : '' }}" href="{{route('website.home')}}">HOME </a> </li>
                            <li><a class="{{ Route::current()->getName() == 'website.maps' ? ' active' : '' }}" href="{{route('website.maps')}}">EMERGENCY RESPONSE </a></li>
                            <li><a class="{{ Route::current()->getName() == 'website.hospitals' ? ' active' : '' }}" href="{{route('website.hospitals')}}">HOSPITALS </a></li>
                            <li><a class="{{ Route::current()->getName() == 'website.doctors' ? ' active' : '' }}" href="{{route('website.doctors')}}">DOCTORS </a></li>
                            <li><a class="{{ Route::current()->getName() == 'website.contact' ? ' active' : '' }}" href="{{route('website.contact')}}">CONTACT US </a> </li>
                        </ul>
                        <form id="search-global-menu" class="hidden-xs hidden-sm" method="get">
                            <input type="text" value="" id="search" name="s" >
                            <button type="submit"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end top-nav -->
