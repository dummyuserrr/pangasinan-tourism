<?php $__env->startSection('content'); ?>
<div class="white_container">
	<table class="table table-striped" id="userstable">
		<thead>
			<tr>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(1)')">Name <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(2)')">Email</th>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(3)')">Number</th>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(4)')">Message</th>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(5)')">Submitted At</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $cums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="item">
				<td><?php echo e($cum->name); ?></td>
				<td><?php echo e($cum->email); ?></td>
				<td><?php echo e($cum->number); ?></td>
				<td><?php echo e($cum->message); ?></td>
				<td><?php echo e($cum->created_at->format('M d, Y')); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<?php echo e($cums->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>