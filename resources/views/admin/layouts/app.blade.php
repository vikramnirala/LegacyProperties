<!DOCTYPE html>
<!-------------------------------------------------------------------------------
 * File       	    : db_user-index.html (LPMSV Web Application - v1.0.0)
 * Title            : Legacy Client TM Portal
 * Description		: Legacy Property Management Client Account Login
 * Website          : http://www.lpmsiliconvalley.com (C)2017
 * Last Updated		: 06/28/2017
---------------------------------------------------------------------------------->
<html>
    <head>
		<!--======= Title ==========================-->
        <title>Legacy Property Management - My Account - Dashoard</title>
		<!--======= Meta Tags ======================-->
        @meta
        @php ($url='')
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />		
        <meta name="robots" content="index, follow"/>
        <meta name="description" content="Legacy Property Management Account Sign In - Log into your Legacy account or register for free">
        <meta name="keywords" content="Legacy Property Management, Legacy Property Management of Silicon Valley, Property Management, Silicon Valley, Silicon Valley Property Management, Quality Property Management, Account Sign In, Account Registration ">
        <meta name="author" content="Legacy Property Management of Silicon Valley">
    	<!--======= Favicon ========================-->
		<link rel="icon" href="public/assets/theme/images/logo/icon/favicon.png"/>
        <link rel="shortcut icon" href="public/assets/theme/images/logo/icon/favicon.png"/>
		<!--======= Core CSS Source ===============-->
		<link href="{{ asset($url.'assets/theme/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset($url.'assets/theme/css/app.min.css') }}" rel="stylesheet">
		<link href="{{ asset($url.'assets/theme/css/fusion.css') }}" rel="stylesheet">
    </head>
<body>

    {{--Page--}}
    @yield('page')

    {{--Common Scripts--}}
    {{ Html::script('public/assets/app/js/app.js') }}

    {{--Laravel Js Variables--}}
    @tojs
    
    
    
    {{--Scripts--}}
    <!-- Framework -->
    <script src="{{ asset($url.'assets/theme/js/lib/framework/jquery/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/js/lib/framework/bootstrap/bootstrap.min.js') }}"></script>
    
    
    <!-- Plugins -->
    <script src="{{ asset($url.'assets/theme/js/lib/ui/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/js/lib/ui/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/js/lib/ui/pace/pace.min.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/js/lib/ui/waves/waves.js') }}"></script>

    <!-- Core -->
    <script src="{{ asset($url.'assets/theme/js/app.js') }}"></script>

</body>
</html>
