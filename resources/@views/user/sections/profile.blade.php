@extends('user.layouts.layout')
@extends('user.sections.sidebar')
@extends('user.sections.navigation')
@section('title', 'Dashboard')
@section('add-menu')
@endsection

@section('content')

<ul class="content-nav content-nav-navbar content-nav-navbar-content" style="list-style:none!important;">
        <div class="tabs-container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-1"> Profile</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2">Settings</a></li>
                <li class="add_admin"><a  href="#"><span><i class="fa fa-user-plus" aria-hidden="true"></i></span> Add Admin</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                	{{ Form::open(['route' => 'updateprofile', 'id' => 'checkout-form']) }}
                    <div class="panel-body">
                       <div class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-lg-6"><label class="col-lg-4 control-label">First Name</label>
                                    <div class="col-lg-8"><input type="text" name="first_name" placeholder="First Name" class="form-control" value="{{ auth()->user()->first_name }}"></div>
                                </div>
                                <div class="form-group col-lg-6"><label class="col-lg-4 control-label">Last Name</label>
                                    <div class="col-lg-8"><input type="text" name="last_name" placeholder="Last Name" class="form-control" value="{{ auth()->user()->last_name }}"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6"><label class="col-lg-4 control-label">Phone</label>
                                    <div class="col-lg-8"><input type="phone" name="phone" placeholder="Phone" class="form-control" value="{{ auth()->user()->phone }}"></div>
                                </div>
                                <div class="form-group col-lg-6"><label class="col-lg-4 control-label">Email</label>
                                    <div class="col-lg-8"><input type="email" name="email" placeholder="Email" class="form-control" value="{{ auth()->user()->email }}"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12"><label class="col-lg-2 control-label">Street Addressa</label>
                                    <div class="col-lg-10"><input type="text" name="street_address" placeholder="Street Address" class="form-control" value="{{ auth()->user()->street_address }}"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-4"><label class="col-lg-4 control-label">City</label>
                                    <div class="col-lg-8"><input type="text" name="city" placeholder="City" class="form-control" value="{{ auth()->user()->city }}"></div>
                                </div>
                                <div class="form-group col-lg-4"><label class="col-lg-4 control-label">State</label>
                                    <div class="col-lg-8"><input type="state" name="state" placeholder="State" class="form-control" value="{{ auth()->user()->state }}"></div>
                                </div>
                                <div class="form-group col-lg-4"><label class="col-lg-4 control-label">Zip</label>
                                    <div class="col-lg-8"><input type="text" name="zip" placeholder="Zip" class="form-control" value="{{ auth()->user()->zip }}"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6"><label class="col-lg-4 control-label">Password</label>
                                    <div class="col-lg-8"><input type="password" name="password" placeholder="Password" class="form-control" value="{{ auth()->user()->password }}"></div>
                                </div>
                            </div>
                            <div class="buttons">
                            	<input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                       </div>
                    </div>
                    {{ Form::close() }}
                </div>
                <div id="tab-2" class="tab-pane">
                    <div class="panel-body">
                        b
                    </div>
                </div>
            </div>
              
        
	</ul>


<div class="footer_spacer" style="height: 50px;"></div>

@endsection

@section('js')
@endsection