@extends('user.layouts.master')
@section('title','Home')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container-fluid">

        <div class="inner-sec-shop px-lg-4 px-3">
            <div class="about-content py-lg-5 py-3">
                <div class="row">

                    <div class="col-lg-6 p-0">
                        <img src="{{asset('front_assets/images/logo.png')}}" alt="Goggles" class="img-fluid">
                    </div>
                    <div class="col-lg-6 about-info">
                        <h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">About Us</h3>
                        <p class="my-xl-4 my-lg-3 my-md-4 my-3">Surgefile is providing a platform to publish your Application with minimum charges.
                        </p>
                        <h4>Benefits to upload your Apps</h4>
                        <ul>
                            <p><i class="fa fa-check-square" aria-hidden="true" style="color: green"> </i> Get App Downloading</p>
                            <p><i class="fa fa-check-square" aria-hidden="true" style="color: green"></i> Easy to share your app </p>
                            <p><i class="fa fa-check-square" aria-hidden="true" style="color: green"> </i> Easy to promote your App</p>
                            <p><i class="fa fa-check-square" aria-hidden="true" style="color: green"> </i> Monitor Your App Status</p>
                            <p><i class="fa fa-check-square" aria-hidden="true" style="color: green"> </i> List your app in Top Categories</p>
                            <p><i class="fa fa-check-square" aria-hidden="true" style="color: green"> </i> Surgefile promote top 50 Apps listed by editor's</p>
                            <p><i class="fa fa-check-square" aria-hidden="true" style="color: green"> </i> Get your App Certificate</p>
                        </ul><br>

                        <h3>Go to Developer Console</h3>
                        <a href="{{url('/login')}}" class="btn btn-sm animated-button gibson-three mt-4">Login </a>

                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
    </div>
</section>

@endsection