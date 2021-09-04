@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- <h1>DataTables</h1> -->
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Domicile</a></li>
                            <li class="breadcrumb-item active">Liens de paiement</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Liens de paiement</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Client Nom</th>
                                        <th>Client E-mail</th>
                                        <th>Client Téléphone</th>
                                        <th>Relier</th>
                                        <th>En rapport</th>
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
                                                <a href="{{route('queries.view' , ['id'=>$row->q_id])}}">Aller à la requête</a>
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
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
