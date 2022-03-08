<?php 
session_start();
include("connect.php");

//if (!$_SESSION['index.php']) {
if (!$_SESSION['admin']) {
    echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."login.php'/>";
}
 ?>
<?php include("atas.php") ?>

<?php include("bawah.php") ?>