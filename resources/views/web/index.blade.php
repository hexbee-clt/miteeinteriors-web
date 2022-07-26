@extends('layouts.web')

@section('content')
		<div  class="transition-fade">
			<div class="mry-content-frame" id="scroll">
				<canvas class="mry-dots"></canvas>

				<div class="swiper-container mry-main-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">

							<!-- project -->
							<div class="mry-project-slider-item">
								<div class="mry-project-frame mry-project-half">
									<div class="mry-cover-frame">
										<img class="mry-project-cover mry-position-right" src="{{asset('web/img/light/banner/banner1.webp')}}" alt="Project" data-swiper-parallax="500"
											data-swiper-parallax-scale="1.4">
										<div class="mry-cover-overlay"></div>
										<div class="mry-loading-curtain"></div>
									</div>
									<div class="mry-main-title-frame">
										<div class="container">
											<div class="mry-main-title" data-swiper-parallax-x="30%" data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
												data-swiper-parallax-duration="1000">
												<div class="mry-subtitle mry-mb-20">Residential</div>
												<h1 class="mry-mb-30">Ingenious Residential spaces <br><span class="mry-border-text">where you love to live!</span></h1>
												<div class="mry-text mry-mb-30">Creating impressive interiors with state-of-the-art design choices which display your personality.
													</div>
												<a class="mry-btn mry-default-link mry-anima-link" href="{{ url('projects') }}">All Projects</a>
												{{-- <a class="mry-btn-text mry-default-link mry-anima-link" href="portfolio-grid-1.html">All Projects</a> --}}
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project end -->

						</div>
						<div class="swiper-slide">

							<!-- project -->
							<div class="mry-project-slider-item">
								<div class="mry-project-frame mry-project-half">
									<div class="mry-cover-frame">
										<img class="mry-project-cover" src="{{asset('web/img/light/banner/banner2.webp')}}" alt="Project" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
										<div class="mry-cover-overlay"></div>
									</div>
									<div class="mry-main-title-frame">
										<div class="container">
											<div class="mry-main-title" data-swiper-parallax-x="30%" data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
												data-swiper-parallax-duration="1000">
												<div class="mry-subtitle mry-mb-20">Commercial</div>
												<h1 class="mry-mb-30">Stand out with elegance in <br><span class="mry-border-text">your commercial space.</span><span class="mry-animation-el"></span></h1>
												<div class="mry-text mry-mb-30">Personalized commercial interior space designs that showcase your brand
													</div>
												<a class="mry-btn mry-default-link mry-anima-link" href="{{ url('projects') }}">All Projects</a>
												{{-- <a class="mry-btn-text mry-default-link mry-anima-link" href="portfolio-grid-1.html">All Projects</a> --}}
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project end -->

						</div>
						<div class="swiper-slide">

							<!-- project -->
							<div class="mry-project-slider-item">
								<div class="mry-project-frame mry-project-half">
									<div class="mry-cover-frame">
										<img class="mry-project-cover" src="{{asset('web/img/light/banner/banner3.webp')}}" alt="Project" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
										<div class="mry-cover-overlay"></div>
									</div>
									<div class="mry-main-title-frame">
										<div class="container">
											<div class="mry-main-title" data-swiper-parallax-x="30%" data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
												data-swiper-parallax-duration="1000">
												<div class="mry-subtitle mry-mb-20">Architectural</div>
												<h1 class="mry-mb-30">Giving buildings a <br><span class="mry-border-text">timeless footprint</span><span class="mry-animation-el"></span></h1>
												<div class="mry-text mry-mb-30">We create Fascinating structures that showcase architectural brilliance with class.
													</div>
												<a class="mry-btn mry-default-link mry-anima-link" href="{{ url('projects') }}">All Projects</a>
												{{-- <a class="mry-btn-text mry-default-link mry-anima-link" href="portfolio-grid-1.html">All Projects</a> --}}
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project end -->

						</div>
					</div>
				</div>

				<div class="mry-slider-pagination-frame">
					<div class="mry-slider-pagination"></div>
				</div>

				<div class="mry-slider-nav-panel">
					<div class="container">
						<div class="mry-slider-progress-bar-frame">
							<div class="mry-slider-progress-bar">
								<div class="mry-progress"></div>
							</div>
						</div>
					</div>

					<div class="mry-slider-arrows">
						{{-- <div class="mry-label">Slider Navigation</div> --}}
						<div class="mry-button-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
						<div class="mry-button-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	@endsection()