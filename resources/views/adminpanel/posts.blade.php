@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-primary" onclick="redirect('/admin-panel/posts/new')"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
<div class="white_container">
	<div class="input-group frmUserSearch">
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
		<input id="email" type="text" class="form-control" name="email" placeholder="Search" id="searchUser">
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th>Post Image</th>
				<th>Featured</th>
				<th>Status</th>
				<th>Created At</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Marlou's new Form</td>
				<td>
					
				</td>
				<td>
					<label class="switch" title="Click to toggle feature. You can only feature one item." onclick="setFeature(1)">
						<input type="checkbox">
						<span class="slider round"></span>
					</label>
				</td>
				<td>published</td>
				<td>6-6-6</td>
				<td>
					<button type="button" title="View" class="btnview btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button>
					<button type="button" title="Edit" class="btnedit btn btn-success btn-sm" onclick="redirect('/admin-panel/posts/1/edit')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" onclick="setPostToDelete(1)" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
				<h4 class="modal-title">Add New TruColor Swatch</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="/st/cms/homeowners/colors/color-gallery/new">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" name="name" id="name" required>
					</div>
					<div class="form-group">
						<label for="color">Hex Color:</label>
						<input type="color" class="form-control" name="color" id="color" required>
					</div>
					<div class="form-group">
						<label for="thickness1">Available Thickness 1:</label>
						<input type="number" step=".01" value="0.05" class="form-control" name="thickness1" id="thickness1" placeholder="0.4 (numbers only)" pattern="" required>
					</div>
					<div class="form-group">
						<label for="thickness2">Available Thickness 2:</label>
						<input type="number" step=".01" value="0.05" class="form-control" name="thickness2" id="thickness2" placeholder="0.4 (numbers only)" pattern="" required>
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