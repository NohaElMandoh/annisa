<!doctype html>
<html class="no-js" lang="en-US">

<head>




    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$website->title}}</title>


    @include('front.partials.styles')

    <link rel="icon" href="{{ asset('front/assets/images/logo.svg')}}" sizes="32x32" />

    <script type='text/javascript' src="{{ asset('front/wp-includes/js/jquery/jquery.min.js')}}" id='jquery-core-js'></script>

    <script type='text/javascript' src="{{ asset('front/assets/js/jquery/jquery-migrate.min.js')}}"></script>

    <script type='text/javascript' src="{{ asset('front/assets/plugins/mailjet-for-wordpress/src/widget/js/front-widget.js')}}"></script>

    <script src="https://kit.fontawesome.com/7ecf8dac4e.js" crossorigin="anonymous"></script>
</head>


<body class="new_header">

    @include('front.main.partials.top_bar')

    @include('front.main.partials.nav')

    @include('front.main.partials.nav_mobile')
 
    @include('front.main.partials.header')
    <div class="container main full">
        <main>
            <h1><span style="color: #ffffff;">Power to</span><br />
                <span style="color: #ffffff;">the driver!</span>
            </h1>
        </main>
    </div>


    @include('front.main.partials.popup_ourpurpose')
    
    @include('front.partials.footer')

    @include('front.partials.scripts')

</body>


</html>