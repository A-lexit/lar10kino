@extends('layouts/layout')

@section('title', 'Сторінка сайту Ларавел Блог :: ' . $film->title)

@section('content')
<!--    <div id="app">

        <filmcomponent></filmcomponent>

    </div>-->




        {{--        <filmcomponent></filmcomponent>--}}
                <div class="container-arch flex-single">
                    @include('inc.sidebar')
                    {{-- <div class="archive-area section-single"> --}}
                    <div class="archive-area container-default section-single">
                        {{-- <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="{{route('home')}}" itemprop="item"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1" /></span><span class="breadcrumbs__separator"> › </span>
                             <a class="breadcrumbs__link" href="{{route('categories.single', ['slug' => $film->category->slug]) }}" > {{$film->category->title}} </a></div><!-- .breadcrumbs -->
                     --}}
                        <div ><h1 >{{$film->title}}</h1></div>
<!--                        <br>-->
                        <div ><h2>{{$film->origin_title}}</h2></div>





                <table>
                    <tr><div class="blog-title-area">
                            @if($film->genres->count())
                                <div class="tag-cloud-single">
                                    <td class="first-col-film"><span><a href="{{route('genres.all')}}">Жанр:</a></span></td>
                                    <td>@foreach($film->genres as $genre)
                                            <small><a href="{{ route('genres.single', ['slug'=>$genre->slug]) }}" title="">{{$genre->title}}</a> </small>
                                        @endforeach</td>
                                </div>
                            @endif
                        </div></tr>



                    <tr><div class="blog-title-area">

                            <div class="tag-cloud-single">

                                <td class="first-col-film"><span><a href="{{route('years.all')}}">Рік випуску:</a></span></td>
                                <td><small><a href="{{ route('years.single', ['slug'=>$film->year->slug]) }}" title="">{{$film->year->title}}</a> </small></td>

                            </div>

                        </div></tr>



                    {{--<tr><div class="blog-title-area">

                            <div class="tag-cloud-single">

                                <td class="first-col-film"><span>Роки випуску:</span></td>
                                <td><small>{{$film->year->title}} - {{$film->year->title}}</small></td>

                            </div>

                        </div></tr>--}}


                    @if(isset($film->category->seriali) or isset($film->category->multseriali))
                        <tr><div class="blog-title-area">

                                <div class="tag-cloud-single">

                                    <td class="first-col-film"><span>Сезони:</span></td>
                                    <td><small>{{$film->season->title}} </small></td>

                                </div>
                            </div></tr>
                    @endif



                    <tr><div class="blog-title-area">

                            <div class="tag-cloud-single">

                                <td class="first-col-film"><span>Тривалість:</span></td>
                                <td><small><p>{{$film->duration}}</p> </small></td>

                            </div>

                        </div></tr>



                    {{--<td class="first-col-film"><span>Тривалість:</span></td>--}}
                    {{--<tr><h2>Тривалість:</h2></tr>--}}
                    {{-- <tr><h2>{{$film->duration}}</h2></tr>--}}

                    {{--<tr><div class="blog-title-area">

                            <div class="tag-cloud-single">

                                <td class="first-col-film"><span><a href="{{route('durations.all')}}">Тривалість:</a></span></td>
                                <td><small><a href="{{ route('durations.single', ['slug'=>$film->duration->slug]) }}" title="">{{$film->duration->title}}</a> </small></td>

                            </div>

                        </div></tr>--}}

                    @if(isset($film->category->seriali) or isset($film->category->multseriali))
                        <tr><div class="blog-title-area">

                                <div class="tag-cloud-single">

                                    <td class="first-col-film"><span><a href="{{route('statuses.all')}}">Статус:</a></span></td>
                                    <td><small><a href="{{ route('statuses.single', ['slug'=>$film->status->slug]) }}" title="">{{$film->status->title}}</a> </small></td>

                                </div>

                            </div></tr>
                    @endif



                    <tr><div class="blog-title-area">
                            @if($film->countries->count())
                                <div class="tag-cloud-single">
                                    <td class="first-col-film"><span><a href="{{route('countries.all')}}">Країна:</a></span></td>
                                    <td>@foreach($film->countries as $country)
                                            <small><a href="{{ route('countries.single', ['slug'=>$country->slug]) }}" title="">{{$country->title}},</a> </small>
                                        @endforeach</td>
                                </div>
                            @endif
                        </div></tr>



                    <tr><div class="blog-title-area">
                            @if($film->companies->count())
                                <div class="tag-cloud-single">
                                    <td class="first-col-film"><span><a href="{{route('companies.all')}}">Компанія:</a></span></td>
                                    <td>@foreach($film->companies as $company)
                                            <small><a href="{{ route('companies.single', ['slug'=>$company->slug]) }}" title="">{{$company->title}},</a> </small>
                                        @endforeach</td>
                                </div>
                            @endif
                        </div></tr>


                    {{--<tr>
                                    <div class="tag-cloud-single">
                                        <td class="first-col-film"><span><a href="{{route('companies.all')}}">Компанія:</a></span></td>
                                        <td><small><a href="{{ route('companies.single', ['slug'=>$film->company->slug]) }}" title="">{{$film->company->title}}</a> </small></td>
                                    </div>
                                </tr>--}}





                    <tr><div class="blog-title-area">
                            @if($film->producers->count())
                                <div class="tag-cloud-single">
                                    <td class="first-col-film"><span><a href="{{route('producers.all')}}">Продюсер:</a></span></td>
                                    <td>@foreach($film->producers as $producer)
                                            <small><a href="{{ route('producers.single', ['slug'=>$producer->slug]) }}" title="">{{$producer->name}},</a> </small>
                                        @endforeach</td>
                                </div>
                            @endif
                        </div></tr>


                    <tr><div class="blog-title-area">
                            @if($film->directors->count())
                                <div class="tag-cloud-single">
                                    <td class="first-col-film"><span><a href="{{route('directors.all')}}">Режисер:</a></span></td>
                                    <td>@foreach($film->directors as $director)
                                            <small><a href="{{ route('directors.single', ['slug'=>$director->slug]) }}" title="">{{$director->name}},</a> </small>
                                        @endforeach</td>
                                </div>
                            @endif
                        </div></tr>


                    {{--<tr><div class="blog-title-area">
                                        <div class="tag-cloud-single">
                                            <td class="first-col-film"><span><a href="{{route('directors.all')}}">Режисер:</a></span></td>
                                            <td><small><a href="{{ route('directors.single', ['slug'=>$film->director->slug]) }}" name="">{{$film->director->name}}</a> </small></td>
                                        </div>
                                    </div></tr>--}}



                    {{--<tr><div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <td class="first-col-film"><span><a href="{{route('composers.all')}}">Композитор:</a></span></td>
                                <td><small><a href="{{ route('composers.single', ['slug'=>$film->composer->slug]) }}" name="">{{$film->composer->name}}</a> </small></td>
                            </div>
                        </div></tr>--}}

                    <tr><div class="blog-title-area">

                            <div class="tag-cloud-single">
                                <td class="first-col-film"><span><a href="{{route('composers.all')}}">Композитор:</a></span></td>
                                <td>@foreach($film->composers as $composer)
                                        <small><a href="{{ route('composers.single', ['slug'=>$composer->slug]) }}" title="">{{$composer->name}},</a> </small>
                                        {{--<small><a href="{{ route('actors.single', ['slug'=>$actor->slug]) }}" title="">{{$actor->pluck('name')->join(', ')}}</a> </small>--}}
                                    @endforeach</td>
                            </div>

                        </div></tr>




                    <tr><div class="blog-title-area">

                            <div class="tag-cloud-single">
                                <td class="first-col-film"><span><a href="{{route('actors.all')}}">Топ-актори:</a></span></td>


                                <td>

                                    @foreach($film->actors as $actor)
                                        <small><a href="{{ route('actors.single', ['slug'=>$actor->slug]) }}" title="">{{$actor->name}},</a> </small>
                                        {{--<small><a href="{{ route('actors.single', ['slug'=>$actor->slug]) }}" title="">{{substr($actor->name,0,-4)}} {{substr(",", 1)}}</a> </small>--}}
                                        {{--<small><a href="{{ route('actors.single', ['slug'=>$actor->slug]) }}" title="">{{$actor->pluck('name')->join(', ')}}</a> </small>--}}
                                    @endforeach
                                </td>



                            </div>

                        </div></tr>


                    <tr><div class="blog-title-area">

                            <div class="tag-cloud-single">

                                <td class="first-col-film"><span>Інші актори:</span></td>
                                <td><small><p>{{$film->other_actor}}</p> </small></td>

                            </div>

                        </div></tr>

                </table>



                <div id="description">
                    <p>{!!$film->description!!}</p>
                </div>


    <!--            <div id="app2">
                    <film-component />
                </div>-->
<div class="watchmore-h4">
    <h4>Дивитись ще {{ $film->category->title }}</h4>
</div>














<div class="nnn">
                        @foreach($filmms as $filmm)



        @if ($film->title === $filmm->title && $filmm->count()>4)

            @continue
        @endif
                            <div class="child-infilm">
<!--                                <div class="child">-->
                                <img width="339" height="193" src="{{$filmm->getImage()}}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="" sizes="(max-width: 339px) 100vw, 339px" />
                                <div class="title_cat_image">
                                    {{--Без категорії --}}                    </div>
                            {{--2701--}}
                            <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                                <a href="{{route('single', ['category' => $filmm->category->slug,'slug' => $filmm->slug])}}">
                                    <h3>{{$filmm->title}}</h3>
                                </a>
                                <!--<p class="date"></p>-->
                                {{--<p><p>{!! $film->description !!}</p></p>--}}
                            </div>

                        @endforeach
</div>







<!--                <div><p>Перегляди: {{ $film->view }}</p></div>-->
                        <div id="app">
                            <film-component></film-component>
                            <hr>
                            <comments-component></comments-component>
                        </div>
<!--                <span class="badge bg-danger">{{ $film->view }}&nbsp;<i class="far fa-eye"></i></span>
                <span class="badge bg-primary"><i class="far fa-thumbs-up"></i></span>-->


    <!--            <div id="app1">
                    <counterr />
                </div>-->
                {{--<tr><div class="blog-title-area">

                        <div class="tag-cloud-single">

                            <td class="first-col-film"><span><a href="{{route('watches.all')}}">Статус:</a></span></td>
                            <td><small><a href="{{ route('watches.single', ['slug'=>$film->watch->slug]) }}" title="">{{$film->watch->title}}</a> </small></td>

                        </div>

                    </div></tr>
    --}}

                <div class="row">
<!--                    <form action="">
                        <div class="mb-3">
                            <label for="commentSubject" class="form-label">Тема коментарія</label>
                            <input type="text" class="form-control" id="commentSubject">
                        </div>
                        <div class="mb-3">
                            <label for="commentBody" class="form-label">Коментарій</label>
                            <textarea class="form-control" id="commentBody" rows="3"></textarea>
                        </div>
                        <button class="btn btn-success" type="submit">Отправить</button>
                    </form>-->
<!--                    <div class="toast-container pb-5 mt-5 mx-auto">-->
<!--                    <img src="https://via.placeholder.com/50/5F113B/FFFFFF/?text=User" class="rounded me-2" alt="...">-->




                    {{--@foreach($film->comments as $comment)


                        <div class="toast-header">
                            <img src="https://via.placeholder.com/50/5F113B/FFFFFF/?text=User" class="rounded me-2" alt="...">
                            <strong class="me-aute">{{ $comment->subject }}</strong>
                            <small class="text-muted">{{ $comment->created_at }}</small>
                        </div>
                        <div class="toast-body">
                            {{ $comment->body }}
                        </div>





                @endforeach--}}


                    {{--{{ $comments->subject }}
                        @foreach($film->comments as $comment)
                            <div class="toast showing" style="width: 100%;">
                                <div class="toast-header">
                                    <img src="https://via.placeholder.com/50/5F113B/FFFFFF/?text=User" class="rounded me-2" alt="...">
                                    <strong class="me-aute">{{ $comment->subject }}</strong>
                                    <small class="text-muted">{{ $comment->created_at }}</small>
                                </div>
                                <div class="toast-body">
                                    {{ $comment->body }}
                                </div>
                            </div>
                        @endforeach--}}
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
@endsection
