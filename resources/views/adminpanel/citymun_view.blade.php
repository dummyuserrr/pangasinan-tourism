@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-warning" onclick="redirect('/admin-panel/the-province/cities-and-municipalities')"><i class="fa fa-list" aria-hidden="true"></i> Return to list</button>
<div class="white_container">
	<form method="post" action="/admin-panel/the-province/cities-and-municipalities/{{ $cm->id }}/update" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('patch') }}
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control" id="name" required value="{{ $cm->name }}">
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea type="text" class="form-control" name="description" rows="7" required>{{ $cm->description }}</textarea>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="otherDetails">Images:</label>
					<div class="thumbnails">
						@foreach($cm->images as $image)
						<div class="box cmsImageBox citymunImage" title="Click to view or delete image" style="background-image: url('/{{ $image->path }}');" data-toggle="modal" data-target="#imageModal" data-url="/admin-panel/the-province/cities-and-municipalities/image/{{ $image->id }}/delete">
							<img src="/{{ $image->path }}">
						</div>
						@endforeach
					</div>
				</div>
				<div class="form-group">
					<label for="images">Images: (Optional | You can upload multiple)</label>
					<input type="file" class="form-control" name="images[]" multiple>
				</div>
			</div>
		</div>
	</form>
</div>
<div id="imageModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body text-center">
				<img src="/">
			</div>
			<div class="modal-footer">
				@if($cm->images->count() > 1)
				<button type="button" class="btn btn-danger initiateDelete"><i class="fa fa-trash"></i> Delete this Image</button>
				@endif
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<form id="deleteForm" method="post" action="">
	{{ csrf_field() }}
	{{ method_field('delete') }}
</form>
@stop