@extends('admin.layouts.master')
@section('title','Payment')
@section('content')
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper" style="background: radial-gradient(circle, rgba(135,104,0,1) 1%, rgba(2,87,159,1) 100%)">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <form enctype="multipart/form-data" action="{{url('/admin/dashboard/payment')}}" method="post" id="basicform" data-parsley-validate="">
                @csrf
                <h5 class="text-white">Console Type<span style="color: red">*</span></h5>
                <label class="custom-control custom-radio custom-control-inline text-white">
                    <input type="radio" name="c_type" id="c_type" value="Single Application Console" checked="" class="custom-control-input"><span class="custom-control-label">Single App Console</span>
                </label>
                <label class="custom-control custom-radio custom-control-inline text-white">
                    <input type="radio" name="c_type" id="c_type" value="Multiple Application Console" class="custom-control-input"><span class="custom-control-label">Multiple Apps Console</span>
                </label>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">
                            <button type="submit" class="btn btn-space btn-primary">Proceed To Pay</button>
                            <button class="btn btn-space btn-secondary">Cancel</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection