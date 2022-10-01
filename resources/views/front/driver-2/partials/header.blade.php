<header style="background-color:  !important;" class="has-image">
        <div class="text">
            <div class="inner">
                <h1 class="p1"><span class="s1">{{$driver->header_title}}</span></h1>
                <p class="p1">{{$driver->header_desc}}</p>

                <a href="{{$website->driver_app_url}}" class="download-button">
                    <img src="{{Voyager::image($website->download_img)}}" alt="Download th eapp">
                </a>

            </div>
        </div>
        <img width="1516" height="664" src="{{Voyager::image($driver->header_img)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" />
    </header>
