<section class="title-images white" id="">
        <div class="inner">
            <h2>{{$dispatches->title_section}}
            </h2>
                @foreach($solutions as $solution)
                <article>
                    <img src="{{Voyager::image($solution->icon)}}" /> 
                    {!! html_entity_decode($solution->title) !!}
                    
                </article>
                @endforeach

        </div>
    </section>