@extends('adminpanel.template')
@section('content')
<div class="white_container">
	<table class="table table-striped" id="userstable">
		<thead>
			<tr>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(1)')">Name <i class="fa fa-sort" aria-hidden="true"></i></th>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(2)')">Email</th>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(3)')">Number</th>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(4)')">Message</th>
				<th onclick="w3.sortHTML('#userstable','.item', 'td:nth-child(5)')">Submitted At</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cums as $cum)
			<tr class="item">
				<td>{{ $cum->name }}</td>
				<td>{{ $cum->email }}</td>
				<td>{{ $cum->number }}</td>
				<td>{{ $cum->message }}</td>
				<td>{{ $cum->created_at->format('M d, Y') }}</td>
				<td>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-url="/admin-panel/contact-us-messages/{{ $cum->id }}/delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $cums->links() }}
</div>

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

<form id="deleteForm" method="post" action="">
	{{ csrf_field() }}
	{{ method_field('delete') }}
</form>
@stop