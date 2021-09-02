<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="wplly" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="construction html5 template">
    <link href="{{asset('front/assets/images/logo/hdms.png')}}" rel="icon">
    @include('include.css')
    <!-- Fonts
    ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:100,200,300,400,500,600,700,800%7CDroid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
    ============================================= -->
    <link href="{{asset('front/assets/css/external.css')}}" rel="stylesheet">
    <!-- Extrnal CSS -->
    <link href="{{asset('front/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Boostrap Core CSS -->
    <link href="{{asset('front/assets/css/style.css')}}" rel="stylesheet">
    <!-- Style CSS -->
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/revolution/css/navigation.css')}}">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{asset('front/assets/js/html5shiv.js')}}"></script>
    <script src="{{asset('front/assets/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Document Title
        ============================================= -->
    <title>{{$gs->sitename}}</title>
</head>
<body>
<header id="navbar-spy" class="full-header header-3 style-2">
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="row">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="">
                        <img style="height: 100px" src="{{asset($gs->logo)}}" alt="Yellow Hats">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active">
                            <a href="{{route('front.index')}}">Accueil</a>
                        </li>

                        <!-- li end -->
                        <li>
                            <a href="#myser" >Nos services</a>
                        </li>
                        <li>
                            <a href="#offers" >Nos Offres</a>
                        </li>
                        <!-- li end -->
                        <li>
                            <a href="#about" >À propos de nous</a>
                        </li>
                        <!-- li end -->
                        <li>
                            <a href="#testimonials">Témoignages</a>
                        </li>
                        <!-- li end -->
                        <li>
                            <a href="#clients">Clients</a>
                        </li>
                        <!-- li end -->
                    </ul>


                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </nav>
</header>

<!-- Hero Section
============================================= -->
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
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#model-quote" id="modelquote">Demander un devis</a>

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
                                        <form id="pop-quote-form" action="assets/php/sendpopquote.php" method="post">
                                            <input type="text" class="form-control" name="quote-name" id="name" placeholder="Votre Nam" required/>
                                            <input type="email" class="form-control" name="quote-email" id="email" placeholder="Votre Email" required/>
                                            <input type="text" class="form-control" name="quote-telephone" id="telephone" placeholder="Telephone" required/>
                                            <textarea class="form-control" name="quote-message"  id="quote" placeholder="Détails du devis" rows="2" required></textarea>
                                            <button type="submit" class="btn btn-primary btn-black btn-block">Soumettre la requête</button>
                                            <!--Alert Message-->
                                            <div id="pop-quote-result" class="mt-xs">
                                            </div>
                                        </form>
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
<!-- #hero end -->

<!-- Service Block #4
============================================= -->
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

{{--offers--}}
<section id="offers">
    <div class="container">
        <div class="row pb-20">
            <div class="col-md-4">
                <img class="w100 pb-20" src="{{asset($offers->image1)}}" alt="">
                <div class="countdown-wrap pb-20">
                    <div class="countdown item-4" data-countdown="{{$offers->valid1}}" data-format="short">
                        <div class="countdown__item">
                            <span class="countdown__time daysLeft"></span>
                            <span style="font-size: 10px" class="countdown__text daysText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time hoursLeft"></span>
                            <span style="font-size: 10px" class="countdown__text hoursText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time minsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text minsText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time secsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text secsText"></span>
                        </div>
                    </div>
                </div>
                <button data-toggle="modal" data-target="#model-quote" class="btn btn-primary pb-20">Acheter maintenant </button>
            </div>
            <div class="col-md-4 mdn">
                <img class="w100" style="margin-top: 200px; margin-bottom: -100px" src="{{asset('front/assets/images/11.jpeg')}}" alt="">
            </div>
            <div class="col-md-4">
                <img class="w100 pb-20" src="{{asset($offers->image2)}}" alt="">
                <div class="countdown-wrap pb-20">
                    <div class="countdown item-4" data-countdown="{{$offers->valid2}}" data-format="short">
                        <div class="countdown__item">
                            <span class="countdown__time daysLeft"></span>
                            <span style="font-size: 10px" class="countdown__text daysText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time hoursLeft"></span>
                            <span style="font-size: 10px" class="countdown__text hoursText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time minsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text minsText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time secsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text secsText"></span>
                        </div>
                    </div>
                </div>
                <button data-toggle="modal" data-target="#model-quote" class="btn btn-primary pb-20">Acheter maintenant</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="w100 pb-20" src="{{asset($offers->image3)}}" alt="">
                <div class="countdown-wrap pb-20">
                    <div class="countdown item-4" data-countdown="{{$offers->valid3}}" data-format="short">
                        <div class="countdown__item">
                            <span class="countdown__time daysLeft"></span>
                            <span style="font-size: 10px" class="countdown__text daysText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time hoursLeft"></span>
                            <span style="font-size: 10px" class="countdown__text hoursText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time minsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text minsText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time secsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text secsText"></span>
                        </div>
                    </div>
                </div>
                <button data-toggle="modal" data-target="#model-quote" class="btn btn-primary pb-20">Acheter maintenant </button>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <img class="w100 pb-20" src="{{asset($offers->image4)}}" alt="">
                <div class="countdown-wrap pb-20">
                    <div class="countdown item-4" data-countdown="{{$offers->valid4}}" data-format="short">
                        <div class="countdown__item">
                            <span class="countdown__time daysLeft"></span>
                            <span style="font-size: 10px" class="countdown__text daysText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time hoursLeft"></span>
                            <span style="font-size: 10px" class="countdown__text hoursText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time minsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text minsText"></span>
                        </div>
                        <div class="countdown__item">
                            <span class="countdown__time secsLeft"></span>
                            <span style="font-size: 10px" class="countdown__text secsText"></span>
                        </div>
                    </div>
                </div>
                <button data-toggle="modal" data-target="#model-quote" class="btn btn-primary pb-20">Acheter maintenant</button>
            </div>
        </div>
    </div>
</section>
<!-- Shortcode #10
============================================= -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">Fonctionnalités impressionnantes</p>
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
<!-- Testimonials #1
============================================= -->
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
<section id="clients" class="shortcode-9">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center">
                    <div class="heading-bg">
                        <p class="mb-0">Ils nous font toujours confiance</p>
                        <h2>Nos clients</h2>
                    </div>
                </div>
                <!-- .heading end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <!-- Client Item -->
            <div class="col-xs-12 col-sm-4 col-md-1">
                <div class="brand">
                </div>
            </div>
            <!-- Client Item -->
            <div class="col-xs-12 col-sm-4 col-md-2">
                <div class="brand">
                    <img class="img-responsive center-block" src="{{asset('front/assets/images/clients/01.jpg')}}" alt="brand">
                </div>
            </div>
            <!-- .col-md-2 end -->

            <!-- Client Item -->
            <div class="col-xs-12 col-sm-4 col-md-2">
                <div class="brand">
                    <img class="img-responsive center-block" src="{{asset('front/assets/images/clients/02.jpg')}}" alt="brand">
                </div>
            </div>
            <!-- .col-md-2 end -->

            <!-- Client Item -->
            <div class="col-xs-12 col-sm-4 col-md-2">
                <div class="brand">
                    <img class="img-responsive center-block" src="{{asset('front/assets/images/clients/03.jpg')}}" alt="brand">
                </div>
            </div>
            <!-- .col-md-2 end -->

            <!-- Client Item -->
            <div class="col-xs-12 col-sm-4 col-md-2">
                <div class="brand">
                    <img class="img-responsive center-block" src="{{asset('front/assets/images/clients/04.jpg')}}" alt="brand">
                </div>
            </div>
            <!-- .col-md-2 end -->

            <!-- Client Item -->
            <div class="col-xs-12 col-sm-4 col-md-2">
                <div class="brand">
                    <img class="img-responsive center-block" src="{{asset('front/assets/images/clients/05.jpg')}}" alt="brand">
                </div>
            </div>
            <!-- .col-md-2 end -->
            <div class="col-xs-12 col-sm-4 col-md-1">
                <div class="brand">
                </div>
            </div>
        </div>
        <!-- .row End -->
    </div>
    <!-- .container end -->
</section>
<!-- #clients end-->

<!-- Call To Action #1
============================================= -->

<footer id="footer" class="footer-1">
    <!-- Contact Bar
    ============================================= -->
    <div class="container footer-widgtes">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="widgets-contact">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-map"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">Adresse</p>
                                <p class="text-capitalize font-heading">{{$gs->address1}}
                                    </p>
                                <p class="text-capitalize font-heading">{{$gs->address2}}
                                    </p>
                            </div>
                        </div>
                        <!-- .widget end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-envelope"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">Email</p>
                                <p class="text-capitalize font-heading">{{$gs->email}}</p>
                            </div>
                        </div>
                        <!-- .widget end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-phone"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">Appel</p>
                                <p class="text-capitalize font-heading">{{$gs->phone1}} <br> {{$gs->phone2}}</p>
                            </div>
                        </div>
                        <!-- .widget end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .widget-contact end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->

    <!-- Widget Section
    ============================================= -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 widgets-links">
                <div class="col-xs-12 col-sm-12 col-md-4 widget-about text-center-xs mb-30-xs">
                    <div class="widget-about-logo pull-left pull-none-xs">
                        <img style="height: 70px; margin-right: 20px" src="{{asset('front/assets/images/logo/hdms.png')}}" alt="logo"/>
                    </div>
                    <div class="widget-about-info">
                        <h5 class="text-capitalize text-white">HDMS</h5>
                        <p class="mb-0">{{$gs->footer}}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 widget-navigation text-center-xs mb-30-xs">
                    <h5 class="text-capitalize text-white">la navigation</h5>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <ul class="list-unstyled text-capitalize">
                                <li>
                                    <a href="#"> Accueil</a>
                                </li>
                                <li>
                                    <a href="#"> Contact</a>
                                </li>
                                <li>
                                    <a href="#"> Nos services</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 widget-services text-center-xs">
                    <h5 class="text-capitalize text-white">Nos services</h5>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <ul class="list-unstyled text-capitalize">
                                <li>
                                    <a href="#"> DESIGN PERSONALISÉ</a>
                                </li>
                                <li>
                                    <a href="#"> INSTALLATION</a>
                                </li>
                                <li>
                                    <a href="#"> MAINTENANCE</a>
                                </li>
                            </ul>
                        </div>
<!--                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <ul class="list-unstyled text-capitalize">
                                <li>
                                    <a href="#"> management</a>
                                </li>
                                <li>
                                    <a href="#"> wood flooring</a>
                                </li>
                                <li>
                                    <a href="#"> work consulting</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <ul class="list-unstyled text-capitalize">
                                <li>
                                    <a href="#"> wood flooring</a>
                                </li>
                                <li>
                                    <a href="#"> green building</a>
                                </li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Social bar
    ============================================= -->
    <div class="widget-social">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 mb-30-xs mb-30-sm">
                    <div class="widget-social-info pull-left text-capitalize pull-none-xs mb-15-xs">
                        <p class="mb-0">Suivez-nous<br>
                            sur les réseaux sociaux</p>
                    </div>
                    <div class="widget-social-icon pull-right text-right pull-none-xs">
                        <a href="{{$gs->facebook}}">
                            <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                        </a>
                        <a href="{{$gs->instagram}}">
                            <i class="fa fa-google-plus"></i><i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="widget-newsletter-info pull-left text-capitalize pull-none-xs mb-15-xs">
                        <p class="mb-0">s'abonner<br>
                            sur notre newsletter</p>
                    </div>
                    <div class="widget-newsletter-form pull-right text-right">

                        <!-- Mailchimp Form
                        =============================================-->
                        <form class="mailchimp">
                            <div class="subscribe-alert">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Saisissez votre compte de messagerie">
                                <span class="input-group-btn">
								<button class="btn text-capitalize" type="button">rejoindre</button>
								</span>
                            </div>
                            <!-- /input-group -->
                        </form>
                        <!--Mailchimp Form End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyrights
    ============================================= -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 copyrights text-center">
                <p class="text-capitalize">© 2021 HDMS. tous les droits sont réservés</p>
                <p class="text-capitalize">Conçu et développé par
                    <a href="https://ikaedigital.com">Ikae Digital</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('front/assets/js/jquery-2.1.1.min.js')}}"></script>
<script src="{{asset('front/assets/js/plugins.js?v=1.0.0')}}"></script>
<script src="{{asset('front/assets/js/functions.js?v=1.2.0')}}"></script>
<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="{{asset('front/assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0')}}"></script>

<script type="text/javascript" src="{{asset('front/assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
@include('include.js')
</body>
</html>
