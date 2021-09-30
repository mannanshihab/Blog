@extends('layouts.home')
<title>Home</title>
@section('content')

<!--Start Banner -->
<section id="banner" >
    <div class="container-fluid container-expand-md">
        <div class="row">
            <div class="col-sm  p-0">
                <div id="my-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="{{asset('website')}}/img/banner.png" class="d-block w-100 img-fluid" alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner-->

<!-- Start about section  -->
<section id="about" class="p-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 p mt-3">
                <div class="ml-auto">
                    <div class=" lg-text">
                    <h2>GET FREE ACCESS</h2>
                    <p>When you signup in my site you must get our weekly newsletter. As a result you will be up to date.</p>
                    </div>
                    <div class="lg-text">
                        <p><i class="fa fa-check"></i> LAUNCH YOUR BUSINESS WITH  EASIEST WAY</p> 
                        <p><i class="fa fa-check"></i> KEEP YOU AHEAD IN MARKETING CONTEST</p> 
                        <p><i class="fa fa-check"></i> IMPROVE YOUR PRODUCTS DESIGN EFFICIENTLY</p> 
                        <p><i class="fa fa-check"></i> INCREASING YOUR PROMOTIONAL ACTIVITIES</p>
                        <p><i class="fa fa-check"></i> JOINNING THE WORDPRESS E-COMMERCE MARKET</p> 
                        <p>If you subscribe this you will get more than help from  free access. We can sell your product Spam:Free Police </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 p mt-3 border-left">
                <div class="ml-auto">
                    <div class=" lg-text">
                        <h2> EMAIL NEWSLETTER </h2>
                        <p>Fill this form for immediate access.</p>
                    </div>
                    <div class="table lg-text">
                         <form method="post" action="#">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input 
                                        type="text"
                                        class="form-control"
                                        id="input-name"
                                        name="first_name"
                                        value=""
                                        placeholder=" Your First name">
                                    </div>
                                </div>
                                <div class="col-lg-8 ">
                                    <div class="form-group">
                                        <input 
                                        type="text"
                                        class="form-control"
                                        id="input-name"
                                        name="sure_name"
                                        value=""
                                        placeholder="Your Last name">
                                    </div>
                                </div>
                                <div class="col-lg-8 ">
                                    <div class="form-group">
                                        <input 
                                        type="email"
                                        class="form-control"
                                        id="input-email"
                                        name="email"
                                        value=""
                                        placeholder="Enter Your email">
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary mt-3">GET FREE ACCESS</button>
                        </form>
                        <p class="mt-3">By joining the newsletter, you agree to our <u>Privacy Policy</u> and <u>Community Guidlines</u>  Got question ? <u>Cheak FAQ</u></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start about section  -->

<!-- Start Service Section -->
<section id="SERVICE">
    <div class="container-fluid padding bg-dark p mt-5">
        <div class="row text-center">
            <div class="col-12 mt-5">
                <h2 class="text-white">
                OUR SERVICE</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row text-center padding">
                <div class="col-xs-12 col-sm-6 col-md-4 p mt-3">
                    <div class="text-white text-center">
                        <i class="fa fa-edit"></i>
                        <div class="card-body">
                            <h3>CONTENT MARKETING</h3>
                            <p>We write content for business promotion <br>  and keeping the audience in mind</p>
                            <div>
                                <a href="#"
                                class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 p mt-3">
                    <div class="text-white text-center">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="card-body">
                            <h3>E-COMMERCE</h3>
                            <p>Our academy inform you how to create and sell profitable digital products & services</p>
                            <div>
                                <a href="#"
                                class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 p mt-3">
                    <div class="text-white text-center">
                        <i class="fa fa-chart-pie"></i>
                        <div class="card-body">
                            <h3>CORPORATE FINANCE</h3>
                            <p>Your financial activities perform our finance depertment according to finance rules. </p>
                            <div>
                                <a href="#"
                                class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>
<!-- End Service Section -->

<!-- Strat JOUrnal section -->
<section id="JOURNAL">
    <div class="container-fluid padding mt-5">
        <div class="row text-center">
            <div class="col-12 mt-3">
                <h2>OUR JOURNAL</h2>
            </div>
        </div>
        <div class="container padding">
            <div class="row border-bottom mt-5">
                @foreach( $journalPosts as $post )
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="">
                        <div class="card-body mb-5">
                            <p class="">MARK TWAIN  /  {{$post->created_at->format('M d, Y')}}</p>
                            <p>{{ $post->category->name }}</p>
                            <h3 class="">{{ $post -> title }}</h3>
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
                        <img class="card-img-top" src="{{asset($post->image)}}" alt="">
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="row mt-5">
                {{ $journalPosts -> links() }}
                <!-- <a href="#" class="btn arrow btn-primary ml-auto">
                    Next Page <i class="fa fa-arrow-right"></i>
                </a> -->
            </div>
        </div>
    </div>  
</section>
<!-- End Journal section -->
@endsection
