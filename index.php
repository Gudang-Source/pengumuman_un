<?php
session_start();
$db = mysqli_connect('localhost','root','presiden323','pengumuman') or die ("gagal koneksi");
if (!empty($_SESSION['nis'])) { 
$dt = $_SESSION['nis'];
$stmt = mysqli_prepare($db,"select*from siswa where nis=? limit 1");
	mysqli_stmt_bind_param($stmt,'s',$dt);
	mysqli_stmt_execute($stmt);
	$result=mysqli_stmt_get_result($stmt);
	$e = mysqli_fetch_row($result);
  $d = mysqli_query($db, 'select*from siswa where nis="'.$e[2].'"');
  $dt = mysqli_fetch_array($d);
// Awal Login
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PENGUMUMAN KELULUSAN SMKN 1 BANGSRI</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/logo.png">
</head>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;

  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  z-index: 1;
}
.bgimg::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.6);
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: Arial;
  color: #000;
  background: #fff;
  padding: 10px;
  border-radius: 10px;
  width: 40%;
}

@media (min-width:100px) and (max-width: 600px){
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: Arial;
  color: #000;
  background: #fff;
  padding: 10px;
  border-radius: 10px;
  width: 90%;
}
}

@media (min-width:600px) and (max-width: 1200px){
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: Arial;
  color: #000;
  background: #fff;
  padding: 10px;
  border-radius: 10px;
  width: 80%;
}
}

@media (min-width:1250px) and (max-width: 1800px){
.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: Arial;
  color: #000;
  background: #fff;
  padding: 10px;
  border-radius: 10px;
  width: 45%;
}
}

hr {
  margin: auto;
  width: 95%;
  border-top: 3px double #000; border-bottom: 1.5px solid #000;
}
a {
	text-decoration: none;
	color: blue;
	padding: 10px;
}
a:hover {
  color:green;
}
.isi {
  width: 85%;
  padding:10px;
  margin: 0 auto;
}
label {
  display: block;
  padding-bottom: 2px;
  padding-top: 8px;
  font-weight: bold;
  font-size: 14px;
}
</style>
<body>

<div class="bgimg" style="background-image: url('images/bg.jpg');">
  <div class="middle">
    <center><img src="images/logo.png" width="100px;"><br/>
    <span style="text-align: center; margin: 0 auto; font-size:22px; font-weight:bold;">PENGUMUMAN KELULUSAN<br/>SMKN 1 BANGSRI</span></center>
    <hr>
    <center style="font-size:18px; padding-top: 10px;">IDENTITAS DIRI ANDA</center>
<div class="isi">
<label>Nama Siswa :</label>
<?php echo $dt['nama_siswa'] ?>
<label>Tempat dan Tanggal Lahir : </label>
<?php echo $dt['tempat_lahir'] ?>
<label>Nama Orang Tua :</label>
<?php echo $dt['nama_ortu'] ?>
<label>Nomor Induk Siswa :</label>
<?php echo $dt['nis'] ?>
<label>Nomor Induk Nasional Siswa :</label>
<?php echo $dt['nisn'] ?>
<label>Kompetensi Keahlian :</label>
<?php echo $dt['kompetensi_keahlian'] ?>
</div>
<br>
<center><a href='printpdf.php' style="padding: 12px; border-radius: 3px; background: red; color: white;">Download Pengumuman Kelulusan</a><br/><br/>
<a href="logout.php">Log Out</a><br/><br/>
</center>
  </div>
</div>
</body>
</html>

<?php
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PENGUMUMAN KELULUSAN SMKN 1 BANGSRI JEPARA</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="images/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
#clockdiv{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
}

#clockdiv > div{
    padding: 10px;
    border-radius: 3px;
    background: #00BF96;
    display: inline-block;
}

#clockdiv div > span{
    padding: 15px;
    border-radius: 3px;
    background: #00816A;
    display: inline-block;
}

.smalltext{
    padding-top: 5px;
    font-size: 16px;
    font-weight: bold;
}

</style>
</head>
<body>
<?php
if (isset($_POST['login'])) {
	$a = $_POST['username'];
	$b = $_POST['password'];
	$stmt = mysqli_prepare($db,"select*from siswa where nis=? limit 1");
	mysqli_stmt_bind_param($stmt,'s',$a);
	mysqli_stmt_execute($stmt);
	$result=mysqli_stmt_get_result($stmt);
	$row = mysqli_num_rows($result);
	$e = mysqli_fetch_row($result);
	// $c = mysqli_query($db,);
	// $d = mysqli_num_rows($c);
	if ($row == 1 AND $e[5]==$b) {
       	$_SESSION['nis']=$a;
       	header('Location:./');
	} else {
		echo "<script>alert('Maaf Password Yang Anda Masukan Salah');</script>";
	}
	$stmt->close();

}
?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<center><img src="images/logo.png" width="100px;"></center>
				<span class="login100-form-title p-b-41">
					PENGUMUMAN KELULUSAN SMKN 1 BANGSRI
				</span>
				<p id="demo"></p>
			</div>
		</div>
	</div>
	
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script src="js/menu.js"></script>

</body>
</html>
<?php } ?>