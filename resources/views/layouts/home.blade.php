<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" 
    content="width=device-width, 
    initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('website')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('website')}}/css/responsive.css">
</head>
<body>
<!--Start Navigation Menu-->
<nav class="navbar navbar-expand-md navbar-light bg-white border-bottom">
	<div class="container p-0">
		<a class="navbar-brand" href="{{route('website')}}">
			<h1 class="text-dark bold fa">Namira</h1>
		</a>
            <div class="menu-btn-2 navbar-toggler" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarResponsive">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>
		<div class="collapse navbar-collapse" 
				id="navbarResponsive">
			<ul class="navbar-nav ml-auto text-center text-dark p-0 h6">
				<li class="nav-item">
					<a class="nav-link" href="{{route('website')}}">AUTHOR</a>
				</li>
				@foreach($categories as $category)
				<li class="nav-item">
					<a class="nav-link" href="{{ route('website.journal', ['slug' => $category->slug  ]) }}">{{$category->name}}</a>
				</li>
				@endforeach
				<li class="nav-item">
					<a class="nav-link" href="{{route('website.contact')}}">CONTACT</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!--End Navigation Menu-->
@yield('content')
<!-- Start Contact Section -->
<section id="CONTACT" class="bg-dark">
	<div class="container">
		<div class="row bg-color">
			<div class="col-xs-12 col-sm-6 col-md-4 padding">
				<div class="text-white">
					<div class="card-body mt-3">
						<h3>ABOUT US</h3>
						<div class="mt-3">
							<p>Namira is an agency that will help you
							how to makes your products easily and sell
							it world marketplace.</p> <a href="#" class="text-promary">Learn More</a>
						</div>
					</div>
				</div> 
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4  padding">
				<div class="text-white text-center">
					<div class="card-body mt-3">
						<h3>Follow us</h3>
			        	<div class="mt-3">
			        		<a href="" class="btn btn-dark">
			        			<i class="fa fa-facebook text-white"></i>
			        		</a>
			        		<a href="" class="btn btn-dark">
			        			<i class="fa fa-twitter text-white"></i>
			        		</a>
			        		<a href="" class="btn btn-dark">
			        			<i class="fa fa-pinterest text-white"></i>
			        		</a>
			        		<a href="" class="btn btn-dark">
			        			<i class="fa fa-linkedin text-white"></i>
			        		</a>
			        	</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4  padding">
				<div class="text-white">
					<div class="card-body mt-3">
						<h3>CONTACT US</h3>
						<div class="mt-3">
							<p>6867 West Yorkshire</p>
							<p>Bardford, Springmail Street, BD5 7HW</p>
							<p>namira@gmail.com</p>
							<p class="text-primary">444-321-1234</p> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Contact Section -->
<!--Start footer part-->
<footer>
	<div class="container-fluid bg-white text-dark mt-3">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-secondary">
			2020 All right reserved by <i class="fa fa-copyright"></i> <span class="text-primary">Mannan Shihab</span>
			</div>
		</div>	
	</div>
</footer>
<!--End footer part-->

<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('website')}}/js/jquery.slim.min.js"></script>
<script src="{{asset('website')}}/js/popper.min.js"></script>
<script src="{{asset('website')}}/js/bootstrap.min.js"></script>
</body>
</html>
