<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Berhasil Disimpan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styledata.css">
</head>

<body>
<?php
	session_start();
	echo "<br>";



	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jeniskelamin = $_POST['jenis_kelamin'];
	$hobi = $_POST['hobi'];
	$pekerjaan = $_POST['pekerjaan'];
	
	echo "<h2><center>Data Berhasil Disimpan</h2><br>";
	echo "<center>Nama : ".$nama."<br>";
    echo "Username : ";
	echo ($_SESSION['uname']);
	echo "<center>Alamat : ".$alamat."<br>";
	echo "<center>Jenis Kelamin : ".$jeniskelamin."<br>";
	echo "<center>Hobi : ".$hobi."<br>";
	echo "<center>Pekerjaan : ".$pekerjaan."<br>";
?>
<br>
<a href="home.php">Isi Data Lagi</a><br>
<a href="logout.php">Logout</a>
<body>