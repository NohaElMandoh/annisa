@extends('front.pages.layouts.app_without_menu')

@section('content')

@include('front.passenger_app.partials.header_section')

@include('front.passenger_app.partials.booking_taxi')


<section class="features container">
    @include('front.passenger_app.partials.real_time')
    @include('front.passenger_app.partials.completely')

    @include('front.passenger_app.partials.cust_options')
    @include('front.passenger_app.partials.payments')
    @include('front.passenger_app.partials.driver_app')


</section>
<section class="pricing-table container">
    <h3>Choose the passenger app that fits your budget</h3>
    <div class="top">
        <div class="plans">
            @foreach($budgets as $budget)
            <div class="plan">
                <div class="inner">
                    <h3>{{$budget->title}}</h3>

                    @foreach($passenger_app_budgets as $pass_budget)

                    @if($pass_budget->budgets_types_id == $budget->id)
                    <p class="price">{{$pass_budget->price}} </p>
                    {!! html_entity_decode($pass_budget->desc) !!}
                    @endif
                    @endforeach

                    <a href="#" class="button">Get demo app in 5 mins!</a>
                </div>
            </div>
            @endforeach
            <!-- <div class="plan">
                <div class="inner">
                    <h3>Essential</h3>
                    <p class="price">€1500</p>
                    <p>One-time development fee iOS+Android</p>
                    <hr />
                    <p>Unlimited web dispatchers</p>
                    <hr />
                    <p>Unlimited passengers</p>
                    <hr />
                    <p>Unlimited bookings</p>
                    <hr />
                    <p>Maintenance fee €100/month</p>
                    <a href="#" class="button">Get demo app in 5 mins!</a>
                </div>
            </div>
            <div class="plan">
                <div class="inner">
                    <h3>Pro</h3>
                    <p class="price">€3000</p>
                    <p>One-time development fee iOS+Android</p>
                    <hr />
                    <p>Unlimited web dispatchers</p>
                    <hr />
                    <p>Unlimited passengers</p>
                    <hr />
                    <p>Unlimited bookings</p>
                    <hr />
                    <p>Maintenance fee €150/month</p>
                    <a href="#" class="button">Get demo app in 5 mins!</a>
                </div>
            </div>
            <div class="plan">
                <div class="inner">
                    <h3>Enterprise</h3>
                    <p class="price">€7500</p>
                    <p>One-time development fee iOS+Android</p>
                    <hr />
                    <p>Unlimited web dispatchers</p>
                    <hr />
                    <p>Unlimited passengers</p>
                    <hr />
                    <p>Unlimited bookings</p>
                    <hr />
                    <p>Maintenance fee optional</p>
                    <a href="#" class="button">Get demo app in 5 mins!</a>
                </div>
            </div> -->
        </div>
    </div>
    <div class="bottom">
        <div class="features">
        @foreach($budgets as $budget)
        @foreach($passenger_app_budgets as $pass_budget)

                    @if($pass_budget->budgets_types_id == $budget->id)
            <div class="plan">
                <div class="inner">
                {!! html_entity_decode($pass_budget->plan_desc) !!}
                </div>
            </div>
          
                    @endif
                    @endforeach
            @endforeach
        </div>
    </div>
</section>
<section class="reference">
    <div class="container">
        <img src="#" alt="">
        <h4>{{$passenger_app->reference_section_title}}
        </h4>
        {!! html_entity_decode($passenger_app->reference_section_desc) !!}
    </div>
</section>


@endsection