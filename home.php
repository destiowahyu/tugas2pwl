<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home - Formulir Pendataan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styleform.css">
</head>



<body>
<section class="home" id="home">
    <div class="content">
	<h3>
<?php
	session_start();
	if($_SESSION['isLogin'] != true || $_SESSION['jam_selesai']==date("Y-m-d H:i:s"))
	{
		header("Location: form_login.php?message=nologin");
	}
	echo "Selamat datang, ",strtoupper($_SESSION['uname'])," Anda login pada: ",$_SESSION['jam_mulai'];
	echo "<br>";
?>
	<a href="logout.php">Logout</a>
</h3>
<br>
<h3>Formulir <span>Pendataan :</span></h3>
</section>


<DOCTYPE html>
<html>
<body>
	<br>


	<form action="simpandata.php" method="POST">

<br>

<label>Nama Lengkap :</label>
<input name="nama" type="text" required>

<label>Username :</label>
	<?php
		echo($_SESSION['uname']);
	?>
	<br><br>

	<label>Alamat Lengkap :</label>
	<textarea class="textarea" name="alamat" required></textarea>

<br><br><br>
<label>Jenis Kelamin :</label>
<!--<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
-->
<div class="container">
            <div class="btn">
				<input type="radio" name="jenis_kelamin" value="Laki - Laki">
                <label for="Laki - Laki">Laki - Laki</label>
            </div>
            <div class="btn">
				<input type="radio" name="jenis_kelamin" value="Perempuan">
                <label for="Perempuan">Perempuan</label>
            </div>	
        </div>
<br>
<label>Hobi :</label><br>
	<label class="checkbox">Musik
    <input name="hobi" type="checkbox" checked="checked" value="Musik">
    <span class="check"></span>
	</label>
	<label class="checkbox">Olahraga
    <input name="hobi" type="checkbox" checked="checked" value="Olahraga">
    <span class="check"></span>
	</label>
	<label class="checkbox">Memancing
    <input name="hobi" type="checkbox" value="Memancing">
    <span class="check"></span>
	</label>
	<label class="checkbox">Gaming
    <input name="hobi" type="checkbox" value="Gaming">
    <span class="check"></span>
	</label>
	<label class="checkbox">Berkebun
    <input name="hobi" type="checkbox" value="Berkebun">
    <span class="check"></span>
	</label>
	<label class="checkbox">Memasak
    <input name="hobi" type="checkbox" value="Memasak">
    <span class="check"></span>
	</label>
	<label class="checkbox">Makan
    <input name="hobi" type="checkbox" value="Makan">
    <span class="check"></span>
	</label>
	<label class="checkbox">Hobi Lainnya
    <input name="hobi" type="checkbox" value="Hobi Lainnya">
    <span class="check"></span>
	</label>


<br><br><br><br><br><br><br>
<label>Pekerjaan :</label>
<select name="pekerjaan">
      <option value="Guru">Guru</option>
      <option value="Atlet">Atlet</option>
      <option value="Koki">Koki</option>
      <option value="Tentara">Tentara</option>
      <option value="Polisi">Polisi</option>
      <option value="Karyawan Swasta">Karyawan Swasta</option>
	  <option value="Insinyur">Insinyur</option>
	  <option value="Belum Bekerja">Belum Bekerja</option>
	  <option value="Pengangguran">Pengangguran</option>
	  <option value="Lainnya	">Lainnya</option>
    </select>
<br>

	<button type="Simpan" action="simpandata.php">Simpan</button><br>
	<button type="reset">Reset</button>

	</form>

</body>
</html>
	<!-- 
		tugas 2:
		tambahkan form yang method-nya post ke halaman simpandata.php
		nama lengkap: text
		username : ambil dari session
		alamat: textarea
		jenis kelamin: radio, walaupun pilihannya 2, name tetap 1
		hobi: checkbox -> diisi terserah minimal 3 pilihan, pilihannya 3, name juga 3
		pekerjaan: select -> diisi terserah minimal 3 pilihan, sama kayak radio

		tombol simpan


		kalo sudah klik simpan, tampilkan hasil inputannya
	-->
