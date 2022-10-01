<header style="background-color:  !important; background-image: none" class="has-image">
    <div class="text">
        <div class="inner">
            <h1>{{$uber_clone->header_title}}</h1>
            {!! html_entity_decode($uber_clone->header_desc) !!}


            <a class="button" href="{{$uber_clone->demo_url}}" target="">Get demo app in 5 minutes!</a>


        </div>
    </div>
    <img width="1516" height="664" src="{{Voyager::image($uber_clone->header_img)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
</header>