<?php 
include('config/block_user.php');
date_default_timezone_set('Asia/Manila');
$today=date("M d, Y - h:i A"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Door22 Residence - Payment Kiosk</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="user_index.php"><img src="img/_logo.jpg" data-active-url="img/_logo.jpg" alt=""></a> 
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="logout.php" class="btn btn-red">Logout</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">

						<?php
				            $name=mysql_query("SELECT * FROM occupants WHERE oc_id='$_SESSION[oc_id]'");
				            $userID=mysql_fetch_array($name);
				        ?>
							<h2 class="light white"><b>Door 22 Residence</b></h2><br><br>
							<h4 class="light white"><strong>Hello <?php echo  $userID['name'] ?>! | <?php echo $today; ?></strong></h4>
						<div class="col-md-12 text-center"><br>
							<h4 class="light white">Please select transaction</h4><br><br>
							<center>
							<table width="60%">
								<tr>
									<td align="left"><a href="user_cash.php" class="btn btn-green"><img src="img/icons/cash.png" width="40px" height="40px">&nbsp;&nbsp;&nbsp; Cash </a><br><br></td>
									<td align="right"><a href="user_cheque.php" class="btn btn-yellow"><img src="img/icons/cheque.png" width="40px" height="40px">&nbsp;&nbsp;&nbsp;Cheque</a><br><br></td>
								</tr>
								<tr>
									<td align="left"><a href="user_pin_change.php" class="btn btn-blue"><img src="img/icons/pin.png" width="40px" height="40px">&nbsp;&nbsp;&nbsp;Change PIN</a><br><br></td>
									<td align="right"><a href="user_account.php" class="btn btn-orange"><img src="img/icons/account.png" width="40px" height="40px">&nbsp;&nbsp;&nbsp;Account</a><br><br></td>
								</tr>
							</table>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					
				</div>
			</div>
		</div>
	</section>

	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
