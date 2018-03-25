<div class="row">
	<div class="col-lg-5"><img src="/{{ $mv->images()->orderBy('created_at', 'desc')->first()->path }}" class="mw100"></div>
	<div class="col-lg-7">
		<h3 class="text-uppercase">{{ $mv->name }}</h3>
		<p>{{ $mv->description }}</p>
	</div>
</div>
@if($mv->category != 'delicacies')
<div class="row">
	<div class="col-lg-12">
		<div id="map" class="cmMap"></div>
	</div>
</div>
@endif
<div class="row">
	<div class="col-lg-12">
		<h3 class="text-uppercase mt">Photo Gallery</h3>
		<div class="row">
			@foreach($mv->images()->orderBy('created_at', 'desc')->get() as $image)
				@if($loop->first)
				
				@else
					<div class="col-lg-4"><img src="/{{ $image->path }}" class="mw100"></div>
				@endif
			@endforeach
		</div>
	</div>
</div>