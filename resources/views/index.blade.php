@extends('templates.template')
@section('content')
<!-- Header -->
<header class="masthead">
	<div class="container">
		<div class="intro-text">
			<div class="intro-lead-in">Welcome To Pangasinan!</div>
			<div class="intro-heading text-uppercase">COME AND EXPLORE PANGASINAN!</div>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/the-province#about-pangasinan">Tell Me More</a>
		</div>
	</div>
</header>
<section class="portfoliooo">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading text-uppercase redfont">What's Hot?</h1>
			</div>
		</div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Visited Place</h2>
				<h3 class="section-subheading text-muted">This Month.</h3>
			</div>
		</div>
		<div class="row">
			@foreach($mvs->where('category', 'place') as $mv)
			<div class="col-md-3 col-sm-6 portfolio-item home-box">
				<a class="portfolio-link delicacy-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/{{ $mv->id }}/fetch">
				<a class="portfolio-link mv-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/{{ $mv->id }}/fetch" data-lat="{{ $mv->lat }}" data-long="{{ $mv->long }}">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/{{ $mv->images()->first()->path }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $mv->name }}</h4>
				</div>
			</div>
			@endforeach
		</div>
		<button class="load-more">SEE MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
		<div id="scroll-point"></div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Visited Cafe & Restaurant</h2>
				<h3 class="section-subheading text-muted"></h3>
			</div>
		</div>
		<div class="row">
			@foreach($mvs->where('category', 'cafe') as $mv)
			<div class="col-md-3 col-sm-6 portfolio-item home-box">
				<a class="portfolio-link mv-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/{{ $mv->id }}/fetch" data-lat="{{ $mv->lat }}" data-long="{{ $mv->long }}">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/{{ $mv->images()->first()->path }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $mv->name }}</h4>
				</div>
			</div>
			@endforeach
		</div>
		<button class="load-more">SEE MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
		<div id="scroll-point"></div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Popular Delicacies</h2>
				<h3 class="section-subheading text-muted"></h3>
			</div>
		</div>
		<div class="row">
			@foreach($mvs->where('category', 'delicacies') as $mv)
			<div class="col-md-3 col-sm-6 portfolio-item home-box">

				<a class="portfolio-link mv-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/{{ $mv->id }}/fetch" data-lat="0" data-long="0">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/{{ $mv->images()->first()->path }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $mv->name }}</h4>
				</div>
			</div>
			@endforeach
		</div>
		<button class="load-more">SEE MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
		<div id="scroll-point"></div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Visited Restaurants</h2>
				<h3 class="section-subheading text-muted">This Month.</h3>
			</div>
		</div>
		<div class="row">
			@foreach($mvs->where('category', 'restaurant') as $mv)
			<div class="col-md-3 col-sm-6 portfolio-item home-box">
				<a class="portfolio-link mv-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/fetch-most-visiteds/{{ $mv->id }}/fetch" data-lat="{{ $mv->lat }}" data-long="{{ $mv->long }}">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/{{ $mv->images()->first()->path }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $mv->name }}</h4>
				</div>
			</div>
			@endforeach
		</div>
		<button class="load-more">SEE MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
		<div id="scroll-point"></div>
	</div>
</section>

<section class="portfoliooo" id="delicacies">
	<div class="container row-parent">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Upcoming Events</h2>
				<h3 class="section-subheading text-muted">This Month.</h3>
			</div>
		</div>
		<div class="row">
			<table class="table table-striped">
			    <thead>
			        <tr>
			            <th>WHAT</th>
			            <th>WHERE</th>
			            <th>DATE</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($ues as $ue)
			        <tr>
			            <td>{{ $ue->what }}</td>
			            <td>{{ $ue->where }}</td>
			            <td>{{ $ue->date }}</td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>
		</div>
	</div>
</section>

<div class="portfolio-modal modal fade" id="delicaciesModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<div class="modal-body mv-modal">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
        $('.row-parent').each(function(i){
			$(this).find('.home-box').not('.home-box-active').slice(0, 4).addClass('home-box-active');
			var boxCount = $(this).find('.home-box').length;
			if(boxCount <= 4){
				$(this).closest('.row-parent').find('.load-more').css('display', 'none');
			}
		});
    });

    $('.load-more').click(function () {
	    var me = $(this);
	    setTimeout(function () {
	        me.closest('.row-parent').find('.home-box').not('.home-box-active').addClass('home-box-active');
	        me.addClass('load-more-disabled')
	    }, 300);
	});

	function reloadMap(lat, long) {
		var target = {lat: lat, lng: long};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 10,
			center: target
		});
		var marker = new google.maps.Marker({
			position: target,
			map: map
		});
	}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8tcOsujX6U_xsuM5gqd2aXVc-bstKJp8">
</script>
@stop