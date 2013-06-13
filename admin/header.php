<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>PUSHSrv - Dashboard</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">
	<!-- Easy pie  -->
	<link rel="stylesheet" href="css/plugins/easy-pie-chart/jquery.easy-pie-chart.css">

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	
		<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Flot -->
	<script src="js/plugins/flot/jquery.flot.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.bar.order.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.resize.min.js"></script>
	<!-- icheck -->
	<script src="js/plugins/icheck/jquery.icheck.min.js"></script>
	<!-- Easy pie -->
	<script src="js/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>


	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.js"></script>
	
	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">PUSHSrv</a>


			<div class="user">

				<div class="dropdown">
					<a href="index.php"><i class="icon-signout"></i> Sign out</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
		<div id="left">
			<div class="subnav">
	
				<div class="subnav-title">
					<span>Features</span>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="dashboard.php">Dashboard</a>
					</li>
					<li>
						<a href="send.php">Send Notification</a>
					</li>
					<li>
						<a href="queue.php">Queue</a>
					</li>
					<li>
						<a href="settings.php">Settings</a>
					</li>
				</ul>

		
				<div class="subnav-title">
					<span>User Support</span>
				</div>
				<ul class="subnav-menu">
					<li>
						<a href="http://www.clover-studio.com" target="_blank">CloverStudio</a>
					</li>
					<li>
						<a href="http://www.clover-studio.com/blog" target="_blank">News</a>
					</li>
					<li>
						<a href="mailto:info@clover-studio.com" target="_blank">Email</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="main">
