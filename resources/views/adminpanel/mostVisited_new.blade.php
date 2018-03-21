@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-warning" onclick="redirect('/admin-panel/most-visiteds')"><i class="fa fa-list" aria-hidden="true"></i> Return to list</button>
<div class="white_container">
	<form method="post" action="/admin-panel/most-visiteds/new" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Name: <span class="req">*</span></label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="category">Category: <span class="req">*</span></label>
					<select type="text" class="form-control" id="category" name="category">
						<option value="place">Place</option>
						<option value="cafe">Cafe</option>
						<option value="beaches">Beaches</option>
						<option value="delicacies">Delicacies</option>
						<option value="restaurant">Restaurant</option>
					</select>
				</div>
				<div class="form-group">
					<label for="content">Description:</label>
					<textarea type="text" class="form-control" rows="5" name="description"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="title">Images:</label>
					<input type="file" name="image[]" multiple required class="form-control postImage">
				</div>
			</div>
		</div>
	</form>
</div>
@stop