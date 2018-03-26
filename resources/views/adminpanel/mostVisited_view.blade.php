@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-warning" onclick="redirect('/admin-panel/most-visiteds')"><i class="fa fa-list" aria-hidden="true"></i> Return to list</button>
<div class="white_container">
	<form method="post" action="/admin-panel/most-visiteds/{{ $mv->id }}/update" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('patch') }}
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Name: <span class="req">*</span></label>
					<input type="text" class="form-control" id="name" name="name" value="{{ $mv->name }}">
				</div>
				<div class="form-group">
					<label for="category">Category: <span class="req">*</span></label>
					<select type="text" class="form-control" id="category" name="category">
						<option {{ ($mv->category == 'place') ? 'selected' : ''}} value="place">Place</option>
						<option {{ ($mv->category == 'cafe') ? 'selected' : ''}} value="cafe">Cafe</option>
						<option {{ ($mv->category == 'restaurant') ? 'selected' : ''}} value="restaurant">Restaurant</option>
						<option {{ ($mv->category == 'delicacies') ? 'selected' : ''}} value="delicacies">Delicacies</option>
					</select>
				</div>
				<div class="form-group">
					<label for="content">Description:</label>
					<textarea type="text" class="form-control" rows="5" name="description">{{ $mv->description }}</textarea>
				</div>
				<div class="form-group longlatform">
					<label for="latitude">Latitude: <span class="req">*</span></label>
					<input type="text" class="form-control" id="latitude" value="{{ $mv->lat }}" name="latitude">
				</div>
				<div class="form-group longlatform">
					<label for="longitude">Longitude: <span class="req">*</span></label>
					<input type="text" class="form-control" id="longitude" value="{{ $mv->long }}" name="longitude">
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="otherDetails">Images:</label>
					<div class="thumbnails">
						@foreach($mv->images as $image)
						<div class="box cmsImageBox" title="Click to view or delete image" style="background-image: url('/{{ $image->path }}');" data-toggle="modal" data-target="#imageModal" data-url="/admin-panel/most-visiteds/{{ $image->id }}/delete-image">
							<img src="/{{ $image->path }}">
						</div>
						@endforeach
					</div>
				</div>
				<div class="form-group">
					<label for="title">Image:</label>
					<input type="file" name="image[]" multiple class="form-control postImage">
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
				@if($mv->images->count() > 1)
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