@extends('templates.template')
@section('content')
<!-- Header -->
<header class="masthead">
	<div class="container">
		<div class="intro-text intro-text-small">
			<div class="intro-heading text-uppercase">Tourism</div>
		</div>
	</div>
</header>
<!-- Services -->
<section class="bg-light portfoliooo" id="tourist-attractions">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Tourist Attractions</h2>
				<h3 class="section-subheading text-muted">What tourists love the most.</h3>
			</div>
		</div>
		<div class="row">
			@foreach($touristAttractions as $ta)
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link tourism-viewer" data-toggle="modal" href="#tourismModal" data-url="/tourism/tourist-attractions/{{ $ta->id }}/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/{{ $ta->images()->first()->path }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $ta->name }}</h4>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section class="portfoliooo" id="delicacies">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Delicacies</h2>
				<h3 class="section-subheading text-muted">Because everybody knows food is life.</h3>
			</div>
		</div>
		<div class="row">
			@foreach($delicacies as $d)
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link delicacy-viewer" data-toggle="modal" href="#delicaciesModal" data-url="/tourism/delicacies/{{ $d->id }}/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/{{ $d->images()->first()->path }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $d->name }}</h4>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section class="portfoliooo" id="cafe-and-restaurants">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Cafe & Restaurants</h2>
				<h3 class="section-subheading text-muted">Because everybody knows food is life. Forever.</h3>
			</div>
		</div>
		<div class="row">
			@foreach($cars as $car)
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link delicacy-viewer" data-toggle="modal" href="#delicaciesModal" data-url="/tourism/cafe-and-restaurants/{{ $car->id }}/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/{{ $car->images()->first()->path }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $car->name }}</h4>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<section class="bg-light portfoliooo" id="events">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Events</h2>
				<h3 class="section-subheading text-muted">Take a look at these.</h3>
			</div>
		</div>
		<div class="row">
			@foreach($events as $event)
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link tourism-viewer" data-toggle="modal" href="#tourismModal" data-url="/tourism/events/{{ $event->id }}/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/{{ $event->images()->first()->path }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $event->name }}</h4>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<div class="portfolio-modal modal fade" id="tourismModal" tabindex="-1" role="dialog" aria-hidden="true">
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
						<div class="modal-body tourism-modal">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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
						<div class="modal-body delicacy-modal">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 @stop