<div class="row">
	<div class="col-lg-5"><img src="/{{ $item->images()->orderBy('created_at', 'desc')->first()->path }}" class="mw100"></div>
	<div class="col-lg-7">
		<h3 class="text-uppercase">{{ $item->name }}</h3>
		<p>{{ $item->description }}</p>
	</div>
</div>
<<<<<<< HEAD
<div class="row">
=======
<div class="row" style="display: {{ (isset($nomap)) ? 'none' : 'block' }}">
>>>>>>> f41137b4fb60ff83f527bb2e4c94effe6de9876a
	<div class="col-lg-12">
		<div id="map" class="cmMap"></div>
		<a href="https://maps.google.com/?saddr=Current+Location&daddr={{ $item->lat }},{{ $item->long }}" target="_blank" class="directionsGet">Get Directions</a>
	</div>
<div class="row">
	<div class="col-lg-12">
		<h3 class="text-uppercase mt">Photo Gallery</h3>
		<div class="row">
			@foreach($item->images()->orderBy('created_at', 'desc')->get() as $image)
				@if($loop->first)
					
				@else
					<div class="col-lg-4"><img src="/{{ $image->path }}" class="mw100"></div>
				@endif
			@endforeach
		</div>
	</div>
</div>