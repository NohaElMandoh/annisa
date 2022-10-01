<div class="feature">
            <div class="image">
                <img src="{{Voyager::image($passenger_app->cust_options_section_img)}}"
                    alt="customization options">
            </div>
            <div class="text">
                <h3>{{$passenger_app->cust_options_section_title}}</h3>
                {!! html_entity_decode($passenger_app->cust_options_section_desc) !!}
            </div>
        </div>