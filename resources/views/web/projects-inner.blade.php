@extends('layouts.web')

@section('content')
		<!-- menu end -->

		<div  class="transition-fade">
			<div class="mry-content-frame" id="scroll">
				<canvas class="mry-dots" style="display: none"></canvas>

				<div class="mry-head-bg">
					<img src="img/light/projects/prjct-6/1.webp" alt="background">
					<div class="mry-bg-overlay"></div>
				</div>

				<div class="mry-banner mry-p-140-0">
					<div class="container">
                                        @foreach ($data as $datas) 
						<div class="mry-main-title mry-title-center">
							<div class="mry-subtitle mry-mb-20 mry-fo">Projects</div>
							<h1 class="mry-mb-20 mry-fo">{{$datas->title}}<br>
							<!-- <span class="mry-border-text">Country house</span><span class="mry-animation-el"></span> -->
						</h1>
							<!-- <div class="mry-text mry-fo">Architecture, Interior Design</div> -->
							<div class="mry-scroll-hint-frame">
								<a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
									<span class="mry-magnetic-object"></span>
								</a>
								<div class="mry-label mry-fo">Scroll Down</div>
							</div>
						</div>
                                        @endforeach
					</div>
				</div>

				<!-- project -->
				<div class="mry-about mry-p-100-100">
					<div class="container">
						<div class="row justify-content-center">

							<div class="col-lg-8">

								<div class="mry-mb-100 mry-text-center">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">01</div>
										<!-- <div class="mry-subtitle">Goal</div> -->
									</div>
									<!-- <h3 class="mry-mb-40 mry-fo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, id!</h3> -->
									{!! $datas->contant !!}
								</div>

							</div>

							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-numbering mry-fo">
										<div class="mry-border-text">02</div>
										<div class="mry-subtitle">Gallery</div>
									</div>
									<h2 class="mry-fo">Project gallery</h2>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="mry-portfolio-frame">
									<div class="mry-masonry-grid mry-without-descr mry-p-0-100">
										<div class="mry-grid-sizer"></div>
                                        @foreach ($ids as $projectphotos) 
										<div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior">
    
											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													<img src="{{url('')}}/{{$projectphotos->path}}{{$projectphotos->file}}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														@if ($projectphotos->type == "url")
													<a href="{{url('')}}/{{$projectphotos->path}}{{$projectphotos->file}}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
																class="fas fa-expand"></i></span></a>
													@elseif ($projectphotos->type == "youtube")
													<a href="{{$projectphotos->url}}" data-fancybox="works" class="mry-zoom mry-magnetic-link"><span class="mry-magnetic-object"><i
																class="fas fa-expand"></i></span></a>
													@endif
													</div>
												</div>
											</div>

										</div>
                                        @endforeach
									</div>
								</div>
							</div>
							<div class="col-lg-12">

								<div class="mry-main-title mry-title-center mry-p-0-40">
									<div class="mry-subtitle mry-mb-20 mry-fo">More projects</div>
									<h2 class="mry-fo">Similar projects</h2>
									<div class="mry-arrows mry-fo">
										<div class="mry-sl-nav">
											<div class="mry-prev mry-button-blog-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
											<div class="mry-next mry-button-blog-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
										</div>
										{{-- <div class="mry-label mry-fo">Slider Navigation</div> --}}
									</div>
								</div>

							</div>
							<div class="col-lg-12">

								<div class="swiper-container mry-blog-slider">
									<div class="swiper-wrapper">
                                        @foreach ($recentprojects as $recentprojects) 
										<div class="swiper-slide">

											<div class="mry-card-item">
												<div class="mry-card-cover-frame mry-mb-20 mry-fo">
													{{-- <div class="mry-badge">interior</div> --}}
													<img src="{{ url('') }}/{{ $recentprojects->location }}/{{ $recentprojects->file }}" alt="project" >
													<div class="mry-cover-overlay"></div>
													<div class="mry-hover-links">
														<a href="img/light/projects/prjct-1/fs/1.webp" data-fancybox="works-slider" class="mry-zoom mry-magnetic-link"><span
																class="mry-magnetic-object"><i class="fas fa-expand"></i></span></a>
														<a href="project.html" class="mry-more mry-magnetic-link mry-anima-link"><span class="mry-magnetic-object"><i
																	class="fas fa-arrow-right"></i></span></a>
													</div>
												</div>
												<div class="mry-item-descr mry-fo">
													<h4 class="mry-mb-10"><a href="project.html">{{ $recentprojects->title }}</a></h4>
													<div class="mry-text">{!! Str::limit($recentprojects->contant, 150, '...') !!}</div>
												</div>
											</div>

										</div>
										@endforeach
									</div>
								</div>

							</div>

						</div>
					</div>
				</div>
				<!-- project end -->

				<!-- footer -->
				<footer class="mry-footer">
					<div class="container">
						<div class="mry-main-title mry-title-center mry-p-0-100">
							{{-- <div class="mry-subtitle mry-mb-20 mry-fo">Call to action</div> --}}
							<h2 class="mry-h1 mry-mb-20 mry-fo">Do you have<br><span class="mry-border-text"> a project?</span></h2>
							<div class="mry-text mry-mb-30  mry-fo">If you have a much-awaited dream of transforming your residential and commercial spaces, you can get in touch today for the quote.</div>
							<div class="mry-fo">
								<a href="{{ url('projects') }}" class="mry-anima-link mry-btn mry-btn-color mry-default-link">All projects</a>
								{{-- <a href="portfolio-grid-1.html" class="mry-anima-link  mry-btn-text mry-default-link">All projects</a> --}}
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
            <img src="{{asset(' web/img/light/projects/prjct-2/1.webp')}}" alt="background">
					<div class="mry-bg-overlay"></div>
				</div>

			</div>
		</div>

	</div>


	@endsection()