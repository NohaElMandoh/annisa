<section class="text-image white text-right" id="messaging">
        <div class="inner screenshot">
            <article>
                <p class="p1"><strong>Instant messaging</strong></p>
                <h2><span style="font-weight: 400;">{{$dispatches->messaging_section_title}}</span></h2>
                {!! html_entity_decode($dispatches->messaging_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($dispatches->messaging_section_img)}}" alt="">
            </article>
        </div>
    </section>