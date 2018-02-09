@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newModal"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
<div class="white_container">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Created At</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($citymuns as $citymun)
			<tr>
				<td>{{ $citymun->name }}</td>
				<td>{{ $citymun->updated_at->format('M d, Y - h:i:s A') }}</td>
				<td>
					<button type="button" title="View" class="btnview btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" onclick="setPostToDelete(1)" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
					<button type="button" class="btn btn-danger" onclick="deleteBlog()">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				</div>
			</div>
		</div>
	</div>
</div>

<form id="deleteForm" method="post" action="">
	{{ csrf_field() }}
	{{ method_field('delete') }}
	<input type="hidden" name="post" value="" id="postToDelete">
</form>

<div id="newModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add New City/Municipality</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="/admin-panel/the-province/cities-and-municipalities">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" id="name" required>
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<textarea class="form-control" name="description" id="description" required rows="4"></textarea>
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