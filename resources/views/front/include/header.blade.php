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
                            <a href="{{route('login')}}">Connexion</a>
                        </li>
                        @endguest
                        @auth
                            <li>
                                <a href="{{route('home')}}">Connexion</a>
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
