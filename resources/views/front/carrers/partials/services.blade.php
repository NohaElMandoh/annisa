<section class="columns three">
    <div class="container">
        <div class="row">
            @foreach($services as $service)
            <div class="column CareeIconItem">
                <img src="{{Voyager::image($service->icon)}}" alt="60+ apps in 10 countries">
                {!! html_entity_decode($service->desc) !!}
            </div>
           @endforeach
        </div>
    </div>
</section>