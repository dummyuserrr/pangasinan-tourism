$(document).ready(function(){
	$('.targets').on('show.bs.collapse', function(){
		$(this).closest('.mydropdown').find('.dropdowntoggler').find('i').attr('class', 'fa fa-angle-up');
		$(this).closest('.mydropdown').find('.dropdowntoggler_active').find('i').attr('class', 'fa fa-angle-up');
	});
	$('.targets').on('hide.bs.collapse', function(){
		$(this).closest('.mydropdown').find('.dropdowntoggler').find('i').attr('class', 'fa fa-angle-down');
		$(this).closest('.mydropdown').find('.dropdowntoggler_active').find('i').attr('class', 'fa fa-angle-down');
	});

	tippy('.leftnavHider', {
		position: 'right',
		arrow: true,
	});
	tippy('.leftnavShower', {
		position: 'right',
		arrow: true,
	});
	tippy('.btnview', {
		position: 'top',
		arrow: true,
	});
	tippy('.btnedit', {
		position: 'top',
		arrow: true,
	});
	tippy('.btndelete', {
		position: 'top',
		arrow: true,
	});
	tippy('.btn-warning', {
		position: 'top',
		arrow: true,
	});
	tippy('.cmsImageBox', {
		position: 'top',
		arrow: true,
	});

	var url = window.location.href;
	var host = window.location.host;
	if(url.indexOf('http://' + host + '/st/cms/homeowners/news-and-events/new') != -1) {
		CKEDITOR.replace('newsAndEventsContent');
		CKEDITOR.config.height = 200;
	}

	$(".postImage").change(function(){
	    readURL(this);
	});

	$('#postTags').tagsInput({
		'width': '100%',
		'defaultText':'Add a tag',
		'delimiter': [';'],
		'autocomplete': { 'option1': 'value1', 'option2': 'value2'},
	});
});

// wew

$('.btnEditVideo').click(function(){
	id = $(this).data('id');
	youtubeid = $(this).data('youtubeid');
	title = $(this).data('title');
	$('#editModal').find('#title').val(title);
	$('#editModal').find('#youtubeLink2').val('https://www.youtube.com/watch?v='+youtubeid);
	$('#editModal').find('form').attr('action', '/admin-panel/the-province/videos/'+id+'/update');
});

$('.btnViewCityMun').click(function(){
	var url = $(this).data('url');
	var name = $(this).data('name');
	var description = $(this).data('description');
	$('#editForm').attr('action', url);
	$('#editForm').find('#name').val(name);
	$('#editForm').find('#description').val(description);
});

$('.btnViewGalleryPhoto').click(function(){
	var url = $(this).data('url');
	var name = $(this).data('name');
	var image = $(this).data('image');
	var description = $(this).data('description');
	$('#editForm').attr('action', url);
	$('#editForm').find('#name').val(name);
	$('#editForm').find('.postimgpreview_edit').attr('src', image);
	$('#editForm').find('#description').val(description);
});

$('.btndelete').click(function(){
	var url = $(this).data('url');
	$('#deleteForm').attr('action', url);
});
$('.initiateDelete').click(function(){
	$('#deleteForm').submit();
});

if($(window).width() >= 768){
	$('.leftnavHider').click(function(){
		$('.leftnav').css({marginLeft: '-40%'});
		$('.maincontainer').css({width: '100%'});
		$('.leftnavShower').css('display', 'block');
	});
	$('.leftnavShower').click(function(){
		$('.maincontainer').css({width: '80%'});
		$('.leftnav').css({marginLeft: '0%'});
		$('.leftnavShower').css('display', 'none');
	});
}else{
	$('.leftnavHider').click(function(){
		$('.leftnav').css({marginLeft: '-100%'});
		$('.maincontainer').css({width: '100%'});
		$('.leftnavShower').css('display', 'block');
	});
	$('.leftnavShower').click(function(){
		// $('.maincontainer').css({width: '10%'});
		$('.leftnav').css({marginLeft: '0%'});
		$('.leftnavShower').css('display', 'none');
	});
}

$(window).resize(function(){
	if($(window).width() >= 768){
		$('.leftnavHider').click(function(){
			$('.leftnav').css({marginLeft: '-40%'});
			$('.maincontainer').css({width: '100%'});
			$('.leftnavShower').css('display', 'block');
		});
		$('.leftnavShower').click(function(){
			$('.maincontainer').css({width: '80%'});
			$('.leftnav').css({marginLeft: '0%'});
			$('.leftnavShower').css('display', 'none');
		});
	}else{
		$('.leftnavHider').click(function(){
			$('.leftnav').css({marginLeft: '-100%'});
			$('.maincontainer').css({width: '100%'});
			$('.leftnavShower').css('display', 'block');
		});
		$('.leftnavShower').click(function(){
			// $('.maincontainer').css({width: '10%'});
			$('.leftnav').css({marginLeft: '0%'});
			$('.leftnavShower').css('display', 'none');
		});
	}
})

$('.btn_userbutton').click(function(){
	var check = $(this).closest('.userbutton').find('.menu').hasClass('active');
	if(check){
		$(this).closest('.userbutton').find('.menu').removeClass('active');
	}else{
		$(this).closest('.userbutton').find('.menu').addClass('active');
	}
});

$('#logoutLink').click(function(){
	$('#logoutForm').submit();
});

$('.cmsImageBox').click(function(){
	var myImage = $(this).find('img').attr('src');
	$('#imageModal').find('img').attr('src', myImage);
	var url = $(this).data('url');
	$('#deleteForm').attr('action', url);
});

function redirect(target){
	window.location.assign(target);
}

function readURL(input) {
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function (e) {
            $('.postimgpreview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function logout(){
	$('#logoutForm').submit();
}

function setUserToDelete(id){
	$('#formDeleteUsers').attr('action', '/st/cms/users/'+id+'/delete');
}
function deleteUser(){
	$('#formDeleteUsers').submit();
}

function loadingModalShow(){
	$('.loading_modal').addClass('loading_modal_active');
}

function loadingModalHide(){
	$('.loading_modal').removeClass('loading_modal_active');
}