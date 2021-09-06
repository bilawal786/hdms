<section id="hero" class="hero hero-4">
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>

                <!-- slide 1 -->
                <li data-transition="3dcurtain-vertical" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" style="background-color: rgba(34, 34, 34, 0.3);">
                    <!-- MAIN IMAGE -->
                    <img src="{{$content->slider1}}"  alt="Background"  width="1920" height="1280">

                </li>

                <!-- slide 2 -->
                <li data-transition="fadefrombottom" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                    <!-- MAIN IMAGE -->
                    <img src="{{$content->slider2}}"  alt=""  width="1920" height="1280">

                </li>

                <!-- slide 3 -->
                <li data-index='rs-367' data-transition='scaledownfromtop' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default'>
                    <!-- MAIN IMAGE -->
                    <img src="{{$content->slider3}}"  alt=""  width="1920" height="1280">
                    <!-- LAYER NR. 1 -->
                </li>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->

        <!-- Widget Bottom -->
        <div class="container widget-bottom widgets-contact hidden-xs">
            <div class="row">
                <ul class="list-inline">
                    <li class="col-sm-4 col-md-3 col-md-offset-3 widget">
                        <div class="widget-contact-icon pull-left">
                            <i class="lnr lnr-envelope"></i>
                        </div>
                        <div class="widget-contact-info">
                            <p class="text-capitalize">E-mail</p>
                            <a href="mailto:{{$gs->email}}"><p class="font-heading text-white">{{$gs->email}}</p></a>
                        </div>
                    </li>
                    <!-- .widget end -->

                    <li class="col-sm-4 col-md-3 widget">
                        <div class="widget-contact-icon pull-left">
                            <i class="lnr lnr-phone"></i>
                        </div>
                        <div class="widget-contact-info">
                            <p class="text-capitalize">Téléphone</p>
                            <a href="tel:{{$gs->phone1}}"><p class="text-capitalize font-heading text-white">{{$gs->phone1}}</p></a>
                        </div>
                    </li>
                    <!-- .widget end -->

                    <li class="col-sm-4 col-md-3 widget">
                        <a class="btn btn-primary directquery" href="#" data-toggle="modal" data-target="#model-quote" id="modelquote">Demander un devis</a>

                        <!-- Modal -->
                        <div class="modal fade model-quote" id="model-quote" tabindex="-1" role="dialog" aria-labelledby="modelquote">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="model-icon">
                                            <i class="lnr lnr-apartment"></i>
                                        </div>
                                        <div class="model-divider">
                                            <div class="model-title">
                                                <p>N'hésitez pas à demander</p>
                                                <h6>Demander un devis</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .model-header end -->
                                    <div class="modal-body">
                                        @include('front.include.queryform')
                                    </div>
                                    <!-- .model-body end -->
                                </div>
                            </div>
                        </div>
                        <!-- .model-quote end -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- END OF SLIDER WRAPPER -->
</section>
