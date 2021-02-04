<?php
	session_start();
	if(!isset($_SESSION["login"])){
		header("Location: login.php");
		exit;
	}
	require 'functions.php';
	$user = query("SELECT * FROM user");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>NOOWIDIE MUSIC SCHOOL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">NOOWIDIE MUSIC SCHOOL</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a class="fh5co-sub-ddown">Lesson</a>
									<ul class="fh5co-sub-menu">
										<li><a href="kids.php">For Kids</a></li>
										<li><a href="teens.php">For Teens</a></li>
									</ul>
								</li>
								<li>
									<a class="fh5co-sub-ddown">Achievment</a>
									 <ul class="fh5co-sub-menu">
									 	<li>
											<a href="international.php" class="fh5co-sub-ddown">International</a>
										</li>
										<li><a href="national.php">National</a></li>
									</ul>
								</li>
								<li><a href="lecturer.php">Lecturer</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li>
									<a class="fh5co-sub-ddown">Profile</a>
									 <ul class="fh5co-sub-menu">
									 	<li>
											<a href="ubah.php" class="fh5co-sub-ddown">Edit Profile</a>
										</li>
										<li><a href="logout.php">Log Out</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		

		<div class="fh5co-hero fh5co-hero-2">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/gitarr.png);">
				<div class="desc animate-box">
					<h2>Contact Us</h2>
				</div>
			</div>
		</div>
		<!-- end:header-top -->
		
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form action="#">
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Permata Jingga Jl. Anggrek 2 No.11, Malang</li>
								<li><i class="icon-phone2"></i> +62 838 8383 8383</li>
								<li><i class="icon-mail"></i><a href="#">noowidie@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.noowidie-musicschool.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact -->
		<div id="map" class="fh5co-map"></div>
		<!-- END map -->
		<footer>
					<div id="footer">
						<div class="container">
							<div class="row">
								<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
									<h3>About Us</h3>
									<p>Noowidie Music School berdiri sejak tahun 1987 dengan ke 12 cabangnya adalah sekolah musik terbesar di Indonesia. </p>
								</div>
								<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
									<h3>Support</h3>
									<ul class="float">
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">Anggota Online</a></li>
										<li><a href="#">Service Center</a></li>
										<li><a href="#">Informasi Garansi</a></li>
									</ul>
									<ul class="float">
										<li><a href="#">Brosur dan Katalog</a></li>
										<li><a href="#">Kumpulan Buku Manual</a></li>
										<li><a href="#">Software Terbaru</a></li>
										<li><a href="#">Dokumen dan Data Murid</a></li>
									</ul>
								</div>
								<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
									<h3>Follow Us</h3>
									<ul class="fh5co-social">
										<li><a href="#"><i class="icon-twitter2"></i> Twitter</a></li>
										<li><a href="#"><i class="icon-facebook2"></i> Facebook</a></li>
										<li><a href="#"><i class="icon-google-plus2"></i> Google Plus</a></li>
										<li><a href="#"><i class="icon-instagram2"></i> Instagram</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="fh5co-copyright text-center">
							<p>&copy; 2016 Free HTML5 template. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></p> 
						</div>
					</div>
				</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

