@extends('layouts.home')
<title>{{ $category->name }}</title>
@section('content')
 
<!-- Strat JOUrnal section -->
<section id="JOURNAL">
	<div class="container-fluid padding mt-5">
		<div class="row text-center">
			<div class="col-12 mt-3">
				<h2>{{ $category->name }}</h2>
			</div>
		</div>
		<div class="container padding mt-5">
			@foreach ($posts as  $post)
			<div class="row border-bottom mt-5">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="">
						<div class="card-body mb-5">
							<p class="">MARK TWAIN  / {{$post->created_at->format('d-M-Y')}}</p>
							 <span>{{ $post->category->name }}</span>
							<h3 class="">{{ $post->title }}</h3>
				        	<p class="">{!! Str::limit($post -> description, 200) !!}</p>
							<div class="">
								<a href="{{route('website.continue_reading', ['slug'=> $post-> slug])}}"
								class="btn btn-primary mt-3">CONTINUE READING</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="mt-3">
						<img class="card-img-top" 
						src="{{asset($post->image)}}" alt="">
					</div>
				</div>
			</div>
			@endforeach
			<div>
				<!--Start Pagination -->
				<div class="mt-5">
					<ul class="pagination justify-content-center mb-4">
						<li class="page-item">
							{{ $posts -> links() }}
						</li>
					</ul>
				</div>
				<!--End Pagination -->
			</div>
		</div>
	</div>	
</section>
<!-- End Journal section -->

@endsection

