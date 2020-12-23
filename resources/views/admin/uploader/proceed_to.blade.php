@extends('admin.layouts.master')
@section('title','Pay Now')
@section('content')
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper" style="background: radial-gradient(circle, rgba(135,104,0,1) 1%, rgba(2,87,159,1) 100%)">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            @foreach($consoles as $console)

            @if ($console->c_type=='Single Application Console')
            <p class="text-white">You Selected <b>{{$console->c_type}}</b>, Now Go To Payment Page. You Need To Pay ₹30<strong></strong> </p>

            @else
            <p class="text-white">You Selected <b>{{$console->c_type}}</b>, Now Go To Payment Page. You Need To Pay ₹300<strong></strong> </p>
            @endif

            @endforeach

            <form enctype="multipart/form-data" action="{{url('/admin/dashboard/pay_now')}}" method="post" id="basicform" data-parsley-validate="">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">
                            <a href="https://www.instamojo.com/@armwebinfo" class="btn btn-success">Pay Now</a>
                            <a href="{{url('/admin/dashboard/payment')}}" class="btn btn-danger">Pay Now</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection