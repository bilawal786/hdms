@include('front.include.header')
<!-- Hero Section
============================================= -->
@include('front.include.slider')

<!-- #hero end -->

<!-- Service Block #4
============================================= -->
@include('front.include.services')

{{--offers--}}

@include('front.include.offers')
<!-- Shortcode #10
============================================= -->
@include('front.include.about')

<!-- Testimonials #1
============================================= -->
@include('front.include.testimonial')

<!-- #testimonials end -->

<!-- Call To Action #3
============================================= -->
<section id="cta-3" class="cta cta-3 bg-overlay bg-overlay-theme text-center">
    <div class="bg-section" >
        <img src="{{asset('front/assets/images/call/2.jpg')}}" alt="Background"/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <h2>{{$content->quoteh}}</h2>
                <p>{{$content->quote}}</p>

            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #cta-3 end -->

<!-- Shortcode #9
============================================= -->
@include('front.include.clients')

<!-- #clients end-->

<!-- Call To Action #1
============================================= -->
@include('front.include.footer')
