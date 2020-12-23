@extends('admin.layouts.master')
@section('title','View Application')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet"/>
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
  <div class="dashboard-ecommerce" style="background: radial-gradient(circle, rgba(135,104,0,1) 1%, rgba(2,87,159,1) 100%)">
    <div class="container-fluid dashboard-content ">
      <!-- basic table  -->
      <!-- ============================================================== -->
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card" style="border: solid cadetblue 12px; border-style: outset; border-radius: 22px;">
          <h5 class="card-header">View Application
            <a href="{{url ('/super_admin/dashboard/upload_app')}}" class="fa fa-plus-circle btn btn-dark float-right"> Upload Application</a>
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
                    <th>Status</th>
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
                      <input type="checkbox" class="AppStatus btn btn-success" rel="{{$app->id}}" data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger" @if($app['status']=="1") checked @endif>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="#">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a>
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
</div>
@endsection

<script>
    //update banner status
    $(".AppStatus").change(function(){
              var id = $(this).attr('rel');
              if ($(this).prop("checked")==true) {
                $.ajax({
                  headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : '/super_admin/update-app-status',
                  data : {status:'1',id:id},
                  success : function(data){
                    $("#message_success").show();
                    setTimeout(function(){$("#message_success").fadeOut('slow');}, 2000);
                  },error:function(){
                    alert("error");
                  }
                });

              }else{
                $.ajax({
                  headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type : 'post',
                  url : '/super_admin/update-app-status',
                  data : {status:'0',id:id},
                  success : function(resp){
                    $("#message_error").show();
                    setTimeout(function(){$("#message_error").fadeOut('slow');}, 2000);
                  },error:function(){
                    alert("error");
                  }
                });
              }
            });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>