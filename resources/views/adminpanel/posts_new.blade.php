@extends('adminpanel.template')
@section('content')
<div class="white_container">
	<form>
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="title">Title: <span class="req">*</span></label>
					<input type="text" class="form-control" id="title">
				</div>
				<div class="form-group">
					<label for="postTags">Tags: (Use ';' to separate)</label>
					<input type="text" class="form-control" id="postTags" value="person; animal; ewan">
				</div>
				<div class="form-group">
					<label for="content">Content:</label>
					<textarea type="text" class="form-control" id="postcontent"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="title">Image:</label>
					<input type="file" class="form-control postImage">
					<img src="none" class="img-responsive postimgpreview" alt="Image Preview Here">
				</div>
			</div>
		</div>
	</form>
</div>
@stop