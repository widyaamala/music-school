<?php
session_start();

if(isset($_SESSION["login"])){
	header("Location: index.php");
	exit;
}
require 'functions.php';

if(isset($_POST["login"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	
	//cek username
	if(mysqli_num_rows($result) === 1){
		//cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])){
			//set session
			$_SESSION["login"] = true;

			$_SESSION['user'] = $username;
		  	$_SESSION['password'] = $password;
		  	$_SESSION['id'] = $row["id"];
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
  <title>Material design sign up form</title>
  <link rel="stylesheet" href="css/styleform.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Glow &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
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
												<li>
													<a href="national.php">National</a></li>
											</ul>
										</li>
										<li><a href="lecturer.php">Lecturer</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="contact.php">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</header>
				</div>
		
		<form action="" method="post">
			<div class="body"></div>
				<div class="grad"></div>
					<div class="header">
						<div>NOOWIDIE<br><span>MUSIC SCHOOL</span></br></div>
					</div>
					<br>
					<div class="login">
					<div class="fh1"><div>You have to sign in before accessing this web page</div></div>
						<input type="text" name="username" placeholder="Username" />
							<input type="password" name="password" placeholder="Password" />
								<input type="submit" name="login" value="Sign in" />
									<div class="fh3"><div>Don't have an account?</div>
									<a href="registrasi.php">Sign Up</a></div>
					</div>
					<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		</form>		
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-blog-section">			
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
							<div class="blog-text">
								<br>
							</div> 
						</div>
					</div>				
				</div>
			</div>
		</div>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
							<h3>About Us</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
						<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
							<h3>Our Services</h3>
							<ul class="float">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">Branding &amp; Identity</a></li>
								<li><a href="#">Free HTML5</a></li>
								<li><a href="#">HandCrafted Templates</a></li>
							</ul>
							<ul class="float">
								<li><a href="#">Free Bootstrap Template</a></li>
								<li><a href="#">Free HTML5 Template</a></li>
								<li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
								<li><a href="#">HandCrafted Templates</a></li>
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
		</div>
</body>
</html>
