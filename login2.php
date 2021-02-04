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
</head>
<body>
		
<form action="" method="post">
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>NOOWIDIE<br><span>MUSIC SCHOOL</span></br></div>
		</div>
		<br>
		<div class="login">
		<h1>Sign in</h1>
				<input type="text" name="username" placeholder="Username" />
				<input type="password" name="password" placeholder="Password" />
 
				<input type="submit" name="login" value="Sign in" />
		<h3>Don't have an account? <a href="registrasi.php">Sign Up</a></h3>
		</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</form>

</body>
</html>
