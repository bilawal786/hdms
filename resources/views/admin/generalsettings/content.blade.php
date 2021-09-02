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
                            <li class="breadcrumb-item active">Teneur</li>
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
                        <h3 class="card-title">Teneur</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="{{route('content.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    @csrf
                    <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">À propos de nous</label>
                                        <textarea name="about" class="form-control" id="summernote" required cols="30" rows="10">
                                            {{$content->about}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">NOS VALEURS</label>
                                        <textarea name="values" class="form-control" id="summernote1" required cols="30" rows="10">
                                            {{$content->values}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">NOS ENGAGEMENTS </label>
                                        <textarea name="engagement" class="form-control" id="summernote2" required cols="30" rows="10">
                                            {{$content->engagement}}
                                        </textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Titre du devis </label>
                                        <input type="text" class="form-control" name="quoteh" value="{{$content->quoteh}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Citation </label>
                                        <textarea name="quote" class="form-control" required cols="30" rows="10">
                                            {{$content->quote}}
                                        </textarea>
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
