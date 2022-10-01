<section class="blocks">
    <div class="container">
        <h3>Open Positions</h3>
        @php  $count=0; @endphp
        
        <div class="grid">
        @for($count ;$count < 4; $count++)
        @foreach($positions as $key=>$position)
        @if($key == $count)
            <a class="block" href="#">

                <p>{{$position->title}}</p>
            </a>
            @endif
          @endforeach
            @endfor
        </div>
        <div class="grid">
        @for($count ;$count < 8; $count++)
        @foreach($positions as $key=>$position)
        @if($key == $count)
            <a class="block" href="#">
            <p>{{$position->title}}</p>
            </a>
            @endif
          @endforeach
            @endfor
        </div>
    </div>
</section>