<div class="row">
	<div class="col-lg-5"><img src="/{{ $citymun->images()->orderBy('created_at', 'desc')->first()->path }}" class="mw100"></div>
	<div class="col-lg-7">
		<h3 class="text-uppercase">{{ $citymun->name }}</h3>
		<p>{{ $citymun->description }}</p>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<iframe width="100%" id="citymunVid" height="400" src="https://www.youtube.com/embed/{{ $citymun->youtubeid }}?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
	<div class="col-lg-6">
		<div id="map" class="cmMap"></div>
		<a href="https://maps.google.com/?saddr=Current+Location&daddr={{ $citymun->lat }},{{ $citymun->long }}" target="_blank" class="directionsGet">Get Directions</a>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h3 class="text-uppercase mt">Photo Gallery</h3>
		<div class="row">
			@foreach($citymun->images()->orderBy('created_at', 'desc')->get() as $image)
				@if($loop->first)
				
				@else
					<div class="col-lg-4"><img src="/{{ $image->path }}" class="mw100"></div>
				@endif
			@endforeach
		</div>
	</div>
</div>