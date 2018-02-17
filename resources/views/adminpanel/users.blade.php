@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-primary" data-target="#newModal" data-toggle="modal"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
<div class="white_container">
	@include('errors.validation_errors')
	<table class="table table-striped" id="videosTable">
		<thead>
			<tr>
				<th onclick="w3.sortHTML('#videosTable','.item', 'td:nth-child(1)')">Username <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#videosTable','.item', 'td:nth-child(2)')">Role <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#videosTable','.item', 'td:nth-child(3)')">Created At <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#videosTable','.item', 'td:nth-child(4)')">Last Updated <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr class="item">
				<td>{{ $user->username }}</td>
				<td>{{ $user->role }}</td>
				<td>{{ $user->created_at->format('M d, Y - h:i:s A') }}</td>
				<td>{{ $user->updated_at->format('M d, Y - h:i:s A') }}</td>
				<td>
					<button type="button" title="Edit" class="btnEditUser btn btn-success btn-sm" data-target="#editModal" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-url="/admin-panel/users/{{ $user->id }}/delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
					<p>Are you sure you want to delete this user?</p>
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
				<h4 class="modal-title">Add A User</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="/admin-panel/users/">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="username">Username: </label>
						<input type="text" class="form-control" name="username" id="username">
					</div>
					<div class="form-group">
						<label for="password">Password: </label>
						<input type="text" class="form-control" name="password" id="password">
					</div>
					<div class="form-group">
						<label for="password2">Retype Password: </label>
						<input type="text" class="form-control" name="password2" id="password2">
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
				<h4 class="modal-title">Edit User</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="">
					{{ csrf_field() }}
					{{ method_field('patch') }}
					<div class="form-group">
						<label for="username">Username: </label>
						<input type="text" class="form-control" name="username" id="username">
					</div>
					<div class="form-group">
						<label for="password">Password: </label>
						<input type="text" class="form-control" name="password" id="password">
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
@stop