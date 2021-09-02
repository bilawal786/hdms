<section id="testimonials" class="testimonial testimonial-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-3 text-center">
                    <div class="heading-bg">
                        <p class="mb-0">ce que les gens disent ?</p>
                        <h2>témoignages</h2>
                    </div>
                </div>
                <!-- .heading end -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="testimonial-oc" class="testimonial-carousel">
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <div class="testimonial-img">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p>{{$testimonial->review}}</p>
                            </div>
                            <div class="testimonial-divider">
                            </div>
                            <div class="testimonial-meta">
                                <strong>{{$testimonial->name}}</strong>, {{$testimonial->designation}}
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            <!-- .col-md-12 end -->

        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->

</section>
