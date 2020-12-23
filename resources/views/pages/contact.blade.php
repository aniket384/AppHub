@extends('user.layouts.master')
@section('title','Home')
@section('content')
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
    <div class="container">
        <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Contact</h3>
        <div class="inner_sec">
            <p class="sub text-center mb-lg-5 mb-3">We love to discuss your idea</p>
            <div class="address row">

                <div class="col-lg-4 address-grid">
                </div>

                <div class="col-lg-4 address-grid">
                    <div class="row address-info">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6>Email</h6>
                            <p>Email :
                                <a href="mailto:surgefile@gmail.com"> surgefile@gmail.com</a>

                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 address-grid">
                </div>
            </div>
            

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

            <div class="contact_grid_right">
                <form method="post" action="contact-us"> {{csrf_field()}}
                    <div class="row contact_left_grid">
                        <div class="col-md-6 con-left">
                            <div class="form-group">
                                <label class="my-2">Name</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Your Name!" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Please Enter Your Eamil" required="">
                            </div>
                            <div class="form-group">
                                <label class="my-2">Subject</label>
                                <input class="form-control" type="text" name="subject" id="subject" placeholder="Enter Your Subject Here!" required="">
                            </div>
                        </div>
                        <div class="col-md-6 con-right">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea id="textarea" placeholder="Enter Your Message!" required="" name="message" id="message"></textarea>
                            </div>
                            <input class="form-control" type="submit" value="Submit">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection