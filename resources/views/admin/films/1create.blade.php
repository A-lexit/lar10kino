@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новий фільм</h1>
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
                            <h3 class="card-title">Додати новий фільм</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('films.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="title">Назва</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"             {{--щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                           placeholder="Назва">
                                </div>


                                <div class="form-group">
                                    <label for="origin_title">Оригінальна назва</label>
                                    <input type="text" name="origin_title"
                                           class="form-control @error('origin_title') is-invalid @enderror" id="origin_title"             {{--щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                           placeholder="Оригінальна назва">
                                </div>


                                <div class="form-group">
                                    <label for="duration">Тривалість</label>
                                    <input type="text" name="duration"
                                           class="form-control @error('duration') is-invalid @enderror" id="duration"             {{--щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                           placeholder="Тривалість">
                                </div>


                                <div class="form-group">
                                    <label for="other_actor">Інші актори</label>
                                    <input type="text" name="other_actor"
                                           class="form-control @error('other_actor') is-invalid @enderror" id="other_actor"             {{--щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                           placeholder="Інші актори">
                                </div>


                                <div class="form-group">             {{--Бралось з demo adminlte  (textarea)--}}
                                    <label for="description">Опис</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3" placeholder="Цитата ..."></textarea>         {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                </div>



                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="category_id">Категорія</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($categories as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{--<div class="form-group">                --}}{{--Бралось з demo adminlte  (select)--}}{{--
                                    <label for="director_id">Режисер</label>
                                    <select class="form-control @error('director_id') is-invalid @enderror" id="director_id" name="director_id">        --}}{{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}{{--
                                        --}}{{--<option>Select category</option>--}}{{--                       --}}{{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}{{--
                                        @foreach($directors as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="directors">Режисер</label>
                                    <select name="directors[]" id="directors" class="select2" multiple="multiple"
                                            data-placeholder="Выбір режисерів" style="width: 100%;">
                                        @foreach($directors as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="composers">Композитор</label>
                                    <select name="composers[]" id="composers" class="select2" multiple="multiple"
                                            data-placeholder="Вибір композиторів" style="width: 100%;">
                                        @foreach($composers as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{--<div class="form-group">                --}}{{--Бралось з demo adminlte  (select)--}}{{--
                                    <label for="composer_id">Композитор</label>
                                    <select class="form-control @error('composer_id') is-invalid @enderror" id="composer_id" name="composer_id">        --}}{{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}{{--
                                        --}}{{--<option>Select category</option>--}}{{--                       --}}{{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}{{--
                                        @foreach($composers as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="year_id">Рік випуску</label>
                                    <select class="form-control @error('year_id') is-invalid @enderror" id="year_id" name="year_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($years as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="companies">Компанія</label>
                                    <select name="companies[]" id="companies" class="select2" multiple="multiple"
                                            data-placeholder="Вибір композиторів" style="width: 100%;">
                                        @foreach($companies as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{--<div class="form-group">                --}}{{--Бралось з demo adminlte  (select)--}}{{--
                                    <label for="company_id">Компанія</label>
                                    <select class="form-control @error('company_id') is-invalid @enderror" id="company_id" name="company_id">        --}}{{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}{{--
                                        --}}{{--<option>Select category</option>--}}{{--                       --}}{{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}{{--
                                        @foreach($companies as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="rating_id">Рейтинг</label>
                                    <select class="form-control @error('rating_id') is-invalid @enderror" id="rating_id" name="rating_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($ratings as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{--<div class="form-group">                --}}{{--Бралось з demo adminlte  (select)--}}{{--
                                    <label for="duration_id">Тривалість</label>
                                    <select class="form-control @error('duration_id') is-invalid @enderror" id="duration_id" name="duration_id">        --}}{{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}{{--
                                        --}}{{--<option>Select category</option>--}}{{--                       --}}{{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}{{--
                                        @foreach($durations as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="status_id">Статус</label>
                                    <select class="form-control @error('status_id') is-invalid @enderror" id="status_id" name="status_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($statuses as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>






                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="quality_id">Якість відео</label>
                                    <select class="form-control @error('quality_id') is-invalid @enderror" id="quality_id" name="quality_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($qualities as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>






                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="producers">Продюсер</label>
                                    <select name="producers[]" id="producers" class="select2" multiple="multiple"
                                            data-placeholder="Выбір прдюсерів" style="width: 100%;">
                                        @foreach($producers as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="actors">Топ-актори</label>
                                    <select name="actors[]" id="actors" class="select2" multiple="multiple"
                                            data-placeholder="Выбор тегов" style="width: 100%;">
                                        @foreach($actors as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>



                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="genres">Жанр</label>
                                    <select name="genres[]" id="genres" class="select2" multiple="multiple"
                                            data-placeholder="Выбір жанрів" style="width: 100%;">
                                        @foreach($genres as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="selections">Добірка</label>
                                    <select name="selections[]" id="selections" class="select2" multiple="multiple"
                                            data-placeholder="Выбір добірок" style="width: 100%;">
                                        @foreach($selections as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{--<div class="form-group">               --}}{{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}{{--
                                    <label for="sources">Джерело</label>
                                    <select name="sources[]" id="sources" class="select2" multiple="multiple"
                                            data-placeholder="Выбір джерела" style="width: 100%;">
                                        @foreach($sources as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="countries">Країна</label>
                                    <select name="countries[]" id="countries" class="select2" multiple="multiple"
                                            data-placeholder="Выбір країн" style="width: 100%;">
                                        @foreach($countries as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="languages">Мова</label>
                                    <select name="languages[]" id="languages" class="select2" multiple="multiple"
                                            data-placeholder="Выбір мов" style="width: 100%;">
                                        @foreach($languages as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="captions">Субтитри</label>
                                    <select name="captions[]" id="captions" class="select2" multiple="multiple"
                                            data-placeholder="Выбір субтитрів" style="width: 100%;">
                                        @foreach($captions as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="age_id">Вік</label>
                                    <select class="form-control @error('age_id') is-invalid @enderror" id="age_id" name="age_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($ages as $k => $v)
                                            <option value="{{ $k }}">{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>




                                <div class="form-group">                      {{--Бралось з demo adminlte  (file input)--}}
                                    <label for="thumbnail">Зображення</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="thumbnail" id="thumbnail"
                                                   class="custom-file-input">
                                            <label class="custom-file-label" for="thumbnail">Вибрати файл</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Зберегти</button>
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
