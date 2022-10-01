@extends('front.pages.layouts.app_download_page')

@section('content')

<header style="background-color:  !important;" class="">
        <div class="text">
            <a href="#" class="startnow header_button">Request Free Access</a>
        </div>
    </header>

    <div class="container main ">
        <main>
        {!! html_entity_decode($website->download_title) !!}
        </main>
        <a href="{{$website->appstore_link}}" target="_blank" class="button appstore">
            <img src="{{Voyager::image($website->appstore_img)}}" alt="">
        </a>
        <a href="{{$website->playstore_link}}" target="_blank" class="button playstore">
            <img src="{{Voyager::image($website->playstore_img)}}" alt="">
        </a>
    </div>

    <div class="container screenshot">
        <img src="{{Voyager::image($website->screenshot_img)}}" alt="">
    </div>


@endsection