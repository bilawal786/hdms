<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">HDMS CLIM</p>
                                <h2>Pourquoi nous choisir</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>
                </div>
            </div>
            <!-- .col-md-12 end -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">

                    <!-- Panel 01 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-1" aria-expanded="true" aria-controls="collapse02-1"> À propos de HDMS </a>
                                <span class="icon"></span>
                            </h4>
                        </div>
                        <div id="collapse02-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body text-justify">
                                {!! $content->about !!}
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Projects Filter
                                    ============================================= -->
                                    <div class="col-xs-12 col-sm-12 col-md-12 projects-filter">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#" class="equipee" data-filter=".equip">Notre Équipe</a>
                                            </li>
                                            <li>
                                                <a href="#" data-filter=".interv">Nos Interventions</a>
                                            </li>
                                            <li>
                                                <a href="#" data-filter=".products">Nos Produits</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .projects-filter end -->
                                </div>
                                <!-- .row end -->

                                <!-- Projects Item
                                ============================================= -->
                                <div id="projects-all" class="row">

                                    <!-- Project Item #1 -->
                                    @if($content->equip)
                                    @foreach(json_decode($content->equip, true) as $img)
                                    <div class="col-xs-12 col-sm-6 col-md-3 project-item equip gardening">
                                        <div class="project-img">
                                                <img class="" style="height: 300px" src="{{asset('gallery/'.$img)}}" alt="interior"/>
                                        </div>
                                        <!-- .project-img end -->
                                    </div>
                                    @endforeach
                                    @endif
                                    <!-- .project-item end -->

                                    <!-- Project Item #2 -->
                                    @if($content->interv)
                                    @foreach(json_decode($content->interv, true) as $img)
                                        <div class="col-xs-12 col-sm-6 col-md-3 project-item interv gardening">
                                            <div class="project-img">
                                                <img class="" style="height: 300px" src="{{asset('gallery/'.$img)}}" alt="interior"/>
                                            </div>
                                            <!-- .project-img end -->
                                        </div>
                                @endforeach
                                    @endif
                                    <!-- .project-item end -->

                                    <!-- Project Item #3 -->
                                    @if($content->products)
                                    @foreach(json_decode($content->products, true) as $img)
                                        <div class="col-xs-12 col-sm-6 col-md-3 project-item products gardening">
                                            <div class="project-img">
                                                <img class="" style="height: 300px" src="{{asset('gallery/'.$img)}}" alt="interior"/>
                                            </div>
                                            <!-- .project-img end -->
                                        </div>
                                @endforeach
                                @endif
                                    <!-- .project-item end -->
                                </div>
                                <!-- .row end -->
                            </div>
                        </div>
                    </div>

                    <!-- Panel 02 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-2" aria-expanded="false" aria-controls="collapse02-2"> NOS VALEURS </a>
                            </h4>
                        </div>
                        <div id="collapse02-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                {!! $content->values !!}
                            </div>
                        </div>
                    </div>

                    <!-- Panel 03 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-3" aria-expanded="false" aria-controls="collapse02-3"> NOS ENGAGEMENTS </a>
                            </h4>
                        </div>
                        <div id="collapse02-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                {!! $content->engagement !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .Accordion-->
            </div>

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
