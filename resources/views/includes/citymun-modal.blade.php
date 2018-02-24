<h3 class="text-uppercase">{{ $citymun->name }}</h3>
<div class="multiple_images">
	@foreach($citymun->images as $image)
	<div class="box"><img src="/{{ $image->path }}"></div>
	@endforeach
</div>
<p>{{ $citymun->description }}</p>