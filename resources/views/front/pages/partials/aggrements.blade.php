<section class="trust-agreement " id="">
    <div class="inner">
        <article>
            <p>{{$driver->agreement_section_title}}</p>
            <h2 class="p1">{{$driver->agreement_section_desc}}</h2>
            <p class="p1" style="text-align: left;"><span class="s1">{{$driver->agreement_section_name}}</span><span class="s1"><br />
                    {{$driver->agreement_section_position}}</span></p>
            <p><img loading="lazy" class=" wp-image-4413 alignleft" src="{{Voyager::image($driver->agreement_section_sign)}}" alt="" width="113" height="94" /></p>
            <p>&nbsp;</p>
        </article>
        <article>
            <ul>
                @foreach($aggrements as $aggrement)
                <li>
                    <p><span class="s1"><b>{{$aggrement->title}}. </b></span><span class="s1">{{$aggrement->desc}}</span></p>
                </li>
                @endforeach

            </ul>
        </article>
    </div>
</section>