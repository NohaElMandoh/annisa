@extends('front.pages.layouts.app_without_menu')

@section('content')

@include('front.carrers.partials.header_section')
@include('front.carrers.partials.opportunity')
@include('front.carrers.partials.services')

@include('front.carrers.partials.positions')
@include('front.carrers.partials.end_section')

@endsection