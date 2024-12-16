<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8 "> <!--встановлення кодування з коробки WP-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name='robots' content='max-image-preview:large' />
    <meta name="description" content="Просто ще один сайт на WordPress" />
    <meta property="og:description" content="Просто ще один сайт на WordPress" />
    <meta property="og:locale" content="uk" />
    <meta property="og:site_name" content="projtct-blog2" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:type" content="object" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Просто ще один сайт на WordPress" />
    <meta name="twitter:title" content="projtct-blog2 – Просто ще один сайт на WordPress" />


    <link rel="stylesheet" href="{{ asset('assets/front/css/owlcarousel2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owlcarousel2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owlcarousel2/style.css') }}">






    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <script src="https://kit.fontawesome.com/1329b831d2.js" crossorigin="anonymous"></script>  {{--Щоб отримати цей код, потрібно зареєструватись--}}

    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/projtct-blog2\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.1"}};
        /*! This file is auto-generated */
        !function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
    </script>

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

        .menu-link {
            border-bottom: 1px solid transparent;
        }

        .menu-link__active {
            color: #2196f3 !important;
            border-bottom: 4px solid #c0ccdf;
            /*border-bottom: 4px solid #2196f3;*/
        }

        .carousel-img {
            max-width: 100%;
            height: 250px;
        }

        .nnn img {
            max-width: 100%;
            height: 190px;
        }

    </style>
    {{--<link rel='stylesheet' id='wp-block-library-css' href='http://projtct-blog2/wp-includes/css/dist/block-library/style.min.css?ver=6.3.1' type='text/css' media='all' />--}}
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">





    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">
    <script type='text/javascript' src='//code.jquery.com/jquery-3.5.1.js?ver=6.3.1' id='jquery-js'></script>
    <script src="{{ asset('assets/front/js/menu-tort.js') }}"></script>
    <script src="{{ asset('assets/front/js/nikolaus_mobile_menu.min.js') }}"></script>

    <meta name="generator" content="WordPress 6.3.1" />
    <style type="text/css">
        .class_gwp_my_template_file {
            cursor:help;
        }

		.ddd {
            display: flex;
            align-items: center;
        }

        form {
            position: relative;
            width: 300px;
            margin: 0 auto;
        }

        .d1 {background: #A3D0C3;

        }
        .d1 input {
            width: 100%;
            height: 42px;
            padding-left: 10px;
            /*border: 2px solid #7BA7AB;*/
            /*border-radius: 5px;*/
            outline: none;
            background: #ffffff;
            color: #9E9C9C;
            border: 2px solid #E3E3E3;
           /* border: 2px solid #D0D0D0;*/
        }
        .d1 button {
            position: absolute;
            top: 0;
            right: 0px;
            width: 42px;
            height: 42px;
            border: none;
            /*background: #7BA7AB;*/
            background: #C1C1C1;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
        .d1 button:before {
            content: "\f002";
            font-family: FontAwesome;
            font-size: 16px;
            color: #F9F0DA;
        }

        .logo {
            text-align: left;
        }



        .pagination ul  {
            display: ruby!important;
        }

        .pagination-sm ul  {
            display: ruby!important;
        }


        /*.bestfilmss ul {
            counter-reset: li;
            list-style: none;
            margin: 0 10px;
        }

        .bestfilmss li {
            position: relative;
            padding-left: 6px;

        }

        .bestfilmss li::before {
            content: counter(li);
            counter-increment: li;
            font-size: 22px;
            position: absolute;
            top: 7px;
            left: 10px;
            width: 26px;
            height: 26px;
            line-height: 26px;
            text-align: center;
            box-shadow: inset 0 0 0 2px #ca563f;
            border-radius: 50%;
        }*/


        .reglog {
            display: inline-flex;
            margin-left: 30px;
        }
        .reglog li {
            padding-left: 20px !important;
        }

        .img-center-alex {
            /*пусто*/
        }


    </style>

    @vite('resources/js/app.js')
</head>

<body>
<header>
    <div class="header-wide">
        <!------------------ Logo -------------------->


        <div class="container container-header ddd">

            <div class="logo">
               {{-- <a href="{{route('home')}}" class="custom-logo-link" rel="home" aria-current="page"><img width="252" height="59" src="http://projtct-blog2/wp-content/uploads/2023/03/mama7-bluepink.png" class="custom-logo" alt="projtct-blog2" decoding="async" /></a>--}}
               <a href="{{route('home')}}"><img width="252" height="59"  alt="projtct-blog2"/></a>
				</div>

				<div class="d1">
                <form method="get" action="{{ route('search') }}">
                    <input name="s" @error('s') is-invalid @enderror type="text" placeholder="Искать здесь...">
                    <button type="submit"></button>
                </form>

                <style>

                </style>
            </div>


            <ul class="reglog">
<!--            <ul class="navbar-nav ms-auto">-->
                <!-- Authentication Links -->
                @guest

                    @if (Route::has('login') )
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                @endguest
            </ul>


            </div>
        <!------------------ Logo -------------------->

    </div>



    <!------------------ Menu-burger -------------------->
    <div class="menu-burger__header111">

        <div class="menu-burger__header">
            <span></span>
        </div>

    </div>
    <!------------------ Menu-burger -------------------->
    <!------------------ Menu-burger-open -------------------->
    <nav class="page-navigation header__nav">
        <div class="header__container">

            <div><ul class="menu">
                    {{--<li id="menu-item-1838" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-1838 {{request()->is('/') ? 'menu-link__active' : ''}}"><a href="/" aria-current="page">Головна</a></li>
                    <li id="menu-item-1839" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1839 {{(request()->is('category/multiki') or request()->is('multiki/*')) ? 'menu-link__active' : ''}}"><a href="{{ route('categories.single', ['slug' => 'multiki']) }}">Мультики</a></li>
                    <li id="menu-item-1840" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1840 {{(request()->is('category/multseriali') or request()->is('multseriali/*')) ? 'menu-link__active' : ''}}"><a href="{{ route('categories.single', ['slug' => 'multseriali']) }}">Мультсеріали</a></li>
                    <li id="menu-item-1841" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1841 {{(request()->is('category/filmi') or request()->is('filmi/*')) ? 'menu-link__active' : ''}}"><a href="{{ route('categories.single', ['slug' => 'filmi']) }}">Фільми</a></li>
                    <li id="menu-item-1841" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1841 {{(request()->is('category/seriali') or request()->is('seriali/*')) ? 'menu-link__active' : ''}}"><a href="{{ route('categories.single', ['slug' => 'seriali']) }}">Серіали</a></li>--}}

<!-- Через хелпер-->
                {{--<li class="{{activeMainLink()}}"><a href="{{ route('homee') }}">Головна</a></li>
                <li class="{{activeLinkMultfilms()}}"><a href="{{ route('categories.single', ['slug' => 'multiki']) }}">Мультики</a></li>
                <li class="{{activeLinkMultserials()}}"><a href="{{ route('categories.single', ['slug' => 'multseriali']) }}">Мультсеріали</a></li>
                <li class="{{activeLinkFilms()}}"><a href="{{ route('categories.single', ['slug' => 'filmi']) }}">Фільми</a></li>
                <li class="{{activeLinkSerials()}}"><a href="{{ route('categories.single', ['slug' => 'seriali']) }}">Серіали</a></li>--}}

<!--Через View composers-->
                    <li class="{{$mainLink}}"><a href="{{ route('homee') }}">Головна</a></li>
                    <li class="{{$multsLink}}"><a href="{{ route('categories.single', ['slug' => 'multiki']) }}">Мультики</a></li>
                    <li class="{{$multserialsLink}}"><a href="{{ route('categories.single', ['slug' => 'multseriali']) }}">Мультсеріали</a></li>
                    <li class="{{$filmsLink}}"><a href="{{ route('categories.single', ['slug' => 'filmi']) }}">Фільми</a></li>
                    <li class="{{$serialsLink}}"><a href="{{ route('categories.single', ['slug' => 'seriali']) }}">Серіали</a></li>

                </ul></div>

        </div>

    </nav>
@include('inc.carouselfilms')
    <!------------------ Menu-burger-open -------------------->
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <div class="alert alert-info">
                    {{session('status')}}
                </div>
            @endif
        </div>
    </div>
</div>
@yield('content')

<!---------------------------------------MAIN-FINISH-------------------------------------------->
<footer>
    <div class="footer-line"></div>
    <div class="section-footer">
        <div class="foot container-footer">
            {{--<nav class="page-navigation1">
                <div class="menu-%d0%bc%d0%b5%d0%bd%d1%8e-%d1%84%d1%83%d1%82%d0%b5%d1%80-container">
                    <ul id="menu-%d0%bc%d0%b5%d0%bd%d1%8e-%d1%84%d1%83%d1%82%d0%b5%d1%80" class="menu"><li id="menu-item-1908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1908"><a href="http://projtct-blog2/front-page/kontakty/">Контакти</a></li>
                        <li id="menu-item-1909" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1909"><a href="http://projtct-blog2/sample-page/">Зразок сторінки</a></li>
                        <li id="menu-item-1910" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1910"><a href="http://projtct-blog2/page-b/">Page B</a></li>
                    </ul>
                </div></nav>--}}

            {{--<p>
                Всі права захищені. Використання матеріалів та фотографій, що є власністю «Трибун», можливе лише за умови прямого посилання на сайт. Для інтернет-видань обов'язковим є розміщення прямого, відкритого для пошукових систем, посилання не нижче другого абзацу на коректну новину або статтю на веб-сайті tribun.com.ua.
            </p>--}}
            <p class="foot1">&copy;
                2023							<a href="https://kino.test/">Kino - сайт з фільмами, які завжди уматово передивитись.</a>
            </p><!-- .footer-copyright -->
        </div>

    </div>

    <!-- .footer-credits -->
</footer>
<!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->






<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
-->

<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js?ver=6.3.1' id='test-popper-js'></script>




<script src="{{asset('assets/front/js/owlcarousel2/jquery-3.6.1.min.js') }}"></script>
<script src="{{asset('assets/front/js/owlcarousel2/owl.carousel.min.js') }}"></script>
<script src="{{asset('assets/front/js/owlcarousel2/main.js') }}"></script>

</body>



</html>
