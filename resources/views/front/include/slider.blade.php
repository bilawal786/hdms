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
                            <p class="font-heading text-white">{{$gs->email}}</p>
                        </div>
                    </li>
                    <!-- .widget end -->

                    <li class="col-sm-4 col-md-3 widget">
                        <div class="widget-contact-icon pull-left">
                            <i class="lnr lnr-phone"></i>
                        </div>
                        <div class="widget-contact-info">
                            <p class="text-capitalize">Téléphone</p>
                            <p class="text-capitalize font-heading text-white">{{$gs->phone1}}</p>
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
                                        <!--                                        <p style="text-align: center">
                                                                                   <b> Devis climatisation : faites une demande de devis (gratuit et rapide)</b>
                                                                                    <br>
                                                                                    Vous voulez refroidir une ou plusieurs pièces de votre habitation et améliorer votre confort de vie à la maison ? Vous souhaitez savoir à quel prix faire installer une climatisation ? HDMS CLIM est le service de référence pour faire installer une climatisation facilement et rapidement chez vous.
                                                                                </p>-->

                                        <!--                                        <form id="regForm" action="/action_page.php">
                                                                                    &lt;!&ndash; One "tab" for each step in the form: &ndash;&gt;
                                                                                    <div class="tab">
                                                                                        <p><input type="number" class="form-control" placeholder="Quel est votre code postal ?" name="postal"></p>
                                                                                    </div>
                                                                                    <div class="tab">
                                                                                        <h3>Quel type d'intervention souhaitez?</h3>
                                                                                        <p><input type="radio"  name="type" >  Installation d'une seule climatisation</p>
                                                                                        <p><input type="radio"  name="type">  Installation de plusieurs climatisations</p>
                                                                                        <p><input type="radio" name="type">   Entretien et réparation</p>
                                                                                    </div>
                                                                                    <div class="tab">
                                                                                        <h3>Quel est le lieu de l'Intervention ?</h3>
                                                                                        <p><input type="radio"  name="place" > Maison</p>
                                                                                        <p><input type="radio"  name="place"> Appartement</p>
                                                                                        <p><input type="radio" name="place"> Immeuble</p>
                                                                                        <p><input type="radio" name="place"> Magasin</p>
                                                                                        <p><input type="radio" name="place"> Autre</p>
                                                                                    </div>
                                                                                    <div class="tab">
                                                                                        <h3>Combien de pièces souhaitez-vous climatiser ?</h3>
                                                                                        <p><input type="radio"  name="piece" > 1 pièce</p>
                                                                                        <p><input type="radio"  name="piece"> 2 pièces</p>
                                                                                        <p><input type="radio" name="piece"> 3 pièces</p>
                                                                                        <p><input type="radio" name="piece"> 4 pièces</p>
                                                                                        <p><input type="radio" name="piece"> 5 pièces</p>
                                                                                    </div>
                                                                                    <div class="tab">
                                                                                        <h3>Quelle est la surface à climatiser ?</h3>
                                                                                        <p><input class="form-control" placeholder="Username..." name="uname">m</p>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div>
                                                                                            <button type="button" class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                                                            <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    &lt;!&ndash; Circles which indicates the steps of the form: &ndash;&gt;
                                                                                    <div style="text-align:center;margin-top:40px;">
                                                                                        <span class="step"></span>
                                                                                        <span class="step"></span>
                                                                                        <span class="step"></span>
                                                                                        <span class="step"></span>
                                                                                    </div>
                                                                                </form>-->
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
