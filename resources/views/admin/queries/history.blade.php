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
                            <li class="breadcrumb-item active">HISTORIQUE D'ENTRETIEN</li>
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
                                <h3 class="card-title">HISTORIQUE D'ENTRETIEN DE {{$ac->mark}}</h3>
                                <button data-toggle="modal" data-target="#ac" class="btn btn-primary btn-sm float-right">AJOUTER L'ENTRETIEN</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>DATE D'ENTRETIEN</th>
                                        <th>COMMENTAIRES</th>
                                        <th>PROCHAIN ENTRETIEN</th>
                                        <th>COMMENTAIRES</th>
                                        <th>Client Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($main as $row)
                                        <tr>
                                            <td>{{$row->service_date}}</td>
                                            <td>{{$row->servicecomments}}</td>
                                            <td>{{$row->next_maintain}}</td>
                                            <td>{{$row->nextcomments}}</td>
                                            <td>
                                                @if($row->status == 1)
                                                    <span class="badge badge-success">J'accepte</span>
                                                @elseif($row->status == 2)
                                                    <span class="badge badge-danger">Rejeter</span>
                                                @else
                                                    <span class="badge badge-warning">Aucune action du client</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('history.edit' , ['id'=>$row->id])}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="edit">
                                                    <i class="fa fa-pen"></i>
                                                </a>
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
    <div class="modal fade" id="ac" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">AJOUTER L'ENTRETIEN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{route('maintain.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>DATE D'ENTRETIEN</b><span class="text-danger">*</span></label>
                                <input type="date"  class="form-control" name="service_date" required>
                                <input type="hidden" value="{{$ac->id}}" name="ac_id" required>
                                <input type="hidden" value="{{$ac->q_id}}" name="q_id" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>COMMENTAIRES</b></label>
                                <textarea name="servicecomments" class="form-control" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>PROCHAIN ENTRETIEN</b><span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="next_maintain" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>COMMENTAIRES</b></label>
                                <textarea name="nextcomments" class="form-control" id="" cols="30" rows="5"></textarea>
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
