<section class="text-image white text-right" id="pricing-and-online-payments">
        <div class="inner screenshot">
            <article>
                <p><strong>Pricing and online payments</strong></p>
                <h2><span style="font-weight: 400;">{{$web_booker->payments_section_title}}</span></h2>
                {!! html_entity_decode($web_booker->payments_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($web_booker->payments_section_img)}}" alt="">
            </article>
        </div>
    </section>