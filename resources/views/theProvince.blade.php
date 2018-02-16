@extends('templates.template')
@section('content')
<!-- Header -->
<header class="masthead">
	<div class="container">
		<div class="intro-text intro-text-small">
			<div class="intro-heading text-uppercase">The Province</div>
		</div>
	</div>
</header>
<!-- <section id="about-pangasinan">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">About Pangasinan</h2>
				<h3 class="section-subheading text-muted">Learn more about our province.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<ul class="timeline">
					<li>
						<div class="timeline-image">
							<img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>2009-2011</h4>
								<h4 class="subheading">Ewan</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>March 2011</h4>
								<h4 class="subheading">Iniwan</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-image">
							<img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>December 2012</h4>
								<h4 class="subheading">Nasaktan</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>July 2014</h4>
								<h4 class="subheading">Nagsuicide</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<h4>Be Part
							<br>Of Our
							<br>Story!</h4>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section> -->
<!-- <section id="cities-and-municipalities">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Cities and Municipalities</h2>
			</div>
		</div>
		<div class="row text-center">
			@foreach($citymuns as $cm)
			<div class="col-md-4">
				<h4 class="service-heading">{{ $cm->name }}</h4>
				<p class="text-muted">{{ $cm->description }}</p>
			</div>
			@endforeach
		</div>
	</div>
</section> -->
<!-- <section class="bg-light portfoliooo" id="delicacies">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Delicacies</h2>
				<h3 class="section-subheading text-muted">Because food is life.</h3>
			</div>
		</div>
		<div class="row">
			@foreach($delicacies as $d)
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link delicacy-viewer" data-toggle="modal" href="#delicaciesModal" data-url="/the-province/{{ $d->id }}/fetch">
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
</section> -->
<!-- <section class="bg-light portfoliooo" id="photo-gallery">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Photo Gallery</h2>
				<h3 class="section-subheading text-muted">Take a look at these.</h3>
			</div>
		</div>
		<div class="row">
			@foreach($photos as $photo)
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link galleryPhotoPreview" data-toggle="modal" href="#photoGalleryModal" data-name="{{ $photo->name }}" data-image="/{{ $photo->image }}" data-description="{{ $photo->description }}">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/{{ $photo->image }}')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $photo->name }}</h4>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section> -->
<section class="bg-light portfoliooo" id="videos">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Videos</h2>
				<h3 class="section-subheading text-muted">Watch these videos.</h3>
			</div>
		</div>
		<div class="row">
			@foreach($videos as $video)
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link viewVideo" data-toggle="modal" data-target="#videoModal" href="javascript:void(0);" data-youtubeid="{{ $video->youtubeid }}" data-title="{{ $video->title }}">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('http://img.youtube.com/vi/{{ $video->youtubeid }}/0.jpg')"></div>
				</a>
				<div class="portfolio-caption">
					<h4>{{ $video->title }}</h4>
				</div>
			</div>
			@endforeach
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
						<div class="modal-body delicacy-modal">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="photoGalleryModal" tabindex="-1" role="dialog" aria-hidden="true">
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
						<div class="modal-body">
							<h3 class="text-uppercase">Project Name</h3>
							<img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
							<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="portfolio-modal modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
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
						<div class="modal-body">
							<h3 class="text-uppercase"></h3>
							<iframe width="100%" height="500px" src="https://www.youtube.com/embed/none?rel=0&enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop