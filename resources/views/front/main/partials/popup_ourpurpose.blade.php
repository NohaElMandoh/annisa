<div class="our-purpose-container popup" id="popup-ourpurpose">
    <div class="our-purpose">
        <a href="#" class="our-purpose-close-link close-popup">
            <img class="purpose-close" src="{{ asset('front/assets/images/icon-close.svg')}}"></a>
        <div class="overlay-content">
            <img src="{{Voyager::image($website->logo_desktop)}}">
            <span class="letter-sidenote">ALL DRIVERS UNITE</span>

            {!! html_entity_decode($website->ourpurpose) !!}
            </b><img loading="lazy" class=" wp-image-5607 alignleft" src="{{Voyager::image($website->ourpurpose_sign)}}" alt="" width="156" height="84" /></p>
            <p>{{$website->ourpurpose_name}} <br />{{$website->ourpurpose_title}} </p>
            <div class="scrollbar-force"></div>
        </div>
    </div>
</div>