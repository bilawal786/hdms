
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
</body>
</html>
