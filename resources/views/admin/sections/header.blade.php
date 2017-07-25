<div class="row">
<!-- TOP NAVIGATION -->
<nav class="navbar navbar-fixed-top white-bg" role="navigation" style="margin-bottom: 0">
    <!-- TOPNAV -->
    <div id="topnav">
        <div class="topbar-main">
            <div class="tnav-logo-text"><span><strong>LEGACY </strong> Property Management</span></div>
            <div class="container width-100">
                <div class="topnav-logo">
                    <a href="#"><img src="assets/images/logo/v2/logo-v2-57x57.jpg" width="52px" height="auto"></a>
                </div>

                <!-- Topnav Links -->
                <div class="topnav-links">
                    <span class="user-welcome-msg">Welcome, <strong>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</strong></span>
                    <!-- User Account Button -->
                    <li class="no-list">
                        <a href="#" class="user-account-btn dropdown-toggle" data-toggle="dropdown"><i class="md-account-circle"></i></a>
                        <ul class="dropdown-menu dd-menu-1" role="menu">
                            <li><a href="#"><i class="md md-account-circle"></i> Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="md md-settings"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li class="dd-link-active"><i class="md md-apps"></i> Dashboard</li>
                            <li class="divider"></li>
                            <li><a href="/logout"><i class="md md-exit-to-app"></i> Sign Out</a></li>
                        </ul>
                    </li>
                </div>
                <!-- Menu Button -->
                <div class="menu-btn-wrap">
                    <div class="btn-group pull-left">
                        <button type="button" class="btn menu-btn navbar-minimalize waves-effect waves-light" data-toggle="dropdown " aria-expanded="false "><i class="ion-grid font-21p "></i></button>
                    </div>
                </div>
            <!-- End Menu Button -->
        </div>				
    </div>
<!-- END TOPNAV -->	
</nav>
</div>
<!-- END ROW -->	
<div id="navbar-white " class="row wrapper border-bottom white-bg page-heading p-t-10 p-b-10 ">
<ul class="navbar-top-links ">
<li class="navbar-breadcrumb ">
    @if(Breadcrumbs::exists())
    {!! Breadcrumbs::render() !!}
    @endif
</li>



                    
<div style="float:right!important; margin-top:-3px!important; right:0!important; ">
    <li class="waves-effect waves-light ">
        <a href="/logout" class="account-link "><i class="ion-ios-chatboxes-outline "></i> Sign Out</a>
    </li>
</div>
</ul>
</div>