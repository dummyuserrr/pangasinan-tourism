<h3 class="text-uppercase"><?php echo e($delicacy->name); ?></h3>
<div class="multiple_images">
	<?php $__currentLoopData = $delicacy->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="box"><img src="/<?php echo e($image->path); ?>"></div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<p><?php echo e($delicacy->description); ?></p>