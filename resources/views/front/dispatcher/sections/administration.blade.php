<section class="text-image white text-right" id="administration">
        <div class="inner screenshot">
            <article>
                <p><strong>Less administration, more earnings</strong></p>
                <h2><span style="font-weight: 400;">{{$dispatches->administration_section_title}}</span></h2>
                {!! html_entity_decode($dispatches->administration_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($dispatches->administration_section_img)}}" alt="">
            </article>
        </div>
    </section>