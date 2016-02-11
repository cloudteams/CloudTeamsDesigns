<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="Booreiland">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta http-equiv="cleartype" content="on">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<base href="/">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="[[./css/global-*.css]]">
		<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
		<script type="text/javascript" src="[[./js/global-*.js]]"></script>
		<script type="text/javascript" src="[[./js/common-*.js]]"></script>
	</head>

	<body>
		<header>
			<nav class="global-nav">
				<div class="container">
					<ul>
						<li class="brand">
							<div class="vertical-align">
								<div class="middle">
									<a href="/views/logged-in/projects" alt="home">
										<img src="[[../../../img/logo-white.svg]]" class="logo svg" alt="Cloudteams logo">
									</a>
								</div>
							</div>
						</li>

						<li class="search">
							<div class="vertical-align">
								<div class="middle">
									<input class="input-search" type="text" name="search" placeholder="Search projects">
									<div class="icon-menu-search"></div>
								</div>
							</div>
						</li>

						<li>
							<div class="vertical-align">
								<div class="middle">
									<a href="/views/user/dashboard/projects">
										<div class="icon-menu-dashboard"></div>
										Dashboard
									</a>
								</div>
							</div>
						</li>

						<li>
							<div class="vertical-align">
								<div class="middle">
									<a href="/views/user/dashboard/notifications">
										<div class="icon-menu-notification"></div>
										Notifications
									</a>
								</div>
							</div>
						</li>

						<li class="profile">
							<div class="vertical-align">
								<div class="middle">
									<a href="#nowhere">
										<div class="icon-menu-profile"></div>
										Bobbyd123
										<i class="fa fa-angle-down"></i>
									</a>
								</div>
							</div>

							<ul class="submenu">
								<li><a href="/views/user/dashboard/profile">Edit profile</a></li>
								<li><a href="/views/user/dashboard/settings">Settings</a></li>
								<li><a href="#nowhere">Log out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>