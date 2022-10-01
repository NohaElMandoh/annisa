<section class="text-image white text-left" id="dispatching">
        <div class="inner screenshot">
            <article>
                <p><strong>Advanced dispatching to drivers</strong></p>
                <h2><span style="font-weight: 400;">{{$dispatches->dispatching_section_title}}</span></h2>
                {!! html_entity_decode($dispatches->dispatching_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($dispatches->dispatching_section_img)}}" alt="">
            </article>
        </div>
    </section>