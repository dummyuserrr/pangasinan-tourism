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
				<a class="portfolio-link tourism-viewer" data-toggle="modal" href="#tourismModal" data-url="/tourism/tourist-attractions/<?php echo e($ta->id); ?>/fetch" data-lat="<?php echo e($ta->lat); ?>" data-long="<?php echo e($ta->long); ?>">
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
				<a class="portfolio-link delicacy-viewer" data-toggle="modal" href="#delicaciesModal" data-url="/tourism/delicacies/<?php echo e($d->id); ?>/fetch">
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
<section class="portfoliooo" id="cafe-and-restaurants">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase">Cafe & Restaurants</h2>
				<h3 class="section-subheading text-muted">Because everybody knows food is life. Forever.</h3>
			</div>
		</div>
		<div class="row">
			<?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a class="portfolio-link car-viewer" data-toggle="modal" href="#delicaciesModal" data-url="/tourism/cafe-and-restaurants/<?php echo e($car->id); ?>/fetch" data-lat="<?php echo e($car->lat); ?>" data-long="<?php echo e($car->long); ?>">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-eye fa-3x"></i>
						</div>
					</div>
					<div class="img-preview" style="background-image: url('/<?php echo e($car->images()->first()->path); ?>')"></div>
				</a>
				<div class="portfolio-caption">
					<h4><?php echo e($car->name); ?></h4>
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
<script>
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
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>