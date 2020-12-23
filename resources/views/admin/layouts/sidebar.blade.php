<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                @if(Auth::user()->role_id==1) 
                <li class="nav-divider text-white">
                    Welcome
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/super_admin/dashboard')}}"><i class="fa fa-fw fa-home"></i>Home</a>
                </li>
                <li class="nav-divider text-white">
                    
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/super_admin/dashboard/upload_app')}}"><i class="fa fa-plus"></i>Upload Applicatiion</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/super_admin/dashboard/view_app')}}"><i class="fa fa-list"></i>View Application</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/super_admin/dashboard/view_user')}}"><i class="fa fa-user"></i>View Users</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/super_admin/dashboard/view_messages')}}"><i class="fa fa-comment"></i>View Messages</a>
                </li>

                @elseif(Auth::user()->role_id ==2)
                <li class="nav-divider text-white">
                    Welcome
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/admin/dashboard')}}"><i class="fa fa-fw fa-home"></i>Home</a>
                </li>
                <li class="nav-divider text-white">
                   
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/admin/dashboard/upload_app')}}"><i class="fa fa-plus"></i>Upload Application</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/admin/dashboard/view_app')}}"><i class="fa fa-list"></i>View Applications</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url ('/admin/dashboard/payment')}}"><i class="fa fa-credit-card" aria-hidden="true"></i>Payment</a>
                </li>
                @endif   
            </ul>
        </div>
    </nav>
</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->