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
	<center>
    <div id="backlogin">
	<h1>
	<?php
	if(isset($_GET['message']))
	{
		if($_GET['message']=='nologin')
		{
			echo "Anda harus login terlebih dahulu<br>";
		}
		elseif($_GET['message']=='logout')
		{
			echo "Anda berhasil logout";
		}
		elseif($_GET['message']=="blabla")
		{
			echo "Anda menulis blabla";
		}
	}
	?>
	</h1>
      <hr>
      <form id="login" action="aksilogin.php" method="post"> 
        <input type="text" class="inputa" name="uname" value="" placeholder="Username"> 
        <input type="password" class="inputa" name="passwd" value="" placeholder="Password"> 
        <input type="reset" class="wed" value="Reset"> <input type="submit" class="wed" value="Login">
     </form>
	 <br><a href="lupapassword.html">Tidak tahu Passwordnya?</a>
    </div>
  </center>




</body>