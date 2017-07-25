<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--CSRF Token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--Title and Meta--}}
        @meta
        @php ($url='')
        {{--Common App Styles--}}
        <!--{{ Html::style(mix('assets/app/css/app.css')) }} -->
        <link rel="stylesheet" href="{{ asset($url.'assets/theme/css/app.min.css') }}">
        <link rel="stylesheet" href="{{ asset($url.'assets/theme/css/fusion.css') }}">

        {{--Styles--}}
        @yield('styles')

        {{--Head--}}
        @yield('head')

    </head>
    <body class="@yield('body_class')">

        {{--Page--}}
        @yield('page')

        {{--Common Scripts--}}
        {{ Html::script('assets/app/js/app.js') }}

        {{--Laravel Js Variables--}}
        @tojs
        
        
        
        {{--Scripts--}}
        <!-- App Core JS -->
        <script src="{{ asset('assets/theme/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/theme/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/theme/js/waves.js') }}"></script>

        @yield('scripts')
    </body>
</html>
