<section class="text-image white text-left" id="external-sources">
        <div class="inner screenshot">
            <article>
                <p title="Passenger emails: Ride confirmation and request to rate the driver"><strong>External
                        sources</strong></p>
                <h2>{{$fleets->external_sources_section_title}}</h2>
                {!! html_entity_decode($fleets->external_sources_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($fleets->external_sources_section_img)}}" alt="">
            </article>
        </div>
    </section>