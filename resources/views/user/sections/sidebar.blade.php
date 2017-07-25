@section('left-sidebar')



<nav id="main-side-menu" class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header text-center">
                <div class="dropdown profile-element"> 
                    <span><img alt="image" class="img-circle" src="assets/images/users/avatar-1.jpg" style="width:48px; height:auto "/></span>
                    <span class="clear"></span> <span class="block m-t-xs"> <strong class="font-bold">John Smith</strong></span>
                </div>
            </li>
            <li>
                <a href="db_user-index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#">My Property</a></li>
                    <li><a href="#">Add Property</a></li>
                </ul>
            </li>
            <li>
                <a href="db_user-index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Account</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/profile">Profile</a></li>
                    <li><a href="/account-settings">Settings</a></li>
                    <li><a href="{{ url('/logout') }}">Sign Out</a></li>
                </ul>
            </li>
            <li>
                <a href="db_user-index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Support</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Call Us</a></li>
                    <li><a href="#">Send A Message</a></li>
                    <li><a href="#">Live Chat</a></li>
                    <li><a href="#">Support Center</a></li>						
                </ul>
            </li>
        </ul>
    </div>
</nav>

@endsection