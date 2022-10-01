<section class="text-image white text-left" id="easy-driver-assignment">
    <div class="inner screenshot">
        <article>
            <p class="p1"><strong>Easy driver assignment</strong></p>
            <h2><span style="font-weight: 400;">{{$web_booker->assignment_section_title}}</span></h2>
            {!! html_entity_decode($web_booker->assignment_section_desc) !!}
            <a class="button" href="{{$web_booker->booking_demo_url}}" target="_blank">Start free trial</a>
        </article>
        <article>
            <img src="{{Voyager::image($web_booker->assignment_section_img)}}" alt="">
        </article>
    </div>
</section>