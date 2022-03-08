<?php 
	$title = "Login Admin";
	require "connect.php";
//	require "index.php";

	$err = "";
// session_start();
// session_register('user');
// session_register('pass');
	if (isset($_POST['login'])) {
		$user = $_POST['user'];
		$pass = md5($_POST['pass']);

		$query = mysqli_query($konek, "SELECT * FROM admin WHERE username = '$user' and password= '$pass'");
		$row = mysqli_num_rows($query);

		if ($row > 0) {
			// echo" berhasil <br> ";
			$_SESSION['admin'] = true;
			echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."index.php'/>";
		}else{
			// echo" gagal <br> ";
			$err = "username atau password salah";
		}
	}
 ?>
 <html>
	<head>	
		<title>form isi data</title>
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
						    	<h2 style="color: white"><span></span>LOGIN</h2>
						 	 </div>
							  	<form action="" method="post">
					       	    <p style="color: white"><?=$err ?></p>
					           <input type="text" name="user" id="user" class="username" placeholder="Username">
					           <input type="password" name="pass" id="pass" class="password" placeholder="Password">
								<div class="p-container">
								<div class ="clear"></div>
							</div>
												 
								<div class="submit">
									<input type="submit" name="login" onclick="myFunction()" value=" Kirim" >
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

