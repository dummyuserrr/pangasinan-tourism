$(document).ready(function(){
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

// wew

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