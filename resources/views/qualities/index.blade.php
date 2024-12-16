@extends('layouts/layout')



@section('content')
    <div class="container-arch flex-arch">





        <div class="archive-area section-archive">




           {{-- <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="http://projtct-blog2/" itemprop="item"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1" /></span><span class="breadcrumbs__separator"> › </span><span class="breadcrumbs__current">Block</span></div><!-- .breadcrumbs -->--}}



            {{--<div class="archive_description"><p>Items in the block tag have been created with the block editor.</p>
            </div>--}}




            <div class="container-archive">

                <!--Вивід постів-->
                <!-- Цикл WordPress -->

                @foreach($qualities as $quality)
                    <h3><a href="{{route('qualities.single',['slug' => $quality->slug])}}">{{$quality->title}}</a></h3>


                <!--Вивід постів-->
                <!-- Цикл WordPress -->



                @endforeach


                <div class="pagination-new">
                    {{$qualities->links()}}

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

