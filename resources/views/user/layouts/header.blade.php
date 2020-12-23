		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Need Help</h6>
					<ul>
						<li>
							<i class="fa fa-envelope"></i> Email</li>
							<a href="mailto:surgefile@gmail.com">surgefile@gmail.com</a>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.html">
							<img src="{{asset('front_assets/images/logo.png')}}" style="height: auto; width: 32%">
						</a>
					</h1>
				</div>

			</div>
			<div class="search">
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
				<!-- open/close -->
				<div class="overlay overlay-door">
					<button type="button" class="overlay-close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</button>
					<form action="#" method="post" class="d-flex">
						<input class="form-control" type="search" placeholder="Search here..." required="">
						<button type="submit" class="btn btn-primary submit">
							<i class="fas fa-search"></i>
						</button>
					</form>

				</div>
				<!-- open/close -->
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">

				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="{{url('/')}}">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/about')}}">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/applications')}}">Application</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/contact')}}">Contact</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="{{url('/login')}}">Login</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->