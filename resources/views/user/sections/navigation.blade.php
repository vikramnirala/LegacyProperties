@section('navigation')

<div class="row">
    <!-- TOP NAVIGATION -->
    <nav class="navbar navbar-fixed-top white-bg" role="navigation" style="margin-bottom: 0">
        <!-- TOPNAV -->
        <div id="topnav">
            <div class="topbar-main">
                <div class="tnav-logo-text"><span><strong>LEGACY </strong> Property Management</span></div>			
                <div class="container width-100">
                  <div class="topnav-logo"><a href=""><img src="assets/images/logo/v2/logo-v2-57x57.jpg" style="width:52px; height:auto" alt=""/></a></div>
                        <!-- Topnav Links -->
                        <ul class="topnav-links">
                             <li style="list-style:none;"><span class="user-welcome-msg">Welcome, <strong>John Smith</strong></span></li>
                            <!-- User Account Button -->
                            <li class="no-list">
                                <a href="#" class="user-account-btn dropdown-toggle" data-toggle="dropdown"><i class="md-account-circle"></i></a>
                                <ul class="dropdown-menu dd-menu-1" role="menu">
                                    <li><a href="#"><i class="md md-account-circle"></i> Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="md md-settings"></i> Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="db_user-index.html"><i class="md md-apps"></i> Dashboard</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ url('/logout') }}"><i class="md md-exit-to-app"></i> Sign Out</a></li>
                                </ul>
                            </li>
                        </ul>						
                        <!-- Menu Button -->
                        <div class="menu-btn-wrap">
                            <div class="btn-group pull-left">
                                <button type="button" class="btn menu-btn navbar-minimalize waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="ion-grid font-21p"></i></button>
                            </div>
                        </div>
                    <!-- End Menu Button -->
                </div>				
            </div>
        </div>
        <!-- END TOPNAV -->	
    </nav>
</div>


@endsection