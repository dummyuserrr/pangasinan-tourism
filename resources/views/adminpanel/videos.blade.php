@extends('adminpanel.template')
@section('content')
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
			@foreach($videos as $video)
			<tr class="item">
				<td>{{ $video->title }}</td>
				<td> {{ $video->created_at->format('M d, Y - h:i:s A') }}</td>
				<td> {{ $video->updated_at->format('M d, Y - h:i:s A') }}</td>
				<td>
					<button type="button" title="View" class="btnViewVideo btn btn-warning btn-sm" data-target="#viewVideoModal" data-toggle="modal" data-youtubeid="{{ $video->youtubeid }}"><i class="fa fa-eye" aria-hidden="true"></i></button>
					<button type="button" title="Edit" class="btnEditVideo btn btn-success btn-sm" data-target="#editModal" data-toggle="modal" data-id="{{ $video->id }}" data-youtubeid="{{ $video->youtubeid }}" data-title="{{ $video->title }}" data-year="{{ $video->year }}" data-eventid="{{ $video->event_id }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
					<button type="button" title="Delete" class="btndelete btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-url="/admin-panel/the-province/videos/{{ $video->id }}/delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

<form id="formDelete" method="post" action="">
	{{ csrf_field() }}
	{{ method_field('delete') }}
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
					{{ csrf_field() }}
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
					{{ csrf_field() }}
					{{ method_field('patch') }}
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
@stop