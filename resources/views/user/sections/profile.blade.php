@extends('user.layouts.layout')
@extends('user.sections.sidebar')
@extends('user.sections.navigation')
@section('title', 'Dashboard')
@section('add-menu')
@endsection

@section('content')

<!-- BEGIN MAIN CONTENT -->	
<div class="wrapper wrapper-content container">
	<div class="m-l-15 m-b-40">
        <div class="row m-t-40">
			<!-- PROFILE INFO -->
			<div class="col-lg-12 p-t-10 p-b-10">
                <div class="ibox float-e-margins ibox-shadow ibox-l-b-navy">
                    <div class="ibox-title">
						<h5><i class="ion-person m-r-10 font-18p"></i>Account Information</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
						{{ Form::open(['route' => 'profile.update', 'id' => 'checkout-form']) }}
                            <div class="form-group col-lg-12">
                                <label for="userName" class="col-sm-1 control-label" style="padding-right:0;">Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control font-14p" id="userName" value="{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}" disabled="disabled">
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="userAddress" class="col-sm-1 control-label" style="padding-right:0;">Street Address</label>
                                <div class="col-sm-6">
                                    <input name="street_address" type="text" class="form-control no-bg font-14p" id="userAddress" value="{{ auth()->user()->street_address }}">
								</div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="city" class="col-sm-1 control-label" style="padding-right:0;">City</label>
                                <div class="col-sm-6">
                                    <input name="city" type="text" class="form-control no-bg font-14p" id="city" value="{{ auth()->user()->city }}">
								</div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="state" class="col-sm-1 control-label" style="padding-right:0;">State</label>
                                <div class="col-sm-6">
                                    <input name="state" type="text" class="form-control no-bg font-14p" id="state" value="{{ auth()->user()->state }}">
								</div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="zip" class="col-sm-1 control-label" style="padding-right:0;">Zip</label>
                                <div class="col-sm-6">
                                    <input name="zip" type="text" class="form-control no-bg font-14p" id="zip" value="{{ auth()->user()->zip }}">
								</div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="userPhone" class="col-sm-1 control-label" style="padding-right:0;">Phone</label>
                                <div class="col-sm-6">
                                    <input name="phone" type="tel" class="form-control no-bg font-14p" id="userPhone" value="{{ auth()->user()->phone }}" maxlength="10">
								</div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="userEmail" class="col-sm-1 control-label" style="padding-right:0;">Email</label>
                                    <div class="col-sm-6">
                                    <input name="email" type="email" class="form-control no-bg font-14p" id="userEmail" value="{{ auth()->user()->email }}">
                                </div>
                            </div>
                            <div class="form-group">
								<div class="col-lg-12 m-l-50 m-t-10">
                                    <input name="id" type="hidden" value="{{ auth()->user()->id }}">
									<button type="submit" class="btn btn-rounded btn-mini bg-app-blue btn-shadow waves-effect waves-light"><i class="fa fa-arrow-right p-r-5"></i>Update Profile</button>
								</div>
                            </div>
                        {{ Form::close() }}
                        <div style="clear:both;" class="clr"></div>
                    </div>
                </div>
            </div>
			<!-- PROFILE PASSWORD -->
			<div class="col-lg-12 p-t-10 p-b-10">
                <div class="ibox float-e-margins ibox-shadow ibox-l-b-navy">
                    <div class="ibox-title">
						<h5><i class="ion-ios-locked m-r-10 font-18p"></i>Account Password</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
						{{ Form::open(['route' => 'password.update', 'id' => 'checkout-form']) }}
                            <div class="form-group col-lg-12">
                                <label for="userActivePsw" class="col-sm-2 control-label" style="padding-right:0;">Current Password</label>
                                <div class="col-sm-6">
                                    <input type="password" name="current_password" class="form-control no-bg font-14p" id="userActivePsw" placeholder="Enter Current Password">
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="userNewPsw" class="col-sm-2 control-label" style="padding-right:0;">New Password</label>
                                <div class="col-sm-6">
                                    <input name="new_password" type="password" class="form-control no-bg font-14p" id="userNewPsw" placeholder="Enter New Password">
								</div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="userNewPswConfirm" class="col-sm-2 control-label" style="padding-right:0;">Confirm Password</label>
                                <div class="col-sm-6">
                                    <input name="confirm_password" type="password" class="form-control no-bg font-14p" id="userNewPswConfirm" placeholder="Confirm New Password">
								</div>
                            </div>
                            <div class="form-group">
								<div class="col-lg-12 m-l-50 m-t-10">
									<a href="#" class="btn btn-rounded btn-mini bg-app-blue btn-shadow waves-effect waves-light"><i class="fa fa-arrow-right p-r-5"></i>Update Password</a>
								</div>
                            </div>
                       {{ Form::close() }}
                       <div style="clear:both;" class="clr"></div>
                    </div>
                </div>
            </div>
			<!-- PROFILE DETAILS -->
			<div class="col-lg-12 p-t-10 p-b-10">
                <div class="ibox float-e-margins ibox-shadow ibox-l-b-navy">
                    <div class="ibox-title">
						<h5><i class="ion-android-list m-r-10 font-18p"></i>Profile Details</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
						<table class="table margin bottom width-100">
                            <thead>
                                <tr>
                                    <th style="width:170px;" class="text-left no-borders"></th>
                                    <th class="no-borders"></th>
                                </tr>       
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left black no-borders">Properties:</td>
									<td class="text-left no-borders"><span class="black">2</span></td>
								</tr>
                                <tr>
                                    <td class="text-left black no-borders">Member Since:</td>
									<td class="text-left no-borders"><span class="black">Jan 2, 2017</span></td>
								</tr>
                                <tr>
                                    <td class="text-left black no-borders">Last Sign In:</td>
									<td class="text-left no-borders"><span class="black">05/19/2017</span></td>
								</tr>
                            </tbody>
                        </table>					
                    </div>
                </div>
            </div>	
            <!-- PROFILE SETTINGS -->
			<div class="col-lg-12 p-b-10">
                <div class="ibox float-e-margins ibox-shadow ibox-l-b-navy">
                    <div class="ibox-title">
						<h5><i class="ion-gear-a m-r-10 font-18p"></i>Account Settings</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
						<table class="table margin bottom width-100">
                            <thead>
                                <tr>
                                    <th style="width:250px;" class="text-left no-borders"></th>
                                    <th class="no-borders"></th>
                                </tr>       
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left black no-borders">Remember Sign In:</td>
									<td class="text-left no-borders">                    
										<div class="switch">
											<div class="onoffswitch">
												<input type="checkbox" name="enablelogininfo" class="onoffswitch-checkbox" id="enablelogininfo">
												<label class="onoffswitch-label" for="enablelogininfo">
													<span class="onoffswitch-inner"></span>
													<span class="onoffswitch-switch"></span>
												</label>
											</div>
										</div>
									</td>
								</tr>							
                                <tr>
                                    <td class="text-left black no-borders">Enable Chat Feature:</td>
									<td class="text-left no-borders">                    
										<div class="switch">
											<div class="onoffswitch">
												<input type="checkbox" name="enablechat" checked class="onoffswitch-checkbox" id="enablechat">
												<label class="onoffswitch-label" for="enablechat">
													<span class="onoffswitch-inner"></span>
													<span class="onoffswitch-switch"></span>
												</label>
											</div>
										</div>
									</td>
								</tr>
                                <tr>
                                    <td class="text-left black no-borders">Allow Text Notifications:</td>
									<td class="text-left no-borders">                    
										<div class="switch">
											<div class="onoffswitch">
												<input type="checkbox" name="notifybytext" checked class="onoffswitch-checkbox" id="notifybytext">
												<label class="onoffswitch-label" for="notifybytext">
													<span class="onoffswitch-inner"></span>
													<span class="onoffswitch-switch"></span>
												</label>
											</div>
										</div>
									</td>
								</tr>
                                <tr>
                                    <td class="text-left black no-borders">Allow Email Notifications:</td>
									<td class="text-left no-borders">                    
										<div class="switch">
											<div class="onoffswitch">
												<input type="checkbox" name="notifybyemail" checked class="onoffswitch-checkbox" id="notifybyemail">
												<label class="onoffswitch-label" for="notifybyemail">
													<span class="onoffswitch-inner"></span>
													<span class="onoffswitch-switch"></span>
												</label>
											</div>
										</div>
									</td>
								</tr>								
                            </tbody>
                        </table>					
                    </div>
                </div>
            </div>
            
	</div>
	<!-- /CONTENT ROW -->
</div>
<!-- /CONTENT WRAPPER -->

</div>


<div class="footer_spacer" style="height: 50px;"></div>

@endsection

@section('js')
@endsection