<div class="feature">
        <div class="image">
            <img src="{{Voyager::image($passenger_app->payments_section_img)}}" alt="In-app payments">
        </div>
        <div class="text">
            <h3>{{$passenger_app->payments_section_title}}</h3>
            {!! html_entity_decode($passenger_app->payments_section_desc) !!}
        </div>
    </div>