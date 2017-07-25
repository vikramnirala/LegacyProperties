<!DOCTYPE html>
<html>
    <head>
		<!--======= Title ==========================-->
        <title>Legacy Property Management - User Dashoard</title>
		<!--======= Meta Tags ======================-->
        @meta
        @php ($url='')
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />		
        <meta name="robots" content="index, follow"/>
        <meta name="description" content="Legacy Property Management Account Sign In - Log into your Legacy account or register for free">
        <meta name="keywords" content="Legacy Property Management, Legacy Property Management of Silicon Valley, Property Management, Silicon Valley, Silicon Valley Property Management, Quality Property Management, Account Sign In, Account Registration ">
        <meta name="author" content="Legacy Property Management of Silicon Valley">
    	<!--======= Favicon ========================-->
		<link rel="icon" href="assets/user/images/logo/icon/favicon.png"/>
        <link rel="shortcut icon" href="assets/user/images/logo/icon/favicon.png"/>
        <!--======= Page Plugins ========================-->
		<link href="assets/theme/lib/framework/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="assets/theme/lib/form/steps/jquery.steps.css" rel="stylesheet">
		<link href="assets/theme/lib/form/jasny/jasny-bootstrap.min.css" rel="stylesheet">		
		<link href="assets/theme/lib/form/datapicker/datepicker3.css" rel="stylesheet">
		<link href="assets/theme/lib/form/select2/select2.min.css" rel="stylesheet">	
		<link href="assets/theme/lib/form/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">	
		<link href="assets/theme/lib/form/iCheck/icheck.css" rel="stylesheet">
		<!--======= Core CSS Source ===============-->
		<link href="assets/theme/css/app.css" rel="stylesheet">
        <link href="assets/theme/css/app.min.css" rel="stylesheet" type="text/css">	
        <link href="assets/theme/css/fusion.css" rel="stylesheet" type="text/css">
    </head>
<!--- BODY --->
<body class="fixed-sidebar no-skin-config full-height-layout">

<!-- MAIN WRAPPER -->
    <div id="wrapper">
	
	<!-- SIDE MENU NAV -->
    @yield('left-sidebar')
	<!-- END SIDE NAV -->
	
<!-- BEGIN PAGE WRAPPER -->
<div id="page-wrapper" class="gray-bg" >
    @yield('navigation')
	<!-- END ROW -->	
<div id="navbar-white" class="row wrapper border-bottom white-bg page-heading p-t-10 p-b-5">
    <ul class="navbar-top-links">
	    <li class="navbar-breadcrumb">
			<ol class="breadcrumb">
				<li><strong>My Account</strong></li>
				<li><a href="db_user-index.html">Dashboard</a></li>
				<li class="thm-color-1">New Client Application</li>
			</ol>
		</li>	
		<li style="float:right!important; margin-top:-3px!important; right:0!important;">
            <ul>
                <li class="waves-effect waves-light">
                    <a href="/logout" class="account-link"><i class="ion-ios-chatboxes-outline"></i> Sign Out</a>
                </li>
            </ul>
		</li>
	</ul>
</div>
<!-- BEGIN MAIN CONTENT -->	
@yield('content');
<!-- END CONTENT WRAPPER -->


	<!-- FOOTER -------->
	<div class="footer">
		<div class="text-center">Legacy Property Management &copy;2017</div>
	</div>
	<!-- END FOOTER ---->
	
</div><!-- END PAGE WRAPPER -->
		<!-- BEGIN USER CHAT -->
		
		<!-- INTEGRATE INTERCOM CHAT FEATURE HERE -->
        <div id="small-chat">
            <span class="badge badge-warning pull-right">5</span>
            <a class="open-small-chat">
                <i class="fa fa-comments"></i>
            </a>
        </div>
		<!-- END CHAT FEATURE -->


    </div><!-- END MAIN WRAPPER -->
    
	<!-- CORE JS SOURCE -->
	
    <!-- Framework -->
    <script src="assets/theme/lib/framework/jquery/jquery-2.1.1.js"></script>
    <script src="assets/theme/lib/framework/bootstrap/bootstrap.min.js"></script>
	<!-- UI Plugins -->
    <script src="assets/theme/lib/ui/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/theme/lib/ui/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/theme/lib/ui/pace/pace.min.js"></script>
	<script src="assets/theme/lib/ui/waves/waves.js"></script>
	<!-- Core -->
    <script src="assets/theme/js/app.js"></script>
    <!-- Form Plugins -->
    <script src="assets/theme/lib/form/daterangepicker/daterangepicker.js"></script>
    <script src="assets/theme/lib/form/select2/select2.full.min.js"></script>
    <script src="assets/theme/lib/form/jasny/jasny-bootstrap.min.js"></script>
	<script src="assets/theme/lib/form/datapicker/bootstrap-datepicker.js"></script>
    <script src="assets/theme/lib/form/iCheck/icheck.min.js"></script>
    <script src="assets/theme/lib/form/touchspin/jquery.bootstrap-touchspin.min.js"></script>	
	<!-- wizard & validation -->
	<script src="assets/theme/lib/form/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
	<script src="assets/theme/lib/form/steps/jquery.steps.js" type="text/javascript"></script>
	<script src="assets/theme/lib/form/validate/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="assets/theme/lib/form/wizard/form.wizard.js" type="text/javascript"></script>	

    <script>
		$(document).ready(function(){
			//init form date picker
            $('.input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
            
            $('#prop_build_year').datepicker({
                   format: " yyyy", // Notice the Extra space at the beginning
                   viewMode: "years", 
                   minViewMode: "years",
                   autoclose: true
                    
              }); 
       
			
			//init touchspin module
            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });
            $( 'a[href*="#next"]' ).addClass( 'review' );
            $('input[type=checkbox]', $('#steps-uid-0-p-0')).each(function () {
                var target = $(this).data('id');
                $("#steps-uid-0-p-1").find("[data-target="+target+"]").parents('li').hide();
                //formValues.push(target);
            });
            $('.review').click(function () {
                var formValues = [];
                // get values from inputs in first fieldset
                
                $('input[type=checkbox]:checked', $('#steps-uid-0-p-0')).each(function () {
                    var target = $(this).data('id');
                    $("#steps-uid-0-p-1").find("[data-target="+target+"]").parents('li').show();
                    formValues.push(target);
                });
                
                //formValues.pop(); //remove the button from input values
                //alert(formValues);
                
                
            });
		
			
            $('.previous').click(function () {
                $('.current').removeClass('current').prev().show().addClass('current');

            });
         
			   
			 $('.add_vendor').click(function(){
				var divItem = $('.vendor').last().clone(); 

				//Append the clone to the list item. But this only works once!
				$('#vendor_list').append(divItem);

			}); 
			$('input[name="property_owner"]').click(function() {
			   if($(this).attr('id') == 'checkbox_tenant') {
					$('#tenant_detail').show();           
			   }

			   else {
					$('#tenant_detail').hide();   
			   }
		   });

		});	//End scripts
    </script>
	</body>
</html>