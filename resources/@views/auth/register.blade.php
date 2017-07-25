@extends('auth.layouts.auth')

@section('body_class','register')

@section('content')
	<div class="bg-overlay-img"></div>
    <div class="wrapper">
        <!-- MAIN HEADER -->
        <header id="topnav">
            <div class="topbar-main">
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
									<li class="dd-link-active"><a><span class="dd-txt-active">Register</span></a></li>									
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
<div class="reg-form-wrapper form_wrapper">	
		<!--- USER SIGN IN ICON ---> 
		<div class="panel-header">
		<div class="panel-header-img align-center"><img src="assets/images/logo/v2/lpm-symbol-v2-lg-1b.png" width="100px" height="auto"></div>
			<h2 class="panel-header-title align-center">Account Registration</h2>
			<p class="panel-header-text align-center m-b-20">Complete the form below to register</p>
		</div>
		<!-- uncomment for legacy panel circle
		<div class="panel-header-circle">
			<div class="panel-header-ltr">L</div>
        </div>	
		-->	
	<div class="row">
        <div class="panel-body">
			<div class="form">
				{{ Form::open(['route' => 'register', 'id' => 'checkout-form']) }}
					<!--h1>{{ __('views.auth.register.header') }}</h1-->
					<div class="form-group col-md-6 p-r-5">
						<input type="text" name="first_name" class="form-control"
							   placeholder="First Name"
							   value="{{ old('name') }}" required autofocus/>
					</div>
					<div class="form-group col-md-6 p-l-5">
						<input type="text" name="last_name" class="form-control"
							   placeholder="Last Name"
							   value="{{ old('name') }}" required autofocus/>
					</div>
					<div class="form-group">
						<input type="text" name="phone" class="form-control"
							   placeholder="Phone"
							   value="{{ old('phone') }}" required autofocus/>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control"
							   placeholder="email"
							   required/>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control"
							   placeholder="password"
							   required=""/>
					</div>
					<div class="form-group">
						<input type="password" name="password_confirmation" class="form-control"
							   placeholder="confirm password"
							   required/>
					</div>
                    <div class="form-group">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-register" type="checkbox" name="terms" value="1" class="mar-up-25" required/>
                            <label for="checkbox-register" class=""><a href="#">I accept Legacy's terms and conditions</a></label>
                        </div>
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

					<!-- @if(config('auth.captcha.registration'))
						@captcha()
					@endif -->
					<div>
						<button type="submit" class="btn submit  btn-thmnavy waves-effect waves-light width-100">
						{{ __('views.auth.register.action_1') }}</button>
					</div>

					<div class="clearfix"></div>

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
@endsection

@section('styles')
    <!--@parent

    {{ Html::style(mix('assets/auth/css/login.css')) }}
    {{ Html::style('assets/app/css/app.b31c35e7f389a0a62d0dfbf6e592fbcd.css') }}-->
	<link rel="stylesheet" href="{{ asset('assets/custom/app.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/theme/js/form.errors.js') }}"></script>
    <script src="{{ asset('assets/theme/js/lib/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/lib/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/theme/js/lib/validation/jquery.validate.defaults.js') }}"></script>
    <script src="{{ asset('assets/theme/js/lib/validation/formvalidation.js') }}"></script>
@endsection
