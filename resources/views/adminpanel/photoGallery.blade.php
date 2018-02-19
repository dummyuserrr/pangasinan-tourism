@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newModal"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
<div class="white_container">
	@include('errors.validation_errors')
	<table class="table table-striped" id="table">
		<thead>
			<tr>
				<th onclick="w3.sortHTML('#table','.item', 'td:nth-child(1)')">Name  <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#table','.item', 'td:nth-child(2)')">Created At <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($photos as $photo)
			<tr class="item">
				<td>{{ $photo->name }}</td>
				<td>{{ $photo->updated_at->format('M d, Y - h:i:s A') }}</td>
				<td>
					<button type="button" title="View" class="btnViewGalleryPhoto btn btn-warning btn-sm" data-name="{{ $photo->name }}" data-description="{{ $photo->description }}" data-url="/admin-panel/the-province/photo-gallery/{{ $photo->id }}/update" data-toggle="modal" data-target="#editModal" data-image="/{{ $photo->image }}"><i class="fa fa-eye" aria-hidden="true"></i></button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-url="/admin-panel/the-province/photo-gallery/{{ $photo->id }}/delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</td>
			</tr>
			@endforeach
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
	{{ csrf_field() }}
	{{ method_field('delete') }}
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
					{{ csrf_field() }}
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
					{{ csrf_field() }}
					{{ method_field('patch') }}
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
@stop