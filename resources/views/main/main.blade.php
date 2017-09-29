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
						Umalas Corner
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="290"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1000">
						Restaurant
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-h3"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="368"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1500">
						and Antique Shop
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-p"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="430"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2000">
						Lets eat first then do something else after.
				    </div>
					<div class="tp-caption sfl tp-resizeme"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="505"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2300">
						<a href="#" class="thm-btn">Restaurant Menu</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme"
				        data-x="left" data-hoffset="185"
				        data-y="top" data-voffset="505"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2600">
						<a href="#" class="thm-btn inverse">Antique Item</a>
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
						Umalas Corner
				    </div>
					<div class="tp-caption sfr tp-resizeme thm-banner-h1 heavy black-bg"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="318"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1000">
						Restaurant and Antique Shop
				    </div>
					<div class="tp-caption sfb tp-resizeme thm-banner-h3"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="386"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="1500">
						Lets eat first then do something else after. 
				    </div>
					<div class="tp-caption sfl tp-resizeme"
				        data-x="left" data-hoffset="0"
				        data-y="top" data-voffset="450"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2300">
						<a href="#" class="thm-btn">Restaurant Menu</a>
				    </div>
					<div class="tp-caption sfr tp-resizeme"
				        data-x="left" data-hoffset="185"
				        data-y="top" data-voffset="450"
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;"
				        data-transform_in="o:0"
				        data-transform_out="o:0"
				        data-start="2600">
						<a href="#" class="thm-btn inverse">Antique Item</a>
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
							<h3>U.C Restaurant</h3>
							<a href="#" class="thm-btn inverse">You looking at it right now</a>
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
							<h3>U.C Antiques</h3>
							<a href="#" class="thm-btn inverse">Have a Look</a>
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
							<h3>Special Package & Promotion</h3>
							<a href="#" class="thm-btn inverse">Have a Look</a>
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
			<div class="row" id="data-promotion">
				
	        </div><hr>
	        <div class="row" id="pagination-promotion">
	        	
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
				<div id="data-upcomingEvent">
					
				</div>

	          </div>
				<div class="col-md-6 hidden-md hidden-sm">
					<div class="img-masonary" id="data-imgUpcomingEvent">

					</div>
				</div>
	        </div>
	        <div class="row" id="pagination-upcomingEvent">
	        	
	        </div>
        	{{-- end row pagination --}}

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
<section class="container gallery-section pb_2">
    	<div class="auto-container">
			<div class="sec-title text-center">
				<h2>Our Gallery</h2>
				<p>Lorem ipsum is a dummy text it will use for subtitle here</p>
				<span class="decor"><span class="inner"></span></span>
			</div>
        </div>

        <div class="clearfix">
        	<div class="row" id="data-gallery">

        	</div>

        	<div class="row" id="pagination-gallery">

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
				<div id="data-news"></div>
			</div>
			<hr>
			<div class="row">
				<div id="pagination-news"></div>
			</div>
		</div>
	</section>
@endsection

@section('content')
	{{-- every modal placed here --}}
	@foreach($news as $index => $ini)
	<!-- Modal -->
	<div id="myNewsModal{{ $ini->id }}" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-lg">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">{{ $ini->title }}</h4>
	      </div>
	      <div class="modal-body">
	        <p>{{ $ini->description }}</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	@endforeach

	@foreach($upcoming_event as $index => $ini)
	<!-- Modal -->
	<div id="myEventModal{{ $ini->id }}" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-lg">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">{{ $ini->item }}</h4>
	      </div>
	      <div class="modal-body">
	        <p>{{ $ini->content }}</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	@endforeach

@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){

		$('#pagination-news').pagination({
		    dataSource: {!!$news!!},
		    pageSize:3,
		        className: 'paginationjs-theme-yellow paginationjs-big',
		    callback: function(data, pagination) {
		        // template method of yourself

		        $("#data-news").html("");
		        $.each(data,function(key,i){
		        	var description = this.description;

			        if(description.length > 10){ 
						description = description.substring(0,100);
					}
		        		$('#data-news').append("\
		        			<div class='col-md-4 col-sm-12 sm-col5-center mb-sm-40'>\
								<div class='single-blog-post'>\
									<div class='content-box'>\
										<div class='date-box'>\
											<div class='inner'>\
												<div class='date'>\
													<h6>"+this.name+"</h6>\
												</div>\
												<div class='comment'>\
													<h6>"+this.created_at+"</h6>\
												</div>\
											</div>\
										</div>\
										<div class='content'>\
											<a href='blog-details.html'><h3>"+this.title+"</h3></a>\
											<p>"+description+". . .</p>\
											<span data-toggle='modal' data-target='#myNewsModal"+this.id+"'>\
											<a class='btn-details' href='#'>Read More</a>\
											</span>\
										</div>\
									</div>\
								</div>\
							</div>\
		        			");
		        	});
		        // console.log(data);
		    }
		});
		// end pagination news
		$('#pagination-gallery').pagination({
		    dataSource: {!! $gallery !!},
		    pageSize:2,
		    className: 'paginationjs-theme-yellow paginationjs-big',
		    callback: function(data, pagination) {
		        // template method of yourself
		        $("#data-gallery").html("");
		        $.each(data,function(key,i){
		        		$('#data-gallery').append("\
		        			<div class='image-box'>\
				                <div class='inner-box'>\
				                    <figure class='image'><a href='http://localhost/uc/storage/app/"+this.photo+"' class='lightbox-image'><img src='http://localhost/uc/storage/app/"+this.photo+"' class='img-responsive' alt=''></a></figure>\
				                    <a href='http://localhost/uc/storage/app/"+this.photo+"' class='lightbox-image btn-zoom' title='"+this.title+"'><span class='icon fa fa-dot-circle-o'></span></a>\
				                </div>\
				            </div>\
		        			");
		        	});
		        // console.log(data);
		    }
		});
		// end pagination gallery

		$('#pagination-upcomingEvent').pagination({
		    dataSource: {!! $upcoming_event !!},
		    pageSize:3,
		    className: 'paginationjs-theme-yellow paginationjs-big',
		    callback: function(data, pagination) {
		        // template method of yourself
		        console.log(data);
		        $("#data-upcomingEvent").html("");
		        $("#data-imgUpcomingEvent").html("");
		        $.each(data,function(key,i){
		        		$('#data-upcomingEvent').append("\
		        			<div class='event style-two'>\
				                <div class='row'>\
				                  <div class='col-xs-2'>\
				                    <div class='event-thumb'>\
				                      <ul class='event-date'>\
				                        <li class='date'>U.C</li>\
				                        <li class='month'>Event</li>\
				                      </ul>\
				                    </div>\
				                  </div>\
				                  <div class='col-xs-10'>\
				                    <div class='event-content'>\
				                      <h5 class='event-title'><a href='#'>"+this.item+"</a></h5>\
				                      <ul class='event-held list-inline'>\
				                        <li class='mr-10' data-text-color='#555'><i class='fa fa-clock-o'></i> </li>\
				                        <li data-text-color='#555'> <i class='fa fa-map-marker'>"+this.date+"</i> </li>\
				                      </ul>\
				                      <p class='mb-0'>"+this.place+"</p>\
				                      <a href='#' data-toggle='modal' data-target='#myEventModal"+this.id+"'><button type='button' class='btn btn-default pull-right'>Read More</button></a>\
				                    </div>\
				                  </div>\
				                </div>\
				              </div>\
		        			");

		        		$("#data-imgUpcomingEvent").append("\
		        			<div class='img-w1 img-h1'>\
								<img src='http://localhost/uc/storage/app/"+this.photo+"' height='450' width='280' alt=''>\
							</div>\
		        			");
		        	});
		        // console.log(data);
		    }
		});
		// end pagination gallery

		$("#pagination-promotion").pagination({
			dataSource:{!! $promotion !!},
			pageSize:4,
			className: 'paginationjs-theme-yellow paginationjs-big',
			callback:function(data,pagination){
				$("#data-promotion").html("");
				$.each(data,function(key,i){
					$("#data-promotion").append("\
						<div class='col-sm-6 col-md-6 col-lg-3'>\
			            	<div class='causes style-two'>\
				              	<div class='thumb'>\
					            	<img class='full-width' alt='' src='http://localhost/uc/storage/app/"+this.photo+"'>\
					            </div>\
					            <div class='causes-details clearfix'>\
					                <h4 class='title'><a href='#'>"+this.item+"</a></h4>\
					                <ul class='about-causes list-inline clearfix'>\
					                  <li class='causes-goal'>Price: "+this.price+"</li>\
					                </ul>\
					                <p>"+this.content+"</p>\
					                <div>\
					                 <a href='#' class='thm-btn btn-xs'> Buy now </a>\
					                </div>\
					            </div>\
				            </div>\
			          	</div>\
						");
				});
			}
		});

	});
	// end ready function
</script>
@endsection