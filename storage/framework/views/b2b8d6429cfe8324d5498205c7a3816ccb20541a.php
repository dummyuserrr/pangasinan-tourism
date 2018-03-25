<?php $__env->startSection('content'); ?>
<div class="jumbotron text-center">
	<h1>Welcome to Admin Panel</h1>
	<p>Please select an action the left navigation.</p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>