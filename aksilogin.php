<!DOCTYPE html>
<html>
<head>
	<title>Login Dulu Guys</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>



<body>
	<div class="aksilogin">
	<center>
<?php

	$username = $_POST['uname'];
	$password = $_POST['passwd'];

	if($username == 'rahasia' AND $password == 'rahasia')
	{
		session_start();//untuk memulai session
		//melakukan assignment terhadap variabel session
		$_SESSION['uname'] = $username;
		$_SESSION['jam_mulai'] = date("Y-m-d H:i:s");
		$_SESSION['jam_selesai'] = date("Y-m-d H:i:s",strtotime("+1 hour"));
		$_SESSION['isLogin'] = true;

		header("Location: home.php");
	}
	else
	{
		echo "Username atau password salah";
	}
?>
<br>
<a href="form_login.php">Ulangi Login</a>	
</center>
</div>
