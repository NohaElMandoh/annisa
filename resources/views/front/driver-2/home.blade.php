@extends('front.pages.layouts.app')

@section('content')



@include('front.driver-2.partials.header')
@include('front.driver-2.partials.menu')

<div class="main-blocks">

    @include('front.driver-2.partials.sections.tools_section')
    @include('front.driver-2.partials.sections.driver_app_section')
    @include('front.driver-2.partials.sections.messaging')
    @include('front.driver-2.partials.sections.signup')
    @include('front.driver-2.partials.sections.network')
    @include('front.driver-2.partials.sections.trace')
    @include('front.pages.partials.interested')
    @include('front.pages.partials.cases')
    @include('front.pages.partials.aggrements')
    @include('front.pages.partials.newsletters')

</div>

@endsection