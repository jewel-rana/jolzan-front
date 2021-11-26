<header id="header" class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-3">
                <div class="logo">
                    <a href="/"><img src="{{ getOption('header_logo', 'assets/images/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-8 col-9">
                <div class="mainmenu">
{{--                    <ul>--}}
{{--                        <li><a class="scroll-animite" href="#home">Home</a></li>--}}
{{--                        <li><a class="scroll-animite" href="#about">About Us</a></li>--}}
{{--                        <li><a class="scroll-animite" href="#service">Services </a></li>--}}
{{--                        <li><a class="scroll-animite" href="#feature">Features</a></li>--}}
{{--                        <li><a class="scroll-animite" href="#pricing">Pricing</a></li>--}}
{{--                        <li><a class="scroll-animite" href="#review">Review</a></li>--}}
{{--                        <li><a class="scroll-animite" href="#blog">Blog</a></li>--}}
{{--                        <li><a class="scroll-animite" href="#contact">Contact</a></li>--}}
{{--                    </ul>--}}
                    {!! getMenu(getOption('top_menu')) !!}
                </div>
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</header>
