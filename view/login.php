<?php 
	include_once("../functions.php")
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login Petugas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=montserrat:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<!-- <div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div> -->
		      	<h2 class="text-center mb-4"><font face="Arial" color="#008080">Kos Pondok Sawargi</font></h2>
				  <hr>
				<h4 class="text-center mb-4"><font face="Arial" color="#008080"><b>Login</b></font></h4>
						<form method="post" action="../formlogin.php" class="login-form">
		      		<div class="form-group">
						  Id Pengguna
		      			<input name="id_penjaga" type="text" class="form-control rounded-left" placeholder="" required>
		      		</div>
					  	Password
	            <div class="form-group d-flex">	
	              		<input name="password" type="password" class="form-control rounded-left" placeholder="" required>
	            </div>
	            <div class="form-group d-md-flex">

								<div class="w-50 text-md-left">
									<a href="#"><font face="Arial" color="#008080"><u>Lupa Password?</u></font></a>
								</div>
								<div class="w-50 text-md-right">
									<button type="submit" name="TblLogin" class="btn btn-primary rounded p-2 px-4">Masuk</button>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>

		<?php
        if (isset($_GET["error"]))
        {
			$error = $_GET["error"];
			if ($error ==1)
			{
            	showErrorSalahPassword();
			}
			else
			if ($error == 2)
			{
				showErrorDatabase();
			}
			else
			if ($error == 3)
			{
				
			}
			else
			if ($error == 4)
			{
				
			}
			else
			{
				
			}
        }
    ?>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

