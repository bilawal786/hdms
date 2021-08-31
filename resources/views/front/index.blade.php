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
    <style>
        .navbar-nav > li.active {
            border-bottom: 2px solid #4169e1 !important;
        }
        .navbar-nav > li:after {
            background: #4169e1 !important;
        }
        .btn-primary {
            background-color: #4169e1 !important;
            color: #fff;
            border: 2px solid #4169e1 !important;
        }
        .widgets-contact .widget-contact-icon:after {
            background-color: #4169e1 !important;
        }
        .service-4 .service-block:hover .service-icon {
            background-color: #4169e1 !important;
        }
        .heading-bg:before {
            border: 2px solid #4169e1 !important;
        }
        .testimonial-3 .testimonial-content {
            background-color: #4169e1 !important;
        }
        .accordion .panel-heading .accordion-toggle:after {
            background-color: #4169e1 !important;
        }
        .bg-overlay-theme:before {
            background-color: #4169e1 !important;
        }
        .bg-theme {
            background-color: #4169e1 !important;
        }
        .copyrights a {
            color: #4169e1 !important;
        }
        .service-3 .service-block:hover h4, .service-4 .service-block:hover h4, .service-5 .service-block:hover h4 {
            color: #4169e1 !important;
        }
        .navbar-toggle {
            border-color: #4169e1 !important;
        }
        .navbar-toggle .icon-bar {
            background-color: #4169e1 !important;
        }
        a:hover {
            color: #4169e1 !important;
        }
        .accordion .panel-heading .accordion-toggle.collapsed::after {
            color: #fafafa !important;
            background-color: transparent;
        }
        .cta-1, .cta-2 {
            background-color: #fafafa !important;
        }
    </style>
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
    <title>HDMS CLIM</title>
</head>
<body>
<div class="preloader">
    <div class="spinner">
        <div class="bounce1">
        </div>
        <div class="bounce2">
        </div>
        <div class="bounce3">
        </div>
    </div>
</div>
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
                        <img style="height: 100px" src="{{asset('front/assets/images/logo/logo1.png')}}" alt="Yellow Hats">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="has-dropdown active">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Accueil</a>
                        </li>

                        <!-- li end -->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Nos services</a>
                        </li>
                        <!-- li end -->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">À propos de nous</a>
                        </li>
                        <!-- li end -->
                        <li class="has-dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Témoignages</a>
                        </li>
                        <!-- li end -->
                        <li class="has-dropdown pull-left">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Contact</a>
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
                    <img src="{{asset('front/assets/images/sliders/12.jpeg')}}"  alt="Background"  width="1920" height="1280">

                </li>

                <!-- slide 2 -->
                <li data-transition="fadefrombottom" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('front/assets/images/sliders/12.jpeg')}}"  alt=""  width="1920" height="1280">

                </li>

                <!-- slide 3 -->
                <li data-index='rs-367' data-transition='scaledownfromtop' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default'>
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('front/assets/images/sliders/12.jpeg')}}"  alt=""  width="1920" height="1280">
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
                            <p class="font-heading text-white">7oroof@7oroof.com</p>
                        </div>
                    </li>
                    <!-- .widget end -->

                    <li class="col-sm-4 col-md-3 widget">
                        <div class="widget-contact-icon pull-left">
                            <i class="lnr lnr-phone"></i>
                        </div>
                        <div class="widget-contact-info">
                            <p class="text-capitalize">Appelez-nous</p>
                            <p class="text-capitalize font-heading text-white">002 01065370701</p>
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
                                        <form id="pop-quote-form" action="assets/php/sendpopquote.php" method="post">
                                            <input type="text" class="form-control" name="quote-name" id="name" placeholder="Votre Nom" required/>
                                            <input type="email" class="form-control" name="quote-email" id="email" placeholder="Votre Email" required/>
                                            <input type="text" class="form-control" name="quote-telephone" id="telephone" placeholder="Telephoner" required/>
                                            <textarea class="form-control" name="quote-message"  id="quote" placeholder="Détails du devis" rows="2" required></textarea>
                                            <button type="submit" class="btn btn-primary btn-black btn-block">Soumettre une demande</button>
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
<section class="service service-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <!-- Service Block #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-4 service-block">
                        <div class="service-img">
                            <img height="250px" src="{{asset('front/assets/images/01.jpeg')}}" alt="icons"/>
                        </div>
                        <div class="service-icon">
                            <img src="{{asset('front/assets/images/services/icons/i48/1w.png')}}" alt="icon"/>
                            <img src="{{asset('front/assets/images/services/icons/i48/1w.png')}}" alt="icon"/>
                        </div>
                        <div class="service-content">
                            <div class="service-desc">
                                <h4>Design personalisé</h4>
                                <p>Tiling is an effective way to add elegance & style to any bath or kitchen Yellow Hats Remodeling specializes in tile installation and works directly with each homeowner.</p>
<!--                                <a class="read-more" href="#"><i class="fa fa-plus"></i>
                                    <span>read more</span>
                                </a>-->
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Service Block #2 -->
                    <div class="col-xs-12 col-sm-4 col-md-4 service-block">
                        <div class="service-img">
                            <img height="250px" src="{{asset('front/assets/images/02.jpeg')}}" alt="icons"/>
                        </div>
                        <div class="service-icon">
                            <img src="{{asset('front/assets/images/services/icons/i48/2w.png')}}" alt="icon"/>
                            <img src="{{asset('front/assets/images/services/icons/i48/2w.png')}}" alt="icon"/>
                        </div>
                        <div class="service-content">
                            <div class="service-desc">
                                <h4>Installation</h4>
                                <p>Yellow Hats has full service renovation expertise, we are equipped with the right tools and people to handle projects of all sizes & provide high quality renovation works.</p>
<!--                                <a class="read-more" href="#"><i class="fa fa-plus"></i>
                                    <span>read more</span>
                                </a>-->
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-4 end -->

                    <!-- Service Block #3 -->
                    <div class="col-xs-12 col-sm-4 col-md-4 service-block">
                        <div class="service-img">
                            <img height="250px" src="{{asset('front/assets/images/03.jpeg')}}" alt="icons"/>
                        </div>
                        <div class="service-icon">
                            <img src="{{asset('front/assets/images/services/icons/i48/3w.png')}}" alt="icon"/>
                            <img src="{{asset('front/assets/images/services/icons/i48/3w.png')}}" alt="icon"/>
                        </div>
                        <div class="service-content">
                            <div class="service-desc">
                                <h4>Maintenance</h4>
                                <p>Yellow Hats aim to eliminate the task of dividing your project between different architecture and construction company as we offers design and build services for you.</p>
<!--                                <a class="read-more" href="#"><i class="fa fa-plus"></i>
                                    <span>read more</span>
                                </a>-->
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

<!-- Projects Section
============================================= -->
<!--
<section id="projects" class="projects-fullwidth projects-4col  pb-0 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="heading heading-2 mb-0 text-center">
                    <div class="heading-bg">
                        <p class="mb-0">greate&amp; awesome works</p>
                        <h2>our projects</h2>
                    </div>
                </div>
                &lt;!&ndash; .heading end &ndash;&gt;
            </div>
            &lt;!&ndash; .col-md-6 end &ndash;&gt;
        </div>
        &lt;!&ndash; .row end &ndash;&gt;
    </div>
    &lt;!&ndash; .container end &ndash;&gt;
    <div class="container-fluid">
        <div class="row">
            &lt;!&ndash; Projects Filter
            ============================================= &ndash;&gt;
            <div class="col-xs-12 col-sm-12 col-md-12 projects-filter">
                <ul class="list-inline">
                    <li>
                        <a class="active-filter" href="#" data-filter="*">All Projects</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".interior">Interior</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".renovation">Renovation</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".architecture">Architecture</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".landscaping">Landscaping</a>
                    </li>
                    <li>
                        <a href="#" data-filter=".gardening">Gardening</a>
                    </li>
                </ul>
            </div>
            &lt;!&ndash; .projects-filter end &ndash;&gt;
        </div>
        &lt;!&ndash; .row end &ndash;&gt;

        &lt;!&ndash; Projects Item
        ============================================= &ndash;&gt;
        <div id="projects-all" class="row">

            &lt;!&ndash; Project Item #1 &ndash;&gt;
            <div class="col-xs-12 col-sm-6 col-md-3 project-item interior gardening">
                <div class="project-img">
                    <img class="" src="{{asset('front/assets/images/projects/small/4.jpg')}}" alt="interior"/>
                    <div class="project-hover">
                        <div class="project-meta">
                            <h6>Interior</h6>
                            <h4>
                                <a href="#">New Office Room</a>
                            </h4>
                        </div>
                        <div class="project-zoom">
                            <a class="img-popup" href="{{asset('front/assets/images/projects/full/4.jpg')}}" title="New Office Room"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; .project-hover end &ndash;&gt;
                </div>
                &lt;!&ndash; .project-img end &ndash;&gt;

            </div>
            &lt;!&ndash; .project-item end &ndash;&gt;

            &lt;!&ndash; Project Item #2 &ndash;&gt;
            <div class="col-xs-12 col-sm-6 col-md-3 project-item renovation landscaping">
                <div class="project-img">
                    <img class="" src="{{asset('front/assets/images/projects/small/1.jpg')}}" alt="interior"/>
                    <div class="project-hover">
                        <div class="project-meta">
                            <h6>Interior</h6>
                            <h4>
                                <a href="#">New Office Room</a>
                            </h4>
                        </div>
                        <div class="project-zoom">
                            <a class="img-popup" href="{{asset('front/assets/images/projects/full/1.jpg')}}" title="New Office Room"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; .project-hover end &ndash;&gt;
                </div>
                &lt;!&ndash; .project-img end &ndash;&gt;

            </div>
            &lt;!&ndash; .project-item end &ndash;&gt;

            &lt;!&ndash; Project Item #3 &ndash;&gt;
            <div class="col-xs-12 col-sm-6 col-md-3 project-item interior landscaping">
                <div class="project-img">
                    <img class="" src="{{asset('front/assets/images/projects/small/2.jpg')}}" alt="interior"/>
                    <div class="project-hover">
                        <div class="project-meta">
                            <h6>Interior</h6>
                            <h4>
                                <a href="#">New Office Room</a>
                            </h4>
                        </div>
                        <div class="project-zoom">
                            <a class="img-popup" href="{{asset('front/assets/images/projects/full/2.jpg')}}" title="New Office Room"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; .project-hover end &ndash;&gt;
                </div>
                &lt;!&ndash; .project-img end &ndash;&gt;

            </div>
            &lt;!&ndash; .project-item end &ndash;&gt;

            &lt;!&ndash; Project Item #4 &ndash;&gt;
            <div class="col-xs-12 col-sm-6 col-md-3 project-item architecture">
                <div class="project-img">
                    <img class="" src="{{asset('front/assets/images/projects/small/3.jpg')}}" alt="interior"/>
                    <div class="project-hover">
                        <div class="project-meta">
                            <h6>Interior</h6>
                            <h4>
                                <a href="#">New Office Room</a>
                            </h4>
                        </div>
                        <div class="project-zoom">
                            <a class="img-popup" href="{{asset('front/assets/images/projects/full/3.jpg')}}" title="New Office Room"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; .project-hover end &ndash;&gt;
                </div>
                &lt;!&ndash; .project-img end &ndash;&gt;

            </div>
            &lt;!&ndash; .project-item end &ndash;&gt;

            &lt;!&ndash; Project Item #5 &ndash;&gt;
            <div class="col-xs-12 col-sm-6 col-md-3 project-item interior">
                <div class="project-img">
                    <img class="" src="{{asset('front/assets/images/projects/small/5.jpg')}}" alt="interior"/>
                    <div class="project-hover">
                        <div class="project-meta">
                            <h6>Interior</h6>
                            <h4>
                                <a href="#">New Office Room</a>
                            </h4>
                        </div>
                        <div class="project-zoom">
                            <a class="img-popup" href="{{asset('front/assets/images/projects/full/5.jpg')}}" title="New Office Room"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; .project-hover end &ndash;&gt;
                </div>
                &lt;!&ndash; .project-img end &ndash;&gt;

            </div>
            &lt;!&ndash; .project-item end &ndash;&gt;

            &lt;!&ndash; Project Item #6 &ndash;&gt;
            <div class="col-xs-12 col-sm-6 col-md-3 project-item interior">
                <div class="project-img">
                    <img class="" src="{{asset('front/assets/images/projects/small/6.jpg')}}" alt="interior"/>
                    <div class="project-hover">
                        <div class="project-meta">
                            <h6>Interior</h6>
                            <h4>
                                <a href="#">New Office Room</a>
                            </h4>
                        </div>
                        <div class="project-zoom">
                            <a class="img-popup" href="{{asset('front/assets/images/projects/full/6.jpg')}}" title="New Office Room"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; .project-hover end &ndash;&gt;
                </div>
                &lt;!&ndash; .project-img end &ndash;&gt;

            </div>
            &lt;!&ndash; .project-item end &ndash;&gt;

            &lt;!&ndash; Project Item #7 &ndash;&gt;
            <div class="col-xs-12 col-sm-6 col-md-3 project-item interior">
                <div class="project-img">
                    <img class="" src="{{asset('front/assets/images/projects/small/7.jpg')}}" alt="interior"/>
                    <div class="project-hover">
                        <div class="project-meta">
                            <h6>Interior</h6>
                            <h4>
                                <a href="#">New Office Room</a>
                            </h4>
                        </div>
                        <div class="project-zoom">
                            <a class="img-popup" href="{{asset('front/assets/images/projects/full/7.jpg')}}" title="New Office Room"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; .project-hover end &ndash;&gt;
                </div>
                &lt;!&ndash; .project-img end &ndash;&gt;

            </div>
            &lt;!&ndash; .project-item end &ndash;&gt;

            &lt;!&ndash; Project Item #8 &ndash;&gt;
            <div class="col-xs-12 col-sm-6 col-md-3 project-item architecture">
                <div class="project-img">
                    <img class="" src="{{asset('front/assets/images/projects/small/8.jpg')}}" alt="interior"/>
                    <div class="project-hover">
                        <div class="project-meta">
                            <h6>Interior</h6>
                            <h4>
                                <a href="#">New Office Room</a>
                            </h4>
                        </div>
                        <div class="project-zoom">
                            <a class="img-popup" href="{{asset('front/assets/images/projects/full/8.jpg')}}" title="New Office Room"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; .project-hover end &ndash;&gt;
                </div>
                &lt;!&ndash; .project-img end &ndash;&gt;

            </div>
            &lt;!&ndash; .project-item end &ndash;&gt;
        </div>
        &lt;!&ndash; .row end &ndash;&gt;
    </div>
    &lt;!&ndash; .container end &ndash;&gt;
</section>
-->

<!-- Shortcode #10
============================================= -->
<section>
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
            <div class="col-xs-12 col-sm-12 col-md-6">
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
                            <div class="panel-body">
                                Depuis sa fondation, l'entreprise a doublé son chiffre d'affaires d'année en année et ses effectifs ont augmenté en conséquence. Aujourd'hui, HDMS compte plus de 4 000 professionnels sur sa liste de paie. La société est active au Moyen-Orient et en Europe.                            </div>
                        </div>
                    </div>

                    <!-- Panel 02 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-2" aria-expanded="false" aria-controls="collapse02-2"> Notre mission </a>
                            </h4>
                        </div>
                        <div id="collapse02-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Nous ne faisons que ce sur quoi nous sommes excellents. Si nous nous attaquons à un projet, vous pouvez être sûr à 100% qu'il sera livré à temps. Nous assurons toutes nos responsabilités, y compris la responsabilité civile, indemnisant ainsi nos clients contre tous les risques.                            </div>
                        </div>
                    </div>

                    <!-- Panel 03 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-3" aria-expanded="false" aria-controls="collapse02-3"> Nos buts </a>
                            </h4>
                        </div>
                        <div id="collapse02-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                HDMS est l'un des principaux développeurs de projets commerciaux, industriels et résidentiels de qualité A aux États-Unis. Depuis sa fondation, l'entreprise a doublé son chiffre d'affaires d'année en année et ses effectifs ont augmenté en conséquence.                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .Accordion-->
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div id="testimonial-oc-5"  class="testimonial-slide testimonial testimonial-3">
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>Chez HDMS, comprendre les besoins des clients est notre devoir professionnel. Nous évaluons individuellement chaque plan et proposons des solutions optimales, en partant des objectifs et des spécificités du projet. La situation financière stable de l'entreprise nous permet de fixer des taux de paiement anticipé minimaux et un calendrier de financement confortable pour notre formidable client</p>
                            <div class="testimonial-img">
                                <img src="{{asset('front/assets/images/testimonial/3.png')}}" alt="author"/>
                            </div>
                        </div>
                        <div class="testimonial-meta">
                            <strong>Begha</strong>, Art Director
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>Les compétences de nos chefs de projets sont attestées par des certificats internationaux délivrés par les principales associations professionnelles étrangères dans le domaine de la construction, de l'aménagement du territoire et de l'immobilier.. </p>
                            <div class="testimonial-img">
                                <img src="{{asset('front/assets/images/testimonial/2.png')}}" alt="author"/>
                            </div>
                        </div>
                        <div class="testimonial-meta">
                            <strong>Habaza</strong>, Civil Engineer
                        </div>
                    </div>
                    <!-- .testimonial-item end -->

                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <p>Yellow Hats Group réalise un cycle complet de développement, y compris l'attraction d'investissements, la construction et la gestion de propriétés résidentielles et non résidentielles haut de gamme.</p>
                            <div class="testimonial-img">
                                <img src="{{asset('front/assets/images/testimonial/1.png')}}" alt="author"/>
                            </div>
                        </div>
                        <div class="testimonial-meta">
                            <strong>Fouad Badawy</strong>, Investor
                        </div>
                    </div>
                    <!-- .testimonial-item end -->
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>

<!-- Call To Action #3
============================================= -->
<section id="cta-3" class="cta cta-3 bg-overlay bg-overlay-theme text-center">
    <div class="bg-section" >
        <img src="{{asset('front/assets/images/call/2.jpg')}}" alt="Background"/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <h2>La qualité avant tout</h2>
                <p>Le système de gestion de la qualité de la construction de pointe LATISTA garantit des normes de qualité élevées sur tous les sites de l'entreprise. Le mécanisme de contrôle permet un suivi intégré des travaux à toutes les étapes de la construction et comprend plus de 100 références d'évaluation de la qualité.</p>
                <div class="signiture">
                    <img src="{{asset('front/assets/images/call/sign.png')}}" alt="signiture"/>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #cta-3 end -->



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
                                <p class="text-capitalize font-heading">tanta , alGharbia, egypt.</p>
                            </div>
                        </div>
                        <!-- .widget end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-envelope"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">Email</p>
                                <p class="text-capitalize font-heading">7oroof@7oroof.com</p>
                            </div>
                        </div>
                        <!-- .widget end -->
                        <div class="col-xs-12 col-sm-12 col-md-4 widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="lnr lnr-phone"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize text-white">Appel</p>
                                <p class="text-capitalize font-heading">002 01065370701</p>
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
                        <p class="mb-0">Lorem Ipsum est simplement un texte factice de l'industrie de l'impression et de la composition. Lorem Ipsum est le texte factice standard .</p>
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
                        <a href="#">
                            <i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
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
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#slider1").revolution({
            sliderType:"standard",
            sliderLayout:"auto",
            delay:6000,
            disableProgressBar:"on",
            spinner:"off",
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"off",
                arrows: {
                    style:"arrow",
                    enable:true,
                    hide_onmobile:false,
                    hide_onleave:false,
                    tmp:'',
                    left: {
                        h_align:"left",
                        v_align:"bottom",
                        h_offset:110,
                        v_offset:35
                    },
                    right: {
                        h_align:"left",
                        v_align:"bottom",
                        h_offset:150,
                        v_offset:35
                    }
                }
            },
            gridwidth:1230,
            gridheight:800 ,

        });
    });
</script>
</body>
</html>
