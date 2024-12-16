@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Создание категории</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Создание категории</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Ім'я користвача</label>
                                    <input type="text" name="name"
                                           class="form-control @error('name') is-invalid @enderror" id="name"

                                    @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror

                                    <label for="name">email</label>
                                    <input type="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror" id="email"

                                    @error('email')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror

                                    <label for="name">Пароль</label>
                                    <input type="password" name="password"
                                           class="form-control @error('password') is-invalid @enderror" id="password"

                                    @error('password')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror




                                    <div class="form-group">
                                        <label for="exampleInputFile">Аватар</label>
                                        <input type="file" name="avatar" id="exampleInputFile">

                                        <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                                    </div>

<!--                                    <div class="form-group">
                                        <label for="avatar">Аватар</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="avatar" id="avatar"
                                                       class="custom-file-input">
                                                <label class="custom-file-label" for="avatar">Вибрати файл</label>
                                            </div>
                                        </div>
                                    </div>-->




                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
