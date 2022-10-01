<section class="text-image white text-left" id="driver">
        <div class="inner screenshot">  
            <article>
                <p class="p1"><span class="s1">YourDriverApp for the driver</span></p>
                <h2 class="p1">{{$uber_clone->drivers_section_title}} </h2>
                {!! html_entity_decode($uber_clone->drivers_section_desc) !!}
                <a class="button" href="../driver-2/index.html" target="">Learn more</a>
            </article>
            <article>
                <img src="{{Voyager::image($uber_clone->drivers_section_img)}}" alt="">
            </article>
        </div>
    </section>