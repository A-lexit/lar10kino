<div class="container">

    <div class="owl-carousel owl-theme">
        @foreach($items as $item)
            <span>  <img width="208" height="193" src="{{$item->getImage()}}" class="carousel-img attachment-medium size-medium wp-post-image"
                         alt="" decoding="async" fetchpriority="high"  sizes="(max-width: 298px) 100vw, 298px" />      <!-- <div class="title_cat_image">
                                </div>-->
      <a href="{{route('single', ['category' => $item->category->slug,'slug' => $item->slug])}}">
                    <p>{{$item->title}}</p>
                </a>
             </span>
        @endforeach
    </div>

</div>
