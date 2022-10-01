<section class="text-image white text-right" id="dispatch-panel">
        <div class="inner screenshot">
            <article>
                <p class="p1"><span class="s1">Dispatch panel for operators</span></p>
                <h2 class="p1"><span class="s1">{{$uber_clone->dispatch_section_title}}</span></h2>
                {!! html_entity_decode($uber_clone->dispatch_section_desc) !!}
                <a class="button" href="" target="_blank">Learn more</a>
            </article>
            <article>
                <img src="{{Voyager::image($uber_clone->dispatch_section_img)}}" alt="">
            </article>
        </div>
    </section>