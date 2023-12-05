<?php
include "config.php";
session_start();
if (isset($_SESSION['username'])){
header ("location:index.php");
}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>SMA KENCANA</title>
		<meta name="description" content="Project">
  		<meta name="keywords" content="HTML, CSS, PHP">
		<link rel="stylesheet" type="text/css" href="StyleLogin.css">
	</head>
	<body>
		<form class="box" action="proses-login.php" method="POST" name="login">
		<img src="image/logo.jpg" alt="logo" width="150px" height="150px">
        <h1>LOGIN HERE</h1>
		<input type="text" name="username" placeholder="Enter Username" id="username" required>
		<input type="password" name="password_admin" placeholder="Enter Password" id="password" required>
		<button type="submit" value="login" name="login">Login</button>
		<p class="a">If Admin Doesn't Have an Account, Please Register Here</p>
		<a href="form-register.php" class="b">Register</a>
		</form>
	</body>
</html>