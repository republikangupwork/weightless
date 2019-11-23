@extends('layouts.app')

@section('style')
<style>
	.hide {
		display: none;
	}
</style>
@endsection

@section('content')

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
  	<div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
     	 	<div class="col-md-7 heading-section text-center ftco-animate">
            	<span class="subheading">How to Subscribe?</span>
            	<h4 class="mb-4">Follow the 3 Easy Steps</h4>
        		<p id="subscribe-steps"></p><hr>
          	</div>
        </div>

        <div class="row justify-content-center block-9" id="choose-plan">
        	<div class="col-md-4 text-center">
        		<div class="card">
        			<div class="card-body">
        				<h5 class="card-title">Monthly</h5>
        				<p class="card-text">Avail only for <b>$29.99</b> per month</p>
        				<button class="btn btn-primary subscribe-plan" data-plan-type="Monthly" data-plan-price="$29.99">SUBSCRIBE NOW</button>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4 text-center">
        		<div class="card">
        			<div class="card-body">
        				<h5 class="card-title">Annually</h5>
        				<p class="card-text">Avail only for <b>$299.99</b> per year</p>
        				<button class="btn btn-primary subscribe-plan" data-plan-type="Annually" data-plan-price="$299.99">SUBSCRIBE NOW</button>
        			</div>
        		</div>
        	</div>
        </div>

        <div class="row justify-content-center block-9 hide" id="subscriber-personal-information">
          	<div class="col-md-8 d-flex">
            	<div class="bg-light p-4 p-md-5">
            		<div class="row">
            			<p class="col-md-12 choosed-plan"></p>
	             	 	<div class="form-group col-md-4">
	                		<input type="text" class="form-control" placeholder="First Name">
	              		</div>
	              		<div class="form-group col-md-4">
	                		<input type="text" class="form-control" placeholder="Middle Name">
	              		</div>
	              		<div class="form-group col-md-4">
	                		<input type="text" class="form-control" placeholder="Last Name">
	              		</div>

	              		<div class="form-group col-md-6">
	                		<input type="text" class="form-control" placeholder="Contact Number">
	              		</div>
	              		<div class="form-group col-md-3">
	                		<input type="number" class="form-control" min="0" placeholder="Age">
	              		</div>
	              		<div class="form-group col-md-3">
	                		<select class="form-control">
	                			<option value="Male">Male</option>
	                			<option value="Female">Female</option>
	                		</select>
	              		</div>

	              		<div class="form-group col-md-12">
	                		<input type="text" class="form-control" placeholder="Email Address">
	              		</div>
	              		<div class="form-group col-md-12">
	                		<textarea name="" id="" rows="5" class="form-control" placeholder="Address"></textarea>
	              		</div>
	              		<div class="form-group col-md-12">
	              			<input type="button" value="Back" class="btn btn-primary" id="back-to-choose-plan">
	                		<input type="button" value="Next" class="btn btn-primary float-right" id="next-to-billing">
	              		</div>
              		</div>
              		
            	</div>
          	</div>
        </div>

        <div class="row justify-content-center block-9 hide" id="subscriber-billing-information">
        	<div class="col-md-8 d-flex">
            	<div class="bg-light p-4 p-md-5">
            		<div class="row">
            			<p class="col-md-12 choosed-plan"></p>
            			<p class="col-md-12" style="font-size: 24px;">Working Inprogress (Coming Soon)</p>
	              		<div class="form-group col-md-12 clearfix">
	              			<button type="button" class="btn btn-primary" id="back-to-personal-info">Back</button>
	              		</div>
              		</div>
              		
            	</div>
          	</div>
        </div>

  	</div>
</section>

@endsection


@section('script')
<script>
	$(document).ready(function() {
		$('#subscribe-steps').text('1. Choose a plan to subscribe'); // default
		$('.subscribe-plan').on('click', function() {
			$('#choose-plan').addClass('hide');
			$('#subscriber-personal-information').removeClass('hide');
			var type = $(this).attr('data-plan-type');
			var price = $(this).attr('data-plan-price');
			$('.choosed-plan').text('Selected Plan: '+ type+' ('+price+')');
			$('#subscribe-steps').text('2. Fill-up your Personal Information');
		});
		$('#back-to-choose-plan').on('click', function() {
			$('#subscriber-personal-information').addClass('hide');
			$('#choose-plan').removeClass('hide');
			$('#subscribe-steps').text('1. Choose a plan to subscribe');
		});
		$('#next-to-billing').on('click', function() {
			$('#subscriber-personal-information').addClass('hide');
			$('#subscriber-billing-information').removeClass('hide');
			$('#subscribe-steps').text('3. Fill-up your Billing Information');
		});
		$('#back-to-personal-info').on('click', function() {
			$('#subscriber-personal-information').removeClass('hide');
			$('#subscriber-billing-information').addClass('hide');
			$('#subscribe-steps').text('2. Fill-up your Personal Information');
		});
	})
</script>
@endsection