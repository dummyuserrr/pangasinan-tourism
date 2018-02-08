$(document).ready(function(){
	$('#technig').summernote({
		height:300,
		toolbar: [
			['style', ['style']],
		    ['font', ['bold', 'italic', 'underline', 'clear']],
		    ['fontname', ['fontname']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['height', ['height']],
		    ['table', ['table']],
		    ['insert', ['link', 'picture', 'hr']],
		    ['view', ['fullscreen', 'codeview']],
		],
	});

	$('#technig2').summernote({
		height:300,
		toolbar: [
			['style', ['style']],
		    ['font', ['bold', 'italic', 'underline', 'clear']],
		    ['fontname', ['fontname']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['height', ['height']],
		    ['table', ['table']],
		    ['insert', ['link', 'picture', 'hr']],
		    ['view', ['fullscreen', 'codeview']],
		],
	});

	$('#technig3').summernote({
		height:300,
		toolbar: [
			['style', ['style']],
		    ['font', ['bold', 'italic', 'underline', 'clear']],
		    ['fontname', ['fontname']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['height', ['height']],
		    ['table', ['table']],
		    ['insert', ['link', 'picture', 'hr']],
		    ['view', ['fullscreen', 'codeview']],
		],
	});

	$('#technig4').summernote({
		height:300,
		toolbar: [
			['style', ['style']],
		    ['font', ['bold', 'italic', 'underline', 'clear']],
		    ['fontname', ['fontname']],
		    ['color', ['color']],
		    ['para', ['ul', 'ol', 'paragraph']],
		    ['height', ['height']],
		    ['table', ['table']],
		    ['insert', ['link', 'picture', 'hr']],
		    ['view', ['fullscreen', 'codeview']],
		],
	});

	$('.note-editable').css('line-height', '1.3');
	$('.note-editor').css('line-height', '1.3');

	$("#new_uploadedImage").change(function(){
	    readURL(this);
	});

	$("#edit_uploadedImage").change(function(){
	    readURL(this);
	});

	$('#logout').click(function(){
		window.location.assign('/admin-panel/logout');
	});

	$('.addnewblog').click(function(){
		$('#frmCareer')[0].reset();
		$('#career_qualifications').tagsinput('removeAll');
	});
});

var deleteBlogTarget = 0;
var deleteCareerTarget = 0;

function editBlog(target){
	window.location.assign('/admin-panel/blogs/edit/'+target);
}

function setDeleteBlogTarget(target){
	deleteBlogTarget = target;
}

function setCareerToDelete(target){
	deleteCareerTarget = target;
}

function deleteBlog(){
	window.location.assign('/admin-panel/blogs/delete/'+deleteBlogTarget);
}

function deleteCareer(){
	window.location.assign('/admin-panel/career/delete/'+deleteCareerTarget);
}

function setCareerToEdit(id, position, description, qualifications){
	$('#careermodaltitle').html('Edit Career');
	$('#career_position').val(position);
	$('#career_description').val(description);
	$('#frmCareer').attr('action', '/admin-panel/careers/edit/'+id);
	$('#career_qualifications').tagsinput('removeAll');
	$('#career_qualifications').tagsinput('add', qualifications);
}

function readURL(input) {
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadedImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function redirect(target){
	window.location.assign(target);
}