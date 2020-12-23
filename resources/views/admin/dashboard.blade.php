@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper" style="background: radial-gradient(circle, rgba(135,104,0,1) 1%, rgba(2,87,159,1) 100%)">
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-md-2">

            </div>

            <div class="card col-md-8 mt-4" style="height: auto; width: 50%; align-items: center; ">
                <img src="{{asset('assets//images/logo.png')}}">

            </div>

            <div class="col-md-2">

            </div>
        </div>

    </div>
</div>
@endsection