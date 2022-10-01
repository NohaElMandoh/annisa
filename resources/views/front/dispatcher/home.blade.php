@extends('front.pages.layouts.app')

@section('content')

@include('front.dispatcher.partials.header')

@include('front.dispatcher.partials.menu')

<div class="main-blocks">

    @include('front.dispatcher.sections.title_section')

    @include('front.dispatcher.sections.fleet_section')

    @include('front.dispatcher.sections.messaging')
  
    @include('front.dispatcher.sections.trace')

    @include('front.dispatcher.sections.job')

    @include('front.dispatcher.sections.dispatching')

    @include('front.dispatcher.sections.administration')

    @include('front.dispatcher.sections.driver_app')
   
    @include('front.dispatcher.sections.booking_solution')

    @include('front.pages.partials.interested')

    @include('front.pages.partials.aggrements')
    
    @include('front.pages.partials.cases')

    @include('front.pages.partials.newsletters')
</div>
@endsection