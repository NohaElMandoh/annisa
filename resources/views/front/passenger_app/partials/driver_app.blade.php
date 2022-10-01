<div class="feature">
        <div class="image">
            <img src="{{Voyager::image($passenger_app->driver_app_section_img)}}" alt="User friendly messaging">
        </div>
        <div class="text">
            <h3>{{$passenger_app->driver_app_section_title}}</h3>
            {!! html_entity_decode($passenger_app->driver_app_section_desc) !!}
        </div>
    </div>