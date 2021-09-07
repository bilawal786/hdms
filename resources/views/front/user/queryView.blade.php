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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <a href="{{route('user.dashboard')}}"><button class="btn btn-primary">Tableau de bord</button></a>

                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <b>Nom:</b>
                            </div>
                            <div class="col-md-3">
                                {{$query->name}}
                            </div>
                            <div class="col-md-3">
                                <b>Email:</b>
                            </div>
                            <div class="col-md-3">
                                {{$query->email}}
                            </div>
                            <div class="col-md-3">
                                <b>Telephone:</b>
                            </div>
                            <div class="col-md-3">
                                {{$query->phone}}
                            </div>
                            <div class="col-md-3">
                                <b>Service:</b>
                            </div>
                            <div class="col-md-3">
                                {{$query->service}}
                            </div>
                            <hr>
                            <div class="col-md-3">
                                <b>Prix:</b>
                            </div>
                            <div class="col-md-3">
                                @if($query->price == 0)
                                    Requête générale
                                @else
                                    {{$query->price}} €
                                @endif
                            </div>
                            <div class="col-md-3">
                                <b>Quantité de climatiseurs:</b>
                            </div>
                            <div class="col-md-3">
                                {{count(json_decode($query->installed, true))}}
                            </div>
                            <hr>
                            <div class="col-md-3">
                                <b>Installé sur:</b>
                            </div>
                            <div class="col-md-3">
                                @foreach(json_decode($query->installed, true) as $size)
                                    <option value="{{$size}}">{{$size}}</option>
                                @endforeach
                            </div>
                            <div class="col-md-3">
                                <b>Statut de paiement:</b>
                            </div>
                            <div class="col-md-3">
                                @if($query->paymentstatus == 1)
                                <span class="badge badge-success">payée</span>
                                @else
                                    <span class="badge badge-danger">Non payée</span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-3">
                            <b>DATE DE POSE:</b>
                        </div>
                        <div class="col-md-3">
                            {{$query->created_at}}
                        </div>
                    </div>

                </div><!-- /.col -->
            </div>
        </div>
    </section>
    @endsection
