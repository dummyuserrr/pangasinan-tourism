@extends('adminpanel.template')
@section('content')
<div class="white_container">
	<form method="post" action="/admin-panel/the-province/delicacies/" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Name: <span class="req">*</span></label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="content">Description:</label>
					<textarea type="text" class="form-control" name="description"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="title">Images:</label>
					<input type="file" name="image" required class="form-control postImage">
					<img src="none" class="img-responsive postimgpreview" alt="Image Preview Here">
				</div>
			</div>
		</div>
	</form>
</div>
@stop