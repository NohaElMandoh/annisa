<header style="background-color:  !important; background-image: none" class="has-image">
    <div class="text">
        <div class="inner">
            <h1>{{$dispatches->header_title}}</h1>
            <p>
            {!! html_entity_decode($dispatches->header_desc) !!}
            </p>
            

            <a href="{{$website->driver_app_url}}" class="download-button">
                <img src="{{Voyager::image($website->download_img)}}" alt="Download th eapp">
            </a>

        </div>
    </div>
    <img width="1516" height="664" src="{{Voyager::image($dispatches->header_img)}}" 
    class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy"
     srcset="{{Voyager::image($dispatches->header_img)}} 1516w,
      https://www.yourdriverapp.com/wp-content/uploads/2018/06/Header_Dispatcher_YDA-300x131.jpg 300w, 
      https://www.yourdriverapp.com/wp-content/uploads/2018/06/Header_Dispatcher_YDA-768x336.jpg 768w,
      https://www.yourdriverapp.com/wp-content/uploads/2018/06/Header_Dispatcher_YDA-1024x449.jpg 1024w" 
      sizes="(max-width: 1516px) 100vw, 1516px" />
</header>