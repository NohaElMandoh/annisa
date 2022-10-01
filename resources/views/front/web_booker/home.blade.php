@extends('front.pages.layouts.app')

@section('content')

@include('front.web_booker.partials.header_section')

@include('front.web_booker.partials.menu')

<div class="main-blocks">
    <section class="title-images white" id="">
        <div class="inner">
            <h2>{{$web_booker->title_section}}</h2>
        </div>
    </section>
    @include('front.web_booker.partials.client_bookings')

    @include('front.web_booker.partials.setup')

    @include('front.web_booker.partials.assignment')

    @include('front.web_booker.partials.payments')

    @include('front.web_booker.partials.plan')
    
    
</div>


@endsection