<header style="background-color:  !important;" class="has-image">
    <div class="text">
        <div class="inner">
            <h1 class="p1"><span class="s1">{{$contact_us->header_title}}</span></h1>
            {!! html_entity_decode($contact_us->header_desc) !!}

            <a href="{{$website->driver_app_url}}" class="download-button">
                <img src="{{Voyager::image($website->download_img)}}" alt="Download th eapp">
            </a>

        </div>
    </div>
</header>