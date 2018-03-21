@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-warning" onclick="redirect('/admin-panel/tourism/cafe-and-restaurants')"><i class="fa fa-list" aria-hidden="true"></i> Return to list</button>
<div class="white_container">
	<form method="post" action="/admin-panel/tourism/cafe-and-restaurants/{{ $car->id }}/update" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('patch') }}
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Name: <span class="req">*</span></label>
					<input type="text" class="form-control" id="name" name="name" value="{{ $car->name }}">
				</div>
				<div class="form-group">
					<label for="content">Description:</label>
					<textarea type="text" class="form-control" rows="5" name="description">{{ $car->description }}</textarea>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="otherDetails">Images:</label>
					<div class="thumbnails">
						@foreach($car->images as $image)
						<div class="box cmsImageBox" title="Click to view or delete image" style="background-image: url('/{{ $image->path }}');" data-toggle="modal" data-target="#imageModal" data-url="/admin-panel/tourism/cafe-and-restaurants/{{ $image->id }}/delete-image">
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
				@if($car->images->count() > 1)
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