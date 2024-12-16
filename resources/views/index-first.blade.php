@extends('layouts/layout')

@section('title', 'Сторінка сайту Ларавел Блог :: Home')

@section('content')
<div class="container">

    <!---------------------------------------MAIN-START-------------------------------------------->



    <!--START-------------------------------------featured_posts-------------------------------------------->




    <div class="flex-featured-home section-featured bottom-empty-block">










        <!--<div class="сonnect-fetured"> -->

        <div class="big-fetured">





            <div class="big-fetured-post-card">
                <div>

                    <img width="550" height="313" src="http://projtct-blog2/wp-content/uploads/2022/12/imagetest1200.png" class="attachment-one-image size-one-image wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="http://projtct-blog2/wp-content/uploads/2022/12/imagetest1200.png 1200w, http://projtct-blog2/wp-content/uploads/2022/12/imagetest1200-339x193.png 339w, http://projtct-blog2/wp-content/uploads/2022/12/imagetest1200-685x390.png 685w, http://projtct-blog2/wp-content/uploads/2022/12/imagetest1200-768x437.png 768w" sizes="(max-width: 550px) 100vw, 550px" />
                </div>
                <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                <a href="http://projtct-blog2/%d0%bf%d1%80%d0%b8%d0%b2%d1%96%d1%82-%d1%81%d0%b2%d1%96%d1%82/">
                    <h3>Привіт, світ!</h3>
                </a>

                <!--<p class="date"></p>-->
                <p><p>Ласкаво просимо до WordPress. Це ваш перший запис....</p></p>
            </div>





        </div>








        <div class="few-fetured">



            <div class=""> <!--МОЖЛИВО НЕ ПОТРІБНО-->

                <div class="one-small-fetured">

                    <div class="left-post-card-cat">
                        <img width="100" height="65" src="http://projtct-blog2/wp-content/uploads/2018/11/kak-vybrat-gorshok111111718-465.png" class="attachment-left-image size-left-image wp-post-image" alt="" decoding="async" srcset="http://projtct-blog2/wp-content/uploads/2018/11/kak-vybrat-gorshok111111718-465.png 718w, http://projtct-blog2/wp-content/uploads/2018/11/kak-vybrat-gorshok111111718-465-300x194.png 300w" sizes="(max-width: 100px) 100vw, 100px" />                                <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    </div>
                    <div class="right-post-card-cat">
                        <a href="http://projtct-blog2/block-image/">
                            <h4>Block: Image</h4>
                        </a>
                        <!--<p class="date"></p>-->
                        <p><p>Welcome to image alignment! If you recognize this post,...</p></p>
                    </div>

                </div>


            </div>





            <div class=""> <!--МОЖЛИВО НЕ ПОТРІБНО-->

                <div class="one-small-fetured">

                    <div class="left-post-card-cat">
                        <img width="100" height="57" src="http://projtct-blog2/wp-content/uploads/2018/11/coming-soon-2818254_1280-768x549-1.jpg" class="attachment-left-image size-left-image wp-post-image" alt="" decoding="async" srcset="http://projtct-blog2/wp-content/uploads/2018/11/coming-soon-2818254_1280-768x549-1.jpg 338w, http://projtct-blog2/wp-content/uploads/2018/11/coming-soon-2818254_1280-768x549-1-300x171.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" />                                <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    </div>
                    <div class="right-post-card-cat">
                        <a href="http://projtct-blog2/block-button/">
                            <h4>Block: Button</h4>
                        </a>
                        <!--<p class="date"></p>-->
                        <p><p>Button blocks are not semantically <em>buttons</em>, but links...</p></p>
                    </div>

                </div>


            </div>





            <div class=""> <!--МОЖЛИВО НЕ ПОТРІБНО-->

                <div class="one-small-fetured">

                    <div class="left-post-card-cat">
                        <img width="100" height="57" src="http://projtct-blog2/wp-content/uploads/2018/11/cereal-898073_1920-min-768x548-1.jpg" class="attachment-left-image size-left-image wp-post-image" alt="" decoding="async" srcset="http://projtct-blog2/wp-content/uploads/2018/11/cereal-898073_1920-min-768x548-1.jpg 338w, http://projtct-blog2/wp-content/uploads/2018/11/cereal-898073_1920-min-768x548-1-300x171.jpg 300w" sizes="(max-width: 100px) 100vw, 100px" />                                <!--<img src="images/dytyna-ne-hoche-yisty-myaso-700x400.jpg" alt="" width="100%">-->
                    </div>
                    <div class="right-post-card-cat">
                        <a href="http://projtct-blog2/block-cover/">
                            <h4>Block: Cover</h4>
                        </a>
                        <!--<p class="date"></p>-->
                        <p><p><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><br />This is a left aligned cover block with a background...</p></p>
                    </div>

                </div>


            </div>



        </div>


    </div>





    <!---------------------------------------featured_posts------------------------------------------FINISH-->




    <!--START-------------------------------------post_cards_default-------------------------------------------->

    <div class="section-default-posts">

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
                    <a href="{{route('single', ['slug' => $film->slug])}}">

                        <h3>{{$film->title}}</h3>
                    </a>

                    <!--<p class="date"></p>-->
                    {{--<p><p>{!! $film->description !!}</p></p>--}}

                </div>

            @endforeach






        </div>
    </div>
    <!---------------------------------------post_cards_default------------------------------------------FINISH-->




    <!--START-------------------------------------Пости однієї категорії-------------------------------------------->



    <div class="section-home-category">
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

    </div>

    <!---------------------------------------Пости однієї категорії------------------------------------------FINISH-->



</div>
<!---------------------------------------MAIN-FINISH-------------------------------------------->
@endsection
