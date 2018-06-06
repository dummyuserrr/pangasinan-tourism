<?php $__env->startSection('content'); ?>
<button type="button" class="btn btn-warning" onclick="redirect('/admin-panel/tourism/tourist-attractions')"><i class="fa fa-list" aria-hidden="true"></i> Return to list</button>
<div class="white_container">
	<form method="post" action="/admin-panel/tourism/tourist-attractions/new" enctype="multipart/form-data">
		<?php echo e(csrf_field()); ?>

		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Name: <span class="req">*</span></label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="content">Description:</label>
					<textarea type="text" class="form-control" rows="5" name="description"></textarea>
				</div>
				<div class="form-group longlatform">
					<label for="latitude">Latitude: <span class="req">*</span></label>
					<input type="text" class="form-control" id="latitude" value="0" name="lat">
				</div>
				<div class="form-group longlatform">
					<label for="longitude">Longitude: <span class="req">*</span></label>
					<input type="text" class="form-control" id="longitude" value="0" name="long">
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="title">Images:</label>
					<input type="file" name="image[]" multiple required class="form-control postImage">
				</div>
			</div>
		</div>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>