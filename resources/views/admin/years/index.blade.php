@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Роки випуску</h1>
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
                            <h3 class="card-title">Список років випуску</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('years.create') }}" class="btn btn-primary mb-3">Додати рік випуску</a>
                            @if (count($years))              {{--Якщо категорії існують. Можна ще @if ($years-count()).    Раніше було @if (!empty($years)), але не виводилось повідомлення, що категорій не знайдено в адмінці --}}
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-hover text-nowrap">          {{--text-nowrap - клас adminLTE--}}
                                    <thead>
                                    <tr>
                                        <th style="width: 30px">#</th>
                                        <th>Наименование</th>
                                        <th>Slug</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($years as $year)
                                        <tr>
                                            <td>{{ $year->id }}</td>
                                            <td>{{ $year->title }}</td>
                                            <td>{{ $year->slug }}</td>
                                            <td>
                                                <a href="{{ route('years.edit', ['year' => $year->id]) }}"       {{--можна ще так (не у вигляді масиву)  {{ route('years.edit', $year->id) }}  . Можна також вибирати по slug: $year->slug, але для адмінки оптимальніше буде по id: $year->id --}}
                                                class="btn btn-info btn-sm float-left mr-1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <form
                                                    action="{{ route('years.destroy', ['year' => $year->id]) }}"
                                                    method="post" class="float-left">
                                                    @csrf
                                                    @method('DELETE')                                                          {{--підміна методу на delete--}}
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
                                <p>Категорий пока нет...</p>
                            @endif
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $years->links() }}
                            {{--<ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>--}}
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

