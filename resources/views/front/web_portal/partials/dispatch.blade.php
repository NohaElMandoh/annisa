<div class="feature">
    <div class="image">
        <img src="{{Voyager::image($web_portal->dispatch_section_img)}}" alt="Jobs">
    </div>
    <div class="text">
        <h3>{{$web_portal->dispatch_section_title}}</h3>
        {!! html_entity_decode($web_portal->dispatch_section_desc) !!}
    </div>
</div>