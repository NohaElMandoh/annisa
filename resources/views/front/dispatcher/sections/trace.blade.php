<section class="text-image white text-left" id="track-trace">
        <div class="inner screenshot">
            <article>
                <p class="article-title" title="Passenger emails: Ride confirmation and request to rate the driver">
                    <strong>Track &amp; trace</strong>
                </p>
                <h2><span style="font-weight: 400;">{{$dispatches->trace_section_title}}</span></h2>
                {!! html_entity_decode($dispatches->trace_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($dispatches->trace_section_img)}}" alt="">
            </article>
        </div>
    </section>