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
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>DATE D'ENTRETIEN</th>
                                        <th>PROCHAIN ENTRETIEN</th>
                                        <th>COMMENTAIRES</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($main as $row)
                                        <tr>
                                            <td>{{$row->service_date}}</td>
                                            <td>{{$row->next_maintain}}</td>
                                            <td>{{$row->comments}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                </div><!-- /.col -->
            </div>
        </div>
    </section>
@endsection
