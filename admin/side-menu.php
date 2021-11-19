
<!doctype html>
<html lang="en">


<head>
	<title>Dashboard | Miklol Consulting & Research</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
			<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div  style=" padding-top: 10px;  padding-bottom: 10px;" class="brand">
				<a href="about.php"><img src="assets/img/miklol2.png" style="max-height: 70px;"  alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
			
				
				

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo "" . $_SESSION["UserName"] . ""; ?> </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
							
								
								<!-- <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li> -->
								<!-- <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
								<li><a href="Login/logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			 <div class="sidebar-scroll">
				<nav>
					
	<ul class="nav">
					
							<li><a href="about.php" class=""><i class="lnr lnr-code"></i> <span>About Page</span></a></li>
							<li><a href="mission.php" class=""><i class="lnr lnr-frame-expand"></i> <span>Mission Page</span></a></li>

							<li><a href="vision.php" class=""><i class="lnr lnr-eye"></i> <span>Vision Page</span></a></li>
							<li><a href="values.php" class=""><i class="lnr lnr-sun"></i> <span>Values Page</span></a></li>

							<li><a href="stat.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Statistics Page</span></a></li>

							<li><a href="recent-projects.php" class=""><i class="lnr lnr-pencil"></i> <span>Recent Projects</span></a></li>
                            <li><a href="package.php" class=""><i class="lnr lnr-database"></i> <span>Resources</span></a></li>
						
							<li><a href="services.php" class=""><i class="lnr lnr-cog"></i> <span>Services</span></a></li>
			

				
	</ul>				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
