@extends('front.pages.layouts.app')

@section('content')

<main>
@include('front.support.partials.title_section')
@include('front.support.partials.boxes')
     
        <div class="img-footer">
            <img src="{{Voyager::image($support->footer_img)}}" alt="">
            <h2 class="title">{{$support->footer_title}}</h2>
        </div>
    </main>


@endsection