<!-- SIDE MENU NAV -->
<nav id="main-side-menu" class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header text-center">
                <div class="dropdown profile-element"> 
                    <span><img alt="image" class="img-circle" src="public/assets/theme/images/users/avatar-1.jpg" width="48px" height="auto" /></span>
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</strong>
                </div>
            </li>
            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a></li>
            <li><a href="#">My Property</a></li>
            <li><a href="{{ route('admin.users') }}">Users</a></li>
            
        </ul>
    </div>
</nav>
<!-- END SIDE NAV -->