<!-- main-menu Start -->
<header class="top-area">
	<div class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="logo">
						<a href="{{route('frontend.home')}}">
							Pack your<span>Bags</span>
						</a>
					</div><!-- /.logo-->
				</div><!-- /.col-->
				<div class="col-sm-10">
					<div class="main-menu">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<i class="fa fa-bars"></i>
							</button><!-- / button-->
						</div><!-- /.navbar-header-->
						<div class="collapse navbar-collapse ml-50">
								<a  class="btn btn-primary" href="{{route('frontend.home')}}">Home</a>
								<a  class="btn btn-primary" href="{{route('frontend.home')}}">Destination</a>
								<a  class="btn btn-primary" href="{{route('frontend.home')}}">Packages</a>
								<a  class="btn btn-primary" href="{{route('frontend.home')}}">Special Offers</a>
								<a  class="btn btn-primary" href="{{route('frontend.home')}}">blog</a>
								<a class="btn btn-primary" href="">Book Now</a>
								@guest
								<a class="btn btn-primary" href="{{route('tourist.registration')}}">Registration</a>
								<a class="btn btn-primary" href="{{route('tourist.login.post')}}">Login</a>
								@endguest

								@auth
								<a class="btn btn-primary" href="{{route('tourist.logout')}}">Logout</a> |
								<a class="btn btn-primary" href="{{route('profile.view')}}">Profile|{{auth()->user()->name}} ({{ auth()->user()->role }})</a> 
								@endauth
						<h5 class="display-4 fw-bolder">Search your package(s)</h5>

						<form action="{{route('search.package')}}" method="get">
						<input type="text" class="form-control" placeholder="Search..." name="search">
						<button type="submit" class="btn btn-success">Search</button>
						</form>
								<!--/.project-btn-->

							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.main-menu-->
				</div><!-- /.col-->
			</div><!-- /.row -->
			<div class="home-border"></div><!-- /.home-border-->
		</div><!-- /.container-->
	</div><!-- /.header-area -->

</header><!-- /.top-area-->
<!-- main-menu End -->