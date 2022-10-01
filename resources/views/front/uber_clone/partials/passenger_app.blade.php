
<section class="text-image white text-left" id="passenger">
        <div class="inner screenshot">
            <article>
                <p>Passenger app for customers</p>
                <h2 class="p1"><span class="s1">{{$uber_clone->passenger_app_section_title}}</span></h2>
                {!! html_entity_decode($uber_clone->passenger_app_section_desc) !!}
                <a class="button" href="#" target="">Learn more</a>
            </article>
            <article>
                <img src="{{Voyager::image($uber_clone->passenger_app_section_img)}}" alt="">
            </article>
        </div>
    </section>

