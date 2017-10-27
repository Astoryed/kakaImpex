<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kakaimpex') }}</title>
    <link rel="icon" type="image/jpg" href="img/toplogo.jpg">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/design.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-countryselector.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{asset('js/jquery-3.1.1.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),]) !!};
    </script>
</head>
<body>
<div id="app">

    @yield('adminPanel')

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

<script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.countrySelector.js') }}"></script>
<script src="{{asset('js\lightbox-plus-jquery.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>


<script>

    $(document).ready(function () {
        $('nav ul li').hover(function () {
            $(this).find('ul').stop(true, false,true).fadeToggle(100);
        });
    });

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }


</script>

</body>
</html>
