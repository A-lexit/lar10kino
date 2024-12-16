@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
{{--                    <div class="img-center-alex">
                    <img src="{{$user->getImage()}}" alt="" >
                    </div> --}}

<!--                    <img src="https://picsum.photos/200/300" alt="" class="profile-image" >-->

    <div>
                    <img src="{{$user->getImage()}}" alt="" class="profile-image" style="display: block; margin-left: auto; margin-right: auto" >
    </div>


                    <form role="form" method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Ім'я користвача</label>
                                <input type="text" name="name"
                                       class="form-control @error('name') is-invalid @enderror" id="name"
                                       value="{{ $user->name }}">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror

                                <label for="name">email</label>
                                <input type="email" name="email"
                                       class="form-control @error('email') is-invalid @enderror" id="email"
                                       value="{{ $user->email }}">
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror

                                <label for="name">Пароль</label>
                                <input type="password" name="password"
                                       class="form-control @error('password') is-invalid @enderror" id="password"
                                       value="{{ $user->password }}">
                                @error('password')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="file" class="form-control" id="image" name="avatar">
                                    </div>
                                </div>
                                <button type="submit" class="btn send-btn">Update</button>








                            </div>
                        </div>
                        <!-- /.card-body -->

<!--                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
