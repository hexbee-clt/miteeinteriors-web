@extends('layouts.web')

@section('content')
<div  class="transition-fade">
	<div class="mry-content-frame" id="scroll">
		<canvas class="mry-dots" style="display: none"></canvas>

		<div class="mry-head-bg">
			<img src="{{asset('web/img/light/projects/prjct-7/1.jpg')}}" alt="background">
			<div class="mry-bg-overlay"></div>
		</div>

		<div class="mry-banner mry-p-140-0">
			<div class="container">
				<div class="mry-main-title mry-title-center">
					<div class="mry-subtitle mry-mb-20 mry-fo">About Us</div>
					<h1 class="mry-mb-20 mry-fo">Desires meet <br><span class="mry-border-text">innovation here!.</span><span class="mry-animation-el"></span></h1>
					{{-- <div class="mry-text mry-fo"><b>Alina Wheeler</b> - Graphic Designer, Art Director.</div> --}}
					<div class="mry-scroll-hint-frame">
						<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
							<span class="mry-magnetic-object"></span>
						</a>
						<div class="mry-label mry-fo">Scroll Down</div>
					</div>
				</div>
			</div>
		</div>

		<!-- about -->
		<div class="mry-about mry-p-100-100">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">

						<div class="mry-mb-100 mry-text-center">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">01</div>
								<div class="mry-subtitle">Who We Are</div>
							</div>
							<h3 class="mry-mb-40 mry-fo">Mitee is an award winning full service interior design studio</h3>
							<p class="mry-text mry-fo">Mitee is a Sanskrit word derived from "Bhumitee," meaning Dimension. We are a team of highly qualified designers and architects in Pune, India.  who have immense experience in creating aesthetically pleasing and practical structures and designs across the country.
								<br>
								At Mitee, we give you a vivid perception of designs, which helps you to tap into a new dimension that can transform your interiors. We can assist you by thinking outside the box and giving full preference to your ideas and thoughts. So let's team up to create designs that stand the test of time.
								</p>
						</div>

					</div>

					<div class="col-lg-8">
						<div class="mry-mb-100 mry-text-center">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">02</div>
								<div class="mry-subtitle">What do we do?</div>
							</div>
							<h3 class="mry-mb-40 mry-fo">Relationships come first, everything <br>else follows</h3>
							<p class="mry-text mry-fo">At Mitee, we can help you create spaces that reflect your identity. We are with you in the journey of designing your dream residential or commercial spaces with end-to-end design services, from choosing the best quality raw materials to making the final touch. We can be your helping hand to ensure that you choose the right colors, furniture designs, textures, and lighting to create the design that could create harmony in your space. We take pride in having strong relationships with our clients and being their supporting pillars throughout the project. As one of the upcoming leading interior designers in Pune, India, our designs help you stand apart in the crowd.</p>

						</div>
					</div>

					<div class="col-lg-10">

						<div class="mry-about-video mry-mb-100 mry-fo">
							<div class="mry-video-cover-frame">
								<img class="mry-video-cover" src="{{ asset('web/img/light/content/video.webp') }}" alt="banner">
								<div class="mry-cover-overlay"></div>
								<div class="mry-curtain"></div>
							</div>
						</div>

					</div>

					<div class="col-lg-12">

						<div class="mry-numbering mry-fo">
							<div class="mry-border-text">03</div>
							<div class="mry-subtitle">Services</div>
						</div>

						<div class="row">
							<div class="col-lg-4">

								<div class="mry-text-left mry-mb-100">
									<h4 class="mry-mb-20 mry-fo">Residential interior design</h4>
									<p class="mry-text mry-mb-20 mry-fo">A residential interior is not complete without giving prominence to your tastes and preferences. <br> At Mitee, We design spaces that are an extension of their owner's personality, interests, and desires. The design options are endless with us as we can have minimalist, modern, industrial, and classic-contemporary interior decor choices, which convert your residential interiors into eye-catching structures. So join us in the journey of producing interior masterpieces that can transform your residential spaces.</p>
									<!--<div class="mry-fo"><a href="contact.html" class="mry-link mry-default-link">Order a service</a></div>-->
								</div>

							</div>
							<div class="col-lg-4">

								<div class="mry-text-left mry-mb-100">
									<h4 class="mry-mb-20 mry-fo">Commercial interior design</h4>
									<p class="mry-text mry-fo">A creative and ergonomic commercial space is the dream of many! At Mitee, we have expertise in creating Practical, affordable, and scalable solutions for your commercial spaces, making us the fast-growing commercial interior space designers in Pune, India. We keep in mind your company's business intentions and goals to create the finest interiors for offices, shopping centers, and business spaces. We will assist you in designing the interiors, choosing the ideal furniture, lighting features, and more to have a timeless touch in your commercial spaces.</p>
									<!--<div class="mry-fo"><a href="contact.html" class="mry-link mry-default-link">Order a service</a></div>-->
								</div>

							</div>
							<div class="col-lg-4">

								<div class="mry-text-left mry-mb-100">
									<h4 class="mry-mb-20 mry-fo">Architectural Services	</h4>
									<p class="mry-text mry-fo">Mitee believes in bringing in an emotional connection in the designs we create, as we value them more than just bricks. We have a dedicated team of technically qualified Architects, Engineers & Interior Designers who can help you create the most delicate architectural designs that will help you give life to your dreams. We can furnish you with realistic plans by keeping up with the present-day trends, requirements, and lifestyles. Furthermore, we will provide you with a realistic overview of the project with computerized 2D Drawings & 3D imaging to enhance the design experience.

									</p>
									<!--<div class="mry-fo"><a href="contact.html" class="mry-link mry-default-link">Order a service</a></div>-->
								</div>


							</div>
						</div>
					</div>
					<div class="col-lg-12">

						<div class="mry-main-title mry-title-center mry-p-0-40">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">04</div>
								<div class="mry-subtitle">Employees</div>
							</div>
							<h2 class="mry-fo">Our Amazing Team</h2>
							<p class="mt-4">At Mitee, Talent meets the artistry of the highest order! Our team of creative designers and architects can help you in creating efficient and affordable interior design solutions. Our team has expertise in adapting the theme you prefer, regardless of the traditional and contemperory finishes, which will showcase your personalized touch in every inch.
								We are here to walk through with you in visualizing your dream, designing it aesthetically, and giving life to your interior design ideas.</p>
							
						</div>

					</div>
					<div class="col-lg-10">
						{{-- <div class="row">
							<div class="col-md-4">
								<div class="swiper-container">
									<div class="swiper-wrapper">
									<div class="mry-team-member mry-text-center">
										<div class="mry-member-photo-frame mry-fo">
											<img src="{{ asset('web/img/light/team/team-1.webp') }}" alt="Team member" >
											<div class="mry-photo-overlay"></div>
											<div class="mry-curtain"></div>
										</div>
										<h4 class="mry-mb-10 mry-fo">Viktoria Freeman</h4>
										<p class="mry-text mry-simple-text mry-fo">UI/UX Designer</p>
									</div>
										
									</div>
								</div>
							</div>
							<div class="col-md-5 offset-1 ">
								<p class="mt-100">At Mitee, Talent meets the artistry of the highest order! Our team of creative designers and architects can help you in creating efficient and affordable interior design solutions. Our team has expertise in adapting the theme you prefer, regardless of the traditional and contemperory finishes, which will showcase your personalized touch in every inch.
									We are here to walk through with you in visualizing your dream, designing it aesthetically, and giving life to your interior design ideas.
									</p>
							</div>
						</div> --}}
						{{-- <div class="swiper-container mry-team-slider mry-mb-100">
							<div class="swiper-wrapper">
								<div class="swiper-slide">

									<div class="mry-team-member mry-text-center">
										<div class="mry-member-photo-frame mry-fo">
											<img src="{{ asset('web/img/light/team/team-1.webp') }}" alt="Team member" >
											<div class="mry-photo-overlay"></div>
											<div class="mry-curtain"></div>
										</div>
										<h4 class="mry-mb-10 mry-fo">Viktoria Freeman</h4>
										<p class="mry-text mry-simple-text mry-fo">UI/UX Designer</p>
									</div>

								</div>
								<div class="swiper-slide">

									<div class="mry-team-member mry-text-center">
										<div class="mry-member-photo-frame mry-fo">
											<img src="{{ asset('web/img/light/team/team-2.webp') }}" alt="Team member" >
											<div class="mry-photo-overlay"></div>
											<div class="mry-curtain"></div>
										</div>
										<h4 class="mry-mb-10 mry-fo">Paul Trueman</h4>
										<p class="mry-text mry-simple-text mry-fo">UI/UX Designer</p>
									</div>

								</div>
								<div class="swiper-slide">

									<div class="mry-team-member mry-text-center">
										<div class="mry-member-photo-frame mry-fo">
											<img src="img/light/team/team-3.webp" alt="Team member" >
											<div class="mry-photo-overlay"></div>
											<div class="mry-curtain"></div>
										</div>
										<h4 class="mry-mb-10 mry-fo">Mike Oldman</h4>
										<p class="mry-text mry-simple-text mry-fo">UI/UX Designer</p>
									</div>

								</div>
								<div class="swiper-slide">

									<div class="mry-team-member mry-text-center">
										<div class="mry-member-photo-frame mry-fo">
											<img src="img/light/team/team-4.webp" alt="Team member" >
											<div class="mry-photo-overlay"></div>
											<div class="mry-curtain"></div>
										</div>
										<h4 class="mry-mb-10 mry-fo">Emma Newman</h4>
										<p class="mry-text mry-simple-text mry-fo">UI/UX Designer</p>
									</div>

								</div>
							</div>
						</div> --}}

					</div>
					<div class="col-lg-10">

						<div class="mry-mb-100 ">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">05</div>
								<div class="mry-subtitle">About the founder</div>
							</div>
							
						<div class="row">
							<div class="col-md-4">
								<div class="swiper-container">
									<div class="swiper-wrapper">
									<div class="mry-team-member">
										<div class="mry-member-photo-frame mry-fo">
											<img src="{{ asset('web/img/light/about.webp') }}" alt="Team member" >
											<div class="mry-photo-overlay"></div>
											<div class="mry-curtain"></div>
										</div>
										<h4 class="mry-mb-10 mry-fo">Sanjali Abhay Naik</h4>
										<p class="mry-text mry-simple-text mry-fo">Founder</p>
									</div>
										
									</div>
								</div>
							</div>
							<div class="col-md-6 mry-text-left ">
								<p class=" mry-text-left">Sanjali Abhay Naik, the founder of 'Mitee', has been in the interior decor industry for the past 5 years. She has completed interior designing & graduation studies from Pune and secured top rank in the college.  
									She is an explorer and loves to travel for design inspiration. Traveling to different places will help her witness different cultures, design techniques, buildings & interior materials, which could inspire her to make remarkable designs. "Mitee" is a Sanskrit word meaning dimensions, where our goal is to design futuristic sites. As the founder, she believes interior designing is a process where client contribution/inputs are essential to cross-line. Recently she has started working on a home decor line, "Handmade mill," to promote decor manufactured in India. 
									</p>
							</div>
						</div>
						</div>

					</div>
					<div class="col-lg-8">

						<div class="mry-mb-100 mry-text-center">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">06</div>
								<div class="mry-subtitle">Why choose us</div>
							</div>
							<h3 class="mry-mb-40 mry-fo">We're here to help assist you in bringing the ultimate transition. </h3>
							<p class="mry-text mry-fo">Mitee is proud to introduce itself as a personalized interior decor company in  Pune, India that sets up an unmatched standard of beauty and perfection. We believe in creating delighted customers, no matter how small or big the project, as each project is done with unparalleled precision and premium craftsmanship. We start from scratch and create everything from walls & furniture to lighting features bespoke to your preferences. 
								</p>
						</div>

					</div>
					<div class="col-lg-12">

						<div class="mry-main-title mry-title-center mry-p-0-40">
							<div class="mry-numbering mry-fo">
								<div class="mry-border-text">07</div>
								<div class="mry-subtitle">Testimonials</div>
							</div>
							<h2 class="mry-fo">Our customers say</h2>
							<div class="mry-arrows">
								<div class="mry-sl-nav mry-fo">
									<div class="mry-prev mry-button-testimonials-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
									<div class="mry-next mry-button-testimonials-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-lg-8">

						<div class="swiper-container mry-testimonials-slider">
							<div class="swiper-wrapper">
								<div class="swiper-slide">

									<div class="mry-title-center">
										<h4 class="mry-mb-20 mry-fo">Vardhan and sneha kale</h4>
										<p class="mry-text mry-fo">Let’s begin with our journey with Sanjali Recommended by: My parents as she took up their project too. We really loved the designs she presented and it provoked us to approach her. Experience: 1. She carries unique ideas and recommended what’s best for our space after understanding your needs. 2. She has got a great choice of colour combination 3. To see the best out her you need to “trust” her with her recommendation and the outcome is 120% going to be fantastic.</p>
										<ul class="mry-star-rate mry-fo">
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>

								</div>
								<div class="swiper-slide">

									<div class="mry-title-center">
										<h4 class="mry-mb-20 mry-fo">Hemant and Akshata sonavane</h4>
										<p class="mry-text mry-fo">Creativity and simplicity at its best...! We selected Sanjali from the number of options that we had and when we saw the first design that she proposed, we knew that something great is coming. We trusted her talent and she didn't let us down. Very unique design elements used for TV Panel, terrace garden, bathroom and bedroom which we had never seen anywhere. Special thanks for making my dream terrace garden, a reality. Our relatives and friends just couldn't stop complimenting our house. All thanks to Sanjali...!!!Highly recommended if you want creative, unique designs to exceed your expectations.</p>
										<ul class="mry-star-rate mry-fo">
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>

								</div>
								<div class="swiper-slide">

									<div class="mry-title-center">
										<h4 class="mry-mb-20 mry-fo">Shradha Hedau</h4>
										<p class="mry-text mry-fo">One of the best decision was to have Mitee on board for our House!! 
											Couldn't have asked for a better designer than Sanjali. Thank you for making our house a beautiful place to live in!</p>
										<ul class="mry-star-rate mry-fo">
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- about end -->

		<!-- footer -->
		<footer class="mry-footer">
			<div class="container">
				<div class="mry-main-title mry-title-center mry-p-0-100">
					<h2 class="mry-h1 mry-mb-20 mry-fo">Do you have  <span class="mry-border-text">a project?</span></h2>
					<div class="mry-text mry-mb-30  mry-fo">If you have a much-awaited dream of transforming your residential and commercial spaces, you can get in touch today for the quote</div>
					<div class="mry-fo">
						<a href="{{ url('contact') }}" class="mry-anima-link mry-btn mry-btn-color mry-default-link">Contact Us</a>
						<a href="{{ url('projects') }}" class="mry-anima-link  mry-btn-text mry-default-link">Projects</a>
					</div>
				</div>
			</div>
			<div class="mry-footer-copy">
				<div class="container">
                    <div>All Rights Reserved.</div>
					<ul class="mry-social">
						<li><a href="https://www.facebook.com/Miteeinteriors" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://instagram.com/miteeinteriors" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="https://www.houzz.com/hznb/professionals/interior-designers-and-decorators/mitee-interiors-pfvwin-pf~221729941" target="_blank"><i class="fab fa-houzz"></i></a></li>
					</ul>
					<div>Powered By <a href="https://cremountdigital.com/">Cremount Digital Solutions</a></div>
				</div>
			</div>
		</footer>
		<!-- footer end -->

		<div class="mry-head-bg mry-head-bottom">
            <img src="{{asset('web/img/light/projects/prjct-2/1.jpg')}}" alt="background">
			<div class="mry-bg-overlay"></div>
		</div>

	</div>

</div


	@endsection()