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
					@if(!Auth::user())
						<div id="video_overlays">
							<p style="color: #fff; background-color: #fe9191; width: 90%;">&nbsp;&nbsp;&nbsp;Please subscribe inorder to play this video.</p>
						</div>
					@endif
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

              		

              		<a class="nav-link px-4" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="false"> Nutrition Principles</a>

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
		                <div class="scroll" style="overflow-y: scroll; height: 800px;">
			                <h2 class="mb-4">Nutrition Principles</h2>
			                <p>
			                	<b>Follow one of three basic principles of nutrition.</b>
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
									<td colspan="2"><b>Most meats (veal,chicken, lamb, Turkey, rabbit) have a glycemic index of  0</b>
									Thus, your diet should be made taking into account the fact that on the day you should not eat foods more than 65-75 glycemic units . Here you make your own menu as you like, it is a great option for lovers of meat and seafood. But do not forget about the basic rules of power supply.</td>
								</tr>
								<tr>
									<td colspan="2">
										<b> Conclusion.</b>
										You decide on your diet, choosing one of the three principles that inevitably leads you to lose weight. If you find it difficult to choose and resort to the help of familiar nutritionists, then in this case you need to send your entire diet for approval to Julia, since she can not be responsible for someone else's work. Also you can order services of the nutritionist through our site if in it there will be a need, very skilled experts work with us. But we still encourage you to show resourcefulness, imagination and enthusiasm in cooking healthy food, start today to eat properly and consciously!
										<img src="{{ asset('images/nutrition_principles.png') }}" width="100%">
									</td>
								</tr>
							</table>
						</div>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="scroll" style="overflow-y: scroll; height: 800px;">
			                <h2 class="mb-4">Nutrition Rules</h2>
			                <p>
			                	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur
			            	</p>
		            	</div>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		              	<div class="scroll" style="overflow-y: scroll; height: 800px; width: 100%;">
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
		                <div class="scroll" style="overflow-y: scroll; height: 800px;">
			                <h2 class="mb-4">Seaweed Superfood</h2>
			                <p>
			                	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur
			            	</p>
		            	</div>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
		                <div class="scroll" style="overflow-y: scroll; height: 800px;">
			                <h2 class="mb-4">Snack Bread</h2>
			                <p>
			                	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur
			            	</p>
		            	</div>
	              	</div>

	              	<div class="tab-pane fade py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
		                <div class="scroll" style="overflow-y: scroll; height: 800px;">
			                <h2 class="mb-4">Helping Gemstone</h2>
			                <p>
			                	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur
			            	</p>
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