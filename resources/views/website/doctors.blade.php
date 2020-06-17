@extends('layouts.website')

@section('content')
{{--    <div class="ui-title-page bg_title bg_transparent">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12">--}}
{{--                    <h1>OUR DOCTORS</h1>--}}
{{--                    <div class="ui-subtitle-page">Egestas dolor erat vamus suscip ipsum estduin</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- end ui-title-page -->


    <main class="main-content">
        <section class="section-doctors">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block text-center">Meet Our Team <strong>Of Experienced Doctors</strong></h2>
                        <div class="ui-subtitle-block">Our medical specialists care about you & your family’s health</div>
                    </div>
                </div><!-- end row -->
{{--                <i class="decor-brand decor-brand_mrg-0"></i>--}}
            </div><!-- end container -->


            <div class="slider_team slider_team_horiz border_btm wow bounceInUp" data-wow-delay="1s">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="slide slide_horiz">
                                <div class="row">
                                    <div class="col-md-6 col-sm-5">
                                        <img src="{{asset('website/media/slider_team/9.jpg')}}" height="250" width="270" alt="Foto">
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-7 text-left">
                                        <span class="name">Dr. Alex Furgosen</span>
                                        <span class="category">PRESIDENT</span>
                                        <div class="slide__info ui-text">Craesent justo laoreet dignissim lectu  etiam ipsum sed habitan tristique nam est. Donec venenatis leo eu varius.</div>
                                        <div class="slide__contacts">
                                            <i class="icon icon-call-in"></i>
                                            <span class="helper"><a href="tel:+522 234 56789">+522 234 56789</a></span>
                                        </div>
                                        <div class="slide__contacts">
                                            <i class="icon icon-envelope-open"></i>
                                            <span class="helper"><a href="mailto:info@healthcare-agency.org">info@healthcare-agency.org</a></span>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end slide -->
                        </div>
                        <div class="col-sm-6">
                            <div class="slide slide_horiz">
                                <div class="row">
                                    <div class="col-md-6 col-sm-5">
                                        <img src="{{asset('website/media/slider_team/10.jpg')}}" height="250" width="270" alt="Foto">
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-7 text-left">
                                        <span class="name">Dr. Helen James</span>
                                        <span class="category">MEDICAL DIRECTOR</span>
                                        <div class="slide__info ui-text">Craesent justo laoreet dignissim lectu  etiam ipsum sed habitan tristique nam est. Donec venenatis leo eu varius.</div>
                                        <div class="slide__contacts">
                                            <i class="icon icon-call-in"></i>
                                            <span class="helper"><a href="tel:+522 234 56789">+522 234 56789</a></span>
                                        </div>
                                        <div class="slide__contacts">
                                            <i class="icon icon-envelope-open"></i>
                                            <span class="helper"><a href="mailto:info@healthcare-agency.org">info@healthcare-agency.org</a></span>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end slide -->
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end slider_team -->
        </section><!-- end section -->


        <div class="slider_team slider_team_filter wow bounceInUp" data-wow-delay=".5s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <ul id="filter" class="clearfix">
                            <li><a href="" class="current" data-filter="*">HealthCare</a></li>
                            <li><a href="" data-filter=".surgeons">Surgeons</a></li>
                            <li><a href="" data-filter=".staff">General Staff</a></li>
                            <li><a href="" data-filter=".cardiology">Cardiology</a></li>
                            <li><a href="" data-filter=".physicians">Physicians</a></li>
                            <li><a href="" data-filter=".nurses">Nurses</a></li>
                        </ul>
                    </div>
                </div><!-- end row -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="isotope-frame">
                            <div class="isotope-filter">
                                <div class="isotope-item surgeons">
                                    <div class="slide">
                                        <img src="{{asset('website/media/slider_team/1.jpg')}}" height="250" width="270" alt="Foto">
                                        <span class="name">Dr. Alex Furgosen</span>
                                        <span class="category">CANCER SPECIALIST</span>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end isotope-item -->
                                <div class="isotope-item cardiology">
                                    <div class="slide">
                                        <img src="{{asset('website/media/slider_team/2.jpg')}}" height="250" width="270" alt="Foto">
                                        <span class="name">Dr. Robert Smith</span>
                                        <span class="category">HEART SURGON</span>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end isotope-item -->
                                <div class="isotope-item surgeons">
                                    <div class="slide">
                                        <img src="{{asset('website/media/slider_team/4.jpg')}}" height="250" width="270" alt="Foto">
                                        <span class="name">Dr. Sharon Laura</span>
                                        <span class="category">FAMILY PHYSICIAN</span>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end isotope-item -->
                                <div class="isotope-item staff">
                                    <div class="slide">
                                        <img src="{{asset('website/media/slider_team/3.jpg')}}" height="250" width="270" alt="Foto">
                                        <span class="name">Dr. Andrea Jean</span>
                                        <span class="category">SENIOR NURSE</span>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end isotope-item -->
                                <div class="isotope-item cardiology">
                                    <div class="slide">
                                        <img src="{{asset('website/media/slider_team/5.jpg')}}" height="250" width="270" alt="Foto">
                                        <span class="name">Dr. Andrea Jean</span>
                                        <span class="category">CANCER SPECIALIST</span>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end isotope-item -->
                                <div class="isotope-item surgeons">
                                    <div class="slide">
                                        <img src="{{asset('website/media/slider_team/7.jpg')}}" height="250" width="270" alt="Foto">
                                        <span class="name">Dr. Andrea Jean</span>
                                        <span class="category">FAMILY PHYSICIAN</span>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end isotope-item -->
                                <div class="isotope-item nurses">
                                    <div class="slide">
                                        <img src="{{asset('website/media/slider_team/6.jpg')}}" height="250" width="270" alt="Foto">
                                        <span class="name">Dr. Carol Sandra</span>
                                        <span class="category">HEART SURGON</span>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- end isotope-item -->
                                <div class="isotope-item physicians">
                                    <div class="slide">
                                        <img src="{{asset('website/media/slider_team/8.jpg')}}" height="250" width="270" alt="Foto">
                                        <span class="name">Dr. Andrea Jean</span>
                                        <span class="category">SENIOR NURSE</span>
                                        <a href="javascript:void(0);" class="btn btn_small">BOOK AN APPOINTMENT</a>
                                        <ul class="social-links social-links_right">
                                            <li><a target="_blank" href="https://www.facebook.com/"><i class="social_icons social_facebook_square"></i></a></li>
                                            <li class=""><a target="_blank" href="https://twitter.com/"><i class="social_icons social_twitter_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.google.com/"><i class="social_icons social_googleplus_square"></i></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="social_icons social_linkedin_square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- end isotope-filter -->
                        </div><!-- end isotope-frame -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end slider_team -->
    </main><!-- end main-content -->


@endsection

@section('footer-option')
    <div class="footer__block clearfix">
        <div class="block__wrap pull-left">
            <p class="block__title"><i class="block__icon icon-note"></i>Do you wanna be part of our doctors team?</p>
            <p class="block__text">JUST REGISTER AS A DOCTOR & YOU’RE DONE!</p>
        </div>
        <a class="block__btn btn bg-color_second pull-right" href="{{route('backend.register.personnel')}}">REGISTER <span class="btn-plus">+</span></a>
    </div>
@endsection
