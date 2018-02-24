@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-primary" onclick="redirect('/admin-panel/tourism/tourist-attractions/new')"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
<div class="white_container">
	<table class="table table-striped" id="table">
		<thead>
			<tr>
				<th onclick="w3.sortHTML('#table','.item', 'td:nth-child(1)')">Name  <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#table','.item', 'td:nth-child(2)')">Created At <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr class="item">
				<td>ta->name }}</td>
				<td>ta->updated_at->format('M d, Y - h:i:s A') }}</td>
				<td>
					<button type="button" title="View or Edit" class="btnViewCityMun btn btn-warning btn-sm" onclick="redirect('/admin-panel/tourism/tourist-attractions/ta->id }}')"><i class="fa fa-eye" aria-hidden="true"></i></button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-url="/admin-panel/tourism/tourist-attractions/ta->id }}/delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</td>
			</tr>
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
					<p>Are you sure you want to delete this item?</p>
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
				<h4 class="modal-title">Add New City/Municipality</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="/admin-panel/tourism/tourist-attractions">
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
<div id="editModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit City/Municipality</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="/admin-panel/tourism/tourist-attractions" id="editForm">
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