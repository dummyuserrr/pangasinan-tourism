@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-warning" onclick="redirect('/admin-panel/the-province/cities-and-municipalities')"><i class="fa fa-list" aria-hidden="true"></i> Return to list</button>
<div class="white_container">
	<form method="post" action="/admin-panel/the-province/cities-and-municipalities/new" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control" id="name" required>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea type="text" class="form-control" name="description" rows="7" required></textarea>
				</div>
				<div class="form-group">
					<label for="youtube_link">Youtube Link:</label>
					<input type="text" name="youtube_link" class="form-control" id="youtube_link" required placeholder="https://www.youtube.com/watch?v=g4HU_anlJMo">
				</div>
				<div class="form-group">
					<label for="latitude">Latitude:</label>
					<input type="text" name="latitude" class="form-control" id="latitude" required>
				</div>
				<div class="form-group">
					<label for="longitude">Longitude:</label>
					<input type="text" name="longitude" class="form-control" id="longitude" required>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				
				<div class="form-group">
					<label for="images">Images: (You can upload multiple)</label>
					<input type="file" class="form-control" name="images[]" required multiple>
				</div>
			</div>
		</div>
	</form>
</div>
@stop