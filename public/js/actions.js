$(document).ready(function(){
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

// wew

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

function showLoading(){
    $('.loadingModal').fadeIn();
}
function hideLoading(){
    $('.loadingModal').fadeOut();
}