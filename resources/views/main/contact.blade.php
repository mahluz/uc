@extends('layouts/charity')
@section('css')

@endsection

@section('content')

<section class="contact-content sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="google-map" id="contact-page-google-map" data-icon-path="img/resources/map-marker.png" data-map-lat="-37.812802" data-map-lng="144.956981" data-map-zoom="10" data-map-title="Envato HQ"></div>
			<div class="row">
				<div class="col-md-8">
					<h2>Contact Form</h2>
					<form action="inc/sendemail.php" class="contact-form row" id="contact-page-contact-form">
						<div class="col-md-6">
							<input type="text" name="name" placeholder="Name">
							<input type="text" name="email" placeholder="Email">
							<input type="text" name="phone" placeholder="Phone">
							
						</div>
						<div class="col-md-6">
							<textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
						</div>
						<div class="col-md-12"><button class="thm-btn" type="submit">Send</button></div>
					</form>
				</div>
				<div class="col-md-4">
					<h2>Address</h2>
					<ul class="contact-info">
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-map-marker"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Address</h4>
								<p>Pesanggaran Jl Diponogoro</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-phone"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Phone</h4>
								<p>085 868 226 304</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Email</h4>
								<p>zulham724@gmail.com</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section><hr>

@endsection

@section('script')


@endsection