<h3 class="text-uppercase">{{ $item->name }}</h3>
<div class="multiple_images">
	@foreach($item->images as $image)
	<div class="box"><img src="/{{ $image->path }}"></div>
	@endforeach
</div>
<p>{{ $item->description }}</p>