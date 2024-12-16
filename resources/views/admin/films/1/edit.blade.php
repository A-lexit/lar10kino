@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редагування фільму</h1>
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
                            <h3 class="card-title">Фільм "{{$film->title}}"</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post" action="{{ route('films.update', ['film' => $film->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">



                                <div class="form-group">
                                    <label for="title">Назва</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"             {{--щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                           value="{{ old('title', $film->title) }}">
                                </div>


                                <div class="form-group">
                                    <label for="origin_title">Оригінальна назва:</label>
                                    <input type="text" name="origin_title"
                                           class="form-control @error('origin_title') is-invalid @enderror" id="origin_title"             {{--щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                           value="{{ old('origin_title', $film->origin_title) }}">
                                </div>


                                <div class="form-group">
                                    <label for="duration">Тривалість:</label>
                                    <input type="text" name="duration"
                                           class="form-control @error('duration') is-invalid @enderror" id="duration"             {{--щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                           value="{{ old('duration', $film->duration) }}">
                                </div>

                                <div class="form-group">
                                    <label for="other_actor">Інші атори:</label>
                                    <input type="text" name="other_actor"
                                           class="form-control @error('other_actor') is-invalid @enderror" id="other_actor"             {{--щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                           value="{{ old('other_actor', $film->other_actor) }}">
                                </div>




                                <div class="form-group">             {{--Бралось з demo adminlte  (textarea)--}}
                                    <label for="description">Опис</label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="3" value="">{{old('description') ?? $film->description}}</textarea>         {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                </div>


                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="category_id">Категорія</label>
                                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($categories as $k => $v)
                                            {{--<option value="{{ $k }}" @if($k == $film->category_id) selected @endif > {{ $v }}</option>--}}
                                            @if(old('category_id',$film->category_id) == $k )
                                                <option value="{{ $k }}"
                                                        selected >
                                                    {{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="duration_id">Тривалістттть</label>
                                    <select class="form-control @error('duration_id') is-invalid @enderror" id="duration_id" name="duration_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select duration</option>                      {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($durations as $k => $v)
                                            {{--<option value="{{ $k }}" @if($k == $film->duration_id) selected @endif > {{ $v }}</option>--}}
                                            @if(old('duration_id',$film->duration_id) == $k )
                                                <option value="{{ $k }}"
                                                        selected >
                                                    {{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                {{--<div class="form-group">                --}}{{--Бралось з demo adminlte  (select)--}}{{--
                                    <label for="company_id">Компанія</label>
                                    <select class="form-control @error('company_id') is-invalid @enderror" id="company_id" name="company_id">        --}}{{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}{{--
                                        --}}{{--<option>Select category</option>--}}{{--                       --}}{{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}{{--
                                        @foreach($companies as $k => $v)
                                            <option value="{{ $k }}" @if($k == $film->company_id) selected @endif > {{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                {{--<div class="form-group">                --}}{{--Бралось з demo adminlte  (select)--}}{{--
                                    <label for="director_id">Режисер</label>
                                    <select class="form-control @error('director_id') is-invalid @enderror" id="director_id" name="director_id">        --}}{{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}{{--
                                        --}}{{--<option>Select category</option>--}}{{--                       --}}{{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}{{--
                                        @foreach($directors as $k => $v)
                                            <option value="{{ $k }}" @if($k == $film->director_id) selected @endif > {{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                {{--<div class="form-group">                --}}{{--Бралось з demo adminlte  (select)--}}{{--
                                    <label for="composer_id">Композитор</label>
                                    <select class="form-control @error('composer_id') is-invalid @enderror" id="composer_id" name="composer_id">        --}}{{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}{{--
                                        --}}{{--<option>Select category</option>--}}{{--                       --}}{{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}{{--
                                        @foreach($composers as $k => $v)
                                            <option value="{{ $k }}" @if($k == $film->composer_id) selected @endif > {{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}






                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="season_id">Кількість сезонів</label>
                                    <select class="form-control @error('season_id') is-invalid @enderror" id="season_id" name="season_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($seasons as $k => $v)
                                        {{--<option value="{{ $k }}" @if($k == $film->season_id) selected @endif > {{ $v }}</option>--}}
                                            @if(old('season_id',$film->season_id) == $k )
                                                <option value="{{ $k }}"
                                                        selected >
                                                    {{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="year_id">Рік</label>
                                    <select class="form-control @error('year_id') is-invalid @enderror" id="year_id" name="year_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($years as $k => $v)
                                            {{--<option value="{{ $k }}" @if($k == $film->year_id) selected @endif > {{ $v }}</option>--}}
                                            @if(old('year_id',$film->year_id) == $k )
                                                <option value="{{ $k }}"
                                                        selected >
                                                    {{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="quality_id">Якість відео</label>
                                    <select class="form-control @error('quality_id') is-invalid @enderror" id="quality_id" name="quality_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($qualities as $k => $v)
                                            {{--<option value="{{ $k }}" @if($k == $film->quality_id) selected @endif > {{ $v }}</option>--}}
                                            @if(old('quality_id',$film->quality_id) == $k )
                                                <option value="{{ $k }}"
                                                        selected >
                                                    {{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="rating_id">Рейтинг</label>
                                    <select class="form-control @error('rating_id') is-invalid @enderror" id="rating_id" name="rating_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($ratings as $k => $v)
                                            {{--<option value="{{ $k }}" @if($k == $film->rating_id) selected @endif > {{ $v }}</option>--}}
                                            @if(old('rating_id',$film->rating_id) == $k )
                                                <option value="{{ $k }}"
                                                        selected >
                                                    {{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                {{--<div class="form-group">                --}}{{--Бралось з demo adminlte  (select)--}}{{--
                                    <label for="duration_id">Тривалість</label>
                                    <select class="form-control @error('duration_id') is-invalid @enderror" id="duration_id" name="duration_id">        --}}{{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}{{--
                                        --}}{{--<option>Select category</option>--}}{{--                       --}}{{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}{{--
                                        @foreach($durations as $k => $v)
                                            <option value="{{ $k }}" @if($k == $film->duration_id) selected @endif > {{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="status_id">Статус</label>
                                    <select class="form-control @error('status_id') is-invalid @enderror" id="status_id" name="status_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($statuses as $k => $v)
                                            {{--<option value="{{ $k }}" @if($k == $film->status_id) selected @endif > {{ $v }}</option>--}}
                                        @if(old('status_id',$film->status_id) == $k )
                                                <option value="{{ $k }}"
                                                        selected >
                                                    {{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">                {{--Бралось з demo adminlte  (select)--}}
                                    <label for="age_id">Вік</label>
                                    <select class="form-control @error('age_id') is-invalid @enderror" id="age_id" name="age_id">        {{--10 щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                        {{--<option>Select category</option>--}}                       {{--9 Якщо потрібно щоб не було категорії за замовчуванням--}}
                                        @foreach($ages as $k => $v)
                                            {{--<option value="{{ $k }}" @if($k == $film->age_id) selected @endif > {{ $v }}</option>
                                            <option value="{{ $k }}" @if(in_array($k, $film->composers->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                        @if(old('age_id',$film->age_id) == $k )
                                                <option value="{{ $k }}"
                                                        selected >
                                                    {{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="directors">Режисери</label>
                                    <select name="directors[]" id="directors" class="select2" multiple="multiple"
                                            data-placeholder="Вибір режисерів" style="width: 100%;">
                                        @foreach($directors as $k => $v)
                                                    {{--@if(in_array($k, old('directors[]',$film->directors->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                    selected
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                @endif
                                            </option>--}}
                                            @if(in_array($k, old('directors',$film->directors->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                                    @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="composers">Композитори</label>
                                    <select name="composers[]" id="composers" class="select2" multiple="multiple"
                                            data-placeholder="Вибір композиторів" style="width: 100%;">
                                        @foreach($composers as $k => $v)
                                            {{--<option value="{{ $k }}" @if(in_array($k, $film->composers->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                            @if(in_array($k, old('composers',$film->composers->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="companies">Компанії</label>
                                    <select name="companies[]" id="companies" class="select2" multiple="multiple"
                                            data-placeholder="Вибір компаній" style="width: 100%;">
                                        @foreach($companies as $k => $v)
                                            {{--<option value="{{ $k }}" @if(in_array($k, $film->companies->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                            @if(in_array($k, old('companies',$film->companies->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="actors">Топ-актори</label>
                                    <select name="actors[]" id="actors" class="select2" multiple="multiple"
                                            data-placeholder="Выбор тегов" style="width: 100%;">
                                        @foreach($actors as $k => $v)
                                            {{--<option value="{{ $k }}" @if(in_array($k, $film->actors->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                            @if(in_array($k, old('actors',$film->actors->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="languages">Мова</label>
                                    <select name="languages[]" id="languages" class="select2" multiple="multiple"
                                            data-placeholder="Выбор тегов" style="width: 100%;">
                                        @foreach($languages as $k => $v)
                                            {{--<option value="{{ $k }}" @if(in_array($k, $film->languages->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                            @if(in_array($k, old('languages',$film->languages->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="genres">Жанр</label>
                                    <select name="genres[]" id="genres" class="select2" multiple="multiple"
                                            data-placeholder="Выбір жанру" style="width: 100%;">
                                        @foreach($genres as $k => $v)
                                            {{--<option value="{{ $k }}" @if(in_array($k, $film->genres->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                            @if(in_array($k, old('genres',$film->genres->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="selections">Добірка</label>
                                    <select name="selections[]" id="selections" class="select2" multiple="multiple"
                                            data-placeholder="Выбір добірок" style="width: 100%;">
                                        @foreach($selections as $k => $v)
                                            {{--<option value="{{ $k }}" @if(in_array($k, $film->selections->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                            @if(in_array($k, old('selections',$film->selections->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                {{--<div class="form-group">               --}}{{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}{{--
                                    <label for="sources">Джерело</label>
                                    <select name="sources[]" id="sources" class="select2" multiple="multiple"
                                            data-placeholder="Выбір джерела" style="width: 100%;">
                                        @foreach($sources as $k => $v)
                                            <option value="{{ $k }}" @if(in_array($k, $film->sources->pluck('id')->all())) selected @endif >{{ $v }}</option>
                                        @endforeach
                                    </select>
                                </div>--}}

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="captions">Субтитри</label>
                                    <select name="captions[]" id="captions" class="select2" multiple="multiple"
                                            data-placeholder="Вибір субтитрів" style="width: 100%;">
                                        @foreach($captions as $k => $v)
                                            {{--<option value="{{ $k }}" @if(in_array($k, $film->captions->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                            @if(in_array($k, old('captions',$film->captions->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="countries">Країна</label>
                                    <select name="countries[]" id="countries" class="select2" multiple="multiple"
                                            data-placeholder="Выбір країни" style="width: 100%;">
                                        @foreach($countries as $k => $v)
                                            {{--<option value="{{ $k }}" @if(in_array($k, $film->countries->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                            @if(in_array($k, old('countries',$film->countries->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">               {{--Бралось з demo adminlte (потребує додаткових файлів css, js+код js - плагін select2  (Multiple - скопійовано з вихідного коду, так як багато лишнього, якщо копіювати все зразу)--}}
                                    <label for="producers">Продюсер</label>
                                    <select name="producers[]" id="producers" class="select2" multiple="multiple"
                                            data-placeholder="Выбір продюсера" style="width: 100%;">
                                        @foreach($producers as $k => $v)
                                            {{--<option value="{{ $k }}" @if(in_array($k, $film->producers->pluck('id')->all())) selected @endif >{{ $v }}</option>--}}
                                            @if(in_array($k, old('producers',$film->producers->pluck('id')->all())))
                                                <option value="{{ $k }}"
                                                        selected
                                                >{{ $v }}
                                                </option>
                                            @else
                                                <option value="{{ $k }}">
                                                    {{ $v }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="note">Примітка:</label>
                                    <input type="text" name="note"
                                           class="form-control @error('note') is-invalid @enderror" id="note"             {{--щоб незаповнене поле підсвічувалось червоним is-invalid--}}
                                           value="{{$film->note}}">
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
                                    {{--<div>{{$film->thumbnail}}</div>--}}
                                    <div><img src="{{$film->getImage() }}" alt="" class="img-thumbnail mt-1" width="200"></div>
                                </div>


                                <!-- checkbox -->
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" class="minimal" name="statuss" >



                                    </label>
                                    <label>
                                        Черновик
                                    </label>
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

