@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Domicile</a></li>
                            <li class="breadcrumb-item active">Ajouter une demande</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Ajouter une demande</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('admin.query.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Select Customer</label>
                                       <select class="form-control select2" name="customer_id">
                                           @foreach($users as $user)
                                           <option value="{{$user->id}}">{{$user->name}}</option>
                                           @endforeach
                                       </select>
                                    </div>
                                </div>
                               
                                <input type="hidden" name="price" value="0" class="offerprice">
                                <input style="display: none" type="text" name="installed[]" class="form-control installed" placeholder="Dans quel pièce souhaitez-vous l’installer">
                            
                            

                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Sélectionnez le service</label>
                                     <select class="form-control serviceselect" name="service" id="">
                                        <option>Sélectionnez le service</option>
                                        <option value="INSTALLATION">INSTALLATION</option>
                                        <option value="ENTRETIEN">ENTRETIEN</option>
                                        <option value="MAINTENANCE / DEPANNAGE / DIAGNOSTICS">MAINTENANCE / DEPANNAGE / DIAGNOSTICS</option>
                                    </select>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Détails du devis</label>
                                     <textarea class="form-control" name="message"  id="quote" placeholder="Détails du devis" rows="2" required></textarea>
                                    </div>
                                </div>
                            </div>
                       

                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </form>
                    <!-- /.card -->

                    <!-- /.container-fluid -->
        </section>
    </div>
@endsection
