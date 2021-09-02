<section class="service service-4" id="myser" style="padding-bottom: 0px">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <!-- Service Block #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4 service-block">
                        <div class="service-img">
                            <img height="250px" src="{{asset($content->simage1)}}" alt="icons"/>
                        </div>

                        <div class="service-content">
                            <div class="service-desc">
                                <h4 class="h50">{{{$content->sh1}}}</h4>
                                <p class="h110">{{$content->sd1}}</p>
                                <video width="100%" controls>
                                    <source src="{{asset($content->sv1)}}" type="video/mp4">
                                    Your browser does not support HTML video.
                                </video>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Service Block #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4 service-block">
                        <div class="service-img">
                            <img height="250px" src="{{asset($content->simage2)}}" alt="icons"/>
                        </div>

                        <div class="service-content">
                            <div class="service-desc">
                                <h4 class="h50">{{$content->sh2}}</h4>
                                <p class="h110">{{$content->sd2}}</p>
                                <video width="100%" controls>
                                    <source src="{{$content->sv2}}" type="video/mp4">
                                    Your browser does not support HTML video.
                                </video>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Service Block #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4 service-block">
                        <div class="service-img">
                            <img height="250px" src="{{asset($content->simage3)}}" alt="icons"/>
                        </div>

                        <div class="service-content">
                            <div class="service-desc">
                                <h4 class="h50">{{$content->sh3}}</h4>
                                <p class="h110">{{$content->sd3}}</p>
                                <video width="100%" controls>
                                    <source src="{{$content->sv3}}" type="video/mp4">
                                    Your browser does not support HTML video.
                                </video>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->

                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
