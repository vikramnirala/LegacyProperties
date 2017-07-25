@extends('user.layouts.layout')
@extends('user.sections.sidebar')
@extends('user.sections.navigation')
@section('title', 'Dashboard')
@section('add-menu')
@endsection

@section('content')
<!-- BEGIN MAIN CONTENT -->	
<div class="wrapper wrapper-content container">
	<!-- MAIN CONTAINER -->
	<div class="m-t-15">
    <!-- NOTIFY USER -->
	<div class="row">
		<div id="msg-notifyuser" class="ns-box ns-bar topright ns-effect-exploader info ns-show"><div class="ns-box-inner"><span class="icon pe-7s-attention"></span><p>John, the form below will help us to better customize your services with Legacy. Please complete all fields. If you have any questions <a href="#" class="active-link-white">contact us</a> here</p></div><span class="ns-close"></span></div>
	</div>
	<!-- END NOTIFICATION -->
			
	<!-- BEGIN CONTENT FORM -->
	{!! Form::open(['url' => '/new-client-application-submit', 'id'=>'frm_propApplication', 'name'=>'frm_propApplication', 'class'=>'p-b-70']) !!}
	<!--form class="p-b-70" id="frm_propApplication" name="frm_propApplication" method="POST" action="/new-client-application-submit"-->
	
		<!-- BEGIN FORM ROW 1 -->
		<div class="width-100" style="overflow:hidden;">

	<h3>Property</h3>	
	<!-- BEGIN STEP 1 -->
	<section id="step_1" class="no-bg current">
		
		<div class="row">
			<div class="col-lg-12 p-t-15 p-b-5">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>PROPERTY DETAILS</h5>						
					</div>

					<div class="ibox-content">
						<div class="container width-100">
						
							<div class="col-lg-12 no-val">
								<div class="form-group col-lg-6">
									<label>Please enter the property street address below</label>
									<input id="prop_address_street"  name="prop_address_street" class="form-control required" type="text"  placeholder="i.e. 123 Applewood Court" required="">
								</div>
								<div class="form-group col-lg-2">
									<label>City</label>
									<input id="prop_address_city" name="prop_address_city" class="form-control required" type="text"  placeholder="i.e. San Jose" required="">
								</div>	
								<div class="form-group col-lg-2">
									<label>State</label>
									<select id="prop_address_state" name="prop_address_state" class="form-control required" required="">
										<option class="placeholder" selected disabled value=""><span>Select State</span></option>
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>									
								</div>	
								<div class="form-group col-lg-2">	
									<label>Zip</label>								
									<input id="prop_address_zip" name="prop_address_zip" class="form-control required" type="text"  placeholder="i.e. 95051" required="">								
								</div>									
							</div>
							<div class="col-lg-12 no-val">
								<div class="form-group col-lg-3" id="propAvailDate">
									<label>Property availablity date<a href="#"><i class="md md-help font-17p"></i></a></label>
									<div class="input-group date">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="prop_avail_date" name="prop_avail_date" class="form-control required" type="text"  placeholder="mm/dd/yyyy" required=""/>
									</div>
								</div>
								<div class="form-group col-lg-3" id="propBuildYear">
									<label>Year property was built<a href="#"><i class="md md-help font-17p"></i></a></label>
									<div class="input-group year">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="prop_build_year" name="prop_build_year" class="form-control required" type="text" placeholder="yyyy" required="">
									</div>
								</div>
								<div class="form-group col-lg-3">
									<label>Property square feet<a href="#"><i class="md md-help font-17p"></i></a></label>
									<input id="prop_square_feet" name="prop_square_feet" class="form-control required" type="text"  value="" placeholder="i.e. 1,200" required="">
								</div>
								<div class="form-group col-lg-3">
									<label>Lot square feet<a href="#"><i class="md md-help font-17p"></i></a></label>
									<input id="prop_lot_square_feet" name="prop_lot_square_feet" class="form-control required" type="text"  value="" placeholder="1,200" required="">
								</div>								
							</div>
							<div class="col-lg-12 no-val">
								<div class="form-group col-lg-3">
									<label>No. of bedrooms</label>
									<input id="prop_bedroom_qty" name="prop_bedroom_qty" class="touchspin1 required" type="text" value=""  placeholder="1" required="">
								</div>
								<div class="form-group col-lg-3">
									<label>No.of bathrooms</label>
									<input id="prop_bathroom_qty" name="prop_bathroom_qty" class="touchspin1 required" type="text" value=""  placeholder="1" required="">
								</div>
								<div class="form-group col-lg-3">
									<label>No. of additional rooms<a href="#"><i class="md md-help font-17p"></i></a></label>
									<input id="prop_extra_rooms_qty" name="prop_extra_rooms_qty" class="touchspin1 required" type="text" value="" placeholder="0" required="">
								</div>
								<div class="form-group col-lg-3">
									<label>No. of house keys</label>
									<input id="prop_house_keys_qty" name="prop_house_keys_qty" class="touchspin1 required" type="text" value="" placeholder="1" required="">
								</div>
							</div>
							<div class="col-lg-12 no-val">
								<div class="form-group col-lg-3">
									<label>No. of garage remotes</label>
									<input id="prop_garage_remotes_qty" name="prop_garage_remotes_qty" class="touchspin1 requried" type="text" value="" placeholder="1" required="">
								</div>
								<div class="form-group col-lg-3">
									<label>No. of key fobs<a href="#"><i class="md md-help font-17p"></i></a></label>
									<input id="prop_key_fobs_qty" name="prop_key_fobs_qty" class="touchspin1 required" type="text" value="" placeholder="1" required="">
								</div>
								<div class="form-group col-lg-3">
									<label>No. of mailbox keys</label>
									<input id="prop_mailbox_keys_qty" name="prop_mailbox_keys_qty" class="touchspin1 required" type="text" value="" placeholder="1" required="">
								</div>												
								<div class="form-group col-lg-3">
									<label>Mailbox number <a href="#"><i class="md md-help font-17p"></i></a></label>
									<input id="prop_mailbox_num" name="prop_mailbox_num"  class="form-control required" type="text" placeholder="i.e. 12345" required="" >
								</div>
							</div>	
							<div class="col-lg-12 no-val">
								<div class="form-group col-lg-3">
									<label>No. of parking spaces</label>
									<input id="prop_parking_qty" name="prop_parking_qty" class="touchspin1 required" type="text" placeholder="1" required="">
								</div>
								<div class="form-group col-lg-3">
									<label>Parking space number</label>
									<input id="prop_parking_space_num" name="prop_parking_space_num" class="form-control required" type="text" placeholder="i.e.705" required="" >
								</div>
								<div class="form-group col-lg-3">
									<label>Gate access code <a href="#"><i class="md md-help font-17p"></i></a></label>
									<input id="prop_gate_code" name="prop_gate_code" class="form-control required" type="text" placeholder="i.e.#12345" required="" >
								</div>	
								<div class="form-group col-lg-3">
									<label>Alarm System code <a href="#"><i class="md md-help font-17p"></i></a></label>
									<input id="prop_alarm_code" name="prop_alarm_code" class="form-control required" type="text" placeholder="i.e.*12345#" required="" >
								</div>
							</div>	
							<div class="col-lg-12 no-val">	
								<div class="form-group col-lg-12">
									<label>Please list any nearby schools <a href="#"><i class="md md-help font-17p"></i></a></label>
									<input id="prop_nearby_schools" name="prop_nearby_schools" type="text" class="form-control required" placeholder="i.e. Lincoln Elementary" required="" >
								</div>								
							</div>									
											
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12 p-b-5">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>APPLIANCES & AMENITIES</h5>						
					</div>
					<div class="ibox-content">
						<div class="container width-100">
							<div class="no-val">
								<div class="form-group col-lg-12">
									<label>Please list included appliances <a href="#"><i class="md md-help font-17p"></i></a></label>
									<textarea id="prop_home_appliances" name="prop_home_appliances" rows="2" class="form-control required" placeholder="i.e. dishwasher, microwaver, refrigerator..." required="" ></textarea>
								</div>
								<div class="form-group col-lg-12">
									<label>Please list any kitchen amenities <a href="#"><i class="md md-help font-17p"></i></a></label>
									<textarea id="prop_kitchen_amenities" name="prop_kitchen_amenities" rows="2" class="form-control required" placeholder="i.e. kitchen block island, roll-out trash bin, etc.." required="" ></textarea>
								</div>	
								<div class="form-group col-lg-12">
									<label>Age and warranty information of appliances <a href="#"><i class="md md-help font-17p"></i></a></label>
									<textarea id="prop_appliance_warranty" name="prop_appliance_warranty" rows="2" class="form-control required" placeholder="i.e. refigerator - 2yrs old - 4yr warranty " required="" ></textarea>
								</div>
								<div class="form-group col-lg-12">
									<label>Please list all property amenities<a href="#"><i class="md md-help font-17p"></i></a></label>
									<textarea id="prop_all_amenities" name="prop_all_amenities" rows="2" class="form-control required" placeholder="i.e. swimming pool, laundray room, sun deck..." required="" ></textarea>
								</div>									
								<div class="form-group col-lg-12">
									<label>Heating and cooling system information<a href="#"><i class="md md-help font-17p"></i></a></label>
									<textarea id="prop_hvac_system" name="prop_hvac_system" rows="2" class="form-control required" placeholder="i.e. central air conditioning, water heater (list brand and age)" required="" ></textarea>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12 p-b-5">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>WARRANTY & INSURANCE</h5>						
					</div>
					<div class="ibox-content">
						<div class="container width-100">
							<div class="col-lg-12 no-val">
								<div class="form-group col-lg-12">
									<label>Home warranty information<a href="#"><i class="md md-help font-17p"></i></a></label>
									<textarea id="prop_home_warranty" name="prop_home_warranty" rows="2" class="form-control required" placeholder="i.e. AHS Home Warranty, Full-Coverage" required=""></textarea>
								</div>
								<div class="form-group col-lg-12">
									<label>Home insurance information<a href="#"><i class="md md-help font-17p"></i></a></label>
									<textarea id="prop_home_insurance" rows="2" class="form-control required" placeholder="i.e. Allstate Homeowners Insurance, Full-Coverage" required="" ></textarea>
								</div>
							</div>					
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			
			<div class="col-lg-12 p-b-5">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>REPAIRS & MAINTENANCE</h5>						
					</div>
					<div class="ibox-content">
						<div class="container width-100">
							<div class="col-lg-12 no-val">
								<div class="col-lg-4 p-b-5">
								<label>Does the property require repairs?</label><br/>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="radio" id="checkbox_yes_repairs" name="repairs" value="yes repairs required" ><label for="checkbox_repairs" class="m-r-40" required=""> Yes, repairs are required</label>
										<input type="radio" id="checkbox_no_repairs" name="repairs" value="no repairs required" checked><label for="checkbox_repairs" class="m-r-40" required=""> No repairs required </label>
									</div>
								</div>	
								<div class="form-group col-lg-8">
									<label>List all repairs needed</label>
									<textarea id="prop_needed_repairs" name="prop_needed_repairs" rows="2" class="form-control" placeholder="i.e. garage needs replacement door"></textarea>
								</div>
							</div>
							<div class="col-lg-12 no-val p-b-5 p-t-10">
								<div class="hr_lht-gray"></div>
							</div>	
							<div class="col-lg-12 no-val">
								<div class="col-lg-4 p-b-15">
									<label>Does the property require maintenance?</label><br/>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="radio" id="checkbox_yes_maintenance" name="maintenance" value="yes maintenance required" ><label for="checkbox_yes_maintenance" class="m-r-40" required=""> Yes, maintenance is required</label>
										<input type="radio" id="checkbox_no_maintenance" name="maintenance" value="no maintenance required" checked><label for="checkbox_no_maintenance" class="m-r-40" required=""> No maintenance required </label>
									</div>
								</div>	
								<div class="form-group col-lg-8">
									<label>List all maintenance needed</label>
									<textarea id="prop_needed_maintenance" name="prop_needed_maintenance" rows="2" class="form-control" placeholder="i.e. lawn requires regular upkeep" ></textarea>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-12 p-b-5">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>SERVICE VENDORS</h5>						
					</div>
					<div class="ibox-content">
						<div class="container width-100">
							<div class="col-lg-12 p-b-5">
								<label>Does the property have any service vendors?<a href="#"><i class="md md-help font-17p"></i></a></label><br/>
								<div class="checkbox checkbox-circle checkbox-info checkbox-inline p-t-10">
									<input type="radio" id="checkbox_yes_vendor" name="vendor" value="yes service vendors"><label for="checkbox_yes_vendor" class="m-r-40" required=""> Yes, there are 1 or more service vendors</label>
									<input type="radio" id="checkbox_no_vendor" name="vendor" value="no service vendors" checked><label for="checkbox_no_vendor" class="m-r-40" required=""> No service vendors </label>
								</div>
							</div>		
							<div class="col-lg-12 no-val p-b-5 p-t-10">
								<div class="hr_lht-gray"></div>
							</div>										
							<div class="col-lg-12 no-val" id="vendor_list">
								<div class="vendor">
									<div class="form-group col-lg-3">
										<label>Proprietor's Name:</label>
										<input id="prop_vendor_owner_name" name="prop_vendor_owner_name" type="text" class="form-control" placeholder="i.e. John Doe">
									</div>
									<div class="form-group col-lg-3">
										<label>Business Name:</label>
										<input id="prop_vendor_co_name" name="prop_vendor_co_name" type="text" class="form-control" placeholder="i.e. ABC Yard Co.">
									</div>
									<div class="form-group col-lg-3">
										<label>Phone:</label>
										<input id="prop_vendor_phone" name="prop_vendor_phone" type="tel" class="form-control" maxlength="10" placeholder="i.e. (123) 456-7890">
									</div>
									<div class="form-group col-lg-3">
										<label>Email:</label>
										<input id="prop_vendor_email" name="prop_vendor_email" type="text" class="form-control" placeholder="i.e. email@address.com">
									</div>
									<div class="form-group col-lg-3">
										<label>Website:</label>
										<input id="prop_vendor_website" name="prop_vendor_website"  type="text" class="form-control" placeholder="i.e. www.abcyardco.com">
									</div>
									<div class="form-group col-lg-9">
										<label>Please list the service(s) provided <a href="#"><i class="md md-help font-17p"></i></a></label>
										<input id="prop_vendor_services" name="prop_vendor_services" type="text" class="form-control" placeholder="i.e. gardening and yard service">
									</div>												
								</div>
							</div>
							<div class="form-group col-lg-3 fl-l m-t-10"><div class="btn btn-primary btn-mini add_vendor">+ Add vendor</div></div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="row">
			<div class="col-lg-12 p-b-5">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>PET POLICY</h5>							
					</div>
					<div class="ibox-content">
						<div class="container width-100">
							<div>
								<div class="form-group col-lg-3">
									<label>Are pets allowed?<a href="#"><i class="md md-help font-17p"></i></a></label><br/>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline p-t-10">
										<input type="radio" id="checkbox_pets_allowed" name="pets_allowed" value="pets allowed"><label for="checkbox_pets_allowed" class="m-r-40">Yes, pets are allowed </label>
										<input type="radio" id="checkbox_no_pets_allowed" name="pets_allowed" value="no pets allowed"><label for="checkbox_no_pets_allowed" class="m-r-40"> No pets allowed </label>
									</div>
								</div>
								<div class="form-group col-lg-9">
									<label>Breed and size restrictions<a href="#"><i class="md md-help font-17p"></i></a></label>
									<textarea id="prop_pet_limits" name="prop_pet_limits" rows="2" class="form-control" placeholder="i.e. no pit bulls or dogs over 120 lbs"></textarea>
								</div>									
							</div>					
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="row">
			<div class="col-lg-12 p-b-5">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>OCCUPATION</h5>						
					</div>
					<div class="ibox-content">
						<div class="container width-100">
							<div class="form-group col-lg-12">
								<label>Who occupies the property?<a href="#"><i class="md md-help font-17p"></i></a></label><br/>
								<div class="checkbox checkbox-circle checkbox-info checkbox-inline p-t-10">
									<input type="radio" id="checkbox_empty" name="property_owner" value="property empty" checked><label for="checkbox_empty" class="m-r-40"> Empty (not occupied) </label>
									<input type="radio" id="checkbox_tenant" name="property_owner" value="property occupied"><label for="checkbox_tenant" class="m-r-40"> Tenant occupied </label>
									<input type="radio" id="checkbox_owner" name="property_owner" value="property owner"><label for="checkbox_owner" class="m-r-40"> Owner occupied </label>												
								</div>
							</div>
							<div class="col-lg-12 no-val p-b-10">
								<div class="hr_lht-gray"></div>
							</div>	
							<div class="col-lg-12 no-val" id="tenant_detail" style="display:none;">
								<div class="col-lg-12">
									<label>(Complete only if tenant occupied)</label>
								</div>
								<div class="form-group col-lg-4">
									<label>Tenant's Name:</label>
									<input id="prop_tenant_name" name="prop_tenant_name" class="form-control" type="text" placeholder="i.e. John Doe">
								</div>
								<div class="form-group col-lg-4">
									<label>Tenant's Phone:</label>
									<input id="prop_tenant_phone" name="prop_tenant_phone" class="form-control" type="tel"  maxlength="10" placeholder="i.e. (123) 456-7890">
								</div>
								<div class="form-group col-lg-4">
									<label>Tenant's Email:</label>
									<input id="prop_tenant_email" name="prop_tenant_email" class="form-control" type="text"  placeholder="i.e. email@address.com">
								</div>
								<div class="form-group col-lg-12">
									<label>Please list any important details about tenant</label>
									<input id="prop_tenant_details" name="prop_tenant_details" class="form-control" type="textarea"  placeholder="i.e. anything of importance">
								</div>	
							</div>	
						</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="row">
			<div class="col-lg-12 p-b-5">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>RENTAL PRICE</h5>						
					</div>				
					<div class="ibox-content">
						<div class="container width-100">
							<div class="form-group col-lg-6">
								<label>What is your desired rental price?<a href="#"><i class="md md-help font-17p"></i></a></label><br/>	
								<div class="input-group m-b"><span class="input-group-addon font-19p">$</span> <input type="text" class="form-control required" min="100.00" max="1,000,000.00" placeholder="2,000.00" required=""></div>
							</div>						
						</div>
					</div>
				</div>
			</div>
			
		</div>
			
		

		
		<div class="row">
			
			<div class="col-lg-12 p-b-5">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>FINAL DETAILS</h5>						
					</div>
					<div class="ibox-content">
						<div class="container width-100">
							<div class="form-group col-lg-12">
								<textarea id="prop_final_details" rows="3" class="form-control" name="prop_final_details" placeholder="list anything of importance"></textarea>
							</div>							
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</section>
	<!-- END STEP 1 -->

	
	<h3>Services</h3>	
	<!-- BEGIN STEP 2 -->
	<section id="step_2" class="no-bg current">

		
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox">				
					<div class="ibox-title tr-bg">
						<h5><i class="ibox-title-icon md md-select-all thm-color-1"></i><span class="thm-color-1 m-l-35"><strong>SERVICE CUSTOMIZATION</strong></span></h5>
						<div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
					</div>
					<div class="ibox-content">
						<div class="container width-100">
							<span class="font-15p">Next, let's customize your account services by selecting the options you need. Pre-checked options <i class="fa fa-check-circle font-20p checkmark-muted pad-0-4"></i>  are services that are included with your Legacy account. 
							For more information about any of the services below, just click the help <label><i class="md md-help font-17p pad-0-4"></i></label> icon for full details.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW 
		
	
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>TENANT PLACEMENT SERVICES</h5>					
					</div>
					<div class="ibox-content p-b-0">
						<div class="container width-100">
						<div class="m-b-5 m-t-5">
							<div class="text-left fl-l font-14p black">SERVICE</div>
							<div class="text-right font-14p black">FEE</div>
						</div>
						<ul class="service_tb">
							<li name="tenant_placement"><span class="checkmark" style="text-align:center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></span>
							<span class="service_name font-16p"><strong>Tenant Placement</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
							<span class="fees font-16p"><strong>4%</strong></span></li>
						</ul>		
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->										
									
									
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">							
								<li class="no-bdr">
									<span class="checkmark"><div align="center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></strong></div></span>
									<span class="service_name"><span class="font-15p"><strong>Property Showings</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span></span>
									<span class="fees font-16p"><strong></strong></span>
								</li>
								<li class="child">
									<ul>
										<li name="3after5pm_add_2weekend">
											<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted m-r-15" style="vertical-align:middle;"></i></span><span class="service_name">3 After 5pm + 2 Weekend Open Houses</span>
											<span class="fees"><div align="right">(no fee)</div></span>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_x3after5pm" data-id="s_1" name="checkbox_add_x3after5pm" value="Add 3 After 5pm Showings" class="checkmark"><label for="checkbox_add_x3after5pm" class="service_name"><span class="m-l-10">3 Additional After 5PM</span></label>
												<span class="fees font-16p"><span><strong>$50</strong></span></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_x2weekend" data-id="s_2" name="checkbox_add_x2weekend" value="Add 2 Weekend Showings" class="checkmark"><label for="checkbox_add_x2weekend" class="service_name"><span class="m-l-10">2 Additional on Weekend</span></label>
												<span class="fees font-16p"><strong>$100</strong></span>
											</div>
										</li>
									</ul>
								</li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->									
									
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">							
								<li class="no-bdr">
									<span class="checkmark"><div align="center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></strong></div></span>
									<span class="service_name"><span class="font-15p"><strong>Photos and Advertising</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span></span>
									<span class="fees"><div align="right"><span class="font-16p"><strong></strong></span></div></span>
								</li>
								<li class="child">
									<ul>
										<li name="online_listing">
											<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted m-r-15" style="vertical-align:middle;"></i></span><span class="service_name">Online Property Listings</span>
											<span class="fees"><div align="right">(no fee)</div></span>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_virtualtour" data-id="s_3" name="checkbox_add_virtualtour" value="Add virtual tour" class="checkmark"><label for="checkbox_add_virtualtour" class="service_name"><span class="m-l-10">Virtual Tour</span></label>
												<span class="fees font-16p"><strong>$100</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_virtualwalk" data-id="s_4" name="checkbox_add_virtualwalk" value="checkbox_add_virtualwalk" class="checkmark"><label for="checkbox_add_virtualwalk" class="service_name"><span class="m-l-10">Virtual Walk Through</span></label>
												<span class="fees font-16p"><strong>$250</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_videowalk" data-id="s_5" name="checkbox_add_videowalk" value="checkbox_add_videowalk" class="checkmark"><label for="checkbox_add_videowalk" class="service_name"><span class="m-l-10">Video Walk Through</span></label>
												<span class="fees font-16p"><strong>$300</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_flyers" data-id="s_6" name="checkbox_add_flyers" value="Add Flyers" class="checkmark"><label for="checkbox_add_flyers" class="service_name"><span class="m-l-10">Flyers</span></label>
												<span class="fees font-16p"><strong>$50</strong></span>
											</div>
										</li>
									</ul>
								</li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	

		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">
								<li class="no-bdr" name="screening"><span class="checkmark" style="text-align:center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></span>
								<span class="service_name font-16p"><strong>Screening</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
								<span class="fees" style="text-align:right"><span>(no fee)</span></li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	

		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">
								<li class="no-bdr" name="lease_signing"><span class="checkmark" style="text-align:center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></span>
								<span class="service_name font-16p"><strong>Lease Signing</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
								<span class="fees" style="text-align:right"><span>(no fee)</span></li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	

		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">							
								<li class="no-bdr" name="inspection">
									<span class="checkmark"><div align="center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></strong></div></span>
									<span class="service_name"><span class="font-15p"><strong>Inspection(s)</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span></span>
									<span class="fees"><div align="right"><span class="font-16p"><strong></strong></span></div></span>
								</li>
								<li class="child">
									<ul>
										<li name="initial_inspection">
											<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted m-r-15" style="vertical-align:middle;"></i></span><span class="service_name">Initial Move-In Inspection</span>
											<span class="fees"><div align="right">(no fee)</div></span>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_termiteinspect" data-id="s_7" name="checkbox_add_termiteinspect" value="Add Termite Inspection"  class="checkmark"><label for="checkbox_add_termiteinspect" class="service_name"><span class="m-l-10">Termite Inspection</span></label>
												<span class="fees font-16p"><strong>$300</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_pestinspect" data-id="s_8" name="checkbox_add_pestinspect" value="Add Pest Inspection" class="checkmark"><label for="checkbox_add_pestinspect" class="service_name"><span class="m-l-10">Pest Inspection</span></label>
												<span class="fees font-16p"><strong>$300</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_roofinspect" data-id="s_9" name="checkbox_add_roofinspect" value="Add Roof Inspection" class="checkmark"><label for="checkbox_add_roofinspect" class="service_name"><span class="m-l-10">Roof Inspection</span></label>
												<span class="fees font-16p"><strong>$400</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_chimneyinspect" data-id="s_10" name="checkbox_add_chimneyinspect" value="Add Chimney Inspection" class="checkmark"><label for="checkbox_add_chimneyinspect" class="service_name"><span class="m-l-10">Chimney Inspection</span></label>
												<span class="fees font-16p"><strong>$200</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_electricalinspect" data-id="s_11" name="checkbox_add_electricalinspect" value="Add Electrical Inspection" class="checkmark"><label for="checkbox_add_electricalinspect" class="service_name"><span class="m-l-10">Electrical Inspection</span></label>
												<span class="fees font-16p"><strong>$400</strong></span>
											</div>
										</li>
										<li>
											<span class="font-16p"><strong>Visual Inspection during tenancy</strong></span> <span>(fee per occurrence)</span>										
											<span class="font-16p"><strong></strong></span>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_quarterlyinspect" data-id="s_12" name="checkbox_add_quarterlyinspect" value="Add Quarterly Inspect" class="checkmark"><label for="checkbox_add_quarterlyinspect" for="checkbox_add_visualinspect" class="service_name"><span class="m-l-10">Quarterly Inspection</span></label>
												<span class="fees font-16p"><strong>$150</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_6monthinspect" data-id="s_13" name="checkbox_add_6monthinspect" value="Add 6 Month Inspection" class="checkmark"><label for="checkbox_add_6monthinspect" class="service_name"><span class="m-l-10">Six Month Inspection</span></label>
												<span class="fees font-16p"><strong>$150</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_annualinspect" data-id="s_14" name="checkbox_add_annualinspect" value="Add Annual Inspection" class="checkmark"><label for="checkbox_add_annualinspect" class="service_name"><span class="m-l-10">Annual Inspection</span></label>
												<span class="fees font-16p"><strong>$150</strong></span>
											</div>
										</li>
									</ul>
								</li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	

		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">
								<li class="no-bdr" name="tenant_moveins"><span class="checkmark" style="text-align:center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></span>
								<span class="service_name font-16p"><strong>Tenant Move-In's</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
								<span class="fees" style="text-align:right"><span>(no fee)</span></li>
							</ul>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->		

		
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>MAINTENANCE SERVICES</h5>								
					</div>
					<div class="ibox-content p-b-0">
						<div class="container width-100">
						<div class="m-b-5 m-t-5">
							<div class="text-left fl-l font-14p black">SERVICE</div>
							<div class="text-right font-14p black">FEE</div>
						</div>
							<ul class="service_tb">
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_projectmngmnt" data-id="s_15" name="checkbox_add_projectmngmnt" value="Add Project Management" class="checkmark"><label for="checkbox_add_projectmngmnt"><span  class="service_name m-l-10"><span class="font-16p"><strong>Project Management</strong><a href="#"><i class="md md-help font-17p"></i></a></span></span></label>
										<span class="fees font-16p m-l-5"><strong>15%</strong></span>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_24hrmaintenance" data-id="s_16" name="checkbox_add_24hrmaintenance" value="Add 24hr Maintenance Service" class="checkmark"><label for="checkbox_add_24hrmaintenance"><span class="service_name m-l-10"><span class="font-16p"><strong>24 Hour Maintenance Dispatching Service</strong><a href="#"><i class="md md-help font-17p"></i></a></span></span></label>
										<span class="fees font-16p m-l-5"><strong>2%</strong></span>
									</div>
								</li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->				


		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>RENT COLLECTION AND DISBURSEMENTS</h5>								
					</div>
					<div class="ibox-content p-b-0">
						<div class="container width-100">
						<div class="m-b-5 m-t-5">
							<div class="text-left fl-l font-14p black">SERVICE</div>
							<div class="text-right font-14p black">FEE</div>
						</div>
							<ul class="service_tb">
								<li name="rent_collection">
									<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span>
									<span class="service_name font-16p"><strong>Rent Collection</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
									<span class="fees font-16p"><strong>2%</strong></span>
								</li>
								<li name="late_fees">
									<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span>
									<span class="service_name font-16p"><strong>Late Fee's</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
									<span class="fees font-16p"><strong>50%</strong></span>
								</li>
								<li name="accounting_statements">
									<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span>
									<span class="service_name"><strong class="font-16p">Accounting Statements </strong>(monthly account statement) <label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
									<span class="fees">(no fee)</span>
								</li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->


		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>HOME OWNER ASSOCIATIONS</h5>									
					</div>
					<div class="ibox-content p-b-0">
						<div class="container width-100">
						<div class="m-b-5 m-t-5">
							<div class="text-left fl-l font-14p black">SERVICE</div>
							<div class="text-right font-14p black">FEE</div>
						</div>
							<ul class="service_tb">
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_hoacompliance" data-id="s_17" name="checkbox_add_hoacompliance" value="Add HOA Compliance" class="checkbox"><label for="checkbox_add_hoacompliance" class="service_name"><span class="m-l-10"><span class="font-16p"><strong>HOA Coordinating and Compliance</strong><a href="#"><i class="md md-help font-17p"></i></a></span></span></label>
										<span class="fees font-16p"><strong>2%</strong></span>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_hoameetings" data-id="s_18" name="checkbox_add_hoameetings" value="Add Attend HOA Meetings" class="checkbox"><label for="checkbox_add_hoameetings" class="service_name"><span class="m-l-10"><span class="font-16p"><strong>Attend HOA meetings</strong></span> (fee per meeting)</span><a href="#"><i class="md md-help font-17p"></i></a></label>
										<span class="fees font-16p"><strong>$100</strong></span>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_hoapayments"  data-id="s_19" name="checkbox_add_hoapayments" value="Add HOA Payments" class="checkbox"><label for="checkbox_add_hoapayments" class="service_name"><span class="m-l-10"><span class="font-16p"><strong>HOA Payments</strong></span> (fee per month)</span><a href="#"><i class="md md-help font-17p"></i></a></label>
										<span class="fees font-16p"><strong>$20</strong></span>
									</div>
								</li>
							</ul>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	
    </section>		
	<!-- END STEP 2 -->
	
    <h3>Review</h3>
	<section id="step_3" class="no-bg current">
		
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox">				
					<div class="ibox-title tr-bg">
						<h5><i class="ibox-title-icon md md-select-all thm-color-1"></i><span class="thm-color-1 m-l-35"><strong>SERVICE CUSTOMIZATION</strong></span></h5>
						<div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
					</div>
					<div class="ibox-content">
						<div class="container width-100">
							<span class="font-15p">Next, let's customize your account services by selecting the options you need. Pre-checked options <i class="fa fa-check-circle font-20p checkmark-muted pad-0-4"></i>  are services that are included with your Legacy account. 
							For more information about any of the services below, just click the help <label><i class="md md-help font-17p pad-0-4"></i></label> icon for full details.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW 
		
	
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>TENANT PLACEMENT SERVICES</h5>					
					</div>
					<div class="ibox-content p-b-0">
						<div class="container width-100">
						<div class="m-b-5 m-t-5">
							<div class="text-left fl-l font-14p black">SERVICE</div>
							<div class="text-right font-14p black">FEE</div>
						</div>
						<ul class="service_tb">
							<li><span class="checkmark" style="text-align:center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></span>
							<span class="service_name font-16p"><strong>Tenant Placement</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
							<span class="fees font-16p"><strong>4%</strong></span></li>
						</ul>		
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->										
									
									
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">							
								<li class="no-bdr">
									<span class="checkmark"><div align="center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></strong></div></span>
									<span class="service_name"><span class="font-15p"><strong>Property Showings</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span></span>
									<span class="fees font-16p"><strong></strong></span>
								</li>
								<li class="child">
									<ul>
										<li>
											<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted m-r-15" style="vertical-align:middle;"></i></span><span class="service_name">3 After 5pm + 2 Weekend Open Houses</span>
											<span class="fees"><div align="right">(no fee)</div></span>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_x3after5pm" data-target="s_1" name="checkbox_add_x3after5pm" value="Add 3 After 5pm Showings" class="checkmark"checked disabled><label for="checkbox_add_x3after5pm" class="service_name"><span class="m-l-10">3 Additional After 5PM</span></label>
												<span class="fees font-16p"><span><strong>$50</strong></span></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_x2weekend" data-target="s_2" name="checkbox_add_x2weekend" value="Add 2 Weekend Showings" class="checkmark"checked disabled><label for="checkbox_add_x2weekend" class="service_name"><span class="m-l-10">2 Additional on Weekend</span></label>
												<span class="fees font-16p"><strong>$100</strong></span>
											</div>
										</li>
									</ul>
								</li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->									
									
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">							
								<li class="no-bdr">
									<span class="checkmark"><div align="center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></strong></div></span>
									<span class="service_name"><span class="font-15p"><strong>Photos and Advertising</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span></span>
									<span class="fees"><div align="right"><span class="font-16p"><strong></strong></span></div></span>
								</li>
								<li class="child">
									<ul>
										<li>
											<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted m-r-15" style="vertical-align:middle;"></i></span><span class="service_name">Online Property Listings</span>
											<span class="fees"><div align="right">(no fee)</div></span>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_virtualtour" data-target="s_3" name="checkbox_add_virtualtour" value="Add virtual tour" class="checkmark" checked disabled><label for="checkbox_add_virtualtour" class="service_name"><span class="m-l-10">Virtual Tour</span></label>
												<span class="fees font-16p"><strong>$100</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_virtualwalk" data-target="s_4" name="checkbox_add_virtualwalk" value="checkbox_add_virtualwalk" class="checkmark"checked disabled><label for="checkbox_add_virtualwalk" class="service_name"><span class="m-l-10">Virtual Walk Through</span></label>
												<span class="fees font-16p"><strong>$250</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_videowalk" data-target="s_5" name="checkbox_add_videowalk" value="checkbox_add_videowalk" class="checkmark" checked disabled><label for="checkbox_add_videowalk" class="service_name"><span class="m-l-10">Video Walk Through</span></label>
												<span class="fees font-16p"><strong>$300</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_flyers" data-target="s_6" name="checkbox_add_flyers" value="Add Flyers" class="checkmark" checked disabled><label for="checkbox_add_flyers" class="service_name"><span class="m-l-10">Flyers</span></label>
												<span class="fees font-16p"><strong>$50</strong></span>
											</div>
										</li>
									</ul>
								</li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	

		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">
								<li class="no-bdr"><span class="checkmark" style="text-align:center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></span>
								<span class="service_name font-16p"><strong>Screening</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
								<span class="fees" style="text-align:right"><span>(no fee)</span></li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	

		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">
								<li class="no-bdr"><span class="checkmark" style="text-align:center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></span>
								<span class="service_name font-16p"><strong>Lease Signing</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
								<span class="fees" style="text-align:right"><span>(no fee)</span></li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	

		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">							
								<li class="no-bdr">
									<span class="checkmark"><div align="center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></strong></div></span>
									<span class="service_name"><span class="font-15p"><strong>Inspection(s)</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span></span>
									<span class="fees"><div align="right"><span class="font-16p"><strong></strong></span></div></span>
								</li>
								<li class="child">
									<ul>
										<li>
											<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted m-r-15" style="vertical-align:middle;"></i></span><span class="service_name">Initial Move-In Inspection</span>
											<span class="fees"><div align="right">(no fee)</div></span>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_termiteinspect" data-target="s_7" name="checkbox_add_termiteinspect" value="Add Termite Inspection"  class="checkmark" checked disabled><label for="checkbox_add_termiteinspect" class="service_name"><span class="m-l-10">Termite Inspection</span></label>
												<span class="fees font-16p"><strong>$300</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_pestinspect" data-target="s_8" name="checkbox_add_pestinspect" value="Add Pest Inspection" class="checkmark"  checked disabled><label for="checkbox_add_pestinspect" class="service_name"><span class="m-l-10">Pest Inspection</span></label>
												<span class="fees font-16p"><strong>$300</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_roofinspect" data-target="s_9" name="checkbox_add_roofinspect" value="Add Roof Inspection" class="checkmark"checked disabled><label for="checkbox_add_roofinspect" class="service_name"><span class="m-l-10">Roof Inspection</span></label>
												<span class="fees font-16p"><strong>$400</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_chimneyinspect" data-target="s_10" name="checkbox_add_chimneyinspect" value="Add Chimney Inspection" class="checkmark" checked disabled><label for="checkbox_add_chimneyinspect" class="service_name"><span class="m-l-10">Chimney Inspection</span></label>
												<span class="fees font-16p"><strong>$200</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_electricalinspect" data-target="s_11" name="checkbox_add_electricalinspect" value="Add Electrical Inspection" class="checkmark" checked disabled><label for="checkbox_add_electricalinspect" class="service_name"><span class="m-l-10">Electrical Inspection</span></label>
												<span class="fees font-16p"><strong>$400</strong></span>
											</div>
										</li>
										<li>
											<span class="font-16p"><strong>Visual Inspection during tenancy</strong></span> <span>(fee per occurrence)</span>										
											<span class="font-16p"><strong></strong></span>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_quarterlyinspect" data-target="s_12" name="checkbox_add_quarterlyinspect" value="Add Quarterly Inspect" class="checkmark" checked disabled><label for="checkbox_add_quarterlyinspect" for="checkbox_add_visualinspect" class="service_name"><span class="m-l-10">Quarterly Inspection</span></label>
												<span class="fees font-16p"><strong>$150</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_6monthinspect" data-target="s_13" name="checkbox_add_6monthinspect" value="Add 6 Month Inspection" class="checkmark" checked disabled><label for="checkbox_add_6monthinspect" class="service_name"><span class="m-l-10">Six Month Inspection</span></label>
												<span class="fees font-16p"><strong>$150</strong></span>
											</div>
										</li>
										<li>
											<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
												<input type="checkbox" id="checkbox_add_annualinspect" data-target="s_14" name="checkbox_add_annualinspect" value="Add Annual Inspection" class="checkmark" checked disabled><label for="checkbox_add_annualinspect" class="service_name"><span class="m-l-10">Annual Inspection</span></label>
												<span class="fees font-16p"><strong>$150</strong></span>
											</div>
										</li>
									</ul>
								</li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	

		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-content p-b-0">
						<div class="container width-100">
							<ul class="service_tb">
								<li class="no-bdr"><span class="checkmark" style="text-align:center"><span class="font-16p"><strong><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span></span>
								<span class="service_name font-16p"><strong>Tenant Move-In's</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
								<span class="fees" style="text-align:right"><span>(no fee)</span></li>
							</ul>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->		

		
		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>MAINTENANCE SERVICES</h5>								
					</div>
					<div class="ibox-content p-b-0">
						<div class="container width-100">
						<div class="m-b-5 m-t-5">
							<div class="text-left fl-l font-14p black">SERVICE</div>
							<div class="text-right font-14p black">FEE</div>
						</div>
							<ul class="service_tb">
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_projectmngmnt" data-target="s_15" name="checkbox_add_projectmngmnt" value="Add Project Management" class="checkmark" checked disabled><label for="checkbox_add_projectmngmnt"><span  class="service_name m-l-10"><span class="font-16p"><strong>Project Management</strong><a href="#"><i class="md md-help font-17p"></i></a></span></span></label>
										<span class="fees font-16p m-l-5"><strong>15%</strong></span>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_24hrmaintenance" data-target="s_16" name="checkbox_add_24hrmaintenance" value="Add 24hr Maintenance Service" class="checkmark"checked disabled><label for="checkbox_add_24hrmaintenance"><span class="service_name m-l-10"><span class="font-16p"><strong>24 Hour Maintenance Dispatching Service</strong><a href="#"><i class="md md-help font-17p"></i></a></span></span></label>
										<span class="fees font-16p m-l-5"><strong>2%</strong></span>
									</div>
								</li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->				


		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>RENT COLLECTION AND DISBURSEMENTS</h5>								
					</div>
					<div class="ibox-content p-b-0">
						<div class="container width-100">
						<div class="m-b-5 m-t-5">
							<div class="text-left fl-l font-14p black">SERVICE</div>
							<div class="text-right font-14p black">FEE</div>
						</div>
							<ul class="service_tb">
								<li>
									<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span>
									<span class="service_name font-16p"><strong>Rent Collection</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
									<span class="fees font-16p"><strong>2%</strong></span>
								</li>
								<li>
									<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span>
									<span class="service_name font-16p"><strong>Late Fee's</strong><label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
									<span class="fees font-16p"><strong>50%</strong></span>
								</li>
								<li>
									<span class="checkmark"><i class="fa fa-check-circle font-20p checkmark-muted"></i></strong></span>
									<span class="service_name"><strong class="font-16p">Accounting Statements </strong>(monthly account statement) <label><a href="#"><i class="md md-help font-17p"></i></a></label></span>
									<span class="fees">(no fee)</span>
								</li>
							</ul>				
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->


		<!-- ROW -->
		<div class="row">
			<div class="col-lg-12">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>HOME OWNER ASSOCIATIONS</h5>									
					</div>
					<div class="ibox-content p-b-0">
						<div class="container width-100">
						<div class="m-b-5 m-t-5">
							<div class="text-left fl-l font-14p black">SERVICE</div>
							<div class="text-right font-14p black">FEE</div>
						</div>
							<ul class="service_tb">
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_hoacompliance" data-target="s_17" name="checkbox_add_hoacompliance" value="Add HOA Compliance" class="checkbox" checked disabled><label for="checkbox_add_hoacompliance" class="service_name"><span class="m-l-10"><span class="font-16p"><strong>HOA Coordinating and Compliance</strong><a href="#"><i class="md md-help font-17p"></i></a></span></span></label>
										<span class="fees font-16p"><strong>2%</strong></span>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_hoameetings" data-target="s_18" name="checkbox_add_hoameetings" value="Add Attend HOA Meetings" class="checkbox" checked disabled><label for="checkbox_add_hoameetings" class="service_name"><span class="m-l-10"><span class="font-16p"><strong>Attend HOA meetings</strong></span> (fee per meeting)</span><a href="#"><i class="md md-help font-17p"></i></a></label>
										<span class="fees font-16p"><strong>$100</strong></span>
									</div>
								</li>
								<li>
									<div class="checkbox checkbox-circle checkbox-info checkbox-inline">
										<input type="checkbox" id="checkbox_add_hoapayments"  data-target="s_19" name="checkbox_add_hoapayments" value="Add HOA Payments" class="checkbox" checked disabled><label for="checkbox_add_hoapayments" class="service_name"><span class="m-l-10"><span class="font-16p"><strong>HOA Payments</strong></span> (fee per month)</span><a href="#"><i class="md md-help font-17p"></i></a></label>
										<span class="fees font-16p"><strong>$20</strong></span>
									</div>
								</li>
							</ul>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END ROW -->	
    </section>
	<!-- END STEP 3 -->
	
    <h3>Terms & Agreement</h3>
	<!-- BEGIN STEP 1 -->
	<section class="no-bg">
		<!-- BEGIN ROW -->
		<div class="row">
			<div class="col-lg-12 p-b-20">
				<div class="ibox ibox-shadow">				
					<div class="ibox-title">
						<h5>TERMS & AGREEMENT</h5>
					</div>
					<div class="ibox-content">
						<div class="container width-100">
						 <p>Place terms and agreement contract here. Will require formatting of contract content.</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
    </section>	
	<!-- END STEP 4 -->
    <!--button type="button" id="test" class="btn btn-primary">Get Values</button-->
	</div>
	<!-- END FORM ROW 1 -->	
    
    
	
	</form>
	<!-- END FORM -->


	</div>
	<!-- END CONTAINER -->
</div>
<!-- END CONTENT WRAPPER -->
@endsection


@section('js') 


@endsection