<section class="cta-plan blue">
        <div class="inner">
            <div class="text">
                <h3>{{$web_portal->plan_section_title}}</h3>
                {!! html_entity_decode($web_portal->plan_section_desc) !!}
            </div>
            <div class="plan">
                <img src="{{ asset('front/assets/images/cloudconnect.svg')}}" alt="" class="plan-img">
                {!! html_entity_decode($web_portal->plan_text) !!}

                <a href="{{$web_portal->trail_url}}" target="_blank">Start free trial</a>
            </div>
        </div>
    </section>
