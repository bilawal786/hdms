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

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">HISTORIQUE D'ENTRETIEN DE {{$ac->mark}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @foreach($main as $row)
                                <div class="row" style="padding: 20px; border: 1px solid">
                                    <div class="col-xs-6 col-md-6">
                                        <b>DATE D'ENTRETIEN</b>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <b>COMMENTAIRES</b>
                                    </div>
                                    <hr>
                                    <div class="col-xs-6 col-md-6">
                                        {{$row->service_date}}
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        {{$row->servicecomments}}
                                    </div>
                                    <br><br>
                                    <div class="col-xs-6 col-md-6">
                                        <b>PROCHAIN ENTRETIEN</b>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <b>COMMENTAIRES</b>
                                    </div>
                                    <br>
                                    <div class="col-xs-6 col-md-6">
                                        {{$row->next_maintain}}
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        {{$row->nextcomments}}
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-xs-6 col-md-6">
                                        <b>Valider</b>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        @if($row->status == 0)
                                            <a href="{{route('customer.query.status', ['id' => $row->id, 'status' => '1'])}}"><button class="btn btn-primary btn-sm">J'accepte</button></a>
                                            <a href="{{route('customer.query.status', ['id' => $row->id, 'status' => '2'])}}"><button class="btn btn-primary btn-sm">Rejeter</button></a>
                                        @elseif($row->status == 1)
                                            <b>J'accepte</b>
                                        @else
                                            <b>Rejeter</b>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                @endforeach

                            </div>
                            <!-- /.card-body -->
                        </div>
                </div><!-- /.col -->
            </div>
        </div>
    </section>
@endsection
