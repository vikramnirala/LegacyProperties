@extends('auth.layouts.auth')

@section('body_class','passwords_email')

@section('content')
    <div class="wrapper">
	<div class="bg-overlay-img"></div> 
        <!-- MAIN HEADER -->
        <header id="topnav">
            <div class="topbar-main" style="min-height:58px;">
				<div class="container">
					<div class="topnav-logo"><a href=""><img src="assets/images/logo/v2/logo-v2-57x57.jpg" width="52px" height="auto"></a></div>
						<!-- Topnav Links -->
						<div class="topnav-links">					
							<div class="topnav-link-btn btn-active"><span class="topnav-link-text">REGISTER</span></div>
							<a href="/login"><div class="topnav-link-btn btn-active-link"><span class="topnav-link-text">SIGN IN</span></div></a>				
							<!-- User Account Button -->
							<div class="user-account-btn hide-this">
								<button type="button" class="btn menu-btn dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="pe-7s-user"></i></button>
							</div>		
						</div>	
					
						<!-- Menu Button -->
						<div class="menu-btn-wrap">
							<div class="btn-group pull-left">
								<button type="button" class="btn menu-btn dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="ion-grid font-21p"></i></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Legacy Website</a></li>
									<li class="divider"></li>
									<li><a href="login.html">Sign In</a></li>
									<li class="divider"></li>	
									<li><a href="register.html">Register</a></li>								
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

	<!-- MAIN CONTAINER -->
    <div class="container">
					
<!-------/ REGISTER FORM /-------> 
<div class="psw-reset-form form_wrapper">	

		<!--- USER SIGN IN ICON ---> 
		<div class="panel-header width-70">
			<h2 class="panel-header-title align-center">Recover Password</h2>
			<p class="panel-header-text align-center m-b-20">Please enter your account email and recovery instructions will be sent to you</p>			
		</div>
    <div class="container">	
	<div class="row">
        <div class="panel-body">
			<div class="form">
				{{ Form::open(['route' => 'password.email']) }}
					<!--h1>{{ __('views.auth.passwords.email.header') }}</h1-->

					<div class="form-group">
						<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
							   placeholder="{{ __('views.auth.passwords.email.input') }}" required autofocus>
					</div>

					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

					@if (!$errors->isEmpty())
						<div class="alert alert-danger" role="alert">
							{!! $errors->first() !!}
						</div>
					@endif

					<div class="text-center">
						<button class="btn submit btn-slim btn-thmnavy waves-effect waves-light width-100" type="submit">{{ __('views.auth.passwords.email.action') }}</button>
						<a class="reset_pass form-text" href="{{ route('login') }}">
							{{ __('views.auth.passwords.email.message') }}
						</a>
					</div>

					<div class="clearfix"></div>

					<div class="separator">
						<div  class="text-center">
							<div class="h1">{{ config('app.name') }}</div>
							<p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.passwords.email.copyright') }}</p>
						</div>
					</div>
				{{ Form::close() }}
			</div>				
		</div>
	 </div>			
   </div>
</div>
<!-------/ END REGISTER FORM /-------> 



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


	</div>
    <!-- END MAIN CONTAINER -->
@endsection

@section('styles')
    @parent

    {{ Html::style(mix('assets/auth/css/passwords.css')) }}{{ Html::style('assets/app/css/app.b31c35e7f389a0a62d0dfbf6e592fbcd.css') }}
	<link rel="stylesheet" href="{{ asset('assets/custom/app.css') }}">
@endsection