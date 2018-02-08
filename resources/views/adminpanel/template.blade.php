<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sitename - Admin Panel</title>
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
					<a href="/admin-panel/posts" class="option {{ adminSetActive('admin-panel/posts*') }}">Posts</a>
					<div class="mydropdown {{ adminSetActive2('admin-panel/dashboard*') }}">
						<span>Homeowners</span>
						<button class="dropdowntoggler" data-toggle="collapse" data-target="#dd_homeowners"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
						<button class="dropdowntoggler_active" data-toggle="collapse" data-target="#dd_homeowners"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
						<div id="dd_homeowners" class="collapse targets {{ adminSetActiveDropdown('admin-panel/dashboard*') }}">
							<div class="options">
								<a href="/admin-panel/dashboard" class="option {{ adminSetActive('admin-panel/dashboard*') }}">Dashboard</a>
								<a href="/admin-panel/users" class="option {{ adminSetActive('admin-panel/users*') }}">Users</a>
							</div>
						</div>
					</div>
					<div class="mydropdown">
						<span class="{{ adminSetActive2('admin-panel/roofing-professionals*') }}">Roofing Professionals</span>
						<button class="dropdowntoggler" data-toggle="collapse" data-target="#dd_roofingProfessionals"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
						<div id="dd_roofingProfessionals" class="collapse targets">
							<div class="options">
								<a href="/admin-panel/dashboard" class="option {{ adminSetActive('admin-panel/dashboard*') }}">Dashboard</a>
								<a href="/admin-panel/users" class="option {{ adminSetActive('admin-panel/users*') }}">Users</a>
							</div>
						</div>
					</div>
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
						<a href="javascript:void(0);"><i class="fa fa-wrench" aria-hidden="true"></i> Account Settings </a>
						<a href="javascript:void(0);" onclick="logout()"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout </a>
					</div>
				</div>
			</div>
			<div class="main">
				@yield('content')
			</div>
		</div>
		@if(session()->has('status'))
		<form id="logoutForm" method="post" action="/admin-panel/logout">
			{{ csrf_field() }}
		</form>
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