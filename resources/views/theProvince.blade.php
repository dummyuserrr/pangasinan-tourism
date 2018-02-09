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
<section id="about-pangasinan">
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
</section>
<section id="cities-and-municipalities">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Cities and Municipalities</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-4">
				<h4 class="service-heading">Alaminos</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
			<div class="col-md-4">
				<h4 class="service-heading">Dagupan</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
			<div class="col-md-4">
				<h4 class="service-heading">Lingayen</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
		</div>
	</div>
</section>
<section class="bg-light portfoliooo" id="delicacies">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Delicacies</h2>
				<h3 class="section-subheading text-muted">Because food is life.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#delicaciesModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#delicaciesModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#delicaciesModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#delicaciesModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#delicaciesModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#delicaciesModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-light portfoliooo" id="photo-gallery">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Photo Gallery</h2>
				<h3 class="section-subheading text-muted">Take a look at these.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#imageModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
					<p class="text-muted">Illustration</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#imageModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
					<p class="text-muted">Graphic Design</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#imageModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
					<p class="text-muted">Identity</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#imageModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
					<p class="text-muted">Branding</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#imageModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
					<p class="text-muted">Website Design</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link" data-toggle="modal" href="#imageModal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
				</a>
				<div class="portfolio-caption">
					<h4>Sample</h4>
					<p class="text-muted">Photography</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- MODALS -->
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
					<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<h2 class="text-uppercase">Project Name</h2>
							<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
							<img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
							<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
							<ul class="list-inline">
								<li>Date: January 2017</li>
								<li>Client: Threads</li>
								<li>Category: Illustration</li>
							</ul>
							<button class="btn btn-primary" data-dismiss="modal" type="button">
							<i class="fa fa-times"></i>
							Close Project</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop