@extends('layouts.home')
<title>Conatct</title>
@section('content')
  
<!--Start Contact Form Menu-->
<section>
    <div id="contatti">
        <div class="container-fluid mt-5" >
            <div class="row">
            	<div class="col-md-3"></div>
                <div class="col-md-6 fa padding">
                    <h2 class="text-uppercase mt-3 font-weight-bold">
                    CONTACT US</h2>
                    <p class="mt-3">
                     *	Please fill out the form bellow and I will reply you as soon as possible.
                    </p>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="col-lg-12">
                            	<div>Name</div>
                                <div class="form-group mt-3"> 
                                    <input 
                                    type="text"
                                    class="form-control bg-d6"
                                    id="input-name"
                                    name="first_name"
                                    value=""
                                    placeholder="Type your name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                            	<div>Email</div>
                                <div class="form-group mt-3"> 
                                    <input 
                                    type="text"
                                    class="form-control bg-d6"
                                    id="input-name"
                                    name="first_name"
                                    value=""
                                    placeholder="Type your email">
                                </div>
                            </div>
                            <div class="col-12">
                            	<div>Meassage</div>
                                <div class="form-group">
                                    <textarea 
                                    class="form-control mt-3 bg-d6" 
                                    id="exampleFormControlTextarea1" 
                                    placeholder="Type Your Meassage" 
                                    rows="4" 
                                    name="comment"
                                    value=""> 
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            agree with us
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary" type="submit">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Form Menu-->

@endsection


