@extends('layouts/layout')



@section('content')
<div class="container-arch flex-arch">





    <div class="archive-area section-archive">




        <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a class="breadcrumbs__link" href="{{route('home')}}" itemprop="item"><span itemprop="name">Главная</span></a><meta itemprop="position" content="1" /></span><span class="breadcrumbs__separator"> › </span><a class="breadcrumbs__link" href="{{route('categories.single',
 ['slug' => $post->category->slug]) }}" > {{$post->category->title}} </a></div><!-- .breadcrumbs -->
        <h1>{{$post->title}}</h1>

        <div class="archive_description"><p>Items in the block category have been created with the block editor.</p>
        </div>


        <div class="container-archive">

            <!--Вивід постів-->
            <!-- Цикл WordPress -->


            <div class="child-archive">
                <div>
                    <img width="298" height="193" src="http://projtct-blog2/wp-content/uploads/2018/11/kak-vybrat-gorshok111111718-465-300x194.png" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="http://projtct-blog2/wp-content/uploads/2018/11/kak-vybrat-gorshok111111718-465-300x194.png 300w, http://projtct-blog2/wp-content/uploads/2018/11/kak-vybrat-gorshok111111718-465.png 718w" sizes="(max-width: 298px) 100vw, 298px" />                               <!-- <div class="title_cat_image">

                                </div>-->
                </div>

                <a href="http://projtct-blog2/block-image/">
                    <h3>Block: Image</h3>
                </a>

                <!--<p class="date"></p>-->
                <p><p>Welcome to image alignment! If you recognize this post,...</p></p>
            </div>

            <!--Вивід постів-->
            <!-- Цикл WordPress -->


            <div class="child-archive">
                <div>
                    <img width="300" height="171" src="http://projtct-blog2/wp-content/uploads/2018/11/coming-soon-2818254_1280-768x549-1-300x171.jpg" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="http://projtct-blog2/wp-content/uploads/2018/11/coming-soon-2818254_1280-768x549-1-300x171.jpg 300w, http://projtct-blog2/wp-content/uploads/2018/11/coming-soon-2818254_1280-768x549-1.jpg 338w" sizes="(max-width: 300px) 100vw, 300px" />                               <!-- <div class="title_cat_image">

                                </div>-->
                </div>

                <a href="http://projtct-blog2/block-button/">
                    <h3>Block: Button</h3>
                </a>

                <!--<p class="date"></p>-->
                <p><p>Button blocks are not semantically <em>buttons</em>, but links...</p></p>
            </div>

            <!--Вивід постів-->
            <!-- Цикл WordPress -->


            <div class="child-archive">
                <div>
                    <img width="300" height="171" src="http://projtct-blog2/wp-content/uploads/2018/11/cereal-898073_1920-min-768x548-1-300x171.jpg" class="attachment-medium size-medium wp-post-image" alt="" decoding="async" srcset="http://projtct-blog2/wp-content/uploads/2018/11/cereal-898073_1920-min-768x548-1-300x171.jpg 300w, http://projtct-blog2/wp-content/uploads/2018/11/cereal-898073_1920-min-768x548-1.jpg 338w" sizes="(max-width: 300px) 100vw, 300px" />                               <!-- <div class="title_cat_image">

                                </div>-->
                </div>

                <a href="http://projtct-blog2/block-cover/">
                    <h3>Block: Cover</h3>
                </a>

                <!--<p class="date"></p>-->
                <p><p><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><br />This is a left aligned cover block with a background...</p></p>
            </div>

            <!--Вивід постів-->
            <!-- Цикл WordPress -->


            <div class="child-archive">
                <div>
                    <img width="290" height="193" src="http://projtct-blog2/wp-content/uploads/2008/06/img_8399-300x200.jpg" class="attachment-medium size-medium wp-post-image" alt="Boat Barco Texture" decoding="async" loading="lazy" srcset="http://projtct-blog2/wp-content/uploads/2008/06/img_8399-300x200.jpg 300w, http://projtct-blog2/wp-content/uploads/2008/06/img_8399-1024x682.jpg 1024w, http://projtct-blog2/wp-content/uploads/2008/06/img_8399-768x512.jpg 768w, http://projtct-blog2/wp-content/uploads/2008/06/img_8399-1536x1023.jpg 1536w, http://projtct-blog2/wp-content/uploads/2008/06/img_8399.jpg 1600w" sizes="(max-width: 290px) 100vw, 290px" />                               <!-- <div class="title_cat_image">

                                </div>-->
                </div>

                <a href="http://projtct-blog2/block-gallery/">
                    <h3>Block: Gallery</h3>
                </a>

                <!--<p class="date"></p>-->
                <p><p>Gallery blocks have two settings: the number of columns,...</p></p>
            </div>


            <div class="pagination-new">


                <nav class="navigation pagination" aria-label="Записи">
                    <h2 class="screen-reader-text">Навігація записів</h2>
                    <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="http://projtct-blog2/category/block/page/2/">2</a>
                        <a class="page-numbers" href="http://projtct-blog2/category/block/page/3/">3</a>
                        <a class="next page-numbers" href="http://projtct-blog2/category/block/page/2/">Далі</a></div>
                </nav>                </div>

        </div>
    </div>






@include('inc.sidebar')

</div>
@endsection

