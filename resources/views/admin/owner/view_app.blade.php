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
                                        <th>Status</th>
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
                                           <input type="checkbox" class="toggle-class" data-id="{{$app->id}}" data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger" {{ $app->status == true ? 'checked' : ''}}>
                                        </td>
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
                                        <th>Status</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            {{ $apps->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(function() {
      $('#toggle-two').bootstrapToggle({
        on: 'Enabled',
        off: 'Disabled'
      });
    })
  </script>

  <script>
      $('.toggle-class').on('change', function() {
          var status = $(this).prop('checked') == true ? 1 : 0;
          
          var app_id = $(this).data('id');
          
          $.ajax({
              type: 'GET',
              dataType: 'JSON',
              url: '/super_admin/dashboard/update-app-status',
              data: {
                  'status': status,
                  'app_id': app_id
              },
              success:function(data) {
                  $('#notifDiv').fadeIn();
                  $('#notifDiv').css('background', 'green');
                  $('#notifDiv').text('Status Updated Successfully');
                  setTimeout(() => {
                      $('#notifDiv').fadeOut();
                  });
              }
          });
      });
  </script>

@endpush