@extends('front.pages.layouts.app_contact')

@section('content')



<div class="container">
    <main>
        <h1>{{$contact_us->header_title}}</h1>
        {!! html_entity_decode($contact_us->header_desc) !!}
        <div class="columns">
            <div class="col button extra-link">
                <img src="{{Voyager::image($contact_us->d_app_questions_img)}}" alt="">
                <div class="text">
                    <h3>{{$contact_us->d_app_questions_title}}</h3>
                    {!! html_entity_decode($contact_us->d_app_questions_desc) !!}
                </div>
            
                <a href="{{$website->driver_app_url}}" target="" class="button">Contact us from the app</a>
                <a href="#" target="_blank" class="extra">Why we ask you to contact us from the app</a>
            </div>
            <div class="col button extra-link">
                <img src="{{Voyager::image($contact_us->cloud_questions_img)}}" alt="">
                <div class="text">
                <h3>{{$contact_us->cloud_questions_title}}</h3>
                    {!! html_entity_decode($contact_us->cloud_questions_desc) !!}
                </div>
                <a href="{{$contact_us->cloud_questions_url}}" target="_blank" class="button">Cloud Connect questions</a>
                <a href="{{$contact_us->knowledge_base_url}}" target="_blank" class="extra">Visit our
                    Knowledge Base</a>
            </div>
        </div>
        <div class="address-lines">
            <p style="text-align: center;"><strong>Office:</strong> {{$contact_us->office}}<br />
                <strong>Chamber of commerce:</strong>  {{$contact_us->chamber_commerce}}
            </p>
        </div>
    </main>
</div>


<iframe id="yda-map" src="{{$contact_us->google_maps_url}}" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



@endsection