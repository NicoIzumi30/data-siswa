<?php 
include("atas.php");
include("connect.php");
if (!$_SESSION['masuk']) {
    echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."login.php'/>";
}
 ?>
 	<style type="text/css">

 		th,td {
			text-align: center;
			padding: 8px;
		}
 	</style>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<center>
<!-- 	<h1 style="margin-top: 50%; margin: auto; color: black; font-family: arial; opacity: 80%">Selamat Datang Di Website SMK Negeri 1 Bantul</h1> -->	
	<img src="images/skl.jpg" width="100%">
	</center>	
<?php 
include("bawah.php");
 ?>