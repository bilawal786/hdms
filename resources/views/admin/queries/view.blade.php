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
                            <div class="col-md-4">
                                <h5><i class="fas fa-info"></i> Détails du devis:</h5>
                            </div>
                            <div class="col-md-8">
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
                                    <button class="btn btn-primary btn-sm">Créer un compte pour cet utilisateur</button>
                                    <button class="btn btn-warning btn-sm">Envoyer le lien de paiement</button>
                                </div>
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
                               <b>Price:</b>
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
                               {{$query->quantity}}
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
                       </div>
                     </div>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
