<section class="text-image white text-left" id="taxibutler">
        <div class="inner screenshot">
            <article>
                <p><strong>TaxiButler</strong></p>
                <h2><span style="font-weight: 400;">{{$fleets->taxibutler_section_title}}</span></h2>
                {!! html_entity_decode($fleets->taxibutler_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($fleets->taxibutler_section_img)}}" alt="">
            </article>
        </div>
    </section>