<div class="row">
	<div class="col-lg-5"><img src="/<?php echo e($citymun->images()->orderBy('created_at', 'desc')->first()->path); ?>" class="mw100"></div>
	<div class="col-lg-7">
		<h3 class="text-uppercase"><?php echo e($citymun->name); ?></h3>
		<p><?php echo e($citymun->description); ?></p>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<iframe width="100%" id="citymunVid" height="400" src="https://www.youtube.com/embed/<?php echo e($citymun->youtubeid); ?>?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
	<div class="col-lg-6">
		<div id="map" class="cmMap"></div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h3 class="text-uppercase mt">Photo Gallery</h3>
		<div class="row">
			<?php $__currentLoopData = $citymun->images()->orderBy('created_at', 'desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($loop->first): ?>
				
				<?php else: ?>
					<div class="col-lg-4"><img src="/<?php echo e($image->path); ?>" class="mw100"></div>
				<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>