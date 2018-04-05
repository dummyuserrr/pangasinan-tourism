<?php $__env->startSection('content'); ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newModal"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
<div class="white_container">
	<?php echo $__env->make('errors.validation_errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<table class="table table-striped" id="table">
		<thead>
			<tr>
				<th onclick="w3.sortHTML('#table','.item', 'td:nth-child(1)')">Name  <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#table','.item', 'td:nth-child(2)')">Created At <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="item">
				<td><?php echo e($photo->name); ?></td>
				<td><?php echo e($photo->updated_at->format('M d, Y - h:i:s A')); ?></td>
				<td>
					<button type="button" title="View" class="btnViewGalleryPhoto btn btn-warning btn-sm" data-name="<?php echo e($photo->name); ?>" data-description="<?php echo e($photo->description); ?>" data-url="/admin-panel/the-province/photo-gallery/<?php echo e($photo->id); ?>/update" data-toggle="modal" data-target="#editModal" data-image="/<?php echo e($photo->image); ?>"><i class="fa fa-eye" aria-hidden="true"></i></button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-url="/admin-panel/the-province/photo-gallery/<?php echo e($photo->id); ?>/delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<div id="deleteModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Confirmation</h4>
				</div>
				<div class="modal-body">
					<p>Are you sure you want to delete this blog?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger initiateDelete">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				</div>
			</div>
		</div>
	</div>
</div>
<form id="deleteForm" method="post" action="">
	<?php echo e(csrf_field()); ?>

	<?php echo e(method_field('delete')); ?>

</form>
<div id="newModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add New Gallery Photo</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="/admin-panel/the-province/photo-gallery" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" id="name" required>
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea class="form-control" name="description" id="description" required rows="4"></textarea>
					</div>
					<div class="form-group">
						<label for="title">Image:</label>
						<input type="file" name="image" class="form-control postImage" required>
						<img src="none" class="img-responsive postimgpreview">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Save</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Gallery Photo</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="" id="editForm">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('patch')); ?>

					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" id="name" required>
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea class="form-control" name="description" id="description" required rows="4"></textarea>
					</div>
					<div class="form-group">
						<label for="title">Image:</label>
						<input type="file" class="form-control postImage">
						<img src="none" class="img-responsive postimgpreview postimgpreview_edit">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Save</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>