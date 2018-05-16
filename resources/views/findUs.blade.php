@extends('templates.template')
@section('content')
<!-- Header -->
<header class="masthead">
	<div class="container">
		<div class="intro-text intro-text-small">
			<div class="intro-heading text-uppercase">Find Us</div>
		</div>
	</div>
</header>
<div class="search-container">
	<select class="map-selector">
		<option value="1">Our Location</option>
		<option value="2">Cities and Municipalities</option>
		<option value="3">Tourist Attractions</option>
		<option value="4">Cafe & Restaurants</option>
	</select>
</div>
<div class="mapcontainer" id="map"></div>
<script>
	function initMap() {
		var uluru = {lat: 16.0355673, lng: 120.3281712};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 10,
			center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
	}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8tcOsujX6U_xsuM5gqd2aXVc-bstKJp8&callback=initMap">
</script>
@stop