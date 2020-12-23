@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-6" style="margin-top: 10%">
            <div class="card">
                <div class="card-header text-center text-white" style="background-color: rgb(37,20,1);">
                <a class="navbar-brand" style="color: red; font-size: 30px; font-weight: bolder;">T<span class="small text-lowercase" style="color: blue;">he </span>H<span class="small text-lowercase" style="color: blue;">ub of </span>E<span class="small text-lowercase" style="color: blue;">ducation</span></a>
                <br>
            <span class="splash-description">{{ __('Reset Password') }}</span>
        </div>
                <div class="card-header text-white" style=" background-color: rgb(37,20,1);"></div>

                <div class="card-body text-white" style=" background-color: rgb(37,20,1);">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
