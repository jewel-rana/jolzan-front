<!-- Slider area Start -->
<div class="slider-area">

    <div class="slider-bg text-center"
    @php
        $slides = getSlider(getOption('main_slider', 1));
        if($slides) {
            $slide = ($slides->medias) ? $slides->medias->shuffle()->first() : null;
            if($slide) {
                echo 'style="background-image: url(' . asset($slide->attachment) . ')"';
            }
        }
    @endphp
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slidertext">
                        <h1>Explore over the World with Ournet</h1>
                        <p>Striving towards an era of unlimited data.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-info">
            <img class="shape-1" src="/assets/images/sl-1.png" alt="">
            <img class="shape-2" src="/assets/images/sl-2.png" alt="">
            <img class="shape-3" src="/assets/images/sl-3.png" alt="">
            <img class="shape-4" src="/assets/images/sl-4.png" alt="">
            <img class="shape-5" src="/assets/images/sl-5.png" alt="">
            <img class="shape-6" src="/assets/images/sl-6.png" alt="">
            <img class="shape-8" src="/assets/images/sl-7.png" alt="">
            <img class="shape-7" src="/assets/images/sl-8.png" alt="">
        </div>
    </div>
</div>
