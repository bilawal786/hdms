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
                            <li class="breadcrumb-item active">Nos services</li>
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
                        <h3 class="card-title">Nos services</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('offers.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titre 1</label>
                                        <input type="text" value="{{$offers->title1}}" name="title1" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Image 1</label>
                                    <input type="file" name="image1" accept="image/*" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Prix</label>
                                    <input type="number" name="price1" value="{{$offers->price1}}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Fin de l'offre</label>
                                    <input type="date" name="valid1" value="{{$offers->valid1}}" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titre 2</label>
                                        <input type="text" value="{{$offers->title1}}" name="title2" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Image 2</label>
                                    <input type="file" name="image2" accept="image/*" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Prix</label>
                                    <input type="number" name="price2" value="{{$offers->price2}}"  class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Fin de l'offre</label>
                                    <input type="date" name="valid2" value="{{$offers->valid2}}" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titre 3</label>
                                        <input type="text" value="{{$offers->title3}}" name="title3" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Image 3</label>
                                    <input type="file" name="image3" accept="image/*" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Prix</label>
                                    <input type="number" name="price3" value="{{$offers->price3}}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Fin de l'offre</label>
                                    <input type="date" name="valid3" value="{{$offers->valid3}}" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titre 4</label>
                                        <input type="text" value="{{$offers->title4}}" name="title4" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Image 4</label>
                                    <input type="file" name="image4" accept="image/*" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Prix</label>
                                    <input type="number" name="price4" value="{{$offers->price4}}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Fin de l'offre</label>
                                    <input type="date" name="valid4" value="{{$offers->valid4}}" class="form-control">
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
