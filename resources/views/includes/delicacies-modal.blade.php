<h3 class="text-uppercase">{{ $delicacy->name }}</h3>
<div class="multiple_images">
	@foreach($delicacy->images as $image)
	<div class="box"><img src="/{{ $image->path }}"></div>
	@endforeach
</div>
<p>{{ $delicacy->description }}</p>