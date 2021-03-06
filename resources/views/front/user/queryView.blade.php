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
                            <hr>
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
                                    Requ??te g??n??rale
                                @else
                                    {{$query->price}} ???
                                @endif
                            </div>
                            <div class="col-md-3">
                                <b>Install?? sur:</b>
                            </div>
                            <div class="col-md-3">
                                @foreach(json_decode($query->installed, true) as $size)
                                    <option value="{{$size}}">{{$size}}</option>
                                @endforeach
                            </div>
                            <hr>
                            <div class="col-md-3">
                                <b>Statut de paiement:</b>
                            </div>
                            <div class="col-md-3">
                                @if($query->paymentstatus == 1)
                                <span class="badge badge-success">pay??e</span>
                                @else
                                    <span class="badge badge-danger">Non pay??e</span>
                                @endif
                            </div>
                        </div>

                    </div>

                </div><!-- /.col -->
            </div>
            <br><br>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Climatiseurs</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>CLIMATISEUR MARQUE</th>
                            <th>LIEUX</th>
                            <th>DATE D'INSTALLATION</th>
                            <th>HISTORIQUE D'ENTRETIEN</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($query->ac as $ac)
                            <tr>
                                <td>{{$ac->mark}}</td>
                                <td>{{$ac->place}}</td>
                                <td>{{$ac->installation}}</td>
                                <td>
                                    <a href="{{route('user.maintain.hostory', ['id' => $ac->id])}}" style="color: white" class="btn btn-sm btn-danger">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
    @endsection
