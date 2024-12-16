@extends('layouts/layout')



@section('content')


    <div class="container-arch flex-arch">

{{--@include('inc.sidebar')--}}



        <div class="archive-area section-archive">




           {{-- <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="http://projtct-blog2/" itemprop="item"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1" /></span><span class="breadcrumbs__separator"> › </span><span class="breadcrumbs__current">Block</span></div><!-- .breadcrumbs -->--}}

            <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="{{route('home')}}" itemprop="item"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1" /></span><span class="breadcrumbs__separator"> › </span> <a class="breadcrumbs__link" href="{{route('years.all')}}" itemprop="item"><span itemprop="name">Роки випуску</span></a> {{--> {{$year->title}}--}} </div><!-- .breadcrumbs -->
            <h1>Рік випуску - {{$year->title}}</h1>

            {{--<div class="archive_description"><p>Items in the block category have been created with the block editor.</p>
            </div>
--}}



            <div class="container-archive">

                <!--Вивід постів-->
                <!-- Цикл WordPress -->

                @foreach($films as $film)

                <div class="child-archive">
                    <div>
                        <img width="298" height="193" src="{{$film->getImage()}}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" fetchpriority="high"  sizes="(max-width: 298px) 100vw, 298px" />                               <!-- <div class="title_cat_image">

                                </div>-->
                    </div>

                    <a href="{{route('single', ['category' => $film->category->slug,'slug' => $film->slug])}}">
                        <h3>{{$film->title}}</h3>
                    </a>

                    <!--<p class="date"></p>-->
                    {{--<p><p>{!! $film->description !!}</p></p>--}}
                </div>

                <!--Вивід постів-->
                <!-- Цикл WordPress -->



                @endforeach


                <div class="pagination-new">
                    {{$films->links()}}

                    {{--<nav class="navigation pagination" aria-label="Записи">


                        <h2 class="screen-reader-text">Навігація записів</h2>
                        <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>

                            <a class="page-numbers" href="http://projtct-blog2/category/block/page/2/">2</a>
                            <a class="page-numbers" href="http://projtct-blog2/category/block/page/3/">3</a>
                            <a class="next page-numbers" href="http://projtct-blog2/category/block/page/2/">Далі</a></div>
                    </nav>--}}
                </div>

            </div>
        </div>
















    </div>
@endsection

