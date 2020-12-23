@extends('admin.layouts.master')
@section('title','View Messages')
@section('content')
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper" style="background: radial-gradient(circle, rgba(135,104,0,1) 1%, rgba(2,87,159,1) 100%)">
    <div class="dashboard-ecommerce" >
        <div class="container-fluid dashboard-content ">
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card" style="border: solid cadetblue 12px; border-style: outset; border-radius: 22px;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>Message ID</th>
                                        <th>Sender Name</th>
                                        <th>Sender Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach($messages as $messages)
                                <tbody>
                                    <tr>
                                        <td>{{$messages->id}}</td>
                                        <td>{{$messages->name}}</td>
                                        <td>{{$messages->email}}</td>
                                        <td>{{$messages->subject}}</td>
                                        <td>{{$messages->message}}</td>
                                        <td>                                        
                                            <a class="btn btn-danger" href="#">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                        
                                <tfoot>
                                    <tr>
                                        <th>Message ID</th>
                                        <th>Sender Name</th>
                                        <th>Sender Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
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