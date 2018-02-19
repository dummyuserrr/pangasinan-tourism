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
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $cums->links() }}
</div>
@stop