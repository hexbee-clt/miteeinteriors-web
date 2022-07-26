<!DOCTYPE html>
<html lang="">


<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2EJJT28BJC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2EJJT28BJC');
</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- color of address bar in mobile browser -->
	<meta name="theme-color" content="#28292C">
	<meta property="og:image" content="{{ asset('web/img/light/ogimage.jpeg') }}" />
	<!-- favicon  -->
	<link rel="shortcut icon" href="{{ asset('web/img/light/favicon.png') }}" type="image/x-icon">
	<!-- bootstrap css -->
	<link rel="stylesheet" href="{{asset('web/css/plugins/bootstrap.min.css')}}">
	<!-- font awesome css -->
	<link rel="stylesheet" href="{{asset('web/css/plugins/font-awesome.min.css')}}">
	<!-- swiper css -->
	<link rel="stylesheet" href="{{asset('web/css/plugins/swiper.min.css')}}">
	<!-- fancybox css -->
	<link rel="stylesheet" href="{{asset('web/css/plugins/fancybox.min.css')}}">
	<!-- mapbox css -->
	<link href="{{asset('web/css/plugins/mapbox-style.css')}}" rel='stylesheet'>
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('web/css/style-light.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <meta property="description" content="Mitee is an award winning full service interior design studio, Mitee is a Sanskrit word derived from "Bhumitee," meaning Dimension. We are a team of highly qualified designers and architects in Pune, India. who have immense experience in creating aesthetically pleasing and practical structures and designs across the country." />
	@toastr_css

	<title>Mitee Interiors</title>

</head>

<body>

	<div class="mry-app">

		<!-- preloader -->
		<div class="mry-preloader mry-active">
			<div class="mry-preloader-content">
				<img class="mry-logo mry-mb-20" src="{{asset('web/img/light/logo.svg')}}" alt="Mireya">
				<div class="mry-loader-bar">
					<div class="mry-loader"></div>
				</div>
				<div class="mry-label">Please wait</div>
			</div>
		</div>
		<!-- preloader end -->

		<!-- cursor -->
		<div class="mry-magic-cursor">
			<div class="mry-ball">
				<div class="mry-loader">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 50 50"
						style="enable-background:new 0 0 50 50;" xml:space="preserve">
						<path d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
							<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite" />
						</path>
					</svg>
				</div>
			</div>
		</div>
		<!-- cursor end -->

		<!-- top panel -->
		<div class="mry-top-panel">
			<div class="mry-logo-frame">
				<a href="{{url('')}}" class="mry-default-link mry-anima-link">
					<img class="mry-logo" src="{{asset('web/img/light/logo.svg')}}" alt="Mireya">
				</a>
			</div>
			<div class="mry-menu-button-frame">
				<div class="mry-label">Menu</div>

				<div class="mry-menu-btn mry-magnetic-link">
					<div class="mry-burger mry-magnetic-object">
						<span></span>
					</div>
				</div>
			</div>
		</div>
		<!-- top panel end -->

		<!-- menu -->
		<div class="mry-menu">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-4">
						<nav id="mry-dynamic-menu">
							<ul>
								<li class="menu-item"><a href="{{ url('') }}" class="mry-anima-link mry-default-link">Home</a></li>
								<li class="menu-item"><a href="{{url('about')}}" class="mry-anima-link mry-default-link">About</a></li>
								<li class="menu-item"><a href="{{url('projects')}}" class="mry-anima-link mry-default-link">Projects</a></li>
								<li class="menu-item"><a href="{{url('contact')}}" class="mry-anima-link mry-default-link">Contact</a></li>
							</ul>
						</nav>

					</div>
					<div class="col-md-4">
						<div class="mry-info-box-frame">
							<div class="mry-info-box">
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Country:</div>
									<div class="mry-text">India</div>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">City:</div>
									<div class="mry-text">Pune</div>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Adress:</div>
									<div class="mry-text">103, Aanjay Apartment, Laxman Nagar, Baner - 411045</div>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Email:</div>
									<a class="mry-text" href="mailto:miteeinteriors@gmail.com">miteeinteriors@gmail.com</a> <br>
									<a class="mry-text" href="mailto:info@miteeinteriors.com">info@miteeinteriors.com</a>
								</div>
								<div class="mry-mb-20">
									<div class="mry-label mry-mb-5">Phone:</div>
									<a class="mry-text" href="tel:9561677393">+91 9561 67 73 93</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- menu end -->

@yield('content')
        
	<!-- jquery js -->
	<script src="{{asset('web/js/plugins/jquery.min.js')}}"></script>
	<!-- tween max js -->
	<script src="{{asset('web/js/plugins/tween-max.min.js')}}"></script>
	<!-- scroll magic js -->
	<script src="{{asset('web/js/plugins/scroll-magic.js')}}"></script>
	<!-- scroll magic gsap plugin js -->
	<script src="{{asset('web/js/plugins/scroll-magic-gsap-plugin.js')}}"></script>
	<!-- swiper js -->
	<script src="{{asset('web/js/plugins/swiper.min.js')}}"></script>
	<!-- isotope js -->
	<script src="{{asset('web/js/plugins/isotope.min.js')}}"></script>
	<!-- fancybox js -->
	<script src="{{asset('web/js/plugins/fancybox.min.js')}}"></script>	
	<!-- mapbox js -->
	<script src="{{asset('web/js/plugins/mapbox.min.js')}}"></script>
	<!-- smooth scrollbar js -->
	<script src="{{asset('web/js/plugins/smooth-scrollbar.min.js')}}"></script>
	<!-- overscroll js -->
	<script src="{{asset('web/js/plugins/overscroll.min.js')}}"></script>
	<!-- canvas js -->
	<script src="{{asset('web/js/plugins/canvas.js')}}"></script>
	<!-- parsley js -->
	<script src="{{asset('web/js/plugins/parsley.min.js')}}"></script>	
	<!-- main js -->
	<script src="{{asset('web/js/main.js')}}"></script>r

</body>


</html>