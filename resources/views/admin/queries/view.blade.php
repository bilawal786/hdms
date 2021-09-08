@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Détails du devis</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Détails du devis</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <div class="row">
                            @error('email')
                            <strong>Le couriel a déja été pris en compte.</strong>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h5><i class="fas fa-info"></i> Détails du devis:</h5>
                            </div>
                            <div class="col-md-8">
                                @if(Auth::user()->role ==1)
                                <div class="float-right">
                                    @if($query->status == 0)
                                        <a href="{{route('query.status', ['id'=> $query->id, 'status' => '1'])}}">
                                            <button class="btn btn-success btn-sm">Marquer en cours de traitement</button>
                                        </a>
                                    @elseif($query->status == 1)
                                        <a href="{{route('query.status', ['id'=> $query->id, 'status' => '2'])}}">
                                            <button class="btn btn-success btn-sm">Marquer comme terminé</button>
                                        </a>
                                    @else
                                        <button class="btn btn-success btn-sm">Compléter</button>
                                    @endif
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Créer un compte pour cet utilisateur</button>
                                        @if($query->user_id)
                                    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#paymentbox">Envoyer le lien de paiement</button>
                                        @endif
                                </div>
                                @endif
                            </div>
                        </div>

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
                                   Requête générale
                               @else
                               {{$query->price}} €
                               @endif
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
                           <hr>
                           <div class="col-md-3">
                               <b>DATE DE POSE:</b>
                           </div>
                           <div class="col-md-3">
                               {{$query->created_at}}
                           </div>
                           <div class="col-md-3">
                               <b>Description:</b>
                           </div>
                           <div class="col-md-3">
                               {{$query->message}}
                           </div>
                           <hr>
                           <div class="col-md-3">
                               <b>Statut du client:</b>
                           </div>
                           <div class="col-md-3">
                               @if($query->customerstatus == 1)
                                   <span class="badge badge-success">J'accepte</span>
                               @elseif($query->customerstatus == 2)
                                   <span class="badge badge-danger">Rejeter</span>
                               @else
                                   <span class="badge badge-warning">Aucune action du client</span>
                               @endif
                           </div>
                       </div>
<!--                        <hr>
                        <form action="{{route('query.update', ['id' => $query->id])}}" method="POST">
                            @csrf
                        <div class="row">
                            @if(Auth::user()->role ==1)
                                <div class="col-md-3">
                                    <b>DATE D'ENTRETIEN:</b>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" value="{{$query->service_date}}" name="service_date" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <b>CLIMATISEUR Marque:</b>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" value="{{$query->mark}}" name="mark" class="form-control">
                                </div>
                                <hr>
                                <div class="col-md-3">
                                    <b>LIEUX:</b>
                                </div>
                                <div class="col-md-3">
                                    <input type="text"  value="{{$query->place}}" name="place" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <b>PROCHAIN ENTRETIEN:</b>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" value="{{$query->next_maintain}}" name="next_maintain" class="form-control">
                                </div>
                                <div class="col-md-3 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary btn-sm">Sauvegarder</button>
                                </div>
                            @else

                            @endif
                        </div>
                        </form>
                        <hr>
                        <form action="{{route('query.update1', ['id' => $query->id])}}" method="POST">
                            @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <b>Combien de clients de climatiseur ont-ils ?:</b>
                            </div>
                            <div class="col-md-3">
                                <input type="number" name="quantity" value="{{count(json_decode($query->installed, true))}}"  class="form-control ac">
                            </div>
                            <div class="col-md-6">
                                @foreach(json_decode($query->installed, true) as $ins)
                                    <input type="text" name="installed[]" value="{{$ins}}" class="form-control">
                                @endforeach
                                <div class="values">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-sm">Sauvegarder</button>
                            </div>
                        </div>
                        </form>-->
                        <hr>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Climatiseurs</h3>
                                <button data-toggle="modal" data-target="#ac" class="btn btn-primary btn-sm float-right">Ajouter</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>CLIMATISEUR MARQUE</th>
                                    <th>LIEUX</th>
                                    <th>DATE D'INSTALLATION</th>
                                    <th>DATE DE CRÉATION</th>
                                    <th>HISTORIQUE D'ENTRETIEN</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($query->ac as $ac)
                                <tr>
                                    <td>{{$ac->mark}}</td>
                                    <td>{{$ac->place}}</td>
                                    <td>{{$ac->installation}}</td>
                                    <td>{{$ac->created_at->format('y-m-d')}}</td>
                                    <td>
                                        <a href="{{route('maintain.hostory', ['id' => $ac->id])}}" style="color: white" class="btn btn-sm btn-danger">
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

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Créer un compte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{route('customer.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>Nom</b><span class="text-danger">*</span></label>
                            <input type="text" value="{{$query->name}}" class="form-control" name="name" required>
                            <input type="hidden" value="{{$query->id}}" class="form-control" name="q_id" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>Email</b><span class="text-danger">*</span></label>
                            <input type="text" value="{{$query->email}}" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>Telephone</b><span class="text-danger">*</span></label>
                            <input type="text" value="{{$query->phone}}" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>Mot de passe</b><span class="text-danger">*</span></label>
                            <input type="text" value="12345678" class="form-control" name="password" required>
                        </div>
                    </div>


                    <div class="col-md-12 pull-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Créer un compte</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div></div>

<div class="modal fade" id="paymentbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Envoyer le lien de paiement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{route('payment.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>Prix</b><span class="text-danger">*</span></label>
                            <input type="number" value="{{$query->price}}" class="form-control" name="price" required>
                            <input type="hidden" value="{{$query->id}}" name="q_id" required>
                            <input type="hidden" value="{{$query->user_id}}" name="user_id" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>Type de paiement</b><span class="text-danger">*</span></label>
                            <select name="type" class="form-control" id="">
                                <option value="onetime">Paiement unique</option>
                                <option value="installment">Paiement échelonné</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>Un message</b><span class="text-danger">*</span></label>
                            <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>


                    <div class="col-md-12 pull-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Créer un compte</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div></div>

<div class="modal fade" id="ac" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau climatiseur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{route('ac.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>CLIMATISEUR MARQUE</b><span class="text-danger">*</span></label>
                            <input type="text"  class="form-control" name="mark" required>
                            <input type="hidden" value="{{$query->id}}" name="q_id" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>LIEUX</b><span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="place" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title"><b>DATE D'INSTALLATION</b></label>
                            <input type="date" class="form-control" name="installation">
                        </div>
                    </div>


                    <div class="col-md-12 pull-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sauvegarder</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>

</div></div>

@endsection
@section('script')
<script>
    $(document).ready(function(){
        $(".ac").keyup(function(){
            $(".values").empty();
            var length = this.value;
            for (let i = 0; i < length; i++) {
                $(".values").append( "<input type=\"text\" class=\"form-control ac\" name=\"installed[]\" placeholder=\"Dans quel pièce souhaitez-vous l’installer\" required/>" );
            }
        });
    });
</script>
@endsection
