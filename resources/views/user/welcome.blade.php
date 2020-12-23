@extends('user.layouts.master')
@section('title','Home')
@section('content')
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				@foreach($apps as $app)
				<h3 class="tittle-w3layouts my-lg-4 my-4">{{$app->app_cat}} </h3>
				<div class="row">
					<!-- /womens -->
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">

								<div class="men-thumb-item">
									<img src="{{$app->image}}" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="#" class="link-product-add-cart">Download</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h5 style="text-align:center; font-weight:bold">{{$app->app_name}}</h5>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<!-- //womens -->
				
				{{-- <div class="row galsses-grids pt-lg-5 pt-3">
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="{{asset('front_assets/images/triowe.png')}}" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p> Express your style now.</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="{{asset('front_assets/images/banner1.jpg')}}" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p>Express your style now.</p>
							</figcaption>
						</figure>
					</div>
				</div> --}}

			</div>
		</div>
	</section>
	<!-- about -->
@endsection