<?php $__env->startSection('content'); ?>
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
								<h5></h5>
								<h4 class="subheading">HISTORY</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Pangasinan, derived its name from the word “panag asinan”, which means “where salt is made”, owing to the rich and fine salt beds which were the prior source of livelihood of the province’s coastal towns.</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h6>Useful Facts!</h6>
								<h4 class="subheading">ENTRY POINTS</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">From Manila:  via North Luzon Expressway (NLEX), exiting thru Luisita and entering thru Bayambang or Mangatarem towns; via Tarlac-Pangasinan-La union Expressway (TPLEX), exiting / entering thru Rosales town or thru Urdaneta City; From Zambales – via Infanta; From Baguio – via Sison or San Fabian; From Nueva Ecija – via Umingan or Rosales</p>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-image">
							<img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h6>Useful Facts!</h6>
								<h4 class="subheading">TRAVELING TIME</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Manila to Pangasinan: 4 – 5 hours by bus or 3 – 4 hours by private vehicle From Clark, Pampanga: 2.5 – 3 hours. From Baguio City: 1.5 to 2 hours.From Subic: 4 hours.</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h6>Useful facts</h6>
								<h4 class="subheading">NATIONAL TRANSPORT CARRIERS</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted">Victory Liner, Five Star, Solid North ply major routes to most Pangasinan towns thru Pasay, Cubao Caloocan Stations. Dagupan City is usually the central hub for transport to both Eastern and Western parts of Pangasinan.  Buses, jeeps and tricycles are very common. Tour guides and Provincial Buses are available to make your visit memorable.</p>
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
<section class="bg-light portfoliooo" id="cities-and-municipalities">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Cities and Municipalities</h2>
				<h3 class="section-subheading text-muted">Learn more about our places.</h3>
			</div>
		</div>
		<div class="row">
			<?php $__currentLoopData = $citymuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $citymun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-6 portfolio-item">
				<a class="portfolio-link citymun-viewer" data-toggle="modal" href="#citymunModal" data-url="/the-province/cities-and-municipalities/<?php echo e($citymun->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($citymun->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($citymun->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
			<?php $__currentLoopData = $delicacies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link delicacy-viewer" data-toggle="modal" href="#delicaciesModal" data-url="/the-province/delicacies/<?php echo e($d->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($d->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($d->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
			<div class="pgc">
				<button class="gallery_photo_left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
				<button class="gallery_photo_right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
				<img class="image_view" src="/<?php echo e($photos->first()->image); ?>">
				<div class="photoGallery_container owl-carousel owl-theme">
					<?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="image_selector" style="background-image: url('/<?php echo e($photo->image); ?>');" data-path="/<?php echo e($photo->image); ?>"><div class="overlayer"></div></div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="portfoliooo" id="videos">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Videos</h2>
				<h3 class="section-subheading text-muted">Watch these videos.</h3>
			</div>
		</div>
		<div class="row">
			<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link viewVideo" data-toggle="modal" data-target="#videoModal" href="javascript:void(0);" data-youtubeid="<?php echo e($video->youtubeid); ?>" data-title="<?php echo e($video->title); ?>">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-youtube-play fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('http://img.youtube.com/vi/<?php echo e($video->youtubeid); ?>/0.jpg')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($video->title); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<div class="portfolio-modal modal fade" id="citymunModal" tabindex="-1" role="dialog" aria-hidden="true">
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
						<div class="modal-body citymun-modal">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>