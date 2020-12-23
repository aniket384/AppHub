@extends('admin.layouts.master')
@section('title','View Application')
@section('content')
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper" style="background: radial-gradient(circle, rgba(135,104,0,1) 1%, rgba(2,87,159,1) 100%)">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card" style="border: solid cadetblue 12px; border-style: outset; border-radius: 22px;">
                    <h5 class="card-header">View Application
                        <a href="{{url ('/admin/dashboard/upload_app')}}" class="fa fa-plus-circle btn btn-dark float-right"> Upload Application</a>
                    </h5>
                    @if(Session::has('flash_message_error'))
                    <div class="alert alert-sm alert-danger alert-block" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{!! session('flash_message_error') !!}</strong>
                    </div>
                    @endif
                    @if(Session::has('flash_message_success'))
                    <div class="alert alert-sm alert-success alert-block" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                    @endif
                    <div id="message_success" style="display: none;" class="alert alert-sm alert-success">Status Enabled</div>
                    <div id="message_error" style="display: none;" class="alert alert-sm alert-danger">Status Disabled</div>    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>Application ID</th>
                                        <th>App Name</th>
                                        <th>App Category</th>
                                        <th>App OS</th>
                                        <th>App Description</th>
                                        <th>App Owner</th>
                                        <th>Owner E-mail</th>
                                        <th>Owner Number</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($apps as $app)
                                <tbody>
                                    <tr>
                                        <td>S - {{$app->id}}</td>
                                        <td>{{$app->app_name}}</td>
                                        <td>{{$app->app_cat}}</td>
                                        <td>{{$app->app_os}}</td>
                                        <td>{{$app->app_desc}}</td>
                                        <td>{{$app->app_owner}}</td>
                                        <td>{{$app->owner_email}}</td>
                                        <td>{{$app->owner_number}}</td>
                                        <td>
                                            @if(!empty($app->image))
                                            <img src="{{asset($app->image)}}" style="height: 13%; width:auto;" alt="">
                                            @endif
                                        </td> 
                                        <td>
                                            <a class="btn btn-primary" href="#">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                           
                                <tfoot>
                                    <tr>
                                        <th>Application ID</th>
                                        <th>App Name</th>
                                        <th>App Category</th>
                                        <th>App OS</th>
                                        <th>App Description</th>
                                        <th>App Owner</th>
                                        <th>Owner E-mail</th>
                                        <th>Owner Number</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
        </div>
    </div>

@endsection