<?php $__env->startSection('content'); ?>
<button type="button" class="btn btn-warning" onclick="redirect('/admin-panel/the-province/cities-and-municipalities')"><i class="fa fa-list" aria-hidden="true"></i> Return to list</button>
<div class="white_container">
	<form method="post" action="/admin-panel/the-province/cities-and-municipalities/<?php echo e($cm->id); ?>/update" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<?php echo e(method_field('patch')); ?>

		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Name:</label>
					<input value="<?php echo e($cm->name); ?>" type="text" name="name" class="form-control" id="name" required>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea type="text" class="form-control" name="description" rows="7" required><?php echo e($cm->description); ?></textarea>
				</div>
				<div class="form-group">
					<label for="youtube_link">Youtube Link:</label>
					<input value="https://www.youtube.com/watch?v=<?php echo e($cm->youtubeid); ?>" type="text" name="youtube_link" class="form-control" id="youtube_link" required placeholder="https://www.youtube.com/watch?v=g4HU_anlJMo">
				</div>
				<div class="form-group">
					<label for="latitude">Latitude:</label>
					<input value="<?php echo e($cm->lat); ?>" type="text" name="latitude" class="form-control" id="latitude" required>
				</div>
				<div class="form-group">
					<label for="longitude">Longitude:</label>
					<input value="<?php echo e($cm->long); ?>" type="text" name="longitude" class="form-control" id="longitude" required>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="otherDetails">Images:</label>
					<div class="thumbnails">
						<?php $__currentLoopData = $cm->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="box cmsImageBox citymunImage" title="Click to view or delete image" style="background-image: url('/<?php echo e($image->path); ?>');" data-toggle="modal" data-target="#imageModal" data-url="/admin-panel/the-province/cities-and-municipalities/image/<?php echo e($image->id); ?>/delete">
							<img src="/<?php echo e($image->path); ?>">
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="images">Images: (Optional | You can upload multiple)</label>
					<input type="file" class="form-control" name="images[]" multiple>
				</div>
			</div>
		</div>
	</form>
</div>
<div id="imageModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body text-center">
				<img src="/">
			</div>
			<div class="modal-footer">
				<?php if($cm->images->count() > 1): ?>
				<button type="button" class="btn btn-danger initiateDelete"><i class="fa fa-trash"></i> Delete this Image</button>
				<?php endif; ?>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<form id="deleteForm" method="post" action="">
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('delete')); ?>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>