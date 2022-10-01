<div class="feature">
            <div class="image">
                <img src="{{Voyager::image($passenger_app->real_time_section_img)}}" alt="">
            </div>
            <div class="text">
                <h3>{{$passenger_app->real_time_section_title}}</h3>
                {!! html_entity_decode($passenger_app->real_time_section_desc) !!}
            </div>
        </div>