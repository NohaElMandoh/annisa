@extends('front.pages.layouts.app_without_menu')

@section('content')

<header style="background-color:  !important; background-image: none" class="">
    <div class="text">
        <h1>{{$fleets->price_header_title}}</h1>
        <a href="{{$fleets->trail_url}}" class="header_button">GET FREE TRAIL</a>
    </div>
</header>

<div class="container main full">
    <main></main>
</div>

<section class="feature-table container">
    <div class="title">
    </div>
    <div class="table">
        <div class="scroller">
            <div class="levels">
                @foreach($prices as $price )
                <div class="level">
                    {{$price->title}} <span>{{$price->desc}}</span>
                </div>
                @endforeach

            </div>
            <div class="trow cat">
                <div class="tcell">Web Booker</div>
                <div class="tcell">&nbsp;</div>
                <div class="tcell">&nbsp;</div>
            </div>

            @foreach($price_proberities as $proberity )
            <div class="trow">
                <div class="tcell">
                    <p>{{$proberity->title}}</p>
                </div>
                @foreach($prices as $price )
                <div class="tcell">
                
                    @foreach($price->proberities as $prob )
                      
                        
                    <span>  @if($prob->pivot->pricing_property_id == $proberity->id ) Yes @endif   </span>
              
                         
                    @endforeach
                </div>

                @endforeach

              
            </div>
            @endforeach
            <div class="trow">
                <div class="tcell">
                    <p>Pricing</p>
                </div>
                @foreach($prices as $price )
                <div class="tcell">
                    {{$price->price}} <span class="sub">{!! html_entity_decode($price->price_desc) !!}</span>
                </div>
                @endforeach
               
               
            </div>
        </div>
    </div>
    <div class="extra">
    {!! html_entity_decode($fleets->price_interested_desc) !!}
    </div>
</section>
 
@include('front.fleet_pricing.partials.like')

@endsection