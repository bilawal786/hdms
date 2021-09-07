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
                <button class="tablinks" onclick="openCity(event, 'Paris')">ENTRETIEN</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Mes paiements</button>
                <button class="tablinks" onclick="openCity(event, 'Lahore')">Détails du compte</button>
                <button class="tablinks" href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Sortie
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            <div id="London" class="tabcontent">
                <p style="padding: 20px; font-size: 20px">

                    @error('email')
                    <strong style="color: red">Le couriel a déja été pris en compte.</strong><br><br>
                    @enderror

                    Bonjour <b>{{Auth::user()->name}}</b>, Bienvenue dans votre espace client.
                    <br>
                    <br>
                    Depuis votre espace client, vous pouvez consulter vos factures, votre carnet d'entretien de vos climatiseurs, modifier votre mot de passe ainsi que les details de vot compte.
                    <br>
                    <br>
                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Parrainage</button>
                    </p>
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
                            <th>Valider</th>
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
                                    <a href="{{route('user.queries.view' , ['id'=>$row->id])}}" class="btn btn-sm btn-success" >
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    @if($row->customerstatus == 0)
                                        <a href="{{route('customer.query.status', ['id' => $row->id, 'status' => '1'])}}"><button class="btn btn-sm">J'accepte</button></a>
                                        <a href="{{route('customer.query.status', ['id' => $row->id, 'status' => '2'])}}"><button class="btn btn-sm">Rejeter</button></a>
                                    @elseif($row->customerstatus == 1)
                                        J'accepte
                                    @else
                                        Rejeter
                                    @endif
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
                                <td><a target="_blank" href="{{URL::to('/').'/payment/'.$row->link}}">{{URL::to('/').'/payment/'.$row->link}}</a></td>
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

            <div id="Lahore" class="tabcontent">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('user.profile.update')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Nom:</label>
                                    <input type="text" class="form-control" id="email" value="{{$user->name}}" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" value="{{$user->email}}" readonly name="email">
                                </div>
                                <div class="form-group">
                                    <label for="email">Telephone:</label>
                                    <input type="text" class="form-control" id="email" value="{{$user->phone}}" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Ot de passe actuel (laisser vide pour laisser
                                        inchangé):</label>
                                    <input type="password" class="form-control" id="pwd" name="oldpassword">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Nouveau mot de passe (laisser vide pour laisser
                                        inchangé):</label>
                                    <input type="password" class="form-control" id="pwd" name="newpassword">
                                </div>
                                <button type="submit" class="btn btn-primary">SAUVEGARDER
                                    CHANGEMENTS</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
                        <input type="text" name="name" class="form-control" placeholder="Client Nom">
                        <input type="email" name="email" class="form-control" placeholder="Client Email">
                        <input type="text" name="phone" class="form-control" placeholder="Client Telephone">
                        <input type="submit" value="Sauvegarder" name="phone" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Proche</button>
                </div>
            </div>

        </div>
    </div>
@endsection
