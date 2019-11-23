@extends('layouts.app')

@section('style')

@endsection

@section('content')

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
  	<div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
     	 	<div class="col-md-7 heading-section text-center ftco-animate">
            	<span class="subheading">Contact</span>
            	{{-- <h2 class="mb-4">Contact Us</h2> --}}
        		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          	</div>
        </div>

        <div class="row justify-content-center block-9">
          	<div class="col-md-7 order-md-last d-flex">
            	<form action="#" class="bg-light p-4 p-md-5 contact-form">
             	 	<div class="form-group">
                		<input type="text" class="form-control" placeholder="Your Name">
              		</div>
              		<div class="form-group">
                		<input type="text" class="form-control" placeholder="Your Email">
              		</div>
              		<div class="form-group">
                		<input type="text" class="form-control" placeholder="Subject">
              		</div>
          			<div class="form-group">
                		<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              		</div>
              		<div class="form-group">
                		<input type="button" value="Send Message" class="btn btn-primary py-3 px-5">
              		</div>
            	</form>
          	</div>

          	<div class="col-md-5 d-flex">
          		<div class="row d-flex contact-info mb-5">
		          	<div class="col-md-12 ftco-animate">
		          		<div class="box p-2 px-3 bg-light d-flex">
		          			<div class="icon mr-3">
		          				<span class="icon-map-signs"></span>
		          			</div>
			          		<div>
				          		<h3 class="mb-3">Address</h3>
					            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				            </div>
			          	</div>
		          	</div>
		          	<div class="col-md-12 ftco-animate">
		          		<div class="box p-2 px-3 bg-light d-flex">
		          			<div class="icon mr-3">
		          				<span class="icon-phone2"></span>
		          			</div>
		          			<div>
			          			<h3 class="mb-3">Contact Number</h3>
				            	<p><a href="#">+ 1235 2355 98</a></p>
			            	</div>
			          	</div>
		          	</div>
		          	<div class="col-md-12 ftco-animate">
		          		<div class="box p-2 px-3 bg-light d-flex">
		          			<div class="icon mr-3">
		          				<span class="icon-paper-plane"></span>
		          			</div>
		          			<div>
			          			<h3 class="mb-3">Email Address</h3>
				            	<p><a href="#">info@yoursite.com</a></p>
			            	</div>
			          	</div>
		          	</div>
		          	<div class="col-md-12 ftco-animate">
		          		<div class="box p-2 px-3 bg-light d-flex">
		          			<div class="icon mr-3">
		          				<span class="icon-globe"></span>
		          			</div>
		          			<div>
			          			<h3 class="mb-3">Website</h3>
				            	<p><a href="#">yoursite.com</a></p>
			            	</div>
			          	</div>
		          	</div>
	        	</div>
          	</div>
        </div>
  	</div>
</section>

@endsection


@section('script')

@endsection