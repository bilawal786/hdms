@extends('layouts.front')
@section('content')
<!-- Hero Section
============================================= -->
@include('front.include.slider')

<!-- #hero end -->

<!-- Service Block #4
============================================= -->
@include('front.include.services')

{{--offers--}}

@include('front.include.offers')
<!-- Shortcode #10
============================================= -->
<section>
    <div class="row" style="text-align: center; margin-bottom: -100px">
        <a data-toggle="modal" data-target="#myModal"><button style="background-color: #f07900!important;" class="btn btn-primary">PARAINNAGE</button></a>
    </div>
    <div class="row">
        <img style="width: 100%;" src="{{asset('front/assets/images/13.jpg')}}" alt="">
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Parrainage</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('sponsership.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Nom:</label>
                        <input type="text" class="form-control" id="email" placeholder="Client Nom" name="fname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Prénom:</label>
                        <input type="text" class="form-control" id="email" placeholder="Client Prénom"  name="lname" required>
                    </div>
                    <input type="text" name="phone" class="form-control" placeholder="Client Telephone">
                    <input type="submit" value="Sauvegarder" name="phone" class="btn btn-primary">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Sortie</button>
            </div>
        </div>

    </div>
</div>
@include('front.include.about')

<!-- Testimonials #1
============================================= -->
@include('front.include.testimonial')

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
@include('front.include.clients')

<!-- #clients end-->

@endsection
