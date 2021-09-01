<!DOCTYPE html>
<html>
<head>
    <title>NSCO</title>
    <!--meta-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="keywords" content="Mechanic, Car, Auto" />
    <meta name="description" content="Responsive Mechanic Auto Shop Template" />
    <!--slider revolution-->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!--style-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{asset('front/style/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/style/superfish.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/style/prettyPhoto.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/style/jquery.qtip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/style/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/style/animations.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/style/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/style/odometer-theme-default.css')}}">
    <!--fonts-->

    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/streamline-small/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/template/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/social/styles.css')}}">
    <link rel="shortcut icon" href="{{asset('front/images/favicon.ico')}}" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <style>
        .tp-leftarrow{
            display: none;
        }
        .sf-menu li, .sf-menu li:hover, .sf-menu li.sfHover, .sf-menu a:focus, .sf-menu a:hover, .sf-menu a:active {
            background: none #000;
        }
        .sf-menu li a, .sf-menu li a:visited {
            font-family: 'Open Sans';
            font-size: 16px;
            font-weight: 400;
            line-height: 26px;
            color: #fff;
            padding: 12px 0 12px 26px;
            border: none;
        }
        .productcolumn {
            float: left;
            width: 48%;
            padding: 10px;
        }

        /* Clear floats after the columns */
        .productrow:after {
            content: "";
            display: table;
            clear: both;
        }
        .cartcolumn {
            float: left;
            width: 23%;
            padding: 10px;
            color: white;
        }

        /* Clear floats after the columns */
        .cartrow:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>

    <style>
        .h100{
            height: 100px;
        }
        .blackcolor{
            background-color: black !important;
        }
        .colorwhite{
            color: white !important;
        }
        .social-icons.gray li a:before {
            color: #f9f9f9;
        }
        #apply5{
            display: none;
        }
        label {
            display: block;
            font-family: 'Open Sans';
            font-size: 14px;
            font-weight: 600;
            color: #333;
            line-height: 26px;
            background: #F5F5F5;
            padding: 11px 16px 13px;
        }
        .mycolumn {
            float: left;
            width: 29%;
            padding: 10px;
            border: 1px solid;
            margin: 1px;
            border-color: #e2e6e7;
        }
        .mycolumn1 {
            float: left;
            width: 20.5%;
            height: 50px;
            padding: 10px;
            border: 1px solid;
            margin: 1px;
            border-color: #e2e6e7;
        }

        /* Clear floats after the columns */
        .myrow:after {
            content: "";
            display: table;
            clear: both;
        }
        @media screen and (min-width: 800px) {

        }
        @media only screen and (max-width: 600px) {
             #whitediv, #offers, #beforeater, #mainlogin{
                display: none;
            }
            .cartcolumn {
                float: left;
                width: 100%;
                padding: 10px;
                color: white;
                text-align: center;
            }
            .productcolumn {
                float: left;
                width: 95%;
                padding: 10px;
            }

            #marginrightzero{
                margin-left: 25px !important;
            }
            #video{
                height: 200px;
                width: 300px;
            }
            #imgresponsive{
                width: 100%;
                height: auto;
                margin-left: 0px !important;
            }
            #carmens{
                height: 170px;
            }
            #apply1{
                padding-top: 1px !important;
                padding-left: 1px !important;
            }
            #apply3{
                width: 90% !important;
            }
            #apply4{
                height: 200px !important;
            }
            #apply5{
                display: block;
            }

            #apply6{
                width: 100%; background-color: #0a1b30;
                color: white;
                padding: 12px 20px;
                border: none;
                cursor: pointer;
                float: right;
                border-radius: 50px;
            }
            #apply7{
                height: 20px;
                margin-top: 10px
            }
            #apply8{
                height: 20px;
                margin-top: 10px
            }
            #apply9{
                height: 27px;
            }
            #apply10{
                height: 30px;
            }
            #apply11{
                height: 25px;
            }
            #apply12{
                width: 350px;
            }
            #apply13{
                width: 100% !important;
                text-align: center !important;
            }
            #mycheckbox1 {
                height: 15px !important;
            }
            #headercontainer{
                margin-top: 0px !important;
            }
            #height200{
                height: 200px !important;
            }
            .container {
                position: relative;
                width: 100%;
                overflow: hidden;
                padding-top: 56.25%; /* 16:9 Aspect Ratio */
            }

            .mycolumn1 {
                float: left;
                width: 17%;
                height: 50px;
                padding: 10px;
                border: 1px solid;
                margin: 1px;
                border-color: #e2e6e7;
                overflow: hidden;
                color: white;
            }

            .mycolumn {
                float: left;
                width: 25%;
                padding: 10px;
                border: 1px solid;
                margin: 1px;
                border-color: #e2e6e7;
            }
            .responsive-iframe {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 100%;
                border: none;
            }
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                width: 90% !important;
                margin: auto;
                text-align: center;
                font-family: arial;
                float: left;
            }
            .bgnone{
                background-image: none !important;
            }
        }
        input[type=text], [type=password], [type=email] {
            width: 65%;
            box-sizing: border-box;
            background-color: #fcfcfc;
        }
        #rcorners1 {
            border-radius: 25px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            padding: 10px;
        }
        .grid-item {
            padding: 10px;
            font-size: 30px;
            text-align: center;
        }
        .button1{
            background-color: #04101c;
            color: white;
            border: none;
            cursor: pointer;
            width: 65%;
            opacity: 0.9;
        }
        .mybutton {
            background-color: #720095; /* Green */
            border: none;
            color: white;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .divmy{
            background-color: #720095;
            padding: 20px;
            color: white;
            height: 200px;
            overflow: scroll;
        }
        .divmy1{
            background-color: #d9d9d9;
            padding: 30px;
            color: black;
            height: 40px;
            text-align: center;
        }
        .divmy p, h3{
            color: white;
        }
        .divmy1 h3{
            color: black;
        }
        .services-list li, .team-box {
            position: relative;
            float: left;
            width: 366px;
            background: #FFF;
            padding-bottom: 30px;
            overflow: hidden;
            margin-right: 23px;
        }
        .row.gray {
            background: #000000;
        }
        .borderstyle{
            border-left: 25px solid black;
            border-top: 6px solid black;
            border-bottom: 6px solid black;
            border-right: 25px solid black;
            padding: 10px;
            border-radius: 20px;
            margin-bottom: 20px;
            font-size: 20px;
            color: black;
        }
        #mycheckbox{
            display:block;
            width: 100%;
            height: 20px;
            margin:0 auto;
            margin-bottom: 20px;
        }
        #mycheckbox1{
            display:block;
            margin:0 auto;
            height: 20px;
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .closemodel {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .closemodel:hover,
        .closemodel:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 100%;
            margin-top: 30px;
            position: relative;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
        }
        .alert1 {
            padding: 20px;
            background-color: #369bf4;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 22%;
            margin: auto;
            text-align: center;
            font-family: arial;
            float: left;
            padding: 20px;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #4646d5;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
        p {
            padding: 1em 0;
            color: #fff !important;
            line-height: 26px;
        }
        .purple{
            color: purple !important;
        }
        .sf-menu a:hover, .sf-menu a:visited:hover, .sf-menu li.selected a {
            color: purple !important;
        }
        .social-icons a:before {
            font-size: 22px;
        }
    </style>
</head>
<body>
<div class="site-container blackcolor">
    <div class="header-container">
        <!--<div class="header-container sticky">-->
        <div class="vertical-align-table column-1-1">
            <div class="header clearfix">
                <div class="logo vertical-align-cell">
{{--                    <h1><a href="{{route('front.index')}}" title="CarService">Lassere Auto Clean</a></h1>--}}
                </div>
                <a href="#" class="mobile-menu-switch vertical-align-cell">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </a>
                <div class="menu-container clearfix vertical-align-cell">
                    <nav style="margin-right: -60px">
                        <ul class="sf-menu">
                            <li>
                                <a href="{{route('front.index')}}" title="Acceuil">
                                    Acceuil
                                </a>
                            </li>
                            <li>
                                <a href="#services" title="Nos Services">
                                    Nos Services
                                </a>
                            </li>
                            <li>
                                <a href="#products" title="Nos Produits">
                                    Nos Produits
                                </a>
                            </li>
                            <li class="left-flyout">
                                <a href="#gallery" title="Gallerie">
                                    Gallerie
                                </a>
                            </li>
                            <li class="left-flyout">
                                <a href="#mainlogin" title="Réserver">
                                    Réserver
                                </a>
                            </li>
                            <li class="left-flyout">
                                <a href="{{route('front.about')}}" title="A Propos">
                                    A Propos
                                </a>
                            </li>
                            <li class="left-flyout">
                                <a href="{{route('cartitems')}}" title="Contact">
                                  <i class="fa fa-shopping-cart"></i>
                                </a>
                            </li>
                            @auth
                            <li class="left-flyout">
                                <a href="{{route('home')}}" title="Espace Client">
                                    Espace Client
                                </a>
                            </li>
                            @endauth
                        </ul>
                    </nav>
                    <div class="mobile-menu-container">
                        <div class="mobile-menu-divider"></div>
                        <nav>
                            <ul class="mobile-menu collapsible-mobile-submenus">
                                <li class="selected">
                                    <a href="{{route('front.index')}}" title="Acceuil">
                                        Acceuil
                                    </a>
                                </li>
                                <li>
                                    <a href="#services" title="Nos Services">
                                        Nos Services
                                    </a>
                                </li>
                                <li>
                                    <a href="#products" title=" Nos Produits">
                                        Nos Produits
                                    </a>
                                </li>
                                <li class="left-flyout">
                                    <a href="#gallery" title="Gallerie">
                                        Gallerie
                                    </a>
                                </li>
                                <li class="left-flyout">
                                    <a href="#mainlogin" title="Réserver">
                                        Réserver
                                    </a>
                                </li>
                                <li class="left-flyout">
                                    <a href="{{route('front.about')}}" title="A Propos">
                                        A Propos
                                    </a>
                                </li>
                                <li class="left-flyout">
                                    <a href="{{route('cartitems')}}" title="Panier">
                                        Panier
                                    </a>
                                </li>
                                @auth
                                    <li class="left-flyout">
                                        <a href="{{route('home')}}" title="Espace Client">
                                            Espace Client
                                        </a>
                                    </li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    @php
    $footer = \App\Footer::find(1);
    @endphp
    <div class="row footer-row full-width" style="padding-top: 10px; padding-bottom: 10px; background-color: black">
        <div class="row row-4-4">
            <div class="column column-1-4">
                <h6 style="font-size: 30px; font-weight: bold" class="box-header">Adresse :</h6>
                <ul  class="list simple margin-top-20">
                    <li>{{$footer->address}}</li>
                </ul>
            </div>
            <div class="column column-1-4">
                <img style="height: 200px; float: right;" src="{{empty($footer->qr) ? 'https://www.investopedia.com/thmb/ZG1jKEKttKbiHi0EkM8yJCJp6TU=/1148x1148/filters:no_upscale():max_bytes(150000):strip_icc()/qr-code-bc94057f452f4806af70fd34540f72ad.png' : $footer->qr}}" alt="">
            </div>
            <div class="column column-1-4">
                <h6 style="font-size: 30px; font-weight: bold" class="box-header">Nos Horaires :</h6>
                <ul  class="list simple margin-top-20">
                    <li>{{$footer->scedule}}</li>
                </ul>
            </div>
            <div class="column column-1-4">
                <h6 style="font-size: 30px; font-weight: bold" class="box-header">Nous contacter</h6>
                <ul class="list simple margin-top-20">
                    <li>{{$footer->contact}}</li>
                </ul>
            </div>
        </div>
        <div class="row row-4-4" style="margin-top: 20px">
            <div class="column column-1-2">
                <h6 style="font-size: 30px; font-weight: bold" class="box-header">Mail :</h6>
                <ul  class="list simple margin-top-20">
                    <li>{{$footer->mail}}</li>
                </ul>
            </div>
            <div class="column column-1-4">

            </div>
            <div class="column column-1-4">
                <h6 style="font-size: 30px; font-weight: bold" class="box-header">Réseaux sociaux</h6>
                <ul class="margin-top-26">
                    <li>
                        <a  target="_blank" href="{{$footer->facebook}}" >
                            <img style="height: 40px; float: left" src="{{asset('front/images/slider/13.png')}}" alt="">
                        </a>
                        <a href="{{$footer->instagram}}">
                            <img style="height: 40px; float: left" src="{{asset('front/images/slider/12.png')}}" alt="">
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="apply13" style="background-color: white; width: 48%; float: left; padding: 10px; font-size: 15px">
        <strong>Développé par <a href="https://spenceragency.fr/">Spencer Agency</a> 2021
        </strong>
    </div>
    <div id="apply13" style="background-color: white; width: 48%; float: left; padding: 10px; font-size: 15px; text-align: right">
        <strong>
            <a href="{{route('front.legal')}}" style="color: black">Mentions légales</a> | <a style="color: black" href="{{route('front.terms')}}">Termes et conditions</a>
        </strong>
    </div>
</div>
<a href="#top" class="scroll-top animated-element template-arrow-up" title="Scroll to top"></a>
<div class="background-overlay"></div>
<!--js-->
<script type="text/javascript" src="{{asset('front/js/jquery-1.12.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery-migrate-1.4.1.min.js')}}"></script>
<!--slider revolution-->
<script type="text/javascript" src="{{asset('front/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.ba-bbq.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery-ui-1.11.4.custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.ui.touch-punch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.isotope.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.easing.1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.touchSwipe.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.transit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.hint.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.costCalculator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.qtip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.blockUI.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/odometer.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>

<script>
    ( function( factory ) {
        if ( typeof define === "function" && define.amd ) {

            // AMD. Register as an anonymous module.
            define( [ "../widgets/datepicker" ], factory );
        } else {

            // Browser globals
            factory( jQuery.datepicker );
        }
    }( function( datepicker ) {

        datepicker.regional.fr = {
            closeText: "Fermer",
            prevText: "",
            nextText: "",
            currentText: "Aujourd'hui",
            monthNames: [ "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" ],
            monthNamesShort: [ "janv.", "févr.", "mars", "avr.", "mai", "juin",
                "juil.", "août", "sept.", "oct.", "nov.", "déc." ],
            dayNames: [ "dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi" ],
            dayNamesShort: [ "dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam." ],
            dayNamesMin: [ "Di","Lu","Ma","Me","Je","Ve","Sa" ],
            weekHeader: "Sem.",
            dateFormat: "mm/dd/yy",
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            minDate: new Date(),
            yearSuffix: "" };
        datepicker.setDefaults( datepicker.regional.fr );

        return datepicker.regional.fr;

    } ) );


    $( function() {
        $( "#datepicker" ).datepicker();
    } );

    $('#datepicker').datepicker({
        format: 'mm/dd/yy'
    });

</script>
<script>

    $(".authcheck").click(function(){
        var modal = document.getElementById("myModal");

        var span = document.getElementsByClassName("closemodel")[0];
        span.onclick = function() {
            modal.style.display = "none";
        }
        modal.style.display = "block";
    });
</script>

<script type="text/javascript">


    $('input[type="radio"]').on('click change', function(e) {
        var vehicle = document.getElementsByName('vehicle');
        var prestation = document.getElementsByName('prestation');
        var formula= document.getElementsByName('formula');

        var price =  $('input[name="vehicle"]:checked').val();

        var option1= document.getElementsByName('option1');
        var option2= document.getElementsByName('option2');
        var option3= document.getElementsByName('option3');
        var option4= document.getElementsByName('option4');
        var option5= document.getElementsByName('option5');
        var option6= document.getElementsByName('option6');

        if(prestation[1].checked){
            var prestation2 = $('#prestation2').val();
        }else{
            var prestation2 = 0;
        }
        if(prestation[2].checked){
            var prestation3 = $('#prestation3').val();
        }else{
            var prestation3 = 0;
        }

        if (option1[0].checked){
            var option1 = $('.checkvalue1').val();
        }else {
            var option1 = 0;
        }
        if (option2[0].checked){
            var option2 = $('.checkvalue2').val();
        }else {
            var option2 = 0;
        }
        if (option3[0].checked){
            var option3 = $('.checkvalue3').val();
        }else {
            var option3 = 0;
        }
        if (option4[0].checked){
            var option4 = $('.checkvalue4').val();
        }else {
            var option4 = 0;
        }
        if (option5[0].checked){
            var option5 = $('.checkvalue5').val();
        }else {
            var option5 = 0;
        }
        if (option6[0].checked){
            var option6 = $('.checkvalue6').val();
        }else {
            var option6 = 0;
        }

        if (vehicle[0].checked) {
            $('#formula').val('EXTERIEUR');
        } else if (vehicle[1].checked) {
            $('#formula').val('INTERIEUR');
        } else if (vehicle[2].checked) {
            $('#formula').val('COMPLETE');
        } else if (vehicle[3].checked) {
            $('#formula').val('EXTERIEUR');
        }else if (vehicle[4].checked) {
            $('#formula').val('INTERIEUR');
        }else if (vehicle[5].checked) {
            $('#formula').val('COMPLETE');
        } else if (vehicle[6].checked) {
            $('#formula').val('EXTERIEUR');
        }else if (vehicle[7].checked) {
            $('#formula').val('INTERIEUR');
        }else if (vehicle[8].checked) {
            $('#formula').val('COMPLETE');
        } else if (vehicle[9].checked) {
            $('#formula').val('EXTERIEUR');
        }else if (vehicle[10].checked) {
            $('#formula').val('INTERIEUR');
        }else if (vehicle[11].checked) {
            $('#formula').val('COMPLETE');
        } else if (vehicle[12].checked) {
            $('#formula').val('EXTERIEUR');
        }else if (vehicle[13].checked) {
            $('#formula').val('INTERIEUR');
        }else if (vehicle[14].checked) {
            $('#formula').val('COMPLETE');
        }

        var total = (+price) + (+option1) + (+option2)+ (+option3)+ (+option4)+ (+option5)+ (+option6)+ (+prestation2)+ (+prestation3);

        $('#total').val(total.toFixed(2));
        $('#total1').html('Total : '+ total.toFixed(2) + ' €');
        // return alert('total cost will be ' + total)

    });

    $('input[type="checkbox"]').on('click change', function(e) {
        var vehicle = document.getElementsByName('vehicle');
        var formula= document.getElementsByName('formula');

        var price =  $('input[name="vehicle"]:checked').val();

        var option1= document.getElementsByName('option1');
        var option2= document.getElementsByName('option2');
        var option3= document.getElementsByName('option3');
        var option4= document.getElementsByName('option4');
        var option5= document.getElementsByName('option5');
        var option6= document.getElementsByName('option6');

        if (option1[0].checked){
            var option1 = $('.checkvalue1').val();
        }else {
            var option1 = 0;
        }
        if (option2[0].checked){
            var option2 = $('.checkvalue2').val();
        }else {
            var option2 = 0;
        }
        if (option3[0].checked){
            var option3 = $('.checkvalue3').val();
        }else {
            var option3 = 0;
        }
        if (option4[0].checked){
            var option4 = $('.checkvalue4').val();
        }else {
            var option4 = 0;
        }
        if (option5[0].checked){
            var option5 = $('.checkvalue5').val();
        }else {
            var option5 = 0;
        }
        if (option6[0].checked){
            var option6 = $('.checkvalue6').val();
        }else {
            var option6 = 0;
        }

        if (vehicle[0].checked) {
            $('#formula').val('EXTERIEUR');
        } else if (vehicle[1].checked) {
            $('#formula').val('INTERIEUR');
        } else if (vehicle[2].checked) {
            $('#formula').val('COMPLETE');
        } else if (vehicle[3].checked) {
            $('#formula').val('EXTERIEUR');
        }else if (vehicle[4].checked) {
            $('#formula').val('INTERIEUR');
        }else if (vehicle[5].checked) {
            $('#formula').val('COMPLETE');
        } else if (vehicle[6].checked) {
            $('#formula').val('EXTERIEUR');
        }else if (vehicle[7].checked) {
            $('#formula').val('INTERIEUR');
        }else if (vehicle[8].checked) {
            $('#formula').val('COMPLETE');
        } else if (vehicle[9].checked) {
            $('#formula').val('EXTERIEUR');
        }else if (vehicle[10].checked) {
            $('#formula').val('INTERIEUR');
        }else if (vehicle[11].checked) {
            $('#formula').val('COMPLETE');
        } else if (vehicle[12].checked) {
            $('#formula').val('EXTERIEUR');
        }else if (vehicle[13].checked) {
            $('#formula').val('INTERIEUR');
        }else if (vehicle[14].checked) {
            $('#formula').val('COMPLETE');
        }

        var total = (+price) + (+option1) + (+option2)+ (+option3)+ (+option4)+ (+option5)+ (+option6);

        $('#total').val(total.toFixed(2));
        $('#total1').html('Total : '+ total.toFixed(2) + ' €');

        // return alert('total cost will be ' + total)

    });


    $(".prestation").click(function(){
        $('#addressdiv').show();
    });
    $(".prestation1").click(function(){
        $('#addressdiv').hide();
    });
</script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }


</script>
</body>
</html>
