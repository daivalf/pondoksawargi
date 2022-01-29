<?php 
	include_once("../functions.php");
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login Petugas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=montserrat:300,400,700&display=swap" rel="stylesheet">	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      			<img width="40%" height="40%" src="../assets/logo-pondok-sawargi.png" class="img-fluid mx-auto d-block">
		      	<h2 class="text-center mb-4 mt-4"><font face="montserrat" color="#008080">Kos Pondok Sawargi</font></h2>
				  <hr>
				<h4 class="text-center mb-4"><font face="montserrat" color="#008080"><b>Silahkan masukkan pin</b></font></h4>
				<form method="post" class="login-form">
		      		<div class="form-group">
						<div class="text-center">PIN</div>
		      			<input name="pin" type="password" class="form-control rounded-left mx-auto d-block" placeholder="" required>
		      		</div>
	            <div class="form-group d-flex">
								<div class="mx-auto d-block"><font face="montserrat">
									<button type="submit" name="TblSubmit" class="btn btn-primary rounded p-2 px-4">Submit</font></button>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
			<div class="col-md-6 text-center mb-4">
			</div>
		</div>

        <?php
        if (isset($_POST["TblSubmit"]))
        {
            $pin = $_POST["pin"];
            $jawaban = "01269";
            if ($pin == $jawaban)
            {
                showPin();
            }
            else
            {
                showPinSalah();
            }
        }
        ?>
    ?>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <a href="login.php" class="btn btn-outline-secondary floating-btn">Kembali</a>

	</body>
</html>

