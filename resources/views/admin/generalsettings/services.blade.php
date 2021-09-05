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
                    <form action="{{route('service.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Service 1</label>
                                        <input type="text" value="{{$content->sh1}}" name="sh1" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Image</label>
                                    <input type="file" name="simage1" accept="image/*" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Description</label>
                                    <textarea name="sd1" required class="form-control" id="" cols="30" rows="10">{{$content->sd1}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Vidéo</label>
                                    <input type="text" name="sv1" value="{{$content->sv1}}"  class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Service 2</label>
                                        <input type="text" name="sh2" required value="{{$content->sh2}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Image</label>
                                    <input type="file" name="simage2" accept="image/*" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Description</label>
                                    <textarea name="sd2" required class="form-control" id="" cols="30" rows="10">{{$content->sd2}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Vidéo</label>
                                    <input type="text" name="sv2" value="{{$content->sv2}}"  class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Service 3</label>
                                        <input type="text" name="sh3" required value="{{$content->sh3}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Image</label>
                                    <input type="file" name="simage3" accept="image/*" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Description</label>
                                    <textarea name="sd3" required class="form-control" id="" cols="30" rows="10">{{$content->sd3}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Vidéo</label>
                                    <input type="text" name="sv3" value="{{$content->sv3}}"  class="form-control">
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
