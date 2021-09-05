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

            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Tableau de bord</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Mes requêtes</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Mes paiements</button>
                <button class="tablinks" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Sortie
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            <div id="London" class="tabcontent">
                <h3 style="padding: 20px">Bienvenue {{Auth::user()->name}}</h3>
            </div>

            <div id="Paris" class="tabcontent">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>CLIMATISEUR Marque</th>
                            <th>LIEUX</th>
                            <th>DATE DE POSE</th>
                            <th>DATE D'ENTRETIEN</th>
                            <th>PROCHAIN ENTRETIEN</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($queries as $row)
                            <tr>
                                <td>{{$row->mark}}</td>
                                <td>{{$row->place}}</td>
                                <td>{{$row->created_at->format('m/d/y')}}</td>
                                <td>{{$row->service_date}}</td>
                                <td>{{$row->next_maintain}}</td>
                                <td>
                                    @if($row->status == 0)
                                        <span class="badge badge-primary">Nouvelle</span>
                                    @elseif($row->status == 1)
                                        <span class="badge badge-warning">En cours</span>
                                    @else
                                        <span class="badge badge-success">Compléter</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('user.queries.view' , ['id'=>$row->id])}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="edit">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="Tokyo" class="tabcontent">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Client Nom</th>
                            <th>Client E-mail</th>
                            <th>Client Téléphone</th>
                            <th>Relier</th>
                            <th>En rapport</th>
                            <th>Taper</th>
                            <th>Prix</th>
                            <th>Statut</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payments as $row)
                            <tr>
                                <td>{{$row->user->name}}</td>
                                <td>{{$row->user->email}}</td>
                                <td>{{$row->user->phone}}</td>
                                <td>{{URL::to('/').'/payment/'.$row->link}}</td>
                                <td>
                                    <a href="{{route('user.queries.view' , ['id'=>$row->q_id])}}">Aller à la requête</a>
                                </td>
                                <td>
                                    @if($row->type == "installment")
                                        <span class="badge badge-danger">Versements</span>
                                    @else
                                        <span class="badge badge-success">Une fois</span>
                                    @endif
                                </td>
                                <td>{{$row->price}} €</td>
                                <td>
                                    @if($row->paymentstatus == 0)
                                        <span class="badge badge-danger">Non payée</span>
                                    @else
                                        <span class="badge badge-success">Payée</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection
