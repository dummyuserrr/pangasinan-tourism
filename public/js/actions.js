var scrollposition = $(window).scrollTop();
$(document).ready(function(){
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    if(scrollposition > 150){
        $('.backtotop').fadeIn();
    }else{
        $('.backtotop').fadeOut();
    }

    var pgc = $('.photoGallery_container').owlCarousel({
        margin: 10,
        loop: false,
        items: 6,
        autoplay: false,
        dots: true,
        autoHeight: true,
        responsive : {
            0 : {
                items: 3,
            },
            480 : {
                items: 4,
            },
            768 : {
                items: 6,
            }
        }
    });
    $('.gallery_photo_left').click(function(){
        pgc.trigger('prev.owl.carousel');
    });
    $('.gallery_photo_right').click(function(){
        pgc.trigger('next.owl.carousel');
    });
    getLocation()
});

// wew

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        alert("Geolocation is not supported by this browser.");
    }
}

function showPosition(position) {
    var lat = position.coords.latitude;
    var long = position.coords.longitude;
    var request = $.ajax({
        url: '/store-location',
        type: "POST",           
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            "lat": lat,
            "long": long
        },    
        beforeSend: function(data){
            //
        },
        success: function(data){
            $('.lat').data('value', request.responseJSON.lat)
            $('.long').data('value', request.responseJSON.long)
        },
        error: function(data){
            var errors = "";
            for(datos in data.responseJSON){
                errors += data.responseJSON[datos]+'\n';
            }
            alert(errors);
        }
    });
}

$('.backtotop').click(function(){
    $("html, body").animate({scrollTop: 0}, 300);
});

$(document).scroll(function(){
    scrollposition = $(window).scrollTop();
    if(scrollposition > 150){
        $('.backtotop').fadeIn();
        $('nav').addClass('minified_nav');
    }else{
        $('.backtotop').fadeOut();
        $('nav').removeClass('minified_nav');
    }
});

$('.mv-viewer').click(function(){
    var url = $(this).data('url');
    var lat = $(this).data('lat');
    var long = $(this).data('long');
    var request = $.ajax({
        url: url,
        type: "POST",           
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },
        contentType: false,       
        cache: false,      
        processData:false,       
        beforeSend: function(data){
            showLoading();
            $('.mv-modal').html('');
        },
        success: function(data){
            setTimeout(function(){
                $('.mv-modal').html(request.responseText);
                reloadMap(lat, long);
                hideLoading();
            }, 500);
        },
        error: function(data){
            var errors = "";
            for(datos in data.responseJSON){
                errors += data.responseJSON[datos]+'\n';
            }
            alert(errors);
        }
    });
});

$('.tourism-viewer').click(function(){
    var url = $(this).data('url');
    var lat = $(this).data('lat');
    var long = $(this).data('long');
    var request = $.ajax({
        url: url,
        type: "POST",           
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },
        contentType: false,       
        cache: false,      
        processData:false,       
        beforeSend: function(data){
            showLoading();
            $('.tourism-modal').html('');
        },
        success: function(data){
            setTimeout(function(){
                $('.tourism-modal').html(request.responseText);
                reloadMap(lat, long)
                hideLoading();
            }, 500);
        },
        error: function(data){
            var errors = "";
            for(datos in data.responseJSON){
                errors += data.responseJSON[datos]+'\n';
            }
            alert(errors);
        }
    });
});

$('.image_selector').click(function(){
    $('.image_selector').removeClass('image_selector_active');
    $(this).addClass('image_selector_active');
    var path = $(this).data('path');
    var name = $(this).data('name');
    $('.image_view').attr('src', path);
    $('.photo-description').html(name);
});

$('.viewVideo').click(function(){
    var youtubeid = $(this).data('youtubeid');
    var title = $(this).data('title');
    var url = "https://www.youtube.com/embed/"+youtubeid+"?rel=0&enablejsapi=1";
    $('#videoModal').find('h3').html(title);
    $('#videoModal').find('iframe').attr('src', url);
});

$('#videoModal').on('hidden.bs.modal', function(){
    $('#videoModal').find('iframe').attr('src', '');
});

$('.galleryPhotoPreview').click(function(){
    var name = $(this).data('name');
    var description = $(this).data('description');
    var image = $(this).data('image');
    $('#photoGalleryModal').find('h3').html(name);
    $('#photoGalleryModal').find('p').html(description);
    $('#photoGalleryModal').find('img').attr('src', image);
});

$('.delicacy-viewer').click(function(){
	var url	= $(this).data('url');
	var request = $.ajax({
        url: url,
        type: "POST",           
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },
        contentType: false,       
        cache: false,      
        processData:false,       
        beforeSend: function(data){
        	showLoading();
        	$('.delicacy-modal').html('');
        },
        success: function(data){
            setTimeout(function(){
            	$('.delicacy-modal').html(request.responseText);
            	hideLoading();
            }, 500);
        },
        error: function(data){
            var errors = "";
            for(datos in data.responseJSON){
                errors += data.responseJSON[datos]+'\n';
            }
            alert(errors);
        }
    });
});

$('.car-viewer').click(function(){
    var url = $(this).data('url');
    var lat = $(this).data('lat');
    var long = $(this).data('long');
    var request = $.ajax({
        url: url,
        type: "POST",           
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },
        contentType: false,       
        cache: false,      
        processData:false,       
        beforeSend: function(data){
            showLoading();
            $('.delicacy-modal').html('');
        },
        success: function(data){
            setTimeout(function(){
                $('.delicacy-modal').html(request.responseText);
                reloadMap(lat, long);
                hideLoading();
            }, 500);
        },
        error: function(data){
            var errors = "";
            for(datos in data.responseJSON){
                errors += data.responseJSON[datos]+'\n';
            }
            alert(errors);
        }
    });
});

$('.citymun-viewer').click(function(){
    var url = $(this).data('url');
    var lat = $(this).data('lat');
    var long = $(this).data('long');
    var request = $.ajax({
        url: url,
        type: "POST",           
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },
        contentType: false,       
        cache: false,      
        processData:false,       
        beforeSend: function(data){
            showLoading();
            $('.citymun-modal').html('');
        },
        success: function(data){
            setTimeout(function(){
                $('.citymun-modal').html(request.responseText);
                reloadMap(lat, long);
                hideLoading();
            }, 500);
        },
        error: function(data){
            var errors = "";
            for(datos in data.responseJSON){
                errors += data.responseJSON[datos]+'\n';
            }
            alert(errors);
        }
    });
});

$('.close-modal').click(function(){
    $('#citymunVid').attr('src', '');
});

function showLoading(){
    $('.loadingModal').fadeIn();
}
function hideLoading(){
    $('.loadingModal').fadeOut();
}