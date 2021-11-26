<div class="footer-area" style="background-image: url(/images/footer-bg.jpg)">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="/"><img src="{{ getOption('fooger_logo', 'assets/images/footer-logo.png') }}" alt=""></a>
                        </div>
                        <p>{{ getOption('footer_text') }}</p>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6">
                    <div class="footer-widget">
                        <h4 class="footer-title">{{ __('Company') }}</h4>
                        <div class="footer-widget-menu">
{{--                            <ul>--}}
{{--                                <li><a href="#">Contact Us</a></li>--}}
{{--                                <li><a href="#">Customer Service</a></li>--}}
{{--                                <li><a href="#">Promotions</a></li>--}}
{{--                                <li><a href="#">Media</a></li>--}}
{{--                                <li><a href="#">Find Us</a></li>--}}
{{--                                <li><a href="#">Faq</a></li>--}}
{{--                            </ul>--}}
                            {!! getMenu(getOption('footer_menu_1')) !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6">
                    <div class="footer-widget">
                        <h4 class="footer-title">{{ __('Support') }}</h4>
                        <div class="footer-widget-menu">
{{--                            <ul>--}}
{{--                                <li><a href="#">Contact Us</a></li>--}}
{{--                                <li><a href="#">Customer Service</a></li>--}}
{{--                                <li><a href="#">Promotions</a></li>--}}
{{--                                <li><a href="#">Media</a></li>--}}
{{--                                <li><a href="#">Find Us</a></li>--}}
{{--                                <li><a href="#">Faq</a></li>--}}
{{--                            </ul>--}}
                            {!! getMenu(getOption('footer_menu_1')) !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-6">
                    <div class="footer-widget">
                        <h4 class="footer-title">{{ __('Address') }}</h4>
                        <div class="contact-info">
                            <ul>
                                <li>{{ getOption('company_address') }}</li>
                                <li>Email: {{ getOption('company_email') }}</li>
                                <li>Phone: {{ getOption('company_phone') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
