<div class="sidebar-area">




    <div class="row-sidebar">

        <img width="685" height="390" src="{{$film->getImage()}}" class="attachment-large size-large wp-post-image" alt="" decoding="async" fetchpriority="high"  sizes="(max-width: 685px) 100vw, 685px" />

        <p>Дата: {{$film->updated_at}}</p>

        <div class="mb-3">
            {{--<span class="badge bg-primary"><i class="far fa-thumbs-up"></i></span>--}}
            {{--<span class="badge bg-danger"><i class="far fa-eye"></i></span>--}}
        </div>

        <tr><div class="blog-title-area">

                <div class="tag-cloud-single">

                    <td class="first-col-film"><span><a href="{{route('ages.all')}}">Вік:</a></span></td>
                    <td><small><a href="{{ route('ages.single', ['slug'=>$film->age->slug]) }}" title="">{{$film->age->title}} </small></td>

                </div>

            </div></tr>


        <tr><div class="blog-title-area">

                <div class="tag-cloud-single">

                    <td class="first-col-film"><span><a href="{{route('qualities.all')}}">Якість відео:</a></span></td>
                    <td><small><a href="{{ route('qualities.single', ['slug'=>$film->quality->slug]) }}" title="">{{$film->quality->title}}</a> </small></td>

                </div>

            </div></tr>



        <tr><div class="blog-title-area">

                <div class="tag-cloud-single">

                    <td class="first-col-film"><span><a href="{{route('ratings.all')}}">Рейтинг:</a></span></td>
                    <small> <a href="{{ route('ratings.single', ['slug'=>$film->rating->slug]) }}" title="">{{$film->rating->title}}</a> </small>

                </div>

            </div></tr>



        {{--<tr><div class="blog-title-area">
                        @if($film->sources->count())
                            <div class="tag-cloud-single">
                                <td class="first-col-film"><span><a href="{{route('sources.all')}}">Джерела:</a></span></td>
                                <td>@foreach($film->sources as $source)
                                        <small><a href="{{ route('sources.single', ['slug'=>$source->slug]) }}" title="">{{$source->title}}</a> </small>
                                    @endforeach</td>
                            </div>
                        @endif
                    </div></tr>--}}




        <tr><div class="blog-title-area">
                @if($film->selections->count())
                    <div class="tag-cloud-single">
                        <td class="first-col-film"><span><a href="{{route('selections.all')}}">Добірки:</a></span></td>
                        <td>@foreach($film->selections as $selection)
                                <small><a href="{{ route('selections.single', ['slug'=>$selection->slug]) }}" title="">{{$selection->title}}</a> </small>
                            @endforeach</td>
                    </div>
                @endif
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
                @if($film->captions->count())
                    <div class="tag-cloud-single">
                        <td class="first-col-film"><span><a href="{{route('captions.all')}}">Субтитри:</a></span></td>
                        <td>@foreach($film->captions as $caption)
                                <small><a href="{{ route('captions.single', ['slug'=>$caption->slug]) }}" title="">{{$caption->title}}</a> </small>
                            @endforeach</td>
                    </div>
                @endif
            </div></tr>



        @isset($film->note)
            <tr><div class="blog-title-area">

                    <div class="tag-cloud-single">

                        <td class="first-col-film"><span>Примітка:</span></td>
                        <td><small><h2>{{$film->note}}</h2> </small></td>

                    </div>

                </div></tr>

        @endisset
        <div class="bestfilmss">
        <h3>Кращі {{ $film->category->title }}</h3>

        <ul>


            @foreach($sidefilms as $sidefilm)
            <hr>
                <li><a href="{{route('single', ['category' => $film->category->slug,
'slug' => $sidefilm->slug])}}">{{$sidefilm->films_title}}</a></li>
            @endforeach


            {{-- <li><a href="">Копи на підхватіaa</a></li>

             <li>w.&nbsp&nbsp<a href="">Копи на підхваті</a></li>

             <li>e.&nbsp&nbsp<a href="">Перший месник</a></li>

             <li>r.&nbsp&nbsp<a href="">Карти, гроші і два стволи</a></li>

             <li>t.&nbsp&nbsp<a href="">Остін Паверс: Міжнародний таємний агент</a></li>

             <hr>
 --}}
                <hr>
        </ul>
</div>

    </div>
</div>
