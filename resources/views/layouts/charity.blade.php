<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Umalas Corner</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- master stylesheet -->
	<link rel="stylesheet" href="{{url('public/css/style.css')}}">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="{{url('public/css/responsive.css')}}">
	@yield('css')


</head>
<body>

	<header class="header">
		<div class="container">
			<div class="logo pull-left">
				<a href="index.html">
					<img src="{{url('public/img/logo/logo.png')}}" alt="Awesome Image"/>
				</a>
			</div>
		</div>
	</header> <!-- /.header -->

	<nav class="mainmenu-area stricky">
		<div class="container">
			<div class="navigation pull-left">
				<div class="nav-header">
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('about')}}">About</a></li>
						{{-- <li><a href="#">Events</a></li> --}}
						{{-- <li class="dropdown">
							<a href="#">Gallery</a>
							<ul class="submenu">
								<li><a href="gallery-style-one.html">Gallery Style One</a></li>
								<li><a href="gallery-style-two.html">Gallery Style Two</a></li>
								<li><a href="gallery-style-three.html">Gallery Style Three</a></li>
							</ul>
						</li> --}}
						{{-- <li><a href="#">Blog</a></li> --}}
						<li><a href="{{url('contact')}}">Contact</a></li>
						@if (Route::has('login'))
			                    @if (Auth::check())
			                        <li><a href="{{ url('/home') }}">Hello Admin</a></li>
			                    @else
			                        <li><a href="{{ url('/login') }}">Login</a></li>
			                    @endif
			            @endif
					</ul>
				</div>
				<div class="nav-footer">
					<button><i class="fa fa-bars"></i></button>
				</div>
			</div>
			{{-- <div class="search-box pull-right">
				<form action="#">
					<input type="text" placeholder="Search...">
				</form>
			</div> --}}
		</div>
	</nav> <!-- /.mainmenu-area -->

	@yield('content') 
	{{-- for sub layout only --}}

	@yield('contact')

	@yield('slider')

	@yield('information1')

	@yield('promo')

	@yield('event')

	@yield('information2')

	@yield('gallery')

  @yield('news')


	<section class="p_40" data-bg-color="#eee">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients-carousel owl-carousel owl-theme">
						<div class="item">
							<div class="img-box">
								<img src="{{url('public/layout/footer/f1.jpeg')}}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{url('public/layout/footer/f2.jpeg')}}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{url('public/layout/footer/f3.jpeg')}}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{url('public/layout/footer/f4.jpeg')}}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{url('public/layout/footer/f5.jpeg')}}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{url('public/layout/footer/f6.jpeg')}}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{url('public/layout/footer/f7.jpeg')}}" alt="">
							</div>
						</div>
						<div class="item">
							<div class="img-box">
								<img src="{{url('public/layout/footer/f8.jpeg')}}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer sec-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget about-widget">
						<a href="#">
							<img src="{{url('public/img/logo/logo.png')}}" alt="Awesome Image"/>
						</a>
						<p>Lorem ipsum dolor sit amet, eu me evert laboramus, iudico </p>
						<ul class="contact">
							<li><i class="fa fa-map-marker"></i> <span>60 Grant Ave. Carteret NJ 0708</span></li>
							<li><i class="fa fa-phone"></i> <span>(880) 1723801729</span></li>
							<li><i class="fa fa-envelope-o"></i> <span>example@gmail.com</span></li>
						</ul>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6">
					<div class="footer-widget quick-links">
						<h3 class="title">Pages</h3>
						<ul>
							{{-- <li><a href="">Gallery</a></li> --}}
							<li><a href="about.html">About Us</a></li>
							{{-- <li><a href="events-grid.html">Events</a></li> --}}
							{{-- <li><a href="blog-style-one.html">News</a></li> --}}
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 latest-post col-sm-6">
					<div class="footer-widget latest-post">
						<h3 class="title">Latest News</h3>
						<ul>
							<li>
								<span class="border"></span>
								<div class="content">
									<a href="blog-details.html">If you need a crown or lorem an implant you will pay it </a>
									<span>July 2, 2014</span>
								</div>
							</li>
							<li>
								<span class="border"></span>
								<div class="content">
									<a href="blog-details.html">If you need a crown or lorem an implant you will pay it </a>
									<span>July 2, 2014</span>
								</div>
							</li>
							<li>
								<span class="border"></span>
								<div class="content">
									<a href="blog-details.html">If you need a crown or lorem an implant you will pay it </a>
									<span>July 2, 2014</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget contact-widget">
						<h3 class="title">Contact Form</h3>
						<form action="inc/sendemail.php" class="contact-form" id="footer-cf">
							<input type="text" name="name"  placeholder="Full Name">
							<input type="text" name="email" placeholder="Email Address" >
							<textarea name="message" placeholder="Your Message"></textarea>
							<button type="submit">Send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<section class="footer-bottom">
		<div class="container text-center">
			<p>Theme Edited By <a href="http://facebook.com/zulham.achmad">Zulham Azwar Achmad</a> with love</p>
		</div>
	</section>


	<!-- main jQuery -->
	<script src="{{url('public/js/jquery-1.11.1.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{url('public/js/bootstrap.min.js')}}"></script>
	<!-- bx slider -->
	<script src="{{url('public/js/jquery.bxslider.min.js')}}"></script>
	<!-- appear js -->
	<script src="{{url('public/js/jquery.appear.js')}}"></script>
	<!-- circle progress -->
	<script src="{{url('public/js/circle-progress.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{url('public/js/owl.carousel.min.js')}}"></script>
	<!-- validate -->
	<script src="{{url('public/js/jquery-parallax.js')}}"></script>
	<!-- validate -->
	<script src="{{url('public/js/validate.js')}}"></script>
	<!-- mixit up -->
	<script src="{{url('public/js/jquery.mixitup.min.js')}}"></script>
	<!-- fancybox -->
	<script src="{{url('public/js/jquery.fancybox.pack.js')}}"></script>
	<!-- easing -->
	<script src="{{url('public/js/jquery.easing.min.js')}}"></script>
	<!-- count to -->
	<script src="{{url('public/js/jquery.countTo.js')}}"></script>
	<!-- gmap helper -->
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!-- gmap main script -->
	<script src="{{url('public/js/gmap.js')}}"></script>

	<!-- isotope script -->
	<script src="{{url('public/js/isotope.pkgd.min.js')}}"></script>
	<!-- jQuery ui js -->
	<script src="{{url('public/js/jquery-ui-1.11.4/jquery-ui.js')}}"></script>

	<!-- revolution scripts -->

	<script src="{{url('public/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{url('public/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script type="text/javascript" src="{{url('public/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>


	<!-- thm custom script -->
	<script src="{{url('public/js/custom.js')}}"></script>
	@yield('script')

</body>
</html>
