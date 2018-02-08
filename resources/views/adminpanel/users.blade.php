@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-primary" onclick="redirect('/admin-panel/users/new')"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
<div class="white_container">
	<table class="table table-striped" id="userstable">
		<thead>
			<tr>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(1)')">Name <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th>Email</th>
				<th>Created at</th>
				<th>Role</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr class="item">
				<td>John Doe Dela Cruz</td>
				<td>me@email.cc</td>
				<td>6-6-6</td>
				<td>admin</td>
				<td>
					<button type="button" title="View" class="btnview btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button>
					<button type="button" title="Edit" class="btnedit btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i>  </button>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@stop