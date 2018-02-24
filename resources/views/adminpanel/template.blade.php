<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pangasinan Tourism - Admin Panel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf_token" content="{{ csrf_token() }}">
		<link rel="stylesheet" type="text/css" href="/adminpanel/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/less" href="/adminpanel/css/cms.less">
		<link rel="stylesheet" type="text/less" href="/adminpanel/tippyjs-master/dist/tippy.css">
		<link rel="stylesheet" type="text/less" href="/adminpanel/font-awesome-4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="/adminpanel/tippyjs-master/dist/tippy.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/adminpanel/jQuery-Tags-Input/dist/jquery.tagsinput.min.css">
	</head>
	<body>
		<div class="leftnav">
			<div class="top">
				<h3 onclick="loadingModalShow()">Admin Panel</h3>
				<button class="toggle leftnavHider" title="Hide Left Navigation"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
			</div>
			<div class="main">
				<div class="options">
					<a href="/admin-panel/dashboard" class="option {{ adminSetActive('admin-panel/dashboard*') }}">Dashboard</a>
					<a href="/admin-panel/users" class="option {{ adminSetActive('admin-panel/users*') }}">Users</a>
					<div class="mydropdown {{ adminSetActive2('admin-panel/the-province*') }}">
						<span>The Province</span>
						<button class="dropdowntoggler" data-toggle="collapse" data-target="#dd_province"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
						<button class="dropdowntoggler_active" data-toggle="collapse" data-target="#dd_province"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
						<div id="dd_province" class="collapse targets {{ adminSetActiveDropdown('admin-panel/the-province*') }}">
							<div class="options">
								<a href="/admin-panel/the-province/cities-and-municipalities" class="option {{ adminSetActive('admin-panel/the-province/cities-and-municipalities*') }}"><i class="fa fa-map-marker"></i> Cities and Municipalities</a>
								<a href="/admin-panel/the-province/delicacies" class="option {{ adminSetActive('admin-panel/the-province/delicacies*') }}"><i class="fa fa-spoon"></i> Delicacies</a>
								<a href="/admin-panel/the-province/photo-gallery" class="option {{ adminSetActive('admin-panel/the-province/photo-gallery*') }}"><i class="fa fa-picture-o"></i> Photo Gallery</a>
								<a href="/admin-panel/the-province/videos" class="option {{ adminSetActive('admin-panel/the-province/videos*') }}"><i class="fa fa-youtube-play"></i> Videos</a>
							</div>
						</div>
					</div>
					<div class="mydropdown {{ adminSetActive2('admin-panel/tourism*') }}">
						<span>Tourism</span>
						<button class="dropdowntoggler" data-toggle="collapse" data-target="#dd_tourism"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
						<button class="dropdowntoggler_active" data-toggle="collapse" data-target="#dd_tourism"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
						<div id="dd_tourism" class="collapse targets {{ adminSetActiveDropdown('admin-panel/tourism*') }}">
							<div class="options">
								<a href="/admin-panel/tourism/tourist-attractions" class="option {{ adminSetActive('admin-panel/tourism/tourist-attractions*') }}"><i class="fa fa-ship" aria-hidden="true"></i> Tourist Attractions</a>
								<a href="/admin-panel/tourism/festivals" class="option {{ adminSetActive('admin-panel/tourism/festivals*') }}"><i class="fa fa-asterisk" aria-hidden="true"></i> Festivals</a>
								<a href="/admin-panel/tourism/events" class="option {{ adminSetActive('admin-panel/tourism/events*') }}"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Events</a>
							</div>
						</div>
					</div>
					<a href="/admin-panel/contact-us-messages" class="option {{ adminSetActive('admin-panel/contact-us-messages*') }}">"Contact Us" Messages</a>
					<a href="/" target="_blank" class="option" style="border-top: 1px solid #fff;"><i class="fa fa-television" aria-hidden="true"></i> Open Website in New Tab</a>
				</div>
			</div>
		</div>
		<div class="maincontainer">
			<div class="top">
				<button class="leftnavShower" title="Show Left Navigation"><i class="fa fa-bars" aria-hidden="true"></i></button>
				<h3><i class="{{ $fontawesome }}" aria-hidden="true"></i> {{ $title }}</h3>
				<div class="userbutton">
					<button class="btn_userbutton"><i class="fa fa-user-circle-o" aria-hidden="true"></i></button>
					<div class="menu" id="usermenu">
						<img src="/adminpanel/img/dropdown_top_arrow.png" class="arrow">
						<a href="javascript:void(0);" data-target="#accountSettingsModal" data-toggle="modal"><i class="fa fa-wrench" aria-hidden="true"></i> Account Settings </a>
						<a href="javascript:void(0);" onclick="logout()"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a>
					</div>
				</div>
			</div>
			<div class="main">
				@if(session()->has('action'))
				@if(session('action') == 'updated')
				<div class="alert alert-success alert-dismissable fade in text-center">
				    <a href="#" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
				    <strong>Success!</strong> Data has been updated.
				</div>
				@elseif(session('action') == 'added')
				<div class="alert alert-success alert-dismissable fade in text-center">
				    <a href="#" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
				    <strong>Success!</strong> Data has been added.
				</div>
				@elseif(session('action') == 'deleted')
				<div class="alert alert-success alert-dismissable fade in text-center">
				    <a href="#" class="close text-center" data-dismiss="alert" aria-label="close">&times;</a>
				    <strong>Success!</strong> Data has been deleted.
				</div>
				@endif
				@endif
				@yield('content')
			</div>
		</div>
		@if(session()->has('status'))
		<form id="logoutForm" method="post" action="/admin-panel/logout">
			{{ csrf_field() }}
		</form>
		<div id="accountSettingsModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Account Settings</h4>
					</div>
					<div class="modal-body">
						<form method="post" action="/account-settings">
							{{ csrf_field() }}
							{{ method_field('patch') }}
							<div class="form-group">
								<label for="username">Username: </label>
								<input type="text" class="form-control" id="username" disabled>
							</div>
							<div class="form-group">
								<label for="password">Password: </label>
								<input required type="password" class="form-control" name="password" id="password">
							</div>
							<div class="form-group">
								<label for="password2">Retype Password: </label>
								<input required type="password" class="form-control" name="password2" id="password2">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" id="btnLinkSave">Save</button>
						</form>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		@endif
		<div class="loading_modal">
			<div class="loading_container">
				<img src="/adminpanel/img/loading.svg">
				<!-- <p>Loading...</p> -->
			</div>
		</div>
		<script type="text/javascript" src="/adminpanel/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="/adminpanel/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/adminpanel/js/less.min.js"></script>
		<script type="text/javascript" src="/adminpanel/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="/adminpanel/js/w3.js"></script>
		<script type="text/javascript" src="/adminpanel/jQuery-Tags-Input/dist/jquery.tagsinput.min.js"></script>
		<script type="text/javascript" src="/adminpanel/js/cms.js"></script>
	</body>
</html>