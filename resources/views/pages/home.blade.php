@extends('layouts.app')

@section('style')

@endsection

@section('content')

<section id="home-section" class="hero">
  	<div class="home-slider js-fullheight owl-carousel">
      	<div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	         	<div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          		<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_1.jpg);">
	          			{{-- <h3 class="vr" style="background-image: url(images/divider.jpg);">Strength</h3> --}}
	          		</div>
		          	<div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          		<div class="text">
		          			<span class="subheading">Welcome to the Club</span>
			            	<h1 class="mb-4 mt-3">Get A <span>Perfect</span> Body <span>Figure</span></h1>
			            	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			            	<p><a href="{{ url('subscribe') }}" class="btn btn-primary px-5 py-3 mt-3">Join with us</a></p>
		            	</div>
		          	</div>
	        	</div>
	        </div>
      	</div>

      	<div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          	<div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          		<div class="one-third order-md-last img js-fullheight" style="background-image:url(images/bg_2.jpg);">
	          			{{-- <h3 class="vr" style="background-image: url(images/divider.jpg);">Workout</h3> --}}
	          		</div>
		          	<div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          		<div class="text">
		          			<span class="subheading">Welcome to Club</span>
			            	<h1 class="mb-4 mt-3">Pain is <span>Temporary</span> But Glory is <span>Forever</span></h1>
			            	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			            	<p><a href="{{ url('subscribe') }}" class="btn btn-primary px-5 py-3 mt-3">Join with us</a></p>
		            	</div>
		          	</div>
	        	</div>
	        </div>
      	</div>
    </div>
</section>

{{-- Sample overlay for vids --}}
<style type="text/css">
	#video_overlays {
		position:absolute;
	    width:100%;
   	 	min-height: 100%;
	    background-color:rgba(0, 0, 0, 0);
	    color: #fff;
	    z-index:999;
	}
</style>

<section class="ftco-counter ftco-section bg-light">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-8 col-lg-12 d-flex">
				<div>
					{{-- @if(!Auth::user())
						<div id="video_overlays">
							<p style="color: #fff; background-color: #fe9191; width: 90%;">&nbsp;&nbsp;&nbsp;Please subscribe inorder to play this video.</p>
						</div>
					@endif --}}
					<video poster="" id="player" playsinline controls>
					    <source src="{{ asset('videos/DNK activation.mp4') }}" type="video/mp4" />
					</video>
					

					<h3 style="padding-top: 10px;">Video viewing rules;</h3>
					<p>In order to get the maximum effect from watching videos follow the simple rules:</p>
					<ul>
						<li>
							Sit down
						</li>
						<li>
							Turn off your phone and all distractions
						</li>
						<li>
							Turn off thoughts in your head
						</li>
						<li>
							Slowly relax, gradually dissolving into space
						</li>
						<li>
							Look into my eyes, either one and do not be distracted by the background
						</li>
						<li>
							The monitor should be horizontal. Just look at the entire screen
						</li>
						<li>
							The sound level does not matter. You can be turn sound off or replace it with a soft music
						</li>
						<li>
							Drink at least a cup of clean water before and after watching the videos. If you are thirsty you can drink water while watching too
						</li>
						<li>
							Don’t eat while watching videos. If you are hungry, do not rush to eat a full plate of food, right after the videos. It takes a few minutes that the effect of watching the video on your brain is realized
						</li>
						<li>
							Drink tea with not strong decoction of stevia, then make a snack or just chew a piece of bell pepper, and only after 5 minutes you will be able to sense  if  your feeling  hungry is true or false. In 90% of cases, sense of hunger is false, and the feeling of hunger disappears completely. If your sense of hunger is true,  eat consciously in the right quantities
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
 </section>

<section class="ftco-section ftco-services ftco-no-pt ftco-no-pb">
  	<div class="container">
        <div class="row no-gutters services-section">
          	<div class="col-md-4 d-flex align-self-stretch ftco-animate">
        		<div class="media block-6 services text-center d-block">
          			<div class="icon"><span class="flaticon-body"></span></div>
	              	<div class="media-body">
		                <h3 class="heading mb-3">Lorem ipsum</h3>
		                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
	              	</div>
        		</div>      
      		</div>
      		<div class="col-md-4 d-flex align-self-stretch ftco-animate">
            	<div class="media block-6 services services-2 text-center d-block">
	              	<div class="icon"><span class="flaticon-diet"></span></div>
             	 	<div class="media-body">
	                	<h3 class="heading mb-3">Lorem ipsum</h3>
	                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	                	<!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
	              	</div>
            	</div>    
          	</div>
          	<div class="col-md-4 d-flex align-self-stretch ftco-animate">
            	<div class="media block-6 services text-center d-block">
              		<div class="icon"><span class="flaticon-running"></span></div>
              		<div class="media-body">
		                <h3 class="heading mb-3">Lorem ipsum</h3>
		                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		                <!-- <p><a href="#" class="btn btn-primary">Read more</a></p> -->
              		</div>
            	</div>      
          	</div>
        </div>
  	</div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt ftco-program" id="programs-section">
  	<div class="container">
        <div class="row no-gutters">
          	<div class="col-md-4 ftco-animate py-5 nav-link-wrap js-fullheight">
            	<div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              		{{-- <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-gym"></span> Fitness Program</a>

              		<a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-body"></span> Fit &amp; Healthy</a>

              		<a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-woman"></span> Muscle Building</a>

              		<a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><span class="mr-3 flaticon-abs"></span> Bikini &amp; Body</a>

              		<a class="nav-link px-4" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"><span class="mr-3 flaticon-running"></span> Cardio Exercise</a>

              		<a class="nav-link px-4" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"><span class="mr-3 flaticon-meditation"></span> Power Yoga</a>

              		<a class="nav-link px-4" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false"><span class="mr-3 flaticon-aerobic"></span> Aerobics Program</a>

        			<a class="nav-link px-4" id="v-pills-08-tab" data-toggle="pill" href="#v-pills-08" role="tab" aria-controls="v-pills-08" aria-selected="false"><span class="mr-3 flaticon-gym"></span> Crossfit Program</a> --}}
        			{{-- <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"> Recommendations </a> --}}

              		

              		<a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="false"> Nutrition Principles</a>

              		<a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"> Nutrition Rules</a>

              		<a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"> Metabolic Syndrome</a>

              		<a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"> Seaweed Superfood</a>

              		<a class="nav-link px-4" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"> Snack Bread</a>

              		<a class="nav-link px-4" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"> Helping Gemstone</a>

           	 	</div>
          	</div>
     	 	<div class="col-md-8 ftco-animate p-4 p-md-5 d-flex js-fullheight"> {{-- align-items-center --}}
            	<div class="tab-content pl-md-5" id="v-pills-tabContent">

              		{{-- <div class="tab-pane fade show active py-0" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		                <span class="icon mb-3 d-block flaticon-gym"></span>
		                <h2 class="mb-4">Fitness Program</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
              		</div>

	              	<div class="tab-pane fade py-0" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <span class="icon mb-3 d-block flaticon-body"></span>
		                <h2 class="mb-4">Fit &amp; Healthy</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <span class="icon mb-3 d-block flaticon-woman"></span>
		                <h2 class="mb-4">Muscle Building</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <span class="icon mb-3 d-block flaticon-abs"></span>
		                <h2 class="mb-4">Bikini &amp; Body</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	              	</div>

		          	<div class="tab-pane fade py-0" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
			            <span class="icon mb-3 d-block flaticon-running"></span>
			            <h2 class="mb-4">Cardio Exercise</h2>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
			            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.</p>
			            <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
		          	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
		                <span class="icon mb-3 d-block flaticon-meditation"></span>
		                <h2 class="mb-4">Power Yoga</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
		                <span class="icon mb-3 d-block flaticon-aerobic"></span>
		                <h2 class="mb-4">Aerobics Program</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-08" role="tabpanel" aria-labelledby="v-pills-08-tab">
		                <span class="icon mb-3 d-block flaticon-gym"></span>
		                <h2 class="mb-4">Crossfit Program</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	              	</div> --}}
	              	<div class="tab-pane fade show py-0" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-0-tab">

		                <div class="scroll" style="overflow-y: scroll; height: 800px;">
		                	<h2 class="mb-4">Recommendations for using the site</h2>
		                	<ul>
		                		<li>
		                			Preferably but not necessarily fill the application form in your account. 
		                		</li>
		                		<li>
		                			Decide what principle of nutrition you will adhere to for the entire period of weight loss and prepare for it. Perhaps to do replacement principles nutrition, but if you constantly chase to change principle nutrition #2 on other, then outcome will not very a good,so as this principle is the most highly effective but in is case if his to adhere to not less 1.5-2 month. 
		                		</li>
		                		<li>
		                			Carefully study the basic rules of nutrition.
		                		</li>
		                		<li>
		                			Start your weight loss course with a fasting day. To do this, watch the video fasting day and eat all day only one product which you have chosen in advance (kefir / cottage cheese/apples)
								 	If you have the opportunity to be active,watch the video energy,and proceed immediately to action. Dance,run on the treadmill, swim,ride a bike or just do some cleaning. If you plan to lie on the couch all day or sit at the office Desk, you do not need to spend time watching this video. In this situation, it will not help to go to the increased consumption of calories in passive mode as you would like it, despite the fact that you will feel more active and easy. 
								 	If you plan to go to the gym, then before going out watching video energy will be a great option to increase all your records several times.
		                		</li>
		                		<li>
		                			The next day, watch a video for hormone level correction or a video for psychomotor correction. You can watch these videos in one day, but it is better to alternate and watch every other day. Effect from viewing have all persists differently (1-2 days) so better look on the morning or a day to,and so same not late on the evening, but not before nightmare, so as effect can be underestimated. 
									The body will get used to the new diet over time and you will not need to watch different videos every day, only once a week or once in two weeks to consolidate the effect, then supporting viewing once a month.
		                		</li>
		                		<li>
		                			You can ask questions, we will be happy to answer them, but given the difference in time of urgent response, we can not do, be patient, or check the section of frequent questions and answers.
		                		</li>
		                		<li>
		                			You can give watch video for spouse or very close relative who lives with you.
		                		</li>
		                		<li>
		                			It is forbidden to give to view the video to persons who do not have a relationship to you. Every video is the inscription "Respect the laws of the universe" this warning Is given for the benefit of you! It is quite difficult to explain the mechanism of energy interaction, the whole process of energy exchange, so if you do not want to harm yourself or the person who is not your relationship then avoid the transmission of video for viewing. 
									Part of your money goes to support specific Orthodox shrines(monasteries, churches) and other charity that helps you and me to develop, achieve success, so please be more aware of your actions, be honest and pure in soul!!!
		                		</li>
		                	</ul>
		                </div>
              		</div>

              		<div class="tab-pane fade show active py-0" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		                <div class="scroll" style="overflow-y: scroll; height: 800px; padding: 10px;">
			                <h2 class="mb-4">Nutrition Principles</h2>
			                <p>
			                	<b>Follow one of three basic principles of nutrition.</b><br>
			                	When choosing any principle of nutrition drinking mode is always the same. It is necessary to drink before meals (15-20 minutes) at least 150 ml of water, hot water is better about 70 degrees, just drink hot water at least 5-6 times a day in small SIPS. Just a day to drink at least 2-3 liters of clean water (the water should not be very cold), but you should calculate for your body weight at the rate of 30 ml of water per kilogram of body weight yourself. If you drink more than the norm, it will be good, if you drink less than the norm then be careful, as you slow down the metabolic process. Do not get carried away with products in which there are additives that stimulate appetite (horseradish, mustard), as well as increase the appetite of spicy pickled vegetables, coffee, alcohol. 
			            	</p>
			            	<p>
			            		The FIRST principle nutrition should fully respected with basic rules nutrition described I (exception comprise only point 1, 7 and 10, their can be not abide by on this principle pitpniya)
			            		Eat meat only with baked vegetables, cereals just only separately or with vegetables, legumes separately or with vegetables, and from cereals for the period of weight loss, you can leave buckwheat and barley,to minimize the use of all cereals. You can not simultaneously use two protein products of different origin. For example, meat product or fish and with them together to use milk protein for one meal. Also on this principle of nutrition is recommended to reduce the serving of food at least 2-3 times. Bread can be eat only separately from the entire food,and only from groats rough grinding, either cooked you household black bread.<br><br>

			            		Fasting day once a week necessarily (Apple 2-2. 5 kg or cottage cheese 800gr, or kefir 600 ml + cottage cheese 500 gr) at least once a week.<br><br>

			            		Consider the sample menu with this first principle of power, it is approximate, you adjust it yourself.<br><br>

			            		Breakfast: a glass of water, then turmeric, Superfoods, vitamin salad (egg, cucumber, daikon radish, onion, greens), stevia tea,fruits, juices.  
								Snack: all fruits except banana, grapes, raisins and dates. Nuts except cashews and peanuts, stevia tea 
							 	Lunch: salad only from fresh vegetables, low-fat broth strained, lean meat or fish, baked vegetables, stevia tea 
								Afternoon snack: yogurt with cucumber
								Dinner: slightly salty cottage cheese with herbs, or cottage cheese without salt with very little fructose, stevia tea 
								Last supper: seaweed or raw vegetables with the whites of two boiled eggs.<br><br>

								I remind you that the portion of the meal should be reduced by 2-3 times. Gradually bring the portion to a comfortable state of saturation, adding one spoonful of food or a maximum of two. It is forbidden to put in a plate the usual amount of food, as imperceptibly you can get carried away and eat the entire daily amount of food. Do not be distracted while eating, do not dream and do not look at the phone or TV, do not communicate, make the meal conscious. As long as possible, hold food in your mouth to have time to develop enzymes for its digestion. If your weight will not go under this regime nutrition the need do fasting day (cottage cheese or Apple) and after him do a few days with approximate counting needed for you calories. Women no more than 1500 kcal per day, men no more than 1800 kcal. After that, you will be able to assess how well your diet has been compiled and continue to adhere to the new sizes of your portions. It is not necessary to count every gram of food with a calculator and kitchen scales, this is done approximately, there is no danger if you make a mistake a couple of times on 100-200 kcal. For the second principle of nutrition, this procedure is not required, since the caloric content of food does not matter. You can eat from morning to evening without restrictions on the amount of food consumed but follow the following rules.
			            	</p>
			            	<p>
			            		<b>The second principle of nutrition</b><br>
								This principle is the Foundation for your health and longevity. It helps to quickly lose weight even for people with very severe metabolic problems.  If you stick to it then you are not afraid of cancer and after 5-6 months will disappear all chronic diseases that you have previously even in the latent course. So same will rise intuition and overcompensate ability to. After the initial cleansing period passes, so much energy will appear that you could not imagine. The basis of this principle is the use of only live food,but is slightly different from raw food. Here we use only those products that have not undergone heat treatment above 45 degrees,but we use more diverse food, and even food of animal origin, slightly salted fish, salted caviar,fish oil, raw shrimp in small quantities, collagen of animal origin, steamed cereals, fish broth and sometimes cottage cheese or kefir for fasting days. People living on the usual raw food diet do not use any of the above. This principle nutrition absolutely safe,but has contraindications, this sugar diabetes 1 type of;child workers and teenagers age until 21 year; gastritis and stomach ulcers in the acute phase, in the latent period you need to take daily 1 teaspoon of 100% sea buckthorn oil or rosehip for a month. 
	 							So, your diet will consist of products that have not been heat treated,but have become very nutritious in the process of salting,pickling, soaking, cold pickling, germination, drying and so on. 
								Let's consider an approximate algorithm of power supply.<br><br>

								Breakfast: in the morning a glass of water, then turmeric with hot water and black pepper, then Superfoods (algae powder).  Your wish is our command,but is not necessary except water. Next, a light salad of raw vegetables, well-swollen cereals to choose from (buckwheat, spelt, oatmeal, couscous, bulgur; buckwheat, bulgur swell within 2-5 hours so fill with water in the evening). Cereals can be salted, add a little unrefined vegetable oil (linseed,olive,sesame,hemp). Forth fruit, tea with stevia. <br><br>

								Snack; fruit, nuts, tea with stevia, you can add to the brew herb immortelle or corn stigma. 
								Lunch: fish strained broth, salad of any cabbage with onions and herbs, soaked lentil flakes, or other legumes (soy sprouts powder,) fruit, tea with stevia. 
								High tea: raw vegetables in any combination, very well saturates pumpkin Butternut, kohlrabi, radishes, cabbage of all kinds. Fish oil, stevia tea.  
								Snack; collagen of animal or vegetable origin, Apple
								Dinner: salad of any vegetables in any quantity (tomatoes, cucumbers, lettuce, cabbage of all kinds, mushrooms, onions, herbs, rosemary seasoning or any other seasoning to your taste, but be SURE to add ½ of the avocado, and one Bulgarian or sweet pepper).  Season the salad with a small amount of olive oil,or not refined vegetable oil (linseed,sesame,hemp,amaranth), you can balsamic vinegar, lemon juice or 100% pomegranate sauce. With increased physical activity is allowed to eat a whole avocado. Next, you can grain or purified hemp seeds mixed with other useful ingredients or just hemp porridge.  Apple, stevia tea. 
								Last dinner(if you need it): salad of various leaves and cucumber with herbs, a small portion of swollen cereals or a couple of loaves of Chia seeds with a small amount of vegetables, apples.<br><br>

								If you want to lose 1-2 kg of weight daily, then you need to replace lunch and high tea with a snack, make sure to make a water hour, reduce the portions by 2-3 times on this day, cereals are also not consumed on this day, enough flour of wheat or soy sprouts.  It's all really to do with the support of video-on-energy correction psychomotor level (reduction of the stomach).<br><br>

								When you eat weakly salted fish or caviar on this day you do not need to eat avocado,you should also reduce to a minimum the number of nuts and cereals on this day. Do not eat fish, shrimp or red caviar daily, this is not necessary (no more than 1 time a week, then 1-2 times a week), your body has enough protein from cereals, legumes, avocados and so on and he knows how to synthesize all the necessary protein, you just underestimate your unique biological computer, you can study this topic yourself, how magically it happens. If you allow a single application of heat-treated food, then on this day, weight loss will not occur, but your weight will not increase. If you have twice allowed the intake of heat-treated food, the next day should be necessarily unloading, if the intake of heat-treated food was a single it is enough to replace the next day's Breakfast with fruit.  Your food should be varied, freely available there are a lot of recipes for cooking "live food", you can take as a basis all the recipes that you like. If you do not have time to prepare delicious dishes of live cuisine, just soak the cereals in advance,they will swell and be ready for use,do not use cereals soaked for more than two days. All ready-made dishes of live cuisine are stored in the refrigerator for no more than 48 hours, then not only the value of the product is lost but there may be a danger of its use.  
	  							At the end of 3-4 months of application of this principle of nutrition, your body will not need high-calorie food, the result of weight loss will be fixed on the subconscious, the weight will go away even if no principles of nutrition are observed. 
								To speed up the result, you can do fasting days no more than once a week (Apple or cottage cheese day)
			            	</p>
			            	<p>
			            		<b>The third principle of nutrition</b><br>
								Eat foods that have the lowest glycemic index for the entire period of weight loss.
								From your diet should disappear all the products that are in this table. It indicates how many grams of sugar will enter your blood if you consume 100 grams of this product.
							</p>
							<table class="table table-bordered">
								<tr>
									<th colspan="2">Products with high glycemic index 70 and above</th>
								</tr>
								<tr>
									<td>Beer, champagne, sweet wines</td>
									<td>110</td>
								</tr>
								<tr>
									<td>Dates, hamburger</td>
									<td>103</td>
								</tr>
								<tr>
									<td>Glucose, starch, white bread, Swede, bagels, French toast, fried</td>
									<td>100</td>
								</tr>
								<tr>
									<td>Buns, baked, fried potatoes, potato flakes made.casserole, parsnip</td>
									<td>95</td>
								</tr>
								<tr>
									<td>Rice noodles, white rice, canned.peaches, apricots, honey, pies, hot dogs</td>
									<td>90</td>
								</tr>
								<tr>
									<td>Cornflakes, stewed or boiled carrots, popcorn, rice milk pudding, celery root</td>
									<td>85</td>
								</tr>
								<tr>
									<td>Mashed potatoes, raisin muesli, crackers, donuts, caramel, lollipops, condensed milk</td>
									<td>80</td>
								</tr>
								<tr>
									<td>Pumpkin, watermelon, French baguette, lasagna, rice porridge with milk, unsweetened waffles, squash caviar</td>
									<td>75</td>
								</tr>
								<tr>
									<td>Millet, chocolate bars, milk .chocolate, croissant, sweet soda, barley, white and brown sugar, chips, semolina, couscous, pasta from soft wheat, halva, cheesecakes, juices in the package, jam</td>
									<td>70</td>
								</tr>
								<tr>
									<th colspan="2">Products with an average glycemic index of 50-69</th>
								</tr>
								<tr>
									<td>Wheat flour and all products made from wheat flour</td>
									<td>69</td>
								</tr>
								<tr>
									<td>Pineapple, instant oatmeal</td>
									<td>66</td>
								</tr>
								<tr>
									<td>Black yeast bread, wheat flour, orange juice, jam, boiled or stewed beets, marmalade, muesli with sugar, potatoes in uniform, canned fruits and vegetables, sweet potatoes, rye and whole grain bread, macaroni and cheese, raisins, marshmallows, marshmallows, fruit waffles</td>
									<td>65</td>
								</tr>
								<tr>
									<td>Pancakes, pizza, bananas, ice cream, lasagna, melon, mayonnaise, sour cream, oatmeal, cocoa, long-grain rice, coffee and black tea with sugar, dumplings, dumplings</td>
									<td>60</td>
								</tr>
								<tr>
									<td>Canned. corn, grape juice, ketchup, mustard, spaghetti, sushi, shortbread cookies, margarine, processed cheese, feta</td>
									<td>55</td>
								</tr>
								<tr>
									<td>Cranberry, Apple and pineapple juice without sugar, mango, persimmon, kiwi, brown rice, orange, sweet yogurt, cutlets, pork schnitzel, fish cutlets, omelet, natural coffee without sugar, egg, yolk</td>
									<td>50</td>
								</tr>
								<tr>
									<th colspan="2">Now consider products with a lower glycemic index that are not dangerous for the accumulation of fat tissue.</th>
								</tr>
								<tr>
									<td>Wild rice, chickpeas, apples, fresh green peas, Chinese noodles, vermicelli, sesame, plums, quince, sesame, natural .0% yogurt, fructose ice cream, soy sauce, boiled sausage</td>
									<td>35</td>
								</tr>
								<tr>
									<td>Beans, nectarine, pomegranate, peach, compote without sugar, tomato juice</td>
									<td>34</td>
								</tr>
								<tr>
									<td>Soy milk, apricot, lentils, grapefruit, green beans, garlic, beetroot, pear, tomato, low-fat cottage cheese, pear, sugar-free jam, cranberries, blueberries, blueberries, dark chocolate, milk, passion fruit peach, Mandarin, green bananas</td>
									<td>30</td>
								</tr>
								<tr>
									<td>Cherries, raspberries, red currants, strawberries, strawberries, pumpkin seeds, gooseberries, soy flour, fat kefir, crushed yellow peas</td>
									<td>25</td>
								</tr>
								<tr>
									<td>Artichoke, eggplant, soy yogurt, lemon, seaweed</td>
									<td>20</td>
								</tr>
								<tr>
									<td>Almonds, broccoli, cabbage, celery, cashews, cauliflower, white cabbage and Brussels sprouts(in any form), chili peppers, cucumber, nuts, asparagus, ginger, mushrooms, zucchini, onions, leeks, olives, peanuts, tofu cheese, soy, spinach, pickles and pickles, bran, kefir, black currants, olives and olives</td>
									<td>15</td>
								</tr>
								<tr>
									<td>Avocado, green pepper, fish of all varieties, seafood</td>
									<td>10</td>
								</tr>
								<tr>
									<td>lettuce, sunflower seeds</td>
									<td>9</td>
								</tr>
								<tr>
									<td>dill, parsley, vanilla, cinnamon, oregano, shrimp, hard cheese</td>
									<td>5</td>
								</tr>
								<tr>
									<td colspan="2"><b>Most meats (veal,chicken, lamb, Turkey, rabbit) have a glycemic index of  0</b><br>
									Thus, your diet should be made taking into account the fact that on the day you should not eat foods more than 65-75 glycemic units . Here you make your own menu as you like, it is a great option for lovers of meat and seafood. But do not forget about the basic rules of power supply.</td>
								</tr>
								<tr>
									<td colspan="2">
										<b> Conclusion.</b><br>
										You decide on your diet, choosing one of the three principles that inevitably leads you to lose weight. If you find it difficult to choose and resort to the help of familiar nutritionists, then in this case you need to send your entire diet for approval to Julia, since she can not be responsible for someone else's work. Also you can order services of the nutritionist through our site if in it there will be a need, very skilled experts work with us. But we still encourage you to show resourcefulness, imagination and enthusiasm in cooking healthy food, start today to eat properly and consciously!
										<img src="{{ asset('images/nutrition_principles.png') }}" width="100%">
									</td>
								</tr>
							</table>
						</div>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="scroll" style="overflow-y: scroll; height: 800px; padding: 10px;">
			                <h2 class="mb-4">Nutrition Rules</h2>
			                <p>
			                	<b>Recommendations that need to be followed for the entire period of weight loss.</b>
			            	</p>
			            	<img src="{{ asset('images/nutrition_rules.png') }}" style="width: 100%;">
			            	<p>
			            		<b>Basic rules of nutrition</b><br>
			            		There are many nutrition principles to increase the effectiveness of the weight loss process. But there are same rules under any principle nutrition, I believe the most important data 10 rules.
			            	</p>
			            	<ol>
			            		<li>Start the morning with the most useful products to saturate the body with vitamins,trace elements to enhance the charge and vigor. It will be great (but not necessarily) if you can before Breakfast drink a cocktail made from a mixture of algae powders (Chlorella, spirulina), Peruvian poppies, as well as a pinch of turmeric with a high content of curcumin.</li>
			            		<li>Observe the drinking regime 30ml of water per kilogram of weight. Not less than half a liter of daily volume of water should be with the addition of a weak decoction of stevia leaves. We take water in small SIPS constantly with a small interval of time.  It is desirable to take water in hot form but not more than 70 degrees. 2-2. 5 hours after lunch, make a water hour, drink about one liter of clean drinking water of good quality in this time period. If your body weight exceeds 70 kg then drink 1.5 liters of water for 1-1. 5 hours. 
								It will be wonderful (but not necessarily) if the water is activated, increased its bioavailability at home. It is also desirable that the redox potential of water was in the range from minus 250 to plus 100 millivolts, the measurement can be made by the device. This will allow you to be more energetic, as the body will not need to spend their own energy to absorb water, so will be rejuvenation at the cellular level.</li>
								<li>Introduced into the diet of the maximum amount of food (up to 80% or more)causing the shift of the internal environment of the body in an alkaline and minimize products makes the body acidic (no more than 15-20% of the daily diet) thereby normalizing substances and protecting the body from completely all the prerequisites for the emergence of cancer cells.</li>
								<li>In every meal, eat a little protein, as protein accelerates metabolism and its absorption also requires the consumption of calories. We also use products that reduce insulin resistance (stevia tea, Chia seeds, chromium).We prefer products that accelerate the process of metabolism, during each meal, but at least twice a day we use a slice: fresh ginger, onion,garlic, radish Daikon, or other products of metabolic stimulants, depending on the state of your health (a break only in fasting days).</li>
								<li>Experiencing a feeling of hunger immediately drink at least 100 ml of water with a weak decoction of stevia, do a breathing exercise (inhale the stomach protrudes, exhale the stomach retracts 10 times), then eat an Apple. If hunger has completely disappeared then postpone the main meal until the onset of real hunger, make a small snack if there is only a weak feeling of hunger.
 								Eat when your body asks and you are completely sure that this is not a false hunger.  Portions should be small, you can break your usual portion into 2-3 parts. Food should enter the stomach at intervals of a maximum of 4-4. 5 hours, so use a light snack in between main meals. Carry with a always a bit various nut (can be all nuts except cashews, walnuts and peanuts), Apple, Flaxseed bread, weak decoction stevia to to do easy snack through every 1.5 hours. For example, as a snack, you can eat 3-4 almond nuts and 3 hazelnuts, 2-3 Brazil nuts, drink stevia tea, eat an Apple or bread preferably made from flax seeds or Chia seeds with sesame or other additives. Lunch and dinner desirable to do roughly in one thing and the same time, but if hunger was false, then can be and shift on 1-1, 5 hours more later. When there is no time or opportunity for a timely meal then make sure to have a light snack. Food should come though in small quantities but often.</li>
 								<li>A very important point of proper nutrition is to understand the dangers of taking foods with a high glycemic index. Bakery products are shown as the most insidious product, as well as various drinks even if they are sugar-free. A huge amount of carbohydrates falls on your body which is not able to process everything into energy, so it has only one way out, to put carbohydrates in fat depots. 
 								Exclude from the diet of all products whose glycemic index is higher than 38-40 units for the entire period of weight loss. Tables glycemic index of all products you can always find on the Internet. If you can not find then write to support.  So for example,exclude from the diet all the drinks that you buy even if they are sugar-free. At home we make our own drinks without sugar: juices, smoothies, compotes, tea, juice and so on. Bakery products are available in any form, we prepare our own bread using cottage cheese, almond flour, ground Chia seeds, sesame seeds and so on.  Potatoes should be excluded in any form, carrots and beets should be used only in raw form. If you regaled a dish of potatoes weighing 200g (consider the glycemic index 95 + 95=190)then almost a GLASS of sugar enters the bloodstream, it is urgently necessary to dispose of it due to active physical activity (eg 5 km running) otherwise all the sugar will be deposited in the form of fat reserves, as well as increase the level of cholesterol in the blood. 
								Thus, for the period of weight loss,all flour products,as well as products after frying in oil or fat, all confectionery products, even if they are on fructose, should be excluded. Are permitted only from dried fruits without sugar through technologies raw food.</li>
								<li>
									Women after 40 years to eat foods rich in plant estrogens, the content of which is indicated in this table.
									<table class="table table-bordered">
										<tr>
											<td>Flax seed</td>
											<td>379380 mcg</td>
										</tr>
										<tr>
											<td>Soy bean</td>
											<td>103920 mcg</td>
										</tr>
										<tr>
											<td>Soy yogurt</td>
											<td>10275 mcg</td>
										</tr>
										<tr>
											<td>Sesame seed</td>
											<td>8008.1 mcg</td>
										</tr>
										<tr>
											<td>Flaxseed bread</td>
											<td>75-40 mcg</td>
										</tr>
										<tr>
											<td>Soy milk</td>
											<td>2957.2 mcg</td>
										</tr>
										<tr>
											<td>Hummus</td>
											<td>993 mcg</td>
										</tr>
										<tr>
											<td>Garlic</td>
											<td>603.6 mcg</td>
										</tr>
										<tr>
											<td>Dried apricot</td>
											<td>444.5 mcg</td>
										</tr>
										<tr>
											<td>Pistachios</td>
											<td>382.5 mcg</td>
										</tr>
										<tr>
											<td>Dates</td>
											<td>329.5 mcg</td>
										</tr>
										<tr>
											<td>Sunflower seeds</td>
											<td>216 mcg</td>
										</tr>
										<tr>
											<td>Chestnuts</td>
											<td>210.2 mcg</td>
										</tr>
										<tr>
											<td>Olive oil</td>
											<td>180.7 mcg</td>
										</tr>
										<tr>
											<td>Almond</td>
											<td>131.1 mcg</td>
										</tr>
										<tr>
											<td>Cashew</td>
											<td>121.9 mcg</td>
										</tr>
										<tr>
											<td>Green beans</td>
											<td>105.8 mcg</td>
										</tr>
										<tr>
											<td>Peanut</td>
											<td>34.5 mcg</td>
										</tr>
										<tr>
											<td>Onion</td>
											<td>32 mcg</td>
										</tr>
									</table>
									It is also desirable for all women to eat according to the phases of the menstrual cycle.  During ovulation or after it there is a physiological hunger, so do not do fasting days in this short period (usually only two days). Write down for yourself in your calendar the onset of these difficult days of increased appetite, watch these days in addition videos to reduce appetite, eat a variety of but small portions.<br>This is an optional item! but you need to keep in mind especially those people who want to get a long-TERM result. If the cycle is broken, or it does not exist then you need to take into account the phases of the lunar cycle. In the first phase of the menstrual cycle (or lunar 1-7) it is allowed to use all products that retain water in the body(hydrophilic products).Just allow yourself an abundance of berries, citrus fruits, sometimes include in the diet fruits with a slightly elevated glycemic index (pineapple, mango, papaya). From cereals, give preference to buckwheat and spelt. It is very good to afford fresh walnuts,buy unpeeled. Seafood eat in full. The next phase of the cycle is 8-14 days, you can continue to take hydrophilic products, expand the variety of cereals (wheat and its derivatives like couscous, bulgur, spelt, barley, pearl barley, rye and so on).All types of legumes are allowed as in the first phase of the cycle. Give preference in favor of varieties of red fish. Do not forget about selenium, eat at least 3 Brazil nuts a day, you can also pine nuts, almonds. In the next phase of the cycle (15-21 days), reduce the consumption of hydrophilic products to a minimum: sauerkraut,cheese,cow's milk,string beans,all canned products with salt ,beets,celery, flour products of their own manufacture. Eat more fresh vegetables and fruits. Instead of legumes, eat more protein cereals such as oatmeal,buckwheat,quinoa,barley,corn. The last phase of the cycle should be with even more careful application of hydrophilic products. It is necessary to exclude all products with the highest rates of fluid retention in the body, including dried fruits. Give preference to products with rapid excretion from organism {{-- (PLANO,tvorog,kefir,pomidory,Agency,Caldera,redis,kubacki,Imber,Chesnok,morcovi,Arbus,Jabloki,brusnika,grusi,lemon,luck,Petrushka) --}}. Stevia tea brew with horsetail grass. Fish and seafood should be prepared by themselves with a minimum salt content
								</li>
								<li>If you overeat heat-treated foods with high calories the next day, make an additional fasting diet.  More suitable options are "Paradise Apple days" when all day you can eat apples of absolutely all varieties no more than two and a half kilograms. In the evening, you can eat bread from flax seeds or Chia seeds. Or make a fasting day like "cottage cheese Paradise" when during the day you eat only low-fat cottage cheese of different consistency. It is better to take 4 packs of cottage cheese 200 grams of different manufacturers and different consistency, one low-fat unsweetened yogurt 100g.  Cottage cheese can be consumed a little sprinkling with salt and herbs. In the evening there will be no hunger, cottage cheese saturates the body and even on this day you do not need to take anything. In both cases, a weak decoction of stevia should be taken all day.</li>
								<li>Double the amount of physical activity. Movements can be physical and just massage. For example, in the morning after a shower immediately RUB yourself intensively with a towel. Next, when you are dressed then stretch yourself the entire shoulder area of the hands So for example you can get out of public transport two stops earlier and walk this section on foot. At home you can also even standing in one place to do jumps or running on the spot for 5 minutes for 5 sets a day. Light Jogging or Cycling will be the most excellent exercise for health. If you do a little more than three weeks, there will be an increase in the number of muscle fibers,as well as the content of mitochondria in your body will increase several times,and this will greatly accelerate the process of burning fat, since all the processes of glucose utilization take place only in the mitochondria.</li>
								<li>Do not neglect breathing exercises to stimulate mitochondria and accelerate metabolism. Some of them are presented in a separate video. For especially lazy it is possible to apply the 16 hour fasting once a week for the same purpose. Accelerate the process of weight loss will also help the impact of high temperatures (infra red sauna, bath) and especially the impact of low temperatures (contrast shower, hardening, bathing in the springs). Daily contrast shower will help in a week to strengthen blood circulation several times, metabolism will accelerate and the output of excess fat will be the same several times more intense as well as the rejuvenation processes at the cellular level will launch its accelerated mechanism</li>
			            	</ol>
		            	</div>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		              	<div class="scroll" style="overflow-y: scroll; height: 800px; padding: 10px;">
			                <h2 class="mb-4">Metabolic syndrome</h2>
			                <p>
			                	Metabolic syndrome increases with age, so every year it becomes more and more difficult to deal zwith.
								The most effective ways to deal with this trouble is the use of a weak decoction of stevia, breathing exercises, increased motor activity, contrast shower.
	 							Important!!! take a very weak decoction of stevia daily for the entire period of weight loss!!!
							 	This is the fastest way to combat metabolic syndrome.  Stevia leaf is a unique herbal remedy that quickly helps to overcome insulin resistance. Thus your tissues become more sensitive to insulin which brings carbohydrates to burn in the mitochondria, all carbohydrate and fat reserves will be consumed much faster, resulting in a very significant weight loss. In addition, the plant has many valuable properties,but it is important not to take a very sweet decoction, as the regulation of insulin release will be disrupted and there may be problems with the production of the hormone. So on the entire day enough inject boiling water 1-2 sachets grass, through 15 minutes dilute water 1-1, 5 liter until pleasant slightly sweet taste of. Before use, you can add lemon juice to taste, you can also add other familiar herbs for you, such as Ivan Tea (Cypress), horsetail grass, birch leaf, and so on. 
								Stevia leaf can also be sold in bulk in packs, it needs to be brewed according to the instructions. Repeated brewing of the same raw materials is allowed. In the morning, brew, drain the resulting broth and pour boiling water again the same stevia leaf, take the second batch of welding immediately after the first.
							</p>
							<img src="{{ asset('images/metabolism_syndrome.jpg') }}" style="width: 100%;">
							<p>
								Eliminates harmful cholesterol, which accumulates over the years.
								Displays a variety of toxic substances, waste products and other compounds that adversely affect the human body.
								Improves blood circulation.
								Stabilizes blood pressure if it is elevated.
								Eliminates inflammatory processes.
								It has a beneficial effect on the gastrointestinal tract.
								Improves the functioning of liver.
								Reduces the concentration of sugar in the blood.
								It has a bactericidal effect.
								Strengthens the immune system, activates its work.
								It has a restorative effect, fills the body with energy and strength.
								Prevents colds, flu, various respiratory diseases of viral origin, used for treatment as an adjunct.
								Improves metabolic processes.
								Slows down aging.
								Fight against cancer cells
								Improves the condition of skin,hair,nails
							</p>
							<p>
								The next method  to speed up the metabolism is breathing exercises. Consider the most effective.
							</p>
							<ol>
								<li>
									When you are not critically busy, such as browsing, walking, standing in the shower, cooking, you can pronounce the sound of " s " for 3-5 minutes to 7-8 times a day.
								</li>
								<li>
									When there is an opportunity to sit down then perform the following breathing exercise. Put your feet shoulder-width apart, squeeze your left hand into a fist and wrap your right hand around your fist. Resting his forehead on his hands begin to breathe 3-10 minutes in the following order. We take a breath inflating the stomach, then another short breath and then a deep exhalation, on the exhalation, we draw in the stomach. If there is dizziness or discomfort in the heart, then we facilitate, shorten the breaths or stop performing the exercise completely. Perform daily on health.
								</li>
								<li>
									Alternate inhale and exhale with three to inhale and three to exhale. On an inspiration a stomach we stick out, on an exhalation a stomach we draw in. Strain during breathing is the area where you want to quickly go fat. Perform daily, for a total of 15-20 minutes per day.
								</li>
								<li>
									Do rapid alternation inhalation with vypyachivaniem belly and exhalation with vtyagivaniem belly, then after 7-10 times do halt on exhalation and not only vtyagivaem open but and are helping hands squeeze open in inward. To do so, three approaches.  Perform daily several times a day.
								</li>
								<li>
									Put the roller from the towel under the waist, pull your hands forward, turn your palms to the floor, your feet lie on the floor a little turned inward, socks only slightly look at each other. Duration 5 minutes, perform enough once every two weeks. 
 									Watch videos of breathing exercises. 
								</li>
								<li>
									If there is desire to the can be borrow from exercise yoga, for example Kumbhakasana (pose chessboard), Ardha Matsiendrasana, Paripurna Navasana (boat), Trikosana,Vasshithasana (side plank) will very well help get rid of fat on his stomach and help to remove open in during one month.

								 	Contrast shower will speed up your metabolism, give vigor, a charge of double energy for the whole day and strengthen your immune system.
									Of course, this procedure is not for weak-minded people, but if you get used to it gradually, then anyone will be able to do it. 
									First, warm up the body with hot water, then start pouring cool water on the legs, then again hot and only then go to lower water temperatures. Do this with individual parts of the body and gradually when the body gets used to you will be able to douse yourself completely with cold water. 
									It will be wonderful to dip three times in the springs, where the water temperature is 4-6 degrees,but without this opportunity, you can heal yourself at home with a morning shower.
								</li>
							</ol>
						</div>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="scroll" style="overflow-y: scroll; height: 800px; padding: 10px;">
			                <h2 class="mb-4">Seaweed Superfood</h2>
			                <b>Start the day with super food !!!</b>
			                <p>Your "good morning" should begin with a positive attitude and the most healthy food to maintain activity throughout the day. You can choose for yourself any convenient option for a morning meal, even limit yourself to taking a vitamin complex from a pharmacy. If you care about your health more responsibly, then your morning should begin with the intake of natural products that will help not only support the body by creating a full balance of macro and micronutrients, but also improve your quality of life until you are completely protected from the development of diseases, including oncology and negative effects the environment.So, we will study independently the chemical composition of turmeric, and evaluate the ratio of harm and benefit. 18 useful properties of turmeric  will be an indispensable tool throughout the process of weight loss, but when you see the result you will not want to part with it. Turmeric must be of high quality, with a high content of curcumin. Take in the morning with hot water and a very small amount of black pepper.
							Now let's talk about seaweed powders. This is a storehouse of vitamins and minerals. We study independently the chemical composition of chlorella, consider the beneficial properties of this algae. Spirulina also has a large number of useful properties, so I recommend making a combined composition of algae, you can add Peruvian poppy powder if you want to be even more active. Make powders at home for the least contact of all components with air. For example, pack algae powders 2.5 teaspoons each and pack turmeric powder with cereal germ flakes 2 teaspoons each (dissolving water is taken no more than 45 degrees if there is any cereal germ). This is not necessary, you can leave the mixture of powders in the jar, but it will be more interesting and convenient, and most importantly more useful. In practice, such a pre-packaged product is consumed 90% more often than not pre-packaged.</p>
							<p>The beneficial properties of chlorella</p>
							<p>
							<b>Great for toxin withdrawal</b><br>
							Toxins enter our food and water, and eventually end up in our body. When toxic substances accumulate in the body, this leads to various diseases, including cancer. Chlorella will help get rid of toxins and cleanse our system.
							It has been found to be especially useful for removing heavy metals (cadmium, mercury and lead). In fact, a Japanese study found that it helps victims of cadmium poisoning remove toxins seven times faster than normal speed.
							This is due to the rigid, indigestible, outer shell of the algae, which is credited with the effect of the removal of toxins. It consists of a fibrous mucopolysaccharide. Chlorella supplements are processed in such a way that they contain algae with their destroyed shell to make their nutrients available. When chlorella is taken regularly, the fibrous membrane binds to heavy metals and toxins and removes them from the body. People who take supplements at the beginning often experience bowel movements in the first few weeks. This is due to the process of removing toxins.
							The cleansing effect is not limited to the gastrointestinal tract. It acts as a blood and liver cleanser. The high chlorophyll content in algae increases the level of hemoglobin in the blood. By the way, the molecular structure and composition of chlorophyll and hemoglobin are very similar, the only difference is hemoglobin, which contains iron, while chlorophyll contains magnesium.
							With an increase in the level of hemoglobin, the ability of the blood to carry oxygen increases, blood circulation and the elimination of waste from various tissues and organs, including the liver, improve.
 							Chlorella is the most concentrated antioxidant food.
							We hear a lot about antioxidants these days. These are molecules that can bind to free radicals, which cause serious damage to cells in our body. Many free radicals are formed during normal metabolic processes, and the body has a regular mechanism to neutralize them. For example, vitamins C, E, and beta-carotene have excellent antioxidant properties and help knock free radicals out of service by binding to them.
							But when environmental pollutants and UV radiation are added to the radical burden on the body, our body finds it difficult to handle. When free radicals are allowed to move freely, these highly reactive molecules wreak havoc on our bodies, causing DNA cell damage and damage, which could potentially cause cancer. Antioxidant products and supplements easily reduce such cell damage.
							Chlorella is rich in vitamins, but the antioxidant arsenal of algae is not limited to this. It contains several polyphenolic acids, which are equally good at stripping free radicals. Chlorella also activates glutathione - the strongest antioxidant in our body. Not only that, she adds her own glutathione to it. This is especially useful in counteracting the depletion of glutathione in the elderly.
							Improving Immune Function
							It has been found in several studies that algae is a true immunological stimulant. In South Korea, clinical trials of chlorella supplementation over a short period have shown an increase in immunological parameters.
							When people received only 5 grams of chlorella per day for 8 weeks, the researchers found that the cellular activity of natural killers increased by 10% compared with those who took a placebo. Their gamma-interferon levels showed a significant increase, indicating an improvement in immunity against viral and bacterial infections. There was a similar increase in interleukin-1 beta.
							Compared to people who have taken vitamin pills for immunity, chlorella offers a healthier alternative, because it is always better to get vitamins from food than to take synthetic products.
							</p>
							<p><b>Getting rid of digestive problems</b><br><br>Regular consumption of chlorella relieves digestive problems such as bloating, stomach cramps and other disorders. Chlorella extract contains many digestive enzymes, the most necessary of which are pepsin and chlorophyllase.
							Stagnation of food in the digestive tract causes inflammation of the intestinal mucosa, reabsorption of toxic substances, as well as the spread of harmful microbes. Chlorella improves intestinal peristaltic function for faster food movement, preventing stagnation and diverticulitis. Anti-inflammatory and antioxidant properties bring relief to people suffering from ulcerative colitis, irritable bowel syndrome and Crohn's disease.
							Chlorella has an excellent probiotic effect, providing a regular supply of intestines with nutrients and bacteria. These beneficial microbes break down soluble fibers and allow nutrients and vitamins to become available to our body.
							</p>
							<p>Provides Essential Fatty Acids</p>
							<p>Algae contains alpha-linolenic acid (ALA) - the essential acid that Chia and flax seeds owe to their nutritious celebrity.</p>
							<p><b>Healthy and young skin</b><br>Skin cells must be updated continuously to stay in good shape, but this process takes a lot of resources. Rich in amino acids, lipids, as well as several minerals, algae can provide all the substances necessary for skin regeneration.
							Being in constant contact with environmental pollutants, the skin is prone to the harmful effects of free radicals, they then cause premature aging. Exposure to UV radiation from the sun is another risk factor. Besides the fact that antioxidants such as beta-carotene and lutein are abundant, Chlorella contains a number of phenolic compounds: chlorogenic acid, caffeic acid and other acids.
							Every time a cell divides, there is a risk of telomere shortening and DNA damage. Shortened telomeres are markers of aging. Chlorella consists of rapidly dividing algae cells, and contains growth factor and nucleic acids, which help cell reproduction and skin regeneration. In laboratory tests of chlorella, it was proved that it prevents telomere shortening, thereby ensuring the health and beauty of the skin.
							Topical use of chlorella can help treat skin ulcers and trichomoniasis. It is even used to treat skin rashes caused by exposure to radiation.
							</p>
							<p><b>Treats Allergy Symptoms</b><br>Algae is an effective natural histamine blocker. Consuming just 2 grams of Chlorella per day will help to effectively control sinuses, runny nose, sneezing, and other symptoms associated with seasonal allergies.
							Cancer protection
							This algae protects the body from cancer in many ways. Due to its high antioxidant activity, it protects cells from free radicals, and hence from DNA damage. Another important action of chlorella is to enhance our immune function. The enhanced action of T cells makes the body more able to identify and destroy damaged cells that might otherwise divide and form tumors.
							Chlorella supplements are even used along with conventional cancer treatments like radiation and chemotherapy, which reduces their side effects. Since these procedures destroy the intestinal mucosa and impede digestion, algae provides a stable supply of all necessary substances.
							Protects the liver
							Algae has also been recognized for its incredible potential to protect the liver from damage associated with chronic liver disease. As a powerful antioxidant, it fights free radicals that damage liver tissue. It also helps the liver to remove toxins and toxic metals from the body. It is used to treat the liver from the harmful effects of alcoholism and excessive consumption of fatty foods.
							Contributes to weight loss
							If you are trying to lose weight, algae supplements will help in this task. As you already know, many diets for weight loss begin with a detoxification phase, and for good reason. The accumulation of toxins in the body is one of the reasons why many people have large amounts of body fat. To remove toxins from adipose tissue is the best mechanism for the survival of our body. Chlorella is the most powerful, natural detoxification agent, and most importantly affordable. Its effect can be felt already in the first days after the start of administration.
							High protein diets are very effective for weight loss, but taking animal protein in abundance can put you at risk for developing atherosclerosis, as it develops from a high content of fat and cholesterol. Chlorella has an ideal ratio of protein to fat.
							Chlorophyll increases hemoglobin and red blood cell count, improving oxygen supply to the blood and blood circulation. So there is an acceleration of metabolism and increased energy. People often report that they feel more energetic, tend to become more active as soon as they start taking chlorella supplements. Promotes weight loss, can be used in all programs to reduce weight.
							</p>
							<p><b>Helps control blood sugar and cholesterol</b><br>Since Chlorella accelerates the movement of food through the gastrointestinal tract, it is obvious that it can reduce the absorption of food cholesterol and fats in the blood. According to a study published in the journal Medicinal Food, it was found that chlorella reduces not only cholesterol, but also blood sugar, if you take 8 grams daily in divided doses.
							The effect of lowering blood glucose was an interesting discovery, especially since it was only observed after the cholesterol level returned to normal. At the same time, algae also prevents hypoglycemia.<br><br>

							For mental activity<br>

							An excellent source of vitamin B12, essential for maintaining good brain function. Deficiency of this vitamin is associated with depression and memory loss. With age, the body’s ability to absorb this vitamin decreases, which puts older people at greater risk of B12 deficiency.
							Chlorella is not only a rich vegan source of vitamin B12, it is present in a bioavailable form, which facilitates its rapid absorption. This seaweed is a good source of magnesium, a mineral important for brain health. It increases memory and facilitates learning, both in young children and the elderly. Vegetables and fruits are traditional food sources of magnesium, but the minerals in chlorella are better absorbed.<br><br>

							For eye health
							If carrots are believed to be very good for vision because of its beta-carotene content, then in chlorella it is several times more. It is rich not only in beta-carotene, but also in lutein (another important pigment for eye health). Lutein is concentrated in the lens, retina and macular region of the eye and protects the eye from damage caused by UV radiation.
							A high lutein content in the eye is associated with a lower risk of developing age-related macular degeneration, a progressive disease that can lead to blindness. Cabbage, greens and spinach are common food sources of lutein, but with regular intake of chlorella supplements, you will get both beta-carotene and lutein in one.
							Improves oral health
							Chlorophyll is often included in oral hygiene products for a cleansing effect. Including greens in the diet, as you know, you will improve oral health and reduce bad breath, but greens do not contain as much chlorophyll as chlorella. If you take this seaweed, you can be sure of the health of your gums and teeth.
							It is especially useful during pregnancy and lactation, as they increase immunoglobulin A, which transmits mother's immunity to the baby. In addition, lower levels of toxic dioxins are found in breast milk of mothers who take chlorella. A similar decrease is observed in cord blood. Chlorella supplements promote physical growth and cognitive development in young children.<br><br>

							Good luck to you and longevity !!!
							</p>
							<img src="{{ asset('images/seaweed_superfood.jpg') }}" style="width: 100%;">
		            	</div>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
		                <div class="scroll" style="overflow-y: scroll; height: 800px; padding: 10px;">
			                <h2 class="mb-4">Snack Bread</h2>
			                <b>Make bread for snacks.</b>
			                <p>
			                	Make yourself a healthy snack for the whole week in just 30-40 minutes. To do this, you will need about 350-400 grams of flax seeds or Chia seeds, 20-30 grams of black sesame seeds,4 onions or 5 medium-sized carrots.
  								Scroll the seeds through a coffee grinder, pass through a juicer carrots or onions, remove the cake (pulp) and mix it with the seeds and leave to stand for 5-10 minutes. If you have processed onions, the juice from the juicer is not necessary to use, remove the juice. If you used carrot the juice also pour in resulting mass of, so as carrot more dry and not can form a bit adhesive mass of. In this case, for the formation of adhesive mass used onions. n the daytime or evening, because calcium is best absorbed at night. Chia seeds contain a huge amount of antioxidants, about 9 times more than in citrus, this ensures the preservation of youth and protection from the negative effects of aggressive environmental factors. Also, the seeds are able to suppress appetite, contribute to the normalization of metabolic processes in the body, normalizes the production of hormones, improves susceptibility to insulin. 
								So appetizing look loaves of Chia seeds with carrots and black sesame. Black sesame is also very useful for the body, especially for cleansing blood vessels and stabilizing the hormonal background,but we take it in very small quantities, since it is a product with high caloric content, it is contraindicated for people with increased body weight in an amount of more than 5-10 grams per day.
			            	</p>
			            	<img src="{{ asset('images/snack_bread_1.png') }}" style="width: 100%;">
			            	<p>Next, take the resulting mass and divide into pieces, spread out to dry on a drying sheet in the form of cakes ( in this case, I use an infrared sheet) or electric dryers. You can use parchment paper, form loaves of any shape and leave to dry for 5-6 hours.  After the loaves dry, you can use the natural process of drying. But avoid heating the product more than 45 degrees to keep all the valuable properties in it. You can eat bread on your own and also using it as a basis for sandwiches or pizza. For example, you can spread bread with Guacamole or make them with carrots in Korean. This snack is very tasty and useful, a whole storehouse of vitamins and minerals. For example, Chia seeds contain calcium 10 times more than in milk, respectively, you strengthen your bone system, teeth, even if you used only one or two pieces.  
							Possible improvisation, for example as a basis for bread to use other vegetables (except beets) or make fruit treats(oranges, bananas and so on) Banana bread Chia seeds you see in the photo.  
							</p>
							<img src="{{ asset('images/snack_bread_2.jpg') }}" style="width: 100%;"><br><br>
							<img src="{{ asset('images/snack_bread_3.png') }}" style="width: 100%;">
							<p> There is an important detail, in order for you to get the maximum benefit from Chia seeds, and flax seeds you need to carefully chew or be sure to scroll on the coffee grinder grain into flour, then the vitamin core is destroyed which we need. Otherwise, you will get only the effect of saturation from the seeds and improvement of the gastrointestinal tract, but all the valuable substances will remain undigested. You can not abuse the use of Chia seeds and flax seeds, the permissible daily rate of 50-60 grams of seeds, this is 2-3 large-sized bread. Bread is permissible to eat not only as a snack but also can be used as a late dinner before bedtime.</p>
		            	</div>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
		                <div class="scroll" style="overflow-y: scroll; height: 800px; padding: 10px;">
			                <h2 class="mb-4">Helping Gemstone</h2>
			                <b>Use the natural power of stones</b><br>
			                <p>Products made of natural stones can accelerate metabolism, having positive effects on all organ systems, weight loss as a consequence occurs passively from 3 to 5 kg per month. The most powerful stimulants of metabolism are red tiger's eye, magnesite,Iolite. 
 							Red tiger eye scored the highest number of positive responses while reducing the weight even in a normal lifestyle. Also, this stone has many unique properties in the field of improving the financial condition, protection from the negative effects of the information field of the earth, not to mention the healing properties of the mineral. </p>
 							<b>Tiger eye bracelet </b>
 							<img src="{{ asset('images/helping_gemstones_1.jpg') }}" style="width: 100%;">
 							<p>The next representative of the natural resource to accelerate metabolism-Iolite. Important!!! Do not chase the beauty of the stone as you risk buying a synthetic analogue. Stone helps not only in the fight against excess weight but also strengthens the immune system, normalizes the nervous system, enhances intuition and psychic abilities. It is also often used for cosmetic purposes to strengthen hair and nails.</p>
 							<b>Iolite bracelet</b>
 							<img src="{{ asset('images/helping_gemstones_2.jpg') }}" style="width: 100%;">
 							<b>Bracelet made of magnesite</b>
 							<img src="{{ asset('images/helping_gemstones_3.jpg') }}" style="width: 100%;">
 							<p>Less popular representative of the category of metabolic accelerators is magnesite. This stone has been used since ancient times as a powerful talisman against accidents, as it has the properties of protection from viral infections. Therapeutic properties are manifested in the ability to accelerate metabolism, protect blood vessels from spasm, especially the vessels of the brain, is recognized as a worthy prevention of cardiovascular diseases.</p>
 							<b>Reinforced the effects of gems to speed up weight loss. </b>
 							<p>Experienced leading experts in the field of lithotherapy recommend the use of several types of stones both for weight correction and in solving other complex problems. Thus, we can create our own set of jewelry in which the impact on the body will take place in many directions at the same time. Bracelet to reduce appetite, accelerate metabolism with alternating stones of Iolite, magnesite, Muscovite, seraphinite, kyanite and angelite can be as a vivid example of your imagination. If you have not found Muscovite or kyanite, or other stones, then they can be replaced with pink or mountain quartz or moonstone, the sequence of stones does not matter .This product will help not only to lose weight but also to consolidate the result after reaching the goal.</p>
 							<img src="{{ asset('images/helping_gemstones_4.jpg') }}" style="width: 100%;">
 							<b>Bracelet-Assembly for weight loss.</b>
 							<p>In ancient times it was believed that charging water with stones has a very powerful effect on the body,thanks to this procedure, you can lose weight right before your eyes.  But here it is necessary to consider that not all stones are suitable for direct contact with water, forming a safe chemical compound, as well as individual characteristics of the body. For example, for someone the infusion of water may seem weak despite the fact that the stones were in the water for more than a few hours, and for someone the impact of the same infusion will be so strong up to poisoning and the need to take adsorbents.  So let's consider the permissible variants of stones for this procedure.
							</p>
							<img src="{{ asset('images/helping_gemstones_5.jpg') }}" style="width: 100%;">
							<p>Stones better use otelnye and not from bijouterie, instead stone Apatite (Royal or green) can be use green malachite, First, wash all stones, well to clear running water, then to Deposit in glass the glass and inject water good quality.  Secondly,to keep the light at least one hour but not more than two hours. Then start tasting the water. Assess how pleasant the taste of water, whether the state of health has changed, monitor all indicators for half an hour. If everything suits,then you can use this procedure as an additional but very effective method in the fight against excess weight. But it is necessary to remember that such water can cause harm if you kept stones in water more than two hours or drank more than one glass of water. 
							There is a hypothesis, confirmed by most experts in the field that all used stones should be cleaned from the accumulation of negative energies by washing under running water. For example, the product that you wear in public places should be washed more often than those that are stored at home. Also it is possible to give charging the stones of sunlight,it is enough sometimes to put washed stones on the window sill. Just to give a mental call (program)for stone,which are going to use at the moment. All of these activities will strengthen ten times the effect of little wizards and the result will please you!</p>
		            	</div>
	              	</div>
		
            	</div>
          	</div>
        </div>
  	</div>
</section>

<section class="ftco-section testimony-section">
  	<div class="container">
        <div class="row justify-content-center pb-3">
          	<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
	          	<span class="subheading">Read testimonials</span>
	            <h2 class="mb-4">What Client Says</h2>
          	</div>
        </div>
        <div class="row ftco-animate justify-content-center">
          	<div class="col-md-12">
            	<div class="carousel-testimony owl-carousel ftco-owl">
              		<div class="item">
                		<div class="testimony-wrap text-center py-4 pb-5">
                  			<div class="user-img" style="background-image: url(images/user-default.png)">
                    			<span class="quote d-flex align-items-center justify-content-center">
                      				<i class="icon-quote-left"></i>
                    			</span>
                  			</div>
                  			<div class="text px-4 pb-5">
			                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			                    <p class="name">Jeff Freshman</p>
			                    <span class="position">Artist</span>
	                 	 	</div>
            			</div>
              		</div>
              		<div class="item">
            			<div class="testimony-wrap text-center py-4 pb-5">
                  			<div class="user-img" style="background-image: url(images/user-default.png)">
			                    <span class="quote d-flex align-items-center justify-content-center">
			                      	<i class="icon-quote-left"></i>
			                    </span>
                  			</div>
		                  	<div class="text px-4 pb-5">
			                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			                    <p class="name">Jeff Freshman</p>
			                    <span class="position">Artist</span>
		                  	</div>
                		</div>
              		</div>
              		<div class="item">
                		<div class="testimony-wrap text-center py-4 pb-5">
                  			<div class="user-img" style="background-image: url(images/user-default.png)">
			                    <span class="quote d-flex align-items-center justify-content-center">
			                      	<i class="icon-quote-left"></i>
			                    </span>
                  			</div>
                  			<div class="text px-4 pb-5">
			                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			                    <p class="name">Jeff Freshman</p>
			                    <span class="position">Artist</span>
		                  	</div>
                		</div>
              		</div>
              		<div class="item">
                		<div class="testimony-wrap text-center py-4 pb-5">
                  			<div class="user-img" style="background-image: url(images/user-default.png)">
			                    <span class="quote d-flex align-items-center justify-content-center">
			                      	<i class="icon-quote-left"></i>
			                    </span>
                  			</div>
                  			<div class="text px-4 pb-5">
			                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			                    <p class="name">Jeff Freshman</p>
			                    <span class="position">Artist</span>
		                  	</div>
                		</div>
              		</div>
         		 	<div class="item">
		                <div class="testimony-wrap text-center py-4 pb-5">
		                  	<div class="user-img" style="background-image: url(images/user-default.png)">
			                    <span class="quote d-flex align-items-center justify-content-center">
			                      	<i class="icon-quote-left"></i>
			                    </span>
		                  	</div>
		                  	<div class="text px-4 pb-5">
			                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			                    <p class="name">Jeff Freshman</p>
			                    <span class="position">Artist</span>
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
<script>
	$(document).ready(function() {
		const player = new Plyr('#player');
	});
</script>
@endsection