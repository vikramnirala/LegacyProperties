<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Meta title & meta -->
        @meta
        @php ($url='')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset($url.'assets/custom/app.css') }}">
		<link rel="stylesheet" href="{{ asset($url.'assets/custom/fusion.css') }}">
        <!-- Styles -->
		
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .footer {
                position:fixed;
                width:100%;
                height:20px;
                padding:5px;
                bottom:0px;
                font-size: smaller;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <!-- Laravel variables for js -->
        @tojs
    </head>
    <body>
        <div class="wrapper" style="margin:0px;">
        <!-- MAIN HEADER -->
        <header id="topnav">
            <div class="topbar-main" style="min-height:58px;">
				<div class="container">
					<div class="topnav-logo"><a href=""><img src="assets/images/logo/v2/logo-v2-57x57.jpg" width="52px" height="auto"></a></div>
						<!-- Topnav Links -->
                        
                        
                        
                        
                        @if (Route::has('login'))
						<div class="topnav-links">		
                            @if (!Auth::check())
                                @if(config('auth.users.registration'))
                                    <a href="{{ url('/register') }}"><div class="topnav-link-btn btn-active">
                                        <span class="topnav-link-text">REGISTER</span>
                                    </div></a>
                                @endif
                                <a href="{{ url('/login') }}"><div class="topnav-link-btn btn-active-link">
                                    <span class="topnav-link-text">SIGN IN</span>
                                </div></a>
                            @else
                                <a href="{{ url('/logout') }}"><div class="topnav-link-btn btn-active-link">
                                    <span class="topnav-link-text">{{ __('views.welcome.logout') }}</span>
                                </div></a>
                                @if(auth()->user()->hasRole('administrator'))
                                    <a href="{{ url('/admin') }}"><div class="topnav-link-btn btn-active-link">
                                        <span class="topnav-link-text">{{ __('views.welcome.admin') }}</span>
                                    </div></a>
                                @endif
                            @endif
                            
                            <!-- User Account Button -->
							<div class="user-account-btn hide-this">
								<button type="button" class="btn menu-btn dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="pe-7s-user"></i></button>
							</div>		
                            
						</div>
                        @endif                        
					
						<!-- Menu Button -->
						<div class="menu-btn-wrap">
							<div class="btn-group pull-left">
								<button type="button" class="btn menu-btn dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="ion-grid font-21p"></i></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Legacy Website</a></li>
									<li class="divider"></li>
									<li><a href="/login">Sign In</a></li>
									<li class="divider"></li>	
									<li><a href="/register">Register</a></li>								
									<li class="divider"></li>
									<li><a href="support.html">Support</a></li>
									<li class="divider"></li>
									<li><a href="legal-termsofuse.html">Terms of Use</a></li>
									<li class="divider"></li>
									<li><a href="legal-privacy">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					<!-- End Menu Button -->
					<!-- topnav logo -->
                </div>				
            </div>
        </header>
        <!-- END MAIN HEADER -->
        </div>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                   Legacy Properties
                </div>
                <div class="m-b-md">
                   Sample users:<br/>
                   Admin user: admin@tastycoders.com / password: admin<br/>
                   Demo user: demo@tastycoders.com / password: demo
                </div>
            </div>
        </div>
        
        <!-------/ FOOTER /-------> 
        <footer class="footer-gray text-right">
            <div class="container">
                <div class="row">
                    <div class="width-100">
                        <ul class="content_center list-inline m-b-0">
                            <li>
                                <a href="#" class="easyIn">Legacy Property Management &copy;2017</a>
                            </li>								
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-------/ END FOOTER /-------> 
        
        {{--Common Scripts--}}
        

        {{--Laravel Js Variables--}}
        @tojs
                
        {{--Scripts--}}
         <!-- App Core JS -->
    <script src="{{ asset($url.'assets/theme/js/app.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/js/plugins.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/js/waves.js') }}"></script>
    
    <!-- App Form Validation JS -->
     <script src="{{ asset($url.'assets/theme/js/form.errors.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/lib/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/lib/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/lib/validation/jquery.validate.defaults.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/lib/validation/formvalidation.js') }}"></script>
    <script src="{{ asset($url.'assets/theme/lib/ui/pace/pace.min.js') }}"></script>

       
    
    </body>
</html>
