<section class="text-image white text-right" id="job-planning">
        <div class="inner screenshot">
            <article>
                <p><strong>Mobile job management</strong></p>
                <h2><span style="font-weight: 400;">{{$dispatches->job_section_title}}</span></h2>
                {!! html_entity_decode($dispatches->job_section_desc) !!}
            </article>
            <article>
                <img src="{{Voyager::image($dispatches->job_section_img)}}" alt="">
            </article>
        </div>
    </section>