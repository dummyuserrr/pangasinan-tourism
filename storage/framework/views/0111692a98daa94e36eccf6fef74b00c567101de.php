<?php $__env->startSection('content'); ?>
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
			<?php $__currentLoopData = $touristAttractions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link tourism-viewer" data-toggle="modal" href="#tourismModal" data-url="/tourism/tourist-attractions/<?php echo e($ta->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($ta->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($ta->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section>
<section class="bg-light portfoliooo" id="festivals">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Festivals</h2>
				<h3 class="section-subheading text-muted">Take a look at these.</h3>
			</div>
		</div>
		<div class="row">
			<?php $__currentLoopData = $festivals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $festival): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link tourism-viewer" data-toggle="modal" href="#tourismModal" data-url="/tourism/festivals/<?php echo e($festival->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($festival->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($festival->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
			<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link tourism-viewer" data-toggle="modal" href="#tourismModal" data-url="/tourism/events/<?php echo e($event->id); ?>/fetch">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($event->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($event->name); ?></h4>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>