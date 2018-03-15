<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pangasinan Tourism - Admin Panel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="/adminpanel/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/less" href="/adminpanel/css/cms.less">
		<link rel="stylesheet" type="text/less" href="/adminpanel/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body class="loginbody">
		<div class="kontainer">
			<div class="main">
				<img src="/img/logo.png" class="company_image">
				<h1>Admin Panel</h1>
				<div class="loginform">
					<div class="top">
						<h3>Sign In</h3>
					</div>
					<form method="post" id="loginform" action="/admin-panel/auth/login">
						<?php echo e(csrf_field()); ?>

						<input autocomplete="off" type="text" name="username" placeholder="Username" style="background-image: url('/adminpanel/img/username.png');">
						<input autocomplete="off" type="password" name="password" placeholder="Password" style="background-image: url('/adminpanel/img/password.png');">
						<button type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</button>
					</form>
					<?php if(session()->has('alertmessage')): ?>
					<p style="color: #ff8a8a;"><?php echo e(session('alertmessage')); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="/adminpanel/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="/adminpanel/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/adminpanel/js/actions.js"></script>
		<script type="text/javascript" src="/adminpanel/js/less.min.js"></script>
	</body>
</html>