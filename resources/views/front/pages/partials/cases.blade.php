<section class="reference-block" id="">
            <div class="inner">
                <div class="block-container">
                    <div class="swiper-wrapper">
                        @foreach($cases as $case)
                        <div class="swiper-slide">
                            <article>
                                <h2>{{$case->title}}</h2>
                                {!! html_entity_decode($case->desc) !!}

                            </article>
                            <article>
                                <div class="holder" style="background: url({{Voyager::image($case->image)}}) no-repeat center #f2f2f2 ">
                                    <img src="{{ asset('front/assets/images/NewImages/frame-575x520.png')}}" alt="">
                                </div>
                            </article>
                        </div>
                        @endforeach
                      
                    </div>
                    <div class="swiper-pagination">
                    </div>
                </div>
            </div>
        </section>