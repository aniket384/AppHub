@extends('admin.layouts.master')
@section('title','View User')
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
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($user as $users)
                                <tbody>
                                    <tr>
                                        <td>{{$users->id}}</td>
                                        <td>{{$users->name}}</td>
                                        <td>{{$users->email}}</td>
                                        <td>Active</td>
                                        <td>                                    
                                            <a class="btn btn-danger" href="#">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>User ID</th>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>Status</th>
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