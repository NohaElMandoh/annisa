<section class="text-image white text-left" id="groups">
        <div class="inner screenshot">
            <article>
                <p><strong>Mobile fleet management</strong></p>
                <h2><span style="font-weight: 400;">{{$dispatches->fleet_section_title}}</span></h2>
                {!! html_entity_decode($dispatches->fleet_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($dispatches->fleet_section_img)}}" alt="">
            </article>
        </div>
    </section>