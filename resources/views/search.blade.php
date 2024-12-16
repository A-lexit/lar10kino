@extends('layouts/layout')
@section('title', 'Сторінка сайту Ларавел Блог :: Search')
@section('content')
    <div class="container">
        <!--------------------------------------MAIN-START-------------------------------------------->
        <h2>Search: {{ $s }}</h2>
        <!--START-------------------------------------film_cards_default-------------------------------------------->
        <div class="section-default-films">
            <div class="container-default">
                <!-- Цикл WordPress -->
                <!-- <div class="col-lg-4 col-md-4 col-sd-6 col-xs-12"> -->
                @if($films->count())
                    @foreach($films as $film)
                        <div class="child">
                            <img width="339" height="193" src="{{$film->getImage()}}" class="attachment-medium size-medium wp-film-image" alt="" decoding="async" srcset="" sizes="(max-width: 339px) 100vw, 339px" />
                            <div class="title_cat_image">
                                Без категорії                     </div>
                            2701
                            <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                            <a href="{{route('single', ['category' => $film->category->slug, 'slug' => $film->slug])}}">
                                <h3>{{$film->title}}</h3>
                            </a>
                        </div>
                    @endforeach
                @else
                    По вашому запиту нічого не знайдено...
                @endif

            </div>
        </div>
        <!---------------------------------------film_cards_default------------------------------------------FINISH-->
        <div class="pagination-new">
            {{ $films->appends(['s' => request()->s])->links() }}
        </div>
    </div>
    <!---------------------------------------MAIN-FINISH-------------------------------------------->
@endsection
