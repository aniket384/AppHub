@extends('admin.layouts.master')
@section('title','Upload Application')
@section('content')
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce" style="background: radial-gradient(circle, rgba(135,104,0,1) 1%, rgba(2,87,159,1) 100%)">
        <div class="container-fluid dashboard-content ">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card" style="border: solid cadetblue 12px; border-style: outset; border-radius: 22px;">
                    <h3 class="card-header">
                        <i class="fa fa-plus-circle"></i> Upload Application 
                        <a href="{{url ('/super_admin/dashboard/view_app')}}" class="fa fa-list btn btn-dark float-right"> View Application</a>
                    </h3>
                    <p class="mt-2 ml-3" style="color: red">Fields marked <span> * </span> are required</p>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{url('/super_admin/dashboard/upload_app')}}" method="post" id="basicform" data-parsley-validate="">
                            @csrf
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example" name="app_cat" id="app_cat">
                                    <option selected>Select App Category</option>
                                    <option value="Art & Design">Art & Design</option>
                                    <option value="Augmented reality">Augmented reality</option>
                                    <option value="Auto & Vehicles">Auto & Vehicles</option>
                                    <option value="Beauty">Beauty</option>
                                    <option value="Books & Reference">Books & Reference</option>
                                    <option value="Business">Business</option>
                                    <option value="Comics">Comics</option>
                                    <option value="Communication">Communication</option>
                                    <option value="Dating">Dating</option>
                                    <option value="Daydream">Daydream</option>
                                    <option value="Education">Education</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Events">Events</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Food & Drink">Food & Drink</option>
                                    <option value="Health & Fitness">Health & Fitness</option>
                                    <option value="House & Home">House & Home</option>
                                    <option value="Libraries & Demo">Libraries & Demo</option>
                                    <option value="Lifestyle">Lifestyle</option>
                                    <option value="Maps & Navigation">Maps & Navigation</option>
                                    <option value="Medical">Medical</option>
                                    <option value=">Music & Audio">>Music & Audio</option>
                                    <option value="News & Magazines">News & Magazines</option>
                                    <option value="Parenting">Parenting</option>
                                    <option value="Personalization">Personalization</option>
                                    <option value="Photography">Photography</option>
                                    <option value="Productivity">Productivity</option>
                                    <option value="Shopping">Shopping</option>
                                    <option value="Social">Social</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Tools">Tools</option>
                                    <option value="Travel & Local">Travel & Local</option>
                                    <option value="Video Players & Editors">Video Players & Editors</option>
                                    <option value="Wear OS by Google">Wear OS by Google</option>
                                    <option value="Weather">Weather</option>
                                    <option value="Games">Games</option>
                                    <option value="Action">Action</option>
                                    <option value="Adventure">Adventure</option>
                                    <option value="Arcade">Arcade</option>
                                    <option value="Board">Board</option>
                                    <option value="Card">Card</option>
                                    <option value="Casino">Casino</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Educational">Educational</option>
                                    <option value="Music">Music</option>
                                    <option value="Puzzle">Puzzle</option>
                                    <option value="Racing">Racing</option>
                                    <option value="Role Playing">Role Playing</option>
                                    <option value="Simulation">Simulation</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Strategy">Strategy</option>
                                    <option value="Trivia">Trivia</option>
                                    <option value="Word">Word</option>
                                    <option value="Children">Children</option>
                                    <option value="Ages up to 5">Ages up to 5</option>
                                    <option value="Ages 6–8">Ages 6–8</option>
                                    <option value="Ages 9–12">Ages 9–12</option>
                                    <option value="Movies">Movies</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <h5 for="app_name">Applicatio Name<span style="color: red">*</span></h5>
                                <input id="app_name" type="text" name="app_name" data-parsley-trigger="change" required="" placeholder="Enter Application Name" autocomplete="on" class="form-control">
                            </div>

                            <div class="form-group">
                                <h5 for="app_os">Application Operating Environment<span style="color: red">*</span></h5>
                                    <input id="app_os" type="text" name="app_os" data-parsley-trigger="change" required="" placeholder="Enter Application Operating Environment" autocomplete="on" class="form-control">
                            </div>
               
                            <div class="form-group">
                                <h5 for="app_desc">Application Description<span style="color: red">*</span></h5>
                                <input id="app_desc" name="app_desc" type="text" required="" placeholder="Enter Application Description" class="form-control">
                            </div>

                            <div class="form-group">
                                <h5 for="app_owner">Application Owner Name<span style="color: red">*</span></h5>
                                <input id="app_owner" name="app_owner" type="text" placeholder="Enter Application Owner Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <h5 for="owner_email">Email<span style="color: red">*</span></h5>
                                <input id="owner_email" name="owner_email" type="email" required="" placeholder="Enter Application Owner Email" class="form-control">
                            </div>

                            <div class="form-group">
                                <h5 for="owner_number">Number<span style="color: red">*</span></h5>
                                <input id="owner_number" name="owner_number" type="number" required="" placeholder="Enter Application Owner Number" class="form-control">
                            </div>

                            <div class="form-group">
                                <h5 for="image">Application <span class="small"></span></h5>
                                <input id="image" name="image" type="file" required="" class="form-control">
                            </div> 

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <button type="submit" class="btn btn-space btn-primary">Upload Application</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection