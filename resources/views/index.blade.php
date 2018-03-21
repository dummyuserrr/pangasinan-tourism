@extends('templates.template')
@section('content')
<!-- Header -->
<header class="masthead">
	<div class="container">
		<div class="intro-text">
			<div class="intro-lead-in">Welcome To Pangasinan!</div>
			<div class="intro-heading text-uppercase">COME AND EXPLORE PANGASINAN!</div>
			<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/the-province">Tell Me More</a>
		</div>
	</div>
</header>
<section class="portfoliooo" id="delicacies">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="section-heading text-uppercase redfont">What's Hot?</h1>
			</div>
		</div>
	</div>
</section>
<section class="portfoliooo" id="delicacies">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Most Visited Places</h2>
				<h3 class="section-subheading text-muted">Insert description here.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 portfolio-item">
				<a class="portfolio-link delicacy-viewer mini-box" data-toggle="modal" href="#delicaciesModal" data-url="/tourism/delicacies/->id }}/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/->images()->first()->path }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>->name }}</h4>
				</div>
			</div>
		</div>
		<button class="load-more">LOAD MORE &nbsp;&nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></button>
	</div>
</section>
@stop