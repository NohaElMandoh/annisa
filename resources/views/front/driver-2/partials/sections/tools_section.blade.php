<section class="title-images white" id="">
            <div class="inner">
                <h2>A mobile app made by people who believe that every taxi/limo driver deserves the tools to take his business to the next level. </h2>
                @foreach($strategies as $strategy)
                <article>
                    <img src="{{Voyager::image($strategy->icon)}}" /> {{$strategy->title}}
                </article>
                @endforeach
              
            </div>
        </section>
