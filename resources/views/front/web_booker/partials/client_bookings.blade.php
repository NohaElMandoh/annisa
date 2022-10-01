<section class="text-image white text-right" id="easy-client-bookings">
        <div class="inner screenshot">
            <article>
                <p class="text--08__heading "><strong>Easy client bookings</strong></p>
                <h2><span style="font-weight: 400;">{{$web_booker->client_booking_section_title}}</span></h2>
                {!! html_entity_decode($web_booker->client_booking_section_desc) !!}
                <a class="button" href="{{$web_booker->booking_demo_url}}" target="_blank">Try booking demo</a>
            </article>
            <article>
                <img src="{{Voyager::image($web_booker->client_booking_section_img)}}" alt="">
            </article>
        </div>
    </section>