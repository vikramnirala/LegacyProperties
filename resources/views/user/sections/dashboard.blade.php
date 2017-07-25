@extends('user.layouts.layout')
@extends('user.sections.sidebar')
@extends('user.sections.navigation')
@section('title', 'Dashboard')
@section('add-menu')
@endsection

@section('content')
<!-- BEGIN MAIN CONTENT -->	
<div class="wrapper wrapper-content container">
	<div class="m-b-40">
        <div class="row m-t-40">
					<!-- IBOX STAT INFO 1 -->    		
					<div class="col-lg-4">
                        <div class="ibox float-e-margins ibox-border ibox-shadow">
                            <div class="ibox-title">
                                <small class="pull-right gray">Status</small>
                                <h5><i class="ion-android-home m-r-10 font-18p"></i>Application</h5>
                            </div>
                            <div class="ibox-content p-b-30">
                                <div class="text-left">
									<h1 class="no-margins thm-color-1">1 Pending</h1>
									<small>Started: 10/06/2017</small>
									<div class="fl-r"><a href="db_user-new-client-app.html"><button type="button" class="btn btn-xs bg-app-blue"><i class="fa fa-arrow-right p-r-5"></i>Continue</button></a></div>
                                </div>
                            </div>	
                        </div>
                    </div>
					<!-- IBOX STAT INFO 2 -->       
					<div class="col-lg-4">
                        <div class="ibox float-e-margins ibox-border ibox-shadow">
                            <div class="ibox-title">
                                <small class="pull-right gray">Account</small>
                                <h5><i class="ion-android-home m-r-10 font-18p"></i>My Properties</h5>
                            </div>
                            <div class="ibox-content p-b-30">
                                <div class="text-left">
									<h1 class="no-margins thm-color-1">3 Properties</h1>
									<small>You have 3 active properties</small>
									<div class="fl-r"><a href="#"><button type="button" class="btn btn-xs bg-app-blue"><i class="fa fa-arrow-right p-r-5"></i>Portfolio</button></div>									
                                </div>
                            </div>	
                        </div>
                    </div>
					<!-- IBOX STAT INFO 3 -->    	
					<div class="col-lg-4">
                        <div class="ibox float-e-margins ibox-border ibox-shadow">
                            <div class="ibox-title">
                                <small class="pull-right gray">Inbox</small>
                                <h5><i class="ion-android-home m-r-10 font-18p"></i>Notifications</h5>
                            </div>
                            <div class="ibox-content p-b-30">
                                <div class="text-left">
									<h1 class="no-margins thm-color-1">2 Messages</h1>
									<small>You have unread messages</small>
									<div class="fl-r"><a href="#"><button type="button" class="btn btn-xs bg-app-blue"><i class="fa fa-arrow-right p-r-5"></i>Inbox</button></div>									
                                </div>
                            </div>	
                        </div>
                    </div> 														
        </div>
		<!-- END IBOX STAT PANELS -->
		
		<!-- ROW 2 -->
		<div class="row">
		<!-- TASK LIST -->
					<div class="col-lg-12 p-t-10 p-b-10">
                                <div class="ibox float-e-margins ibox-shadow ibox-l-b-navy">
                                    <div class="ibox-title">
                                        <h5>Pending Task</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
										<table class="table table-hover margin bottom">
                                            <thead>
                                             <tr>
                                                <th style="width: 7%" class="text-left">Item</th>
                                                <th>Task</th>
                                                <th class="text-right">Status</th>
                                             </tr>       
                                            </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><span class="label label-success">1</span></td>
															<td> 
															<a href="#">
																<strong>New Property Application</strong><br/>
																<span class="text-muted font-13p">complete the application you started on 10/06/2017</span>
															</a>	
															</td>
                                                        <td class="text-right small">Pending</td>
													</tr>												
                                                    <tr>
                                                        <td class="text-left"><span class="label label-success">2</span></td>
                                                        <td> 
														<a href="#">
															<strong>Select Property Services</strong><br/>
															<span class="text-muted font-13p">select your custom package services</span>
														</a>	
														</td>
                                                        <td class="text-right small">Pending</td>
													</tr>
                                                    <tr>
                                                        <td class="text-left"><span class="label label-success">3</span></td>
                                                        <td>
														<a href="#">
															<strong>Refer A Friend</strong><br/>
															<span class="text-muted font-13p">earn a referal discount on your first month's service. See details</span>
														</a>
														</td>
                                                        <td class="text-right small">Pending</td>
													</tr>
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
					<!-- PROPERTY PORTFOLIO -->
					<div class="col-lg-12 p-b-10">
                                <div class="ibox float-e-margins ibox-shadow ibox-l-b-navy">
                                    <div class="ibox-title">
                                        <h5>Property Portfolio</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
										<table class="table table-hover margin bottom">
                                            <thead>
                                             <tr>
                                                <th style="width:7%" class="text-left">No.</th>
                                                <th>Property</th>
                                                <th class="text-right">Status</th>
                                             </tr>       
                                            </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><span class="label label-success">1</span></td>
															<td> 
															<a href="#">
																<strong>705 Tahiti Lane, Los Angeles CA</strong><br/>
																<span class="text-muted font-13p">Legacy managed since 05/06/2016</span>
															</a>	
															</td>
                                                        <td class="text-right" small">Active</td>
													</tr>												
                                                    <tr>
                                                        <td class="text-left"><span class="label label-success">2</span></td>
                                                        <td> 
														<a href="#">
															<strong>1221 Nashville Court, New York NY</strong><br/>
															<span class="text-muted font-13p">Legacy managed since 10/21/2014</span>
														</a>	
														</td>
                                                        <td class="text-right small">Active</td>
													</tr>
                                                    <tr>
                                                        <td class="text-left"><span class="label label-success">3</span></td>
                                                        <td>
														<a href="#">
															<strong>728 Monterey Drive, Santa Cruz CA</strong><br/>
															<span class="text-muted font-13p">Awaiting application approval</span>
														</a>
														</td>
                                                        <td class="text-right small">Pending</td>
													</tr>
                                                </tbody>
                                        </table>									
										<div class="content_right mar-up-10 p-0">
											<a href="db_user-new-client-app.html" class="btn btn-rounded btn-sm bg-app-blue btn-shadow waves-effect waves-light m-t"><i class="fa fa-arrow-right p-r-5"></i> Add New Property</a>
										</div>
                                    </div>
                                </div>
                            </div>
					<!-- MESSAGES -->		
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins ibox-shadow ibox-l-b-navy">
                            <div class="ibox-title">
                                <h5>Messages</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content Roboto">
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <div>
                                            <div class="badge badge-warning pull-right">new</div>
                                            <strong class="black">Admin, Legacy Property</strong>
                                            <div>Hi John, Please complete your new client application to begin your services with Legacy Property.</div>
                                            <small class="block text-muted"><i class="fa fa-clock-o p-t-10"></i> Today 5:60 pm - 12.06.2014</small>
                                        </div>
                                    </div>
                                    <div class="feed-element feed-last-element font-14p Roboto">
                                        <div>
											<div class="badge badge-warning pull-right">new</div>
                                            <strong class="black">Admin, Legacy Property</strong>
                                            <div>Hi John, we wish you a warm welcome to Legacy Property.</div>
                                            <small class="block text-muted"><i class="fa fa-clock-o p-t-10"></i> Today 2:23 pm - 11.06.2014</small>
                                        </div>
                                    </div>
										<div class="content_right mar-up-10 p-0">
											<a href="#" class="btn btn-rounded btn-sm bg-app-blue btn-shadow waves-effect waves-light m-t"><i class="fa fa-arrow-right p-r-5"></i> View Inbox</a>
										</div>								
                                </div>
                            </div>
                        </div>
                    </div> 								
					<!-- END MESSAGES -->		
	</div>
	<!-- END ROW 2 -->

	</div>
	<!-- /CONTENT ROW -->
</div>
@endsection

@section('js')
@endsection