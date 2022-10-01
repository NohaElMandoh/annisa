<header style="background-color:  !important;" class="has-image">
    <div class="text">
        <div class="inner">
            <h1>{{$fleets->header_title}}</h1>
            <p>{{$fleets->header_desc}}</p>

            <a class="button" href="{{$fleets->trail_url}}" target="_blank">Start free
                trial</a>

        </div>
    </div>
    <img width="1516" height="664" src="{{Voyager::image($fleets->header_img)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" />
</header>