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
    <meta name="description" content="HDMS CLIM">
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
<div id='whatsapp-chat' class='hide'>
    <div class='header-chat'>
        <div class='head-home'>
            <div class='info-avatar'><img src='{{asset('front/assets/images/logo/hdms.png')}}' /></div>
            <p><span class="whatsapp-name">HDMS</span><br><small>Répond généralement dans l'heure</small></p>

        </div>
        <div class='get-new hide'>
            <div id='get-label'></div>
            <div id='get-nama'></div>
        </div>
    </div>
    <div class='home-chat'>

    </div>
    <div class='start-chat'>
        <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
            <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
                <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
                    <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
                        <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
                        <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
                        <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
                    </div>
                </div>
                <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
                    <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">HDMS</div>
                    <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Salut 👋<br><br>Comment puis-je t'aider?</div>
{{--                    <div class="WhatsappChat__Time-sc-1wqac52-5 cqCDVm">1:40</div>--}}
                </div>
            </div>
        </div>

        <div class='blanter-msg'>
            <textarea id='chat-input' placeholder='Écrire un message' maxlength='120' row='1'></textarea>
            <a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448"><path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"/></svg></a>

        </div>
    </div>
    <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg>Discuter</a>
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
                            <a href="#clients">PARTENAIRES</a>
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
<!-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/613788fa649e0a0a5cd50fa8/1ff0eu4he';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script> -->
<!--End of Tawk.to Script-->

<script>
    /* Whatsapp Chat Widget by www.bloggermix.com */
    $(document).on("click", "#send-it", function() {
        var a = document.getElementById("chat-input");
        if ("" != a.value) {
            var b = $("#get-number").text(),
                c = document.getElementById("chat-input").value,
                d = "https://web.whatsapp.com/send",
                e = b,
                f = "&text=" + c;
            if (
                /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                    navigator.userAgent
                )
            )
                var d = "whatsapp://send";
            var g = d + "?phone=+590690914868" + e + f;
            window.open(g, "_blank");
        }
    }),
        $(document).on("click", ".informasi", function() {
            (document.getElementById("get-number").innerHTML = $(this)
                .children(".my-number")
                .text()),
                $(".start-chat,.get-new")
                    .addClass("show")
                    .removeClass("hide"),
                $(".home-chat,.head-home")
                    .addClass("hide")
                    .removeClass("show"),
                (document.getElementById("get-nama").innerHTML = $(this)
                    .children(".info-chat")
                    .children(".chat-nama")
                    .text()),
                (document.getElementById("get-label").innerHTML = $(this)
                    .children(".info-chat")
                    .children(".chat-label")
                    .text());
        }),
        $(document).on("click", ".close-chat", function() {
            $("#whatsapp-chat")
                .addClass("hide")
                .removeClass("show");
        }),
        $(document).on("click", ".blantershow-chat", function() {
            $("#whatsapp-chat")
                .addClass("show")
                .removeClass("hide");
        });

</script>
</body>
</html>
