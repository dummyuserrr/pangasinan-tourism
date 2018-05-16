$('.map-selector').change(function(){
    var selected = $(this).find(':selected').val()
    switch(selected){
        case '1': // our location
            // ajax
        break
        case '2': // cities and municipalities
            // ajax
        break   
        case '3': // tourist attractions
            // ajax
        break   
        case '4': // cafe and restaurants
            // ajax
        break   
    }
})

function initMap() {
	var ourLocation = {lat: 16.0355673, lng: 120.3281712};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 10,
		center: ourLocation
	});
	var marker = new google.maps.Marker({
		position: ourLocation,
		map: map
	});
}