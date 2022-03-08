<?php 
$nise=$_GET['nis'];
$name=$_GET['nama'];
$kls=$_GET['kelas'];
$jur=$_GET['jurusan'];

 ?>

 <html>
	<head>	
		<title>update data</title>
		<link href="css/style2.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500'  rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
		<!--webfonts-->
	</head>
	<body>	
			<!--start-login-form-->
				<div class="main">
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2 style="color: white;"><span></span>Update Data</h2>
						 	 </div>
						  	<form action="isi_siswa3.php" method="post">
						  		<input type="text" name="x1" value="<?=$nise?>" >
						  		<input type="text" name="x2" value="<?=$name?>" >
						  		<input type="text" name="x3" value="<?=$kls?>" >
						  		<input type="text" name="x4" value="<?=$jur?>" >
								
								<div class="p-container">
								<div class ="clear"></div>
							</div>
												 
								<div class="submit">
									<input type="submit" name="update" value=" Update" >
								</div>
									<div class="clear"> </div>
								</div>
											
						  </form>
					</div>
											
						  </form>
					</div>
			</div>
				<!--//End-login-form-->	
			  </div>
	</body>
</html>


