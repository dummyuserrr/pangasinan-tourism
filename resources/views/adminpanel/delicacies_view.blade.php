@extends('adminpanel.template')
@section('content')
<button type="button" class="btn btn-warning" onclick="redirect('/admin-panel/posts')"><i class="fa fa-list" aria-hidden="true"></i> Return to list</button>
<div class="white_container">
	<form method="post" action="/admin-panel/the-province/delicacies/{{ $delicacy->id }}/update">
		{{ csrf_field() }}
		{{ method_field('patch') }}
		<div class="row">
			<div class="col-lg-8">
				<div class="form-group">
					<label for="name">Name: <span class="req">*</span></label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="content">Description:</label>
					<textarea type="text" class="form-control" rows="5" name="description"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<label for="otherDetails">Images:</label>
					<div class="thumbnails">
						@foreach($delicacy->images as $image)
						<div class="box cmsImageBox" title="Click to view or delete image" style="background-image: url('/{{ $image->path }}');" data-toggle="modal" data-target="#imageModal" >
							<img src="/{{ $image->path }}">
						</div>
						@endforeach
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