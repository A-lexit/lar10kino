@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Фільми</h1>
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
                            <h3 class="card-title">Список фільмів</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('films.create') }}" class="btn btn-primary mb-3">Додати фільм</a>

                            @auth

                            @if (count($films))

                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px">#</th>
                                            <th>Назва</th>
                                            <th>Slug</th>
                                            {{--<th>Категорія</th>--}}
                                            {{--<th>Актори</th>--}}
                                            <th>Дата</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($films as $film)
                                            @if(Auth::user()->id == $film->author_id)
                                                {{ $film->id }}
                                                {{ $film->title }}
                                            @else
                                                f;asdj;fa
                                                @endif
                                        @endforeach

                                        @foreach($films as $film)
                                            {{$film->author_id}}
                                            <tr>
                                                <td>{{ $film->id }}</td>
                                                <td>{{ $film->title }}</td>
                                                <td>{{ $film->author_id }}</td>

                                                <td>{{ $film->slug }}</td>
                                                {{--<td>{{ $film->category->title }}</td>--}}
                                                {{--<td>{{ $film->actors->pluck('name')->join(', ') }}</td>  --}}        {{--Змінюємо вигляд відображення тегів з всєї колекції до тайтла тегу (метод pluck) без id, чеерез кому за допомогою метода join--}}
                                                <td>{{ $film->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('films.edit', ['film' => $film->id]) }}"
                                                       class="btn btn-info btn-sm float-left mr-1">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form
                                                        action="{{ route('films.destroy', ['film' => $film->id]) }}"
                                                        method="post" class="float-left">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Подтвердите удаление')">
                                                            <i
                                                                class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            @else

                                <p>Статей пока нет...</p>
                            @endif



                            @endauth
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $films->links() }}
                        </div>
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

