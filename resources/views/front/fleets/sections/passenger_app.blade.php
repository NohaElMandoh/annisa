<section class="text-image white text-right" id="passenger-app">
        <div class="inner screenshot">
            <article>
                <p><strong>Passenger app</strong></p>
                <h2><span style="font-weight: 400;">{{$fleets->passenger_app_section_title}}</span></h2>
                {!! html_entity_decode($fleets->passenger_app_section_desc) !!}

                <a class="button" href="{{$fleets->demo_url}}" target="">Get Demo Apps in 5mins.</a>
            </article>
            <article>
                <img src="{{Voyager::image($fleets->passenger_app_section_img)}}" alt="">
            </article>
        </div>
    </section>