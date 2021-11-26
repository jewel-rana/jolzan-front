@extends('layouts.main')
@section('content')
    @if(getOption('section1_enabled', 'yes') === 'yes')
        <div id="about" class="about-area pdt-125px pdb-125px"> <!-- Section 1 -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-text">
                            <h1 class="mb-20px">{{ getOption('section1_title', 'About Us') }}</h1>
                            {!! getOption('section1_description') !!}
                            <a href="{{ getOption('section1_link', '#') }}"
                               class="ournet-btn">{{ getOption('section1_btn_text', 'Read More') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-bg">
                            <div class="about-bg-main">
                                <img src="assets/images/about-img.png" alt="">
                            </div>
                            <img class="shape-top-1" src="assets/images/ab-shape-top-1.png" alt="">
                            <img class="shape-top-2" src="assets/images/ab-shape-top-2.png" alt="">
                            <img class="shape-bottom" src="assets/images/shape-bottom-bg.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(getOption('section2_enabled', 'yes') === 'yes')
        <div id="service" class="service-area"> <!-- Section 2 Services-->
            <div class="container-fluid">
                <div class="row">
                    @php
                        $services = getServices(getOption('section2_feature', 'service'));
                        if($services !== null) :
                    @endphp

                    <div class="col-lg-3 col-md-6">
                        <div class="service-box-area">
                            <img src="assets/images/1.png" alt="">
                            <div class="overlay-service">
                                <h4>Sole operator on <br> 5G growth path</h4>
                            </div>
                        </div>
                    </div>
                    @php else : @endphp
                    <p>No services found!</p>
                    @php endif @endphp
                </div>
            </div>
        </div>
    @endif
    @if(getOption('section3_enabled', 'yes') === 'yes')
        <div id="feature" class="feature-area pdt-125px"> <!-- Section 3 (Features)-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50px text-center">
                            <span>Features</span>
                            <h1>{{ getOption('section3_title', 'Why we are Special') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                    $features = getServices(getOption('section3_service', 'feature'));
                    if($features !== null) :
                        foreach($features as $feature) :
                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-item mb-30px">
                            <img src="{{ $feature->media->attachment }}" alt="">
                            <h4>{{ $feature->title }}</h4>
                            <p>{{ $feature->description }}</p>
                        </div>
                    </div>
                    @php endforeach; else : @endphp
                    <p>No features found!</p>
                    @php endif; @endphp
                </div>
            </div>
        </div>
    @endif
    @if(getOption('section4_enabled', 'yes') === 'yes')
        <div class="coverage-area section-bg pd-125px"> <!-- Section 4 (Coverage) -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50px text-center">
                            <span>Area</span>
                            <h1>Our Coverage Area</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="coverage-box">
                            <img src="assets/images/map.png" alt="">
                            <div class="coverage-item cov-usa">
                                <span class="location-mark"></span>
                                <div class="location-name">USA</div>
                            </div>
                            <div class="coverage-item cov-canada">
                                <span class="location-mark">
                                    <div class="location-name">Canada</div>
                                </span>
                            </div>
                            <div class="coverage-item cov-dhaka">
                                <span class="location-mark">
                                    <div class="location-name">Bangladesh</div>
                                </span>
                            </div>
                            <div class="coverage-item cov-brazil">
                                <span class="location-mark">
                                    <div class="location-name">Brazil</div>
                                </span>
                            </div>
                            <div class="coverage-item cov-england">
                                <span class="location-mark"></span>
                                <div class="location-name">England</div>
                            </div>
                            <div class="coverage-item cov-china">
                                <span class="location-mark"></span>
                                <div class="location-name">China</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(getOption('section5_enabled', 'yes') === 'yes')
        <div id="pricing" class="pricing-table-area pdt-125px pdb-95px"> <!-- Section 5 (Pricing table)-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50px text-center">
                            <span>{{ __('Pricing') }}</span>
                            <h1>{{ getOption('section5_title', 'Choose your Package Plan') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                    $deals = getDeals(getOption('section5_deal', 'main'));
                    if($deals !== null) :
                    foreach($deals as $deal) :
                    @endphp
                    <div class="col-lg-4 col-md-4">
                        <div class="pricing-item text-center mb-30px">
                            <div class="pricing-head">
                                <h4>{{ $deal->package->name }}</h4>
                                <div class="speed">
                                    <h1>{{ $deal->name }}</h1>
                                    <span>{{ __('mbps') }}</span>
                                </div>
                            </div>
                            <div class="pricing-content">
                                <ul>
                                    @foreach($deal->attributes as $attribute)
                                    <li>{{ $attribute->value }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="ournet-btn">{{ __('Buy now') }}</a>
                                <div class="price">
                                    <h1>{{ $deal->package->price }}</h1>
                                    <span>{{ __('Monthly') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php endforeach; else : @endphp
                    <p>No deal found!</p>
                    @php endif; @endphp
                </div>
            </div>
        </div>
    @endif
    @if(getOption('section6_enabled', 'yes') === 'yes')
        <div id="entertainment" class="service-area"> <!-- Section 6 (Entertainment)-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50px text-center">
                            <span>Media</span>
                            <h1>{{ getOption('section7_title', 'Entertainment') }}</h1>
                            <p>{{ getOption('section7_description', 'Below is hour entertainment media list, live TV, FTP, Torrents etc.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                    $entertainments = getServices(getOption('section6_service', 'entertainment'));
                    if($entertainments !== null) :
                        foreach($entertainments as $entertain) :
                        @endphp
                    <div class="col-lg-3 col-md-6">
                        <div class="service-box-area">
                            <a href="{{ $entertain->external_link }}"><img src="{{ $entertain->medias->first()->attachment }}" alt=""></a>
                            <div class="overlay-service">
                                <h4><a href="{{ $entertain->external_link }}">{!! $entertain->title !!}</a></h4>
                            </div>
                        </div>
                    </div>
                    @php endforeach; else : @endphp
                    <p>No entertainment found!</p>
                    @php endif; @endphp
                </div>
            </div>
        </div>
    @endif
    @if(getOption('section7_enabled', 'yes') === 'yes')
        <div id="blog" class="blog-area pdt-125px pdb-95px"> <!-- Section 7 (Blog)-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50px text-center">
                            <span>Blog</span>
                            <h1>{{ getOption('section7_title', 'Latest Blog Update') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if(isset($latest_blogs))
                        @foreach($latest_blogs as $blog)
                            <div class="col-lg-4">
                                <div class="blog-item mb-30px">
                                    <div class="blog-bg blog-bg-1"></div>
                                    <div class="blog-info">
                                        <h4><a href="{{ url('/blog/' . $blog->slug) }}">{{ $blog->title }}</a></h4>
                                        {!! $blog->content !!}
                                        <a class="ournet-btn" href="{{ url('/blog/' . $blog->slug) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    @endif
    @if(getOption('section8_enabled', 'yes') === 'yes')
        <div id="review" class="testimonial-area section-bg pd-125px"> <!-- Section 8 (Review)-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title mb-50px text-center">
                            <h1>{{ getOption('section8_title', 'Customer feedback') }}</h1>
                        </div>
                    </div>
                </div>
                @if(isset($testimonials))
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="ournet-testimonial-carousel">
                                @foreach($testimonials as $testimonial)
                                    <div class="testimonial-item text-center">
                                        <div class="quate">
                                            <img src="assets/images/quate.png" alt="">
                                        </div>
                                        <p>‘’{{ $testimonial->description }}”</p>
                                        <h3>{{ $testimonial->customer_name }}</h3>
                                        <span>{{ $testimonial->customer_profession }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class="testimonial-item text-center">
                        <p>No testimonials found!</p>
                    </div>
                @endif
            </div>
        </div>
    @endif
    @if(getOption('section9_enabled', 'yes') === 'yes')
        <div id="contact" class="cta-area pd-80px"> <!-- Section 9 (Contact)-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="cta-info text-center">
                            <h2>{{ getOption('section9_title', 'Need any help about Pricing, Location or others?
                            Please feel free to contact us') }}</h2>
                            <a href="{{ getOption('section9_btn_link', '#') }}"
                               class="cta-btn">{{ getOption('section9_btn_text', 'Contact us') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
