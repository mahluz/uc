@extends('layouts/charity')
@section('slider')
<section class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<li data-transition="parallaxvertical">
					<img src="{{url('public/layout/slider/slider1.jpeg')}}"  alt="" width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
					<div class="tp-caption sfl tp-resizeme thm-banner-h1"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="225"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="500">
						To feed and educate!
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="290"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1000">
						We need your support
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-h3"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="368"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1500">
						Became a part to change the world
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-p"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="430"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2000">
						Our Company has a long tradition of charitable giving and <br> philanthropy. Lorem ipsum dolor sit amet.
				    </div>
					<div class="tp-caption sfl tp-resizeme"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="505"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2300">
						<a href="#" class="thm-btn">Read more</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme"
				        data-x="left" data-hoffset="185"
				        data-y="top" data-voffset="505"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2600">
						<a href="#" class="thm-btn inverse">Learn More</a>
				    </div>
				</li>
				<li data-transition="parallaxvertical">
					<img src="{{url('public/layout/slider/slider2.jpeg')}}"  alt=""  width="1920" height="705" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" >
					<div class="tp-caption sfl tp-resizeme thm-banner-h1 blue-bg"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="249"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="500">
						To feed and educate!
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="318"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1000">
						We need your support
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-h3"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="386"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1500">
						Became a part to change the world
				    </div>
					<div class="tp-caption sfl tp-resizeme"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="450"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2300">
						<a href="#" class="thm-btn">Read more</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme"
				        data-x="left" data-hoffset="185"
				        data-y="top" data-voffset="450"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2600">
						<a href="#" class="thm-btn inverse">Learn More</a>
				    </div>
				</li>
			</ul>
		</div>
	</section>
@endsection

@section('information1')
<section class="call-to-action">
		<div class="container-fluid">
			<div class="clearfix">
				<div class="call-to-action-corner col-md-4" style="background-image: url({{url('public/layout/information1/bg1.jpeg')}});">
					<div class="single-call-to-action">
						<div class="icon-box">
							<div class="inner-box">
								<i class="fa fa-cutlery"></i>
							</div>
						</div>
						<div class="content-box">
							<h3>Restaurant</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum availabl </p>
							<a href="#" class="thm-btn inverse">Read more</a>
						</div>
					</div>
				</div>
				<div class="call-to-action-center col-md-4" style="background-image: url({{url('public/layout/information1/bg2.jpeg')}});">
					<div class="single-call-to-action">
						<div class="icon-box">
							<div class="inner-box">
								<i class="fa fa-shopping-cart"></i>
							</div>
						</div>
						<div class="content-box">
							<h3>Barang Antik</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum availabl </p>
							<a href="#" class="thm-btn inverse">Read more</a>
						</div>
					</div>
				</div>
				<div class="call-to-action-corner col-md-4" style="background-image: url({{url('public/layout/information1/bg3.jpeg')}});">
					<div class="single-call-to-action">
						<div class="icon-box">
							<div class="inner-box">
								<i class="fa fa-child"></i>
							</div>
						</div>
						<div class="content-box">
							<h3>Hiburan</h3>
							<p>There are many variations of lorem passagei of Lorem Ipsum availabl </p>
							<a href="#" class="thm-btn inverse">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
@section('promo')
<section class="recent-causes sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<h2>Promo hari ini!</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
			<div class="row">
	          <div class="col-sm-6 col-md-6 col-lg-3">
	            <div class="causes style-two">
	              <div class="thumb">
	                <img class="full-width" alt="" src="{{url('public/layout/promo/promo1.jpeg')}}">
	                <div class="donate-piechart">
	                  <div class="piechart-block">
	                    <div class="piechart style-one"  data-fg-color="rgba(250,119,68,1)" data-value=".75">
						  <span>.75</span>
						</div>
	                  </div>
	                </div>
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Sponsor a child today</a></h4>
	                <ul class="about-causes list-inline clearfix">
	                  <li class="causes-raised">Raised: $1890</li>
	                  <li class="causes-goal">Goal: $2500</li>
	                </ul>
	                <p>Lorem ipsum dolor sit amet, con sectetur ambo elit. repellendus est rerum sed, aliquid dolor. </p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"> Donate Now </a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-sm-6 col-md-6 col-lg-3">
	            <div class="causes style-two">
	              <div class="thumb">
	                <img class="full-width" alt="" src="{{url('public/layout/promo/promo2.jpeg')}}">
	                <div class="donate-piechart">
	                  <div class="piechart-block">
	                    <div class="piechart style-one"  data-fg-color="rgba(250,119,68,1)" data-value=".75">
						  <span>.75</span>
						</div>
	                  </div>
	                </div>
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Nasi goreng today</a></h4>
	                <ul class="about-causes list-inline clearfix">
	                  <li class="causes-raised">Raised: $1890</li>
	                  <li class="causes-goal">Goal: $2500</li>
	                </ul>
	                <p>Lorem ipsum dolor sit amet, con sectetur ambo elit. repellendus est rerum sed, aliquid dolor. </p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"> Read more </a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-sm-6 col-md-6 col-lg-3">
	            <div class="causes style-two">
	              <div class="thumb">
	                <img class="full-width" alt="" src="{{url('public/layout/promo/promo3.jpeg')}}">
	                <div class="donate-piechart">
	                  <div class="piechart-block">
	                    <div class="piechart style-one"  data-fg-color="rgba(250,119,68,1)" data-value=".75">
						  <span>.75</span>
						</div>
	                  </div>
	                </div>
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Pecel lele today</a></h4>
	                <ul class="about-causes list-inline clearfix">
	                  <li class="causes-raised">Raised: $1890</li>
	                  <li class="causes-goal">Goal: $2500</li>
	                </ul>
	                <p>Lorem ipsum dolor sit amet, con sectetur ambo elit. repellendus est rerum sed, aliquid dolor. </p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"> Read more </a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-sm-6 col-md-6 col-lg-3">
	            <div class="causes style-two">
	              <div class="thumb">
	                <img class="full-width" alt="" src="{{url('public/layout/promo/promo2.jpeg')}}">
	                <div class="donate-piechart">
	                  <div class="piechart-block">
	                    <div class="piechart style-one"  data-fg-color="rgba(250,119,68,1)" data-value=".75">
						  <span>.75</span>
						</div>
	                  </div>
	                </div>
	              </div>
	              <div class="causes-details clearfix">
	                <h4 class="title"><a href="#">Ayam bakar today</a></h4>
	                <ul class="about-causes list-inline clearfix">
	                  <li class="causes-raised">Raised: $1890</li>
	                  <li class="causes-goal">Goal: $2500</li>
	                </ul>
	                <p>Lorem ipsum dolor sit amet, con sectetur ambo elit. repellendus est rerum sed, aliquid dolor. </p>
	                <div>
	                 <a href="#" class="thm-btn btn-xs"> Read more </a>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
		</div>
	</section>
@endsection

@section('event')
<section class="event-feature sec-padding" data-bg-color="#fafafa">
		<div class="container">
			<div class="row">
	          <div class="col-sm-12 col-md-6">
	            <div class="sec-title style-two" data-margin-bottom="20px">
					<h2>Upcoming Event</h2>
					<span class="decor">
						<span class="inner"></span>
					</span>
				</div>
	            <div>
	              <div class="event style-two">
	                <div class="row">
	                  <div class="col-xs-2">
	                    <div class="event-thumb">
	                      <ul class="event-date">
	                        <li class="date">28</li>
	                        <li class="month">Aug</li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-xs-10">
	                    <div class="event-content">
	                      <h5 class="event-title"><a href="#">Charity For Education</a></h5>
	                      <ul class="event-held list-inline">
	                        <li class="mr-10" data-text-color="#555"><i class="fa fa-clock-o"></i> 6.00 pm - 8.30 pm</li>
	                        <li data-text-color="#555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>
	                      </ul>
	                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita perspiciatis soluta quidem, recusandae sapiente.</p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="event style-two">
	                <div class="row">
	                  <div class="col-xs-2">
	                    <div class="event-thumb">
	                      <ul class="event-date">
	                        <li class="date">28</li>
	                        <li class="month">Aug</li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-xs-10">
	                    <div class="event-content">
	                      <h5 class="event-title"><a href="#">Charity For Education</a></h5>
	                      <ul class="event-held list-inline">
	                        <li class="mr-10" data-text-color="#555"><i class="fa fa-clock-o"></i> 6.00 pm - 8.30 pm</li>
	                        <li data-text-color="#555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>
	                      </ul>
	                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita perspiciatis soluta quidem, recusandae sapiente.</p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="event style-two">
	                <div class="row">
	                  <div class="col-xs-2">
	                    <div class="event-thumb">
	                      <ul class="event-date">
	                        <li class="date">28</li>
	                        <li class="month">Aug</li>
	                      </ul>
	                    </div>
	                  </div>
	                  <div class="col-xs-10">
	                    <div class="event-content">
	                      <h5 class="event-title"><a href="#">Charity For Education</a></h5>
	                      <ul class="event-held list-inline">
	                        <li class="mr-10" data-text-color="#555"><i class="fa fa-clock-o"></i> 6.00 pm - 8.30 pm</li>
	                        <li data-text-color="#555"> <i class="fa fa-map-marker"></i> 69 Newyork City.</li>
	                      </ul>
	                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi expedita perspiciatis soluta quidem, recusandae sapiente.</p>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
				<div class="col-md-6 hidden-md hidden-sm">
					<div class="img-masonary">
						<div class="img-w1">
							<img src="{{url('public/layout/event/event1.jpeg')}}" height="450" width="280" alt="">
						</div>
						<div class="img-w1 img-h1">
							<img src="{{url('public/layout/event/event2.jpeg')}}" height="450" width="280" alt="">
						</div>
						<div class="img-w1 img-h1">
							<img src="{{url('public/layout/event/event3.jpeg')}}" height="450" width="280" alt="">
						</div>
					</div>
				</div>
	        </div>
		</div>
	</section>
@endsection
@section('information2')
<section class="overlay-white sec-padding parallax-section" style="background-image:url({{url('public/layout/information2/bg1.jpeg')}})">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 promote-project text-center">
					<h3>Save Children From Hunger</h3>
					<div class="sec-title colored text-center">
						<span class="decor">
							<span class="inner"></span>
						</span>
					</div>
					<h2>Became a part of the world lorem ipsum</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore. Amido ipsum dolor sit amet, consectetur adipisicing elit. Numquam quaerat atque, dolore.Lorem ipsum dolor sit amet, consectetur.</p>
					<a href="#" class="thm-btn">Come here Now</a>
                    <a href="#" class="thm-btn inverse">Read More</a>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('gallery')
<section class="gallery-section pb_2">
    	<div class="auto-container">
			<div class="sec-title text-center">
				<h2>Our Gallery</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
        </div>

        <div class="clearfix">
        	<div class="row">
        		<!--Image Box-->
	            <div class="image-box">
	                <div class="inner-box">
	                    <figure class="image"><a href="{{url('public/layout/gallery/g1.jpeg')}}" class="lightbox-image"><img src="{{url('public/layout/gallery/g1.jpeg')}}" style="height: 290px;width: 100vw;" alt=""></a></figure>
	                    <a href="{{url('public/layout/gallery/g1.jpeg')}}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
	                </div>
	            </div>

	            <!--Image Box-->
	            <div class="image-box">
	                <div class="inner-box">
	                    <figure class="image"><a href="{{url('public/layout/gallery/g2.jpeg')}}" class="lightbox-image"><img src="{{url('public/layout/gallery/g2.jpeg')}}" style="height: 290px;width: 100vw;" alt=""></a></figure>
	                    <a href="{{url('public/layout/gallery/g2.jpeg')}}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
	                </div>
	            </div>

	            <!--Image Box-->
	            <div class="image-box">
	                <div class="inner-box">
	                    <figure class="image"><a href="{{url('public/layout/gallery/g3.jpeg')}}" class="lightbox-image"><img src="{{url('public/layout/gallery/g3.jpeg')}}" style="height: 290px;width: 100vw;" alt=""></a></figure>
	                    <a href="{{url('public/layout/gallery/g3.jpeg')}}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
	                </div>
	            </div>

	            <!--Image Box-->
	            <div class="image-box">
	                <div class="inner-box">
	                    <figure class="image"><a href="{{url('public/layout/gallery/g4.jpeg')}}" class="lightbox-image"><img src="{{url('public/layout/gallery/g4.jpeg')}}" style="height: 290px;width: 100vw;" alt=""></a></figure>
	                    <a href="{{url('public/layout/gallery/g4.jpeg')}}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
	                </div>
	            </div>
        	</div>
        	{{-- end row --}}

        	<div class="row">
	        	<!--Image Box-->
	            <div class="image-box">
	                <div class="inner-box">
	                    <figure class="image"><a href="{{url('public/layout/gallery/g5.jpeg')}}" class="lightbox-image"><img src="{{url('public/layout/gallery/g5.jpeg')}}" style="height: 290px;width: 100vw;" alt=""></a></figure>
	                    <a href="{{url('public/layout/gallery/g5.jpeg.jpg')}}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
	                </div>
	            </div>

	            <!--Image Box-->
	            <div class="image-box">
	                <div class="inner-box">
	                    <figure class="image"><a href="{{url('public/layout/gallery/g6.jpeg')}}" class="lightbox-image"><img src="{{url('public/layout/gallery/g6.jpeg')}}" style="height: 290px;width: 100vw;" alt=""></a></figure>
	                    <a href="{{url('public/layout/gallery/g6.jpeg')}}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
	                </div>
	            </div>

	            <!--Image Box-->
	            <div class="image-box">
	                <div class="inner-box">
	                    <figure class="image"><a href="{{url('public/layout/gallery/g7.jpeg')}}" class="lightbox-image"><img src="{{url('public/layout/gallery/g7.jpeg')}}" style="height: 290px;width: 100vw;" alt=""></a></figure>
	                    <a href="{{url('public/layout/gallery/g7.jpeg')}}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
	                </div>
	            </div>

	            <!--Image Box-->
	            <div class="image-box">
	                <div class="inner-box">
	                    <figure class="image"><a href="{{url('public/layout/gallery/g8.jpeg')}}" class="lightbox-image"><img src="{{url('public/layout/gallery/g8.jpeg')}}" style="height: 290px;width: 100vw;" alt=""></a></figure>
	                    <a href="{{url('public/layout/gallery/g8.jpeg')}}" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-dot-circle-o"></span></a>
	                </div>
	            </div>	
        	</div>
        	{{-- end row --}}
        </div>
    </section>
@endsection
@section('news')
<section class="blog-home sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<h2>Latest News</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor">
					<span class="inner"></span>
				</span>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12 sm-col5-center mb-sm-40">
					<div class="single-blog-post">
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>24</b>
										apr
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="blog-details.html"><h3>Lates blog post with image</h3></a>
								<p>There are many variations passages available, but the lorem, ipsum... </p>
								<a class="btn-details" href="blog-details.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 sm-col5-center mb-sm-40">
					<div class="single-blog-post">
						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>24</b>
										apr
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="blog-details.html"><h3>Lates blog post with image</h3></a>
								<p>There are many variations passages available, but the lorem, ipsum... </p>
								<a class="btn-details" href="blog-details.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 sm-col5-center mb-sm-40">
					<div class="single-blog-post">

						<div class="content-box">
							<div class="date-box">
								<div class="inner">
									<div class="date">
										<b>24</b>
										apr
									</div>
									<div class="comment">
										<i class="flaticon-interface-1"></i> 8
									</div>
								</div>
							</div>
							<div class="content">
								<a href="blog-details.html"><h3>Lates blog post with image</h3></a>
								<p>There are many variations passages available, but the lorem, ipsum... </p>
								<a class="btn-details" href="blog-details.html">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
