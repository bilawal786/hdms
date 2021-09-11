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
                    Depuis votre espace client, vous pouvez consulter vos factures, votre carnet d'entretien de vos climatiseurs, modifier votre mot de passe ainsi que les details de votre compte.
                    </p>
            </div>

            <div id="Paris" class="tabcontent">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Statut</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($queries as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->service}}</td>
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
                                    <input type="email" class="form-control" id="email" readonly value="{{$user->name}}" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Telephone:</label>
                                    <input type="text" class="form-control" id="email" value="{{$user->phone}}" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Mot de passe actuel (laisser vide pour laisser
                                        inchangé):</label>
                                    <input type="password" class="form-control" id="pwd" name="oldpassword">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Nouveau mot de passe (laisser vide pour laisser
                                        inchangé):</label>
                                    <input type="password" class="form-control" id="pwd" name="newpassword">
                                </div>
                                <button type="submit" class="btn btn-primary">SAUVEGARDER</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
