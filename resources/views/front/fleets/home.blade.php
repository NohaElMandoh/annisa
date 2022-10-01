@extends('front.pages.layouts.app')

@section('content')

@include('front.fleets.partials.header')

@include('front.fleets.partials.menu')

<div class="main-blocks">

    @include('front.fleets.sections.title_section')

    @include('front.fleets.sections.dispatch')

    @include('front.fleets.sections.web_booker')

    @include('front.fleets.sections.external_sources')

    @include('front.fleets.sections.passenger_app')

    @include('front.fleets.sections.taxibutler')
    
    @include('front.fleets.sections.plan')
   
</div>

@endsection