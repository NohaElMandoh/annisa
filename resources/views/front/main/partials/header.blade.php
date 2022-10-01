<header class="header-new">
    <div class="header_slider swiper-container">
        <div class="swiper-wrapper">
            @foreach($slider as $slide)
            <div class="swiper-slide ">
                <div class="swiper-container">
                    <img src="{{Voyager::image($slide->image)}}" alt="" class="image-new">
                    <img src="{{Voyager::image($slide->image_mobile)}}" alt="" class="image-new mobile">
                </div>

                <div class="content">
                    <h1>{{$slide->title}}</h1>
                    <div class="content-container">
                        <p><span style="font-weight: 400;">{{$slide->desc}}</p>

                        <a href="#" class="read_more_link">Read more</a>
                    </div>
                    <div class="direction-box">
                        <div class="prev-slide-box">
                            <div class="prev-slide-button">
                                <img class="arrow" src="{{ asset('front/assets/images/icon-arrow.svg')}}">
                            </div>
                        </div>
                        <div class="next-slide-box">
                            <div class="next-slide-button">
                                <img class="arrow" src="{{ asset('front/assets/images/icon-arrow.svg')}}">
                            </div>
                            <p>Next</p>
                        </div>
                    </div>
                </div>
                <div class="read_more_container">
                    <div class="filter"></div>
                    <div class="read_more">
                        <a href="#" class="close-link"><img class="close" src="{{ asset('front/assets/images/icon-close.svg')}}"></a>
                        <div class="overlay-text">
                            <div class="title">{{$slide->title}}</div>
                            <h4></h4>
                            {!! html_entity_decode($slide->long_desc) !!}

                            <div class="scrollbar-force"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($slider as $slide)
            @if($slide->order == -1)
            <div class="swiper-slide last_slide">
                <div class="swiper-container">
                    <img src="{{Voyager::image($slide->image)}}" alt="" class="image-new">
                    <img src="{{Voyager::image($slide->image_mobile)}}" alt="" class="image-new mobile">
                </div>
                <div class="content">
                    <h1>{{$slide->title}}</h1>
                    <div class="content-container">
                        <p class="p1">{{$slide->desc}}</p>

                        <a href="#" class="read_more_link">Read more</a>
                    </div>
                    <div class="direction-box">
                        <div class="prev-slide-box">
                            <div class="prev-slide-button">
                                <img class="arrow" src="{{ asset('front/assets/images/icon-arrow.svg')}}">
                            </div>
                        </div>
                        <div class="next-slide-box">
                            <div class="next-slide-button">
                                <img class="arrow" src="{{ asset('front/assets/images/icon-arrow.svg')}}">
                            </div>
                            <p>Next</p>
                        </div>
                    </div>
                </div>
                <div class="read_more_container">
                    <div class="filter"></div>
                    <div class="read_more">
                        <a href="#" class="close-link"><img class="close" src="{{ asset('front/assets/images/icon-close.svg')}}"></a>
                        <div class="overlay-text">
                            <div class="title">{{$slide->title}}</div>
                            {!! html_entity_decode($slide->long_desc) !!}
                            <div class="scrollbar-force"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
           
        </div>
        <div class="swiper-pagination"></div>
        <div class="overlay"></div>
        @foreach($slider as $slide)
            @if($slide->order == -1)
        <div class="last_slide_overlay">
            <div class="last_slide_content_block">
                <div class="column">
                    <h1>{{$slide->overlay_title}}</h1>
                    <p><a class="our-purpose-link" href="#popup-ourpurpose" rel="noopener">Read a <span class="underline">personal note</span> about our purpose from our CEO.</a></p>
                    <p><img loading="lazy" class="size-full wp-image-5611 alignleft" src="{{Voyager::image($slide->signature_img)}}" alt="" width="158" height="76" /></p>
                </div>
                <div class="column usps">
                    <div class="usp">
                        <div class="content">
                            <div>

                            {!! html_entity_decode($slide->overlay_long_desc) !!}
                                  <p><a href="support-the-community/index.html">Support the community</a></p>
                                <p><a href="download-the-free-app/index.html">Download the free Driver App</a></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reset-read-container">
                    <a href="#" class="reset-swiper">
                        <img class="arrow" src="{{ asset('front/assets/images/icon-arrow.svg')}}">Back
                    </a>
                </div>
            </div>
        </div>
        @endif
            @endforeach
    </div>

  
    @include('front.main.partials.social')
</header>