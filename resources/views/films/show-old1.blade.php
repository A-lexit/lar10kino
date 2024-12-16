@extends('layouts/layout')

@section('title', 'Сторінка сайту Ларавел Блог :: ' . $film->title)

@section('content')

    <div class="container-arch flex-single">
        @include('inc.sidebar')
        <div class="archive-area section-single">



           {{-- <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="{{route('home')}}" itemprop="item"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1" /></span><span class="breadcrumbs__separator"> › </span>
                <a class="breadcrumbs__link" href="{{route('categories.single', ['slug' => $film->category->slug]) }}" > {{$film->category->title}} </a></div><!-- .breadcrumbs -->
        --}}    <h1>{{$film->title}}</h1>


            <div class="single-main">
                {{--<img width="685" height="390" src="{{$film->getImage()}}" class="attachment-large size-large wp-post-image" alt="" decoding="async" fetchpriority="high"  sizes="(max-width: 685px) 100vw, 685px" />
               --}} <!--  <img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                {{--<span> <p class="date">{{ $film->getPostDate() }}</p></span>--}}
                {{--<span>  <p><i class="fa fa-eye"></i> {{ $film->view }}</p></span><p>--}}
                <p>{!! $film->content!!}</p>
                <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                </p>
            </div>


            <div class="blog-title-area">
                    <div class="tag-cloud-single">
                        <span><a href="{{route('years.all')}}">Рік випуску:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                            <small><a href="{{ route('years.single', ['slug'=>$film->year->slug]) }}" title="">{{$film->year->title}}</a> </small>
                    </div>
            </div>


            <div class="blog-title-area">
                @if($film->genres->count())
                    <div class="tag-cloud-single">
                        <span><a href="{{route('genres.all')}}">Жанр:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                        @foreach($film->genres as $genre)
                            <small><a href="{{ route('genres.single', ['slug'=>$genre->slug]) }}" title="">{{$genre->title}}</a> </small>
                        @endforeach
                    </div>
                @endif
            </div>


            <div class="blog-title-area">
                @if($film->captions->count())
                    <div class="tag-cloud-single">
                        <span><a href="{{route('captions.all')}}">Субтитри:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                        @foreach($film->captions as $caption)
                            <small><a href="{{ route('captions.single', ['slug'=>$caption->slug]) }}" title="">{{$caption->title}}</a> </small>
                        @endforeach
                    </div>
                @endif
            </div>


            <div class="blog-title-area">
                @if($film->countries->count())
                    <div class="tag-cloud-single">
                        <span><a href="{{route('countries.all')}}">Країна:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                        @foreach($film->countries as $country)
                            <small><a href="{{ route('countries.single', ['slug'=>$country->slug]) }}" title="">{{$country->title}}</a> </small>
                        @endforeach
                    </div>
                @endif
            </div>


            <div class="blog-title-area">
                <div class="tag-cloud-single">
                    <span><a href="{{route('companies.all')}}">Компанія:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                    <small><a href="{{ route('companies.single', ['slug'=>$film->company->slug]) }}" title="">{{$film->company->title}}</a> </small>
                </div>
            </div>


            <div class="blog-title-area">
                @if($film->languages->count())
                    <div class="tag-cloud-single">
                        <span><a href="{{route('languages.all')}}">Озвучка:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                        @foreach($film->languages as $language)
                            <small><a href="{{ route('languages.single', ['slug'=>$language->slug]) }}" title="">{{$language->title}}</a> </small>
                        @endforeach
                    </div>
                @endif
            </div>


            <div class="blog-title-area">
                @if($film->producers->count())
                    <div class="tag-cloud-single">
                        <span><a href="{{route('producers.all')}}">Продюсер:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                        @foreach($film->producers as $producer)
                            <small><a href="{{ route('producers.single', ['slug'=>$producer->slug]) }}" title="">{{$producer->name}}</a> </small>
                        @endforeach
                    </div>
                @endif
            </div>


            <div class="blog-title-area">
                    <div class="tag-cloud-single">
                        <span><a href="{{route('directors.all')}}">Режисер:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                            <small><a href="{{ route('directors.single', ['slug'=>$film->director->slug]) }}" name="">{{$film->director->name}}</a> </small>
                    </div>
            </div>


            <div class="blog-title-area">
                @if($film->actors->count())
                    <div class="tag-cloud-single">
                        <span><a href="{{route('actors.all')}}">Актори:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
                        @foreach($film->actors as $actor)
                            <small><a href="{{ route('actors.single', ['slug'=>$actor->slug]) }}" title="">{{$actor->name}},</a> </small>
                            {{--<small><a href="{{ route('actors.single', ['slug'=>$actor->slug]) }}" title="">{{$actor->pluck('name')->join(', ')}}</a> </small>

                            </a> </small>--}}
                        @endforeach
                    </div>
                @endif
            </div>
























            <table>
                <tr><div class="blog-title-area">
                        <div class="tag-cloud-single">

                            <td class="first-col-film"><span><a href="{{route('years.all')}}">Рік випуску1:</a></span></td>
                            <td><small><a href="{{ route('years.single', ['slug'=>$film->year->slug]) }}" title="">{{$film->year->title}}</a> </small></td>

                        </div>
                    </div></tr>



                <tr><div class="blog-title-area">

                <div class="tag-cloud-single">
                        <td class="first-col-film"><span><a href="{{route('genres.all')}}">Жанр:</a></span></td>

                            <td><small><a href="{{ route('genres.single', ['slug'=>$genre->slug]) }}" title="">{{$genre->title}}</a> </small></td>

                    </div>

            </div></tr>





                <tr><div class="blog-title-area">
                    <div class="tag-cloud-single">
                        <td class="first-col-film"><span><a href="{{route('captions.all')}}">Субтитри:</a></span></td>
                        <td><small><a href="{{ route('captions.single', ['slug'=>$caption->slug]) }}" title="">{{$caption->title}}</a> </small></td>
                    </div>

            </div></tr>


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


            <tr>
                            <div class="tag-cloud-single">
                                <td class="first-col-film"><span><a href="{{route('companies.all')}}">Компанія:</a></span></td>
                                <td><small><a href="{{ route('companies.single', ['slug'=>$film->company->slug]) }}" title="">{{$film->company->title}}</a> </small></td>
                            </div>
                        </div></tr>


        <tr><div class="blog-title-area">
                            @if($film->languages->count())
                                <div class="tag-cloud-single">
                                    <td class="first-col-film"><span><a href="{{route('languages.all')}}">Озвучка:</a></span></td>
                                    <td>@foreach($film->languages as $language)
                                        <small><a href="{{ route('languages.single', ['slug'=>$language->slug]) }}" title="">{{$language->title}},</a> </small>
                                    @endforeach</td>
                                </div>
                            @endif
                        </div></tr>


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
                            <div class="tag-cloud-single">
                                <td class="first-col-film"><span><a href="{{route('directors.all')}}">Режисер:</a></span></td>
                                <td><small><a href="{{ route('directors.single', ['slug'=>$film->director->slug]) }}" name="">{{$film->director->name}}</a> </small></td>
                            </div>
                        </div></tr>




        <tr><div class="blog-title-area">

                                            <div class="tag-cloud-single">
                                                <td class="first-col-film"><span><a href="{{route('actors.all')}}">Актори:</a></span></td>
                                                <td>@foreach($film->actors as $actor)
                                                    <small><a href="{{ route('actors.single', ['slug'=>$actor->slug]) }}" title="">{{$actor->name}},</a> </small>
                                                    {{--<small><a href="{{ route('actors.single', ['slug'=>$actor->slug]) }}" title="">{{$actor->pluck('name')->join(', ')}}</a> </small>--}}
                                                @endforeach</td>
                                            </div>

                                    </div></tr>

        </table>











        </div>

















</div>
@endsection
