<section class="text-image white text-left" id="complete-dispatch-solution">
        <div class="inner screenshot">
            <article>
                <p><strong>Complete Dispatch solution</strong></p>
                <h2><span style="font-weight: 400;">{{$fleets->dispatch_section_title}}</span></h2>
                {!! html_entity_decode($fleets->dispatch_section_desc) !!}
                <a class="button" href="{{$fleets->trail_url}}" target="_blank">Start free
                    trial</a>
            </article>
            <article>
                <img src="{{Voyager::image($fleets->dispatch_section_img)}}" alt="">
            </article>
        </div>
    </section>

    