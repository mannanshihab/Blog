@extends('layouts.home')
<title>{{ $post -> title}}</title>
@section('content')

<!-- Start Continue Reading  -->
<section id="conred">
	<div class="container">
		<div class="row">
			<!-- Blog Entries Column -->
			<div class="col-md-8">

			<!-- Blog Post -->
			<div class="card mb-4 mt-5">
				<img class="card-img-top" src="{{asset($post->image)}}" alt="Card image cap">
				<div class="card-body">
				<p class="mt-3">MARK TWAIN/{{$post->created_at->format('M d, Y')}}</p>
				<dt class="card-title mt-5">{{ $post -> title}}</dt>
					<dd class="card-text mt-5">{!! $post -> description !!}</dd>
					<span class=" mt-3 h6">
						Category : {{ $post->category->name }}
					</span>
					<p class=" mt-3 h6"> Tags :
						@if($post->tags()->count() > 0)
							@foreach($post->tags as $tag) 
								<a href="#">#{{$tag->name}}</a>
							@endforeach
						@endif
					</p>
				</div>
			</div>

			</div>

			<!-- Sidebar Widgets Column -->
			<div class="col-md-4 mt-4">
				<!-- email newsletter -->
				<div class="card my-4 border-none">
					<h5 class="card-header text-uppercase text-center bg-secondary text-white">email newsletter</h5>
					<div class="card-body">
						<p >Signup our newsletter and got updates by  email. Lets done.</p>
						<div class="input-group">
							<div class="col-12">
								<div class="form-group mt-3 "> 
	                                <input 
	                                type="text"
	                                class="form-control bg-d6"
	                                id="input-name"
	                                name="first_name"
	                                value=""
	                                placeholder="Your Name">
	                            </div>
	                         </div> 
	                         <div class="col-12">  
	                            <div class="form-group mt-3"> 
	                                <input 
	                                type="text"
	                                class="form-control bg-d6"
	                                id="input-name"
	                                name="first_name"
	                                value=""
	                                placeholder="Your Email">
	                            </div>
	                        </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary" type="submit">SIGNUP NOW</button>
                            </div>
						</div>
					</div>
				</div>
				<!-- RECENT POST -->
				<div class="card my-4">
					<h5 class="card-header text-uppercase text-center bg-secondary text-white">RECENT POST</h5>
					<div class="card-body ">
						@foreach($posts as $post)
						<div>
							<a href="{{route('website.continue_reading', ['slug'=> $post-> slug])}}">{{$post->title}}</a>
						</div>
						@endforeach
					</div>
				</div>
				<!-- RECENT POST -->
				<div class="card my-4">
					<h5 class="card-header text-uppercase text-center bg-secondary text-white">TEXT WIDGET</h5>
					<div class="card-body ">
						<p>This is a text widget. In this widget you can  write anything related to your product about strategy.</p>
						<p>
							Widget also use for Update, Featured of post  and anything like text.
						</p>				
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Start Continue Reading  -->

@endsection
