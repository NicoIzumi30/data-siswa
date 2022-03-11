<?php 
include("connect.php");
include("atas2.php");
$result = mysqli_query($konek, "select * from wali");



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Wali</title>
	<style>
		}
		table{
			border-collapse: collapse;
			width: 100%;		
		}
		th,td {
			text-align: center;
			padding: 8px;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}
		th {
			background-color:#8da3c7;
			color: white;
		}
		.test1 {
			background-color: #b6ffb5;
		} 
		.test2 {
			background-color: #d3efff;
		}
		.test3 {
			background-color: #fcffc9;
		}
		.test4 {
			background-color: #ffdcdc;
		}
	</style>
</head>
<body>

<center>
	<table border="1" width="70%">
		<td style="background-color: #8da3c7;"><h2 style="text-align: center; margin-top: 3%">DATA SMKN 1 BANTUL</h2></td>
	</table>
 <table border="1" width="70%">
 	<thead>
 		<th>No</th>
 		<th>KELAS</th>
 		<th>WALI KELAS</th>
 		<th>GURU BK</th>
 	</thead>
 <?php
 while ($kol=mysqli_fetch_array($result)) {

	  echo "<tr>
			  <td class='test1'>$kol[0]</td>
			  <td class='test2'>$kol[1]</td>
			  <td class='test3'>$kol[2]</td>
			  <td class='test4'>$kol[3]</td>
	      </tr>";

}



  ?>
  </table>
  </center>
</body>
</html>
