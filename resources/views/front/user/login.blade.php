@extends('layouts.front')
<style>
    .header-3 .navbar-nav > li > a, .header-3 .module-search .search-icon, .header-3 .module-cart .cart-icon {
        line-height: 43px;
        color: #4169e1 !important;
    }
    .header-3.style-2 .navbar-fixed-top {
        padding-top: 14px !important;
        height: 70px;
    }
</style>
@section('content')
<br>
<section id="testimonials" class="testimonial testimonial-1 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-3 text-center">
                    <div class="heading-bg">
                        <p class="mb-0">Connectez-vous au compte</p>
                        <h2>Connexion</h2>
                    </div>
                </div>
                <!-- .heading end -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
                <div>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="login-form">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="text" class="form-control" placeholder="Email" name="email" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <input type="password" class="form-control" placeholder="Mot de passe" name="password" required>
                            <input type="submit" value="Login" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <!-- .col-md-12 end -->

        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->

</section>


@endsection
