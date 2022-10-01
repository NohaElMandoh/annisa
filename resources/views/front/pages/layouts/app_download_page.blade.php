<!doctype html>
<html class="no-js" lang="en-US">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$website->title}}</title>

    @include('front.partials.styles')
@yield('styles')
    <link rel="icon" href="{{ asset('front/assets/images/logo.svg')}}" sizes="32x32" />

    <script type='text/javascript' src="{{ asset('front/wp-includes/js/jquery/jquery.min.js')}}" id='jquery-core-js'></script>

    <script type='text/javascript' src="{{ asset('front/assets/js/jquery/jquery-migrate.min.js')}}"></script>

    <script type='text/javascript' src="{{ asset('front/assets/plugins/mailjet-for-wordpress/src/widget/js/front-widget.js')}}"></script>

    <script src="https://kit.fontawesome.com/7ecf8dac4e.js" crossorigin="anonymous"></script>
</head>

<body class="page-template page-template-templates page-template-download-page page-template-templatesdownload-page-php page page-id-4445 ">

    @include('front.pages.partials.nav')
    
    @include('front.pages.partials.nav_mobile')

    @yield('content')


    @include('front.main.partials.popup_ourpurpose')

    @include('front.partials.footer')


    <script src="{{ asset('front/assets/js/jquery/jquery.min.js')}}"></script>

    @include('front.partials.scripts')



</body>


</html>