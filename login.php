<?php

session_start();
include 'connect.php';

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = mysqli_query($conn, "SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'");

	// admin'-- 
	// yyy

	// yyy' OR 1=1 -- 
	// xxx

	// yyy' OR 1=1 LIMIT 1 -- 
	// xxx

	// SELECT * FROM admin WHERE username = 'xxx' OR 1=1 LIMIT 1 -- ' AND password = 'yyy'

	// admin'--
	// yyy


	if (mysqli_num_rows($login) == 0) {
		die("username atau password yang anda masukan salah !!");
	} else {
		$_SESSION['admin'] = 1;
		header("Location: ./admin.php");
	}
}

?>
<!-- content login admin -->
<!DOCTYPE html>
<html>

<head>
	<title>LOGIN | BLOG </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<style>
		div {
			width: 320px;
			padding: 50px;
			border: 3px solid black;
			margin: 200px;
		}
	</style>
</head>

<body>
	<center>
		<div>
			<h1 style="text-align: center">panel login</h1>


			<form action="" method="post" style="text-align: center">

				<label>Username:</label>
				<input type="text" name="username">
				<br /><br />
				<label>Password:</label>
				<input type="password" name="password">

				<br>
				<br>
				<input type="submit" name="submit" value="Login">

			</form>
		</div>
</body>

</html>