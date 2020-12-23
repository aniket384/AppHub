@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <div class="card" style="background-color:transparent; border: solid cadetblue 12px; border-style: outset; border-radius: 22px;">
               <div class="card-header text-center text-white" style="background-color:transparent">
                <h5>Back To Home Page <a href={{url('/')}}>Click Here</a></h5>
                <a class="navbar-brand"><img src="{{asset('front_assets/images/logo.png')}}" style="height: auto; width: 32%"></a><br>
            <span class="splash-description">Please Login</span>
       

                <div class="card-body text-white" style="background-color: transparent">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div><br>
                        <p style="text-align: center">New User Register Here <a href="{{('register')}}" style="font-size: 20px;">Sign Up</a></p>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
