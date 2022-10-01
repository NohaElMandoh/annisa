@extends('front.pages.layouts.app_without_menu')

@section('content')

@include('front.web_portal.partials.header_section')
    @include('front.web_portal.partials.web_portal')

   

    <section class="features container">
        <div class="feature">
            <div class="image">
                <img src="{{Voyager::image($web_portal->dispatch_section_img)}}" alt="Jobs">
            </div>
            <div class="text">
                <h3>{{$web_portal->dispatch_section_title}}</h3>
                {!! html_entity_decode($web_portal->dispatch_section_desc) !!}
            </div>
        </div>
        <div class="feature">
            <div class="image">
                <img src="{{Voyager::image($web_portal->trace_section_img)}}" alt="Analytics">
            </div>
            <div class="text">
                <h3>{{$web_portal->trace_section_title}}</h3>
                {!! html_entity_decode($web_portal->trace_section_desc) !!}
            </div>
        </div>
        <div class="feature">
            <div class="image">
                <img src="{{Voyager::image($web_portal->administration_section_img)}}" alt="Earnings and payouts">
            </div>
            <div class="text">
                <h3>{{$web_portal->administration_section_title}}</h3>
                {!! html_entity_decode($web_portal->administration_section_desc) !!}
            </div>
        </div>
    </section>
    <section class="plus-feature-wide">
        <h3>Extra options for Business Groups</h3>
        <div class="container">
            <div class="text">
                <p><strong>{{$web_portal->groups_section_title}}</strong></p>
                {!! html_entity_decode($web_portal->groups_section_desc) !!}
            </div>
            <div class="image">
                <img src="{{Voyager::image($web_portal->groups_section_img)}}" alt="driver portal">
            </div>
        </div>
    </section>
   
    @include('front.web_portal.partials.plan')

    


@endsection