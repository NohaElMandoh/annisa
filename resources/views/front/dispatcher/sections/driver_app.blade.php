<section class="text-image white text-left" id="free-for-drivers">
        <div class="inner screenshot">
            <article>
                <p><b>Free for drivers</b></p>
                <h2><span style="font-weight: 400;">{{$dispatches->driver_app_section_title}}</span></h2>
                {!! html_entity_decode($dispatches->driver_app_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($dispatches->driver_app_section_img)}}" alt="">
            </article>
        </div>
    </section>