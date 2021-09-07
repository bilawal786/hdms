<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <?php
    $gs = \App\GeneralSettings::find(1);
    $content = \App\Content::find(1);
    ?>
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

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
                        @guest
                            <li>
                                <a href="{{route('user.login')}}">Connexion</a>
                            </li>
                        @endguest
                        @auth
                            <li>
                                <a href="{{route('user.dashboard')}}">Espace Client</a>
                            </li>
                         @endauth
                    <!-- li end -->
                    </ul>


                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </nav>
</header>

@yield('content')

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
                    <div class="col-xs-12 col-sm-6 col-md-4 widget-navigation text-center-xs mb-30-xs">
                        <h5 class="text-capitalize text-white">la navigation</h5>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <ul class="list-unstyled text-capitalize">
                                    <li>
                                        <a href="{{route('front.index')}}"> Accueil</a>
                                    </li>
                                    <li>
                                        <a href="#about"> À propos de nous</a>
                                    </li>
                                    <li>
                                        <a href="#myser"> Nos services</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 widget-services text-center-xs">
                        <h5 class="text-capitalize text-white">Nos services</h5>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-12">
                                <ul class="list-unstyled text-capitalize">
                                    <li>
                                        <a href="#"> {{$content->sh1}}</a>
                                    </li>
                                    <li>
                                        <a href="#">  {{$content->sh2}}</a>
                                    </li>
                                    <li>
                                        <a href="#">  {{$content->sh3}}</a>
                                    </li>
                                </ul>
                            </div>
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
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-30-xs mb-30-sm">
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
        @endif
    </script>
    @include('include.js')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60e06954d6e7610a49a96d7f/1f9m9mtst';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
