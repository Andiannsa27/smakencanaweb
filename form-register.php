<html>
	<head>
		<meta charset="UTF-8">
		<title>SMA KENCANA</title>
		<meta name="description" content="Project">
  		<meta name="keywords" content="HTML, CSS, PHP">
		<link rel="stylesheet" type="text/css" href="StyleLogin.css">
	</head>
	<body>
		<form class="box" action="proses-register.php" method="POST" name="register">
		<img src="image/logo.jpg" alt="logo" width="150px" height="150px">
        <h1>REGISTER HERE</h1>
        <input type="text" name="no_id" placeholder="Input Your Employee ID" id="username" required maxlength="8">
        <input type="text" name="nama_admin" placeholder="Input Your Name" id="username" required>
        <input type="text" name="email" placeholder="Input Your Email" id="username" required>
		<input type="text" name="username" placeholder="Input Your Username" id="username" required>
		<input type="password" name="password_admin" placeholder="Enter Password" id="password" required>
		<button type="submit" name="register" value="register">Register</button>
		<p class="a">If Admin Have an Account, Please Login Here</p>
		<a href="form-login.php" class="b">Login</a>
		</form>
	</body>
</html>