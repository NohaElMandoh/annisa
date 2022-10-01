<section class="text-image white text-left" id="easy-setup">
        <div class="inner screenshot">
            <article>
                <p><strong>Easy setup</strong></p>
                <h2>{{$web_booker->setup_section_title}}</h2>
                {!! html_entity_decode($web_booker->setup_section_desc) !!}
                <a class="button" href="{{$web_booker->booking_demo_url}}" target="_blank">Start free
                    trial</a>
            </article>
            <article>
                <img src="{{Voyager::image($web_booker->setup_section_img)}}" alt="">
            </article>
        </div>
    </section>