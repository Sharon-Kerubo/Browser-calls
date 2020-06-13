@extends('layouts.website')

@section('content')

{{--    <div class="ui-title-page bg_title bg_transparent">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xs-12">--}}
{{--                    <h1>CONTACT US</h1>--}}
{{--                    <div class="ui-subtitle-page">Egestas dolor erat vamus suscip ipsum estduin</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- end ui-title-page -->
    <main class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="list-contacts unstyled wow bounceInUp" data-wow-delay=".5s">
                            <li>
                                <i class="icon icon-pointer"></i>
                                Our Physical Office Location: <br>

                            </li>
                            <li>
                                <i class="icon icon-call-in"></i>
                                <a href="tel:+5222345678"><b>Helpline:</b> +522  234  5678 </a><br>
                            </li>
                            <li>
                                <i class="icon icon-envelope-open"></i>
                                <a href="mailto:info@healthcare-agency.org"><b>Email:</b>info@healthcare-agency.org</a> <br>
                            </li>
                        </ul>
                    </div>
                </div><!-- end row -->

                <div class="row wow bounceInUp" data-wow-delay=".5s">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block text-center">Drop <strong>us a Message</strong></h2>
                        <div class="ui-subtitle-block text-center">Please feel free to reach out to us regarding any issue</div>
                    </div>
                </div><!-- end row -->




                <form novalidate id="contactForm" class="ui-form wow bounceInUp " data-animation="bounceInUp" name="sentMessage animated">

                    <div class="row">
                        <div class="col-lg-3 col-lg-offset-2 col-sm-5 col-sm-offset-1 col-xs-12">
                            <div class="form-group">   <div class="input-group">

                                    <input type="text" data-validation-required-message="Please enter" required  placeholder="Your Name" id="name" name="name"  class="form-control">
                                    <i class="icon icon-user"></i>

                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">    <div class="input-group">

                                    <input type="email" data-validation-required-message="Please enter" required  id="email" name="email"  placeholder="Email Address" class="form-control">
                                    <i class="icon icon-envelope-open"></i>
                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group"><div class="input-group">

                                    <input type="tel" data-validation-required-message="Please enter" required  id="phone" name="phone" placeholder="Phone" class="form-control">
                                    <i class="icon icon-call-end"></i>
                                </div>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-5 col-xs-12">
                            <div class="form-group form-group-text">   <div class="input-group">
                                    <textarea data-validation-required-message="Please enter a message." required id="message" placeholder="Your Message *" class="form-control" rows="9"></textarea>
                                    <i class="icon icon-bubbles"></i>
                                </div></div>

                            <p class="help-block text-danger"></p>
                            <div id="success"></div>


                            <div class="text-right">
                                <button class="btn bg-color_primary">SEND COMMENT</button>
                            </div>
                        </div>
                    </div><!-- end row -->
                </form>

                <!--Contact form-->
                <script src="plugins/contact/jqBootstrapValidation.js"></script>
                <script src="plugins/contact/contact_me.js"></script>


            </div><!-- end container -->
        </section><!-- end section -->


    </main><!-- end main-content -->
@endsection

@section('footer-option')
    <div class="footer__block clearfix">
        <div class="block__wrap pull-left">
            <p class="block__title"><i class="block__icon icon-note"></i>Do you have an account with us?</p>
            <p class="block__text">JUST REGISTER & YOU’RE SET TO MAKE APPOINTMENTS!</p>
        </div>
        <a class="block__btn btn bg-color_second pull-right" href="javascript:void(0);">CREATE ACCOUNT <span class="btn-plus">+</span></a>
    </div>
@endsection
