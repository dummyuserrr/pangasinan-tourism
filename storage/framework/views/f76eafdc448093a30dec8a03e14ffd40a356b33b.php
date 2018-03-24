<?php $__env->startSection('content'); ?>
<button type="button" class="btn btn-primary" data-target="#newModal" data-toggle="modal"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
<div class="white_container">
	<table class="table table-striped" id="videosTable">
		<thead>
			<tr>
				<th onclick="w3.sortHTML('#videosTable','.item', 'td:nth-child(1)')">Title <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#videosTable','.item', 'td:nth-child(2)')">Created At <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#videosTable','.item', 'td:nth-child(3)')">Last Updated <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr class="item">
				<td><?php echo e($video->title); ?></td>
				<td> <?php echo e($video->created_at->format('M d, Y - h:i:s A')); ?></td>
				<td> <?php echo e($video->updated_at->format('M d, Y - h:i:s A')); ?></td>
				<td>
					<button type="button" title="View" class="btnViewVideo btn btn-warning btn-sm" data-target="#viewVideoModal" data-toggle="modal" data-youtubeid="<?php echo e($video->youtubeid); ?>"><i class="fa fa-eye" aria-hidden="true"></i></button>
					<button type="button" title="Edit" class="btnEditVideo btn btn-success btn-sm" data-target="#editModal" data-toggle="modal" data-id="<?php echo e($video->id); ?>" data-youtubeid="<?php echo e($video->youtubeid); ?>" data-title="<?php echo e($video->title); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-url="/admin-panel/the-province/videos/<?php echo e($video->id); ?>/delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
					<p>Are you sure you want to delete this video?</p>
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
				<h4 class="modal-title">Add A New Video</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="/admin-panel/the-province/videos" id="frmYoutubeLink">
					<?php echo e(csrf_field()); ?>

					<div class="form-group">
						<label for="title">Title: (NOTE: If you leave this field blank, the default title will come from the Youtube link)</label>
						<input type="text" class="form-control" name="title" id="title">
					</div>
					<div class="form-group">
						<label for="link">Link: </label>
						<input type="text" id="youtubeLink" class="form-control" name="link" id="link" placeholder="https://www.youtube.com/watch?v=irK0Su5SE2Y" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="btnLinkSave">Save</button>
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
				<h4 class="modal-title">Edit Video</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="" id="frmYoutubeLink2">
					<?php echo e(csrf_field()); ?>

					<?php echo e(method_field('patch')); ?>

					<div class="form-group">
						<label for="title">Title: (NOTE: If you leave this field blank, the default title will come from the Youtube link)</label>
						<input type="text" class="form-control" name="title" id="title">
					</div>
					<div class="form-group">
						<label for="youtubeLink2">Link: </label>
						<input type="text" id="youtubeLink2" class="form-control" name="link"" placeholder="https://www.youtube.com/watch?v=irK0Su5SE2Y" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" id="btnLinkSave">Save</button>
				</form>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div id="viewVideoModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close videoClose" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">View Video</h4>
			</div>
			<div class="modal-body">
				<iframe width="100%" height="500px" src="https://www.youtube.com/embed/I76ijSClS54?rel=0&enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminpanel.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>