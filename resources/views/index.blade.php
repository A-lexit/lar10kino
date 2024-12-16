@extends('layouts/layout')

@section('title', 'Сторінка сайту Ларавел Блог :: Home')

@section('content')
<div class="container">

    <!---------------------------------------MAIN-START-------------------------------------------->



    <!--START-------------------------------------post_cards_default-------------------------------------------->

    <div class="section-default-posts">
        <h2> <a href="{{ route('categories.single', ['slug' => 'filmi']) }}">Фільми</a></h2>

        <div class="container-default">
            <!-- Цикл WordPress -->

            <!-- <div class="col-lg-4 col-md-4 col-sd-6 col-xs-12"> -->






            @foreach($films as $film)


                <div class="child">


                    <img width="339" height="193" src="{{$film->getImage()}}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="" sizes="(max-width: 339px) 100vw, 339px" />
                    <div class="title_cat_image">

                        {{--Без категорії --}}                    </div>
{{--2701--}}
                    <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    <a href="{{route('single', ['category' => $film->category->slug,'slug' => $film->slug])}}">

                        <h3>{{$film->title}}</h3>




                    </a>

                    <!--<p class="date"></p>-->
                    {{--<p><p>{!! $film->description !!}</p></p>--}}

                </div>

            @endforeach






        </div>




    </div>


    <div class="section-default-posts">
        <h2> <a href="{{ route('categories.single', ['slug' => 'seriali']) }}">Серіали</a></h2>

        <div class="container-default">
            <!-- Цикл WordPress -->

            <!-- <div class="col-lg-4 col-md-4 col-sd-6 col-xs-12"> -->






            @foreach($serials as $serial)


                <div class="child">


                    <img width="339" height="193" src="{{$serial->getImage()}}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="" sizes="(max-width: 339px) 100vw, 339px" />
                    <div class="title_cat_image">

                        {{--Без категорії --}}                    </div>
                {{--2701--}}
                <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    <a href="{{route('single', ['category' => $serial->category->slug,'slug' => $serial->slug])}}">

                        <h3>{{$serial->title}}</h3>




                    </a>

                    <!--<p class="date"></p>-->
                    {{--<p><p>{!! $film->description !!}</p></p>--}}

                </div>

            @endforeach






        </div>





    </div>

    <div class="section-default-posts">
        <h2> <a href="{{ route('categories.single', ['slug' => 'multiki']) }}">Мультики</a></h2>

        <div class="container-default">
            <!-- Цикл WordPress -->

            <!-- <div class="col-lg-4 col-md-4 col-sd-6 col-xs-12"> -->






            @foreach($mults as $mult)


                <div class="child">


                    <img width="339" height="193" src="{{$mult->getImage()}}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="" sizes="(max-width: 339px) 100vw, 339px" />
                    <div class="title_cat_image">

                        {{--Без категорії --}}                    </div>
                {{--2701--}}
                <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    <a href="{{route('single', ['category' => $mult->category->slug,'slug' => $mult->slug])}}">

                        <h3>{{$mult->title}}</h3>




                    </a>

                    <!--<p class="date"></p>-->
                    {{--<p><p>{!! $film->description !!}</p></p>--}}

                </div>

            @endforeach






        </div>





    </div>

    <div class="section-default-posts">

        <h2> <a href="{{ route('categories.single', ['slug' => 'multseriali']) }}">Мультсеріали</a></h2>
        <div class="container-default">
            <!-- Цикл WordPress -->

            <!-- <div class="col-lg-4 col-md-4 col-sd-6 col-xs-12"> -->






            @foreach($multserials as $multserial)


                <div class="child">


                    <img width="339" height="193" src="{{$multserial->getImage()}}" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="" sizes="(max-width: 339px) 100vw, 339px" />
                    <div class="title_cat_image">

                        {{--Без категорії --}}                    </div>
                {{--2701--}}
                <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    <a href="{{route('single', ['category' => $multserial->category->slug,'slug' => $multserial->slug])}}">

                        <h3>{{$multserial->title}}</h3>




                    </a>

                    <!--<p class="date"></p>-->
                    {{--<p><p>{!! $film->description !!}</p></p>--}}

                </div>

            @endforeach






        </div>





    </div>
    <!---------------------------------------post_cards_default------------------------------------------FINISH-->




    <!--START-------------------------------------Пости однієї категорії-------------------------------------------->



    {{--<div class="section-home-category">
        <div class="general-post-card-cat">

            <div class="title-cat ">

                <h5><span>Block </span></h5>



            </div>
            <!--  <h5><span></span></h5>  -->
            <div class="container-cat">




                <div class="child-cat">


                    <div class="left-post-card-cat">
                        <img width="100" height="65" src="http://projtct-blog2/wp-content/uploads/2018/11/kak-vybrat-gorshok111111718-465.png" class="attachment-left-image size-left-image wp-post-image" alt="" decoding="async" loading="lazy" srcset="http://projtct-blog2/wp-content/uploads/2018/11/kak-vybrat-gorshok111111718-465.png 718w, http://projtct-blog2/wp-content/uploads/2018/11/kak-vybrat-gorshok111111718-465-300x194.png 300w" sizes="(max-width: 100px) 100vw, 100px" />                            <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    </div>

                    <div class="right-post-card-cat">
                        <a href="http://projtct-blog2/block-image/">
                            <h4>Block: Image</h4>
                        </a>
                        <!--<p class="date"></p>-->
                        <p><p>Welcome to image alignment! If you recognize this post,...</p></p>

                    </div>
                </div>





                <div class="child-cat">


                    <div class="left-post-card-cat">
                        <img width="100" height="57" src="http://projtct-blog2/wp-content/uploads/2018/11/coming-soon-2818254_1280-768x549-1.jpg" class="attachment-left-image size-left-image wp-post-image" alt="" decoding="async" loading="lazy" srcset="http://projtct-blog2/wp-content/uploads/2018/11/coming-soon-2818254_1280-768x549-1.jpg 338w, http://projtct-blog2/wp-content/uploads/2018/11/coming-soon-2818254_1280-768x549-1-300x171.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" />                            <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    </div>

                    <div class="right-post-card-cat">
                        <a href="http://projtct-blog2/block-button/">
                            <h4>Block: Button</h4>
                        </a>
                        <!--<p class="date"></p>-->
                        <p><p>Button blocks are not semantically <em>buttons</em>, but links...</p></p>

                    </div>
                </div>





                <div class="child-cat">


                    <div class="left-post-card-cat">
                        <img width="100" height="57" src="http://projtct-blog2/wp-content/uploads/2018/11/cereal-898073_1920-min-768x548-1.jpg" class="attachment-left-image size-left-image wp-post-image" alt="" decoding="async" loading="lazy" srcset="http://projtct-blog2/wp-content/uploads/2018/11/cereal-898073_1920-min-768x548-1.jpg 338w, http://projtct-blog2/wp-content/uploads/2018/11/cereal-898073_1920-min-768x548-1-300x171.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" />                            <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    </div>

                    <div class="right-post-card-cat">
                        <a href="http://projtct-blog2/block-cover/">
                            <h4>Block: Cover</h4>
                        </a>
                        <!--<p class="date"></p>-->
                        <p><p><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><br />This is a left aligned cover block with a background...</p></p>

                    </div>
                </div>





                <div class="child-cat">


                    <div class="left-post-card-cat">
                        <img width="100" height="67" src="http://projtct-blog2/wp-content/uploads/2008/06/img_8399.jpg" class="attachment-left-image size-left-image wp-post-image" alt="Boat Barco Texture" decoding="async" loading="lazy" srcset="http://projtct-blog2/wp-content/uploads/2008/06/img_8399.jpg 1600w, http://projtct-blog2/wp-content/uploads/2008/06/img_8399-300x200.jpg 300w, http://projtct-blog2/wp-content/uploads/2008/06/img_8399-1024x682.jpg 1024w, http://projtct-blog2/wp-content/uploads/2008/06/img_8399-768x512.jpg 768w, http://projtct-blog2/wp-content/uploads/2008/06/img_8399-1536x1023.jpg 1536w" sizes="(max-width: 100px) 100vw, 100px" />                            <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    </div>

                    <div class="right-post-card-cat">
                        <a href="http://projtct-blog2/block-gallery/">
                            <h4>Block: Gallery</h4>
                        </a>
                        <!--<p class="date"></p>-->
                        <p><p>Gallery blocks have two settings: the number of columns,...</p></p>

                    </div>
                </div>



            </div>

        </div>

    </div>--}}

    <!---------------------------------------Пости однієї категорії------------------------------------------FINISH-->



</div>
<!---------------------------------------MAIN-FINISH-------------------------------------------->
@endsection
