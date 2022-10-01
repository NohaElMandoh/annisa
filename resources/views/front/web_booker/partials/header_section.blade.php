<header style="background-color:  !important; background-image: none" class="has-image">
        <div class="text">
            <div class="inner">
                <h1>{{$web_booker->header_title}}</h1>
                {!! html_entity_decode($web_booker->header_desc) !!}

                <a class="button" href="{{$web_booker->booking_demo_url}}" target="_blank">Try booking demo</a>
                
            </div>
        </div>
        <img width="1516" height="664" src="{{Voyager::image($web_booker->header_img)}}"
            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
    </header>