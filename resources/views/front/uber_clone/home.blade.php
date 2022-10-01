@extends('front.pages.layouts.app')

@section('content')

@include('front.uber_clone.partials.header_section')

@include('front.uber_clone.partials.menu')


<div class="main-blocks">

    @include('front.uber_clone.partials.driver_app')

    @include('front.uber_clone.partials.passenger_app')

@include('front.uber_clone.partials.dispatch')

@include('front.uber_clone.partials.drivers')
    
    <section class="pricing-table container " id="" style="float: none;">
        <h3></h3>
        <div class="top">
            <div class="plans items-1">
                <div class="plan">
                    <div class="inner">
                        <h3>Essential</h3>
                        <p class="price">€1500</p>
                        <div class="table">
                            <p>One-time development fee iOS+Android</p>
                            <hr />
                            <p>Unlimited web dispatchers</p>
                            <hr />
                            <p>Unlimited passengers</p>
                            <hr />
                            <p>Unlimited bookings</p>
                            <hr />
                            <p>Maintenance fee €100/month</p>
                        </div>
                        <a href="../request-full-demo/index.html" class="button">Get demo app in 5 mins!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="features items-1">
                <div class="plan ">
                    <div class="inner ">
                        <ul>
                            <li>Your own app in the app stores</li>
                            <li>Full corporate branding</li>
                            <li>Fully integrated with <span style="color: #ffffff; "><a style="color: #ffffff; " href="../fleets/index.html ">YourDriverApp Fleet Solutions</a>
                                </span>(license required)</li>
                            <li>Fully integrated with the free YourDriverApp for your drivers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reference-block " id="case-study ">
        <div class="inner ">
            <div class="block-container ">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide ">
                        <article>
                            <p>Case Study</p>
                            <h2>"It 's amazing what an effect the passenger app has had on my business."</h2>
                            <p>With all the competition out there, I felt I needed something special to distinguish
                                myself from other companies like me. YourDriverApp enabled me to have my own
                                one-of-a-kind passenger app. Now I feel more confident about my business than ever
                                and have more than 50 customers who book me daily via the app.</p>

                        </article>
                        <article>
                            <div class="holder" style="background: url(../assets/images/Refcase_MobileDispatcher.png) no-repeat center #f2f2f2 ">
                                <img src="../assets/images/NewImages/frame-575x520.png" alt="">
                            </div>
                        </article>
                    </div>
                </div>
                <div class="swiper-pagination">
                </div>
            </div>
        </div>
    </section>
    <section class="text dark-grey" id="">
        <div class="inner">
            <article>
                <h2 class="p1" style="text-align: center;"><span class="s1">Join and win over your own local
                        market!</span></h2>
            </article>
        </div>
    </section>
    <section class="trust-agreement " id="trust-agreement">
        <div class="inner">
            <article>
                <p>Trust Agreement</p>
                <h2 class="p1"><span class="s1">We’ve already signed a Trust Agreement. This is our way of showing
                        <b>mutual trust and respect</b> for you and your business.</span></h2>
                <p class="p1" style="text-align: left;"><span class="s1">Milco Leijen</span><span class="s1"><br />
                        CMO</span></p>
                <p><img loading="lazy" class=" wp-image-4413 alignleft" src="../assets/images/imagesTwo/sign.png" alt="" width="113" height="94" /></p>
                <p>&nbsp;</p>
            </article>
            <article>
                <ul>
                    <li>
                        <p><span class="s1"><b>We won’t compete with you. </b></span><span class="s1">It’s our
                                promise to never compete with you. We are not a taxi booking app and will not serve
                                passengers in any way.</span></p>
                    </li>
                    <li>
                        <p><span class="s1"><b>We will never dispatch outside your group. </b>You will always be in
                                charge of your network of customers, drivers and dispatching.</span></p>
                    </li>
                    <li>
                        <p class="p1"><span class="s1"><b>No long term contracts. </b></span><span class="s1">Technology is changing fast and you need flexibility to adapt to it.
                                Therefore, we don&#8217;t want you to feel stuck in a contract.</span></p>
                    </li>
                    <li>
                        <p><span class="s1"><b>No commissions. </b></span><span class="s1">We don&#8217;t believe
                                commissions are the right incentive. We supply you with technology, not with the job
                                itself. Therefore we choose to not charge any commissions. </span></p>
                    </li>
                </ul>
            </article>
        </div>
    </section>
</div>

@endsection