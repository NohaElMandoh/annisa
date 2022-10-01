<section class="text-image white text-right" id="online-web-booker">
        <div class="inner screenshot">
            <article>
                <p class="p1"><strong>Online Web Booker</strong></p>
                <h2><span style="font-weight: 400;">{{$fleets->web_booker_section_title}}</span></h2>
                {!! html_entity_decode($fleets->web_booker_section_desc) !!}
                <a class="button" href="https://order.yourdriverapp.com/en/5f743fa2c8725a1727a2539c" target="_blank">Try Web Booker</a>
            </article>
            <article>
                <img src="{{Voyager::image($fleets->web_booker_section_img)}}" alt="">
            </article>
        </div>
    </section>