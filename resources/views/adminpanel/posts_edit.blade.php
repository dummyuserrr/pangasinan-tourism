@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-warning" onclick="redirect('/admin-panel/posts')"><i class="fa fa-list" aria-hidden="true"></i> Return to list</button>
<div class="white_container">
	<form>
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" class="form-control" id="title">
				</div>
				<div class="form-group">
					<label for="content">Content:</label>
					<textarea type="text" class="form-control" id="postcontent"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="otherDetails">Images:</label>
					<div class="thumbnails">
						<div class="box cmsImageBox" title="Click to view or delete image" style="background-image: url('/img/Homeowners/Projects/Esmeralda North Davao.png');" data-toggle="modal" data-target="#imageModal" >
							<img src="/img/Homeowners/Projects/Esmeralda North Davao.png">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="title">Image:</label>
					<input type="file" class="form-control postImage">
					<img src="none" class="img-responsive postimgpreview" alt="Image Preview Here">
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
				<button type="button" class="btn btn-danger" onclick="deleteThis()"><i class="fa fa-trash"></i> Delete this Image</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@stop