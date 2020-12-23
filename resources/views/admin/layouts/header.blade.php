<!-- navbar -->
<!-- ============================================================== -->
<div class="dashboard-header">
<nav class="navbar navbar-expand-lg bg-white fixed-top bg-dark">
   <a class="navbar-brand"><img src="{{asset('front_assets/images/logo.png')}}" style="height: auto; width: 21%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" style="background-color: rgb(1,20,37);" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-right-top">
            <li class="nav-item">
            </li>
            
            <li class="nav-item dropdown nav-user">
                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('assets/images/logo.png')}}" alt="" class="user-avatar-md rounded-circle"></a>
                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                    <div class="nav-user-info">
                        <h5 class="mb-0 text-white nav-user-name">{{auth()->user()->name}}</h5>
                        <span class="status"></span><span class="ml-2">{{auth()->user()->c_code}}</span>
                    </div>

                    @if(Auth::user()->role_id==1)
                    <a class="dropdown-item" href="{{url('/logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>

                    @elseif(Auth::user()->role_id ==2)
                    <a class="dropdown-item" href="{{url ('/profile/dashboard/o_profile')}}"><i class="fas fa-user mr-2"></i>Profile</a>
                    <a class="dropdown-item" href="{{url('/logout')}}"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    @endif   
                </div>
            </li>
        </ul>
    </div>
</nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->