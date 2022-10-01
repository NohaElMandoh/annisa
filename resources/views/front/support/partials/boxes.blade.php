<section class="support-boxes">
            <h2 class="title">
            {{$support->support_boxes_title}} </h2>

            <div class="boxes">

                <a href="../download-the-free-app/index.html" target="" class="box">
                    <span>
                        <img src="{{Voyager::image($support->invite_img)}}" alt="">
                        <h5>{{$support->invite_title}}</h5>
                    </span>
                    {!! html_entity_decode($support->invite_desc) !!}
                    <p class="rate-us-link">Download and invite now!</p>
                </a>

                <div class="box">
                    <span>
                        <img src="{{Voyager::image($support->rate_img)}}" alt="">
                        <h5>{{$support->rate_title}}</h5>
                    </span>
                    {!! html_entity_decode($support->rate_desc) !!}
                    <p class="rate-us-link">Rate us now: <a
                            href="{{$support->rate_ios_url}}">IOS</a> <a
                            href="{{$support->rate_android_url}}">andriod</a>
                    </p>
                </div>

                <a href="{{route('contact_us')}}" target="" class="box">
                    <span>
                        <img src="{{Voyager::image($support->feedback_img)}}" alt="">
                        <h5>{{$support->feedback_title}}</h5>
                    </span>
                    {!! html_entity_decode($support->feedback_desc) !!}
                    <p class="rate-us-link">Get in contact</p>
                </a>

                <a href="../pricing-yourdriverapp/index.html" target="" class="box">
                    <span>
                        <img src="{{Voyager::image($support->member_img)}}" alt="">
                        <h5>{{$support->member_title}}</h5>
                    </span>
                    {!! html_entity_decode($support->member_desc) !!}
                    <p class="rate-us-link">Products and pricing</p>
                </a>

                <a href="{{$support->donation_url}}" target="_blank" class="box">
                    <span>
                        <img src="{{Voyager::image($support->donation_img)}}" alt="">
                        <h5>{{$support->donation_title}}</h5>
                    </span>
                    {!! html_entity_decode($support->donation_desc) !!}
                    <p class="rate-us-link">Donate now</p>
                </a>

                <a href="../careers/index.html" target="" class="box">
                    <span>
                        <img src="{{Voyager::image($support->Join_img)}}" alt="">
                        <h5>{{$support->join_title}}</h5>
                    </span>
                    {!! html_entity_decode($support->join_desc) !!}
                    <p class="rate-us-link">Careers</p>
                </a>
            </div>
        </section>