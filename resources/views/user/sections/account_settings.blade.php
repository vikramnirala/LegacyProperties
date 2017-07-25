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
			<!-- SETTINGS -->
			<div class="col-lg-12 p-t-10 p-b-10">
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
                                    <td class="text-left black no-borders">Push Notifications:</td>
									<td class="text-left no-borders">                    
										<div class="switch">
											<div class="onoffswitch">
												<input type="checkbox" name="notifybypush" checked class="onoffswitch-checkbox" id="notifybypush">
												<label class="onoffswitch-label" for="notifybypush">
													<span class="onoffswitch-inner"></span>
													<span class="onoffswitch-switch"></span>
												</label>
											</div>
										</div>
									</td>
								</tr>
                                <tr>
                                    <td class="text-left black no-borders">Chat Feature:</td>
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
                                    <td class="text-left black no-borders">Text Notifications:</td>
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
                                    <td class="text-left black no-borders">Email Notifications:</td>
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