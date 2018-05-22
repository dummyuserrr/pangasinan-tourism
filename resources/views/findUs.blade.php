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
		<option value="2">Show All Cities and Municipalities</option>
		<option value="3">Show All Tourist Attractions</option>
		<option value="4">Show All Cafe & Restaurants</option>
	</select>
</div>
<div class="mapcontainer" id="map"></div>
<script type="text/javascript" src="/js/maps.js"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8tcOsujX6U_xsuM5gqd2aXVc-bstKJp8&callback=initMap">
</script>
@stop