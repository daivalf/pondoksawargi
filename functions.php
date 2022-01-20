<?php 

function hover($judul){
	if ($judul == "Data Sewa") {
		echo "";
	} else {
		echo "sewa.php";
	}
}

function sidebar($title){
	$background = "background: 1c1e1d";
?>
<head>

	<title><?php echo $title ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="../../	style.css">
</head>
	<!-- sidebar -->
	<nav>
		<div class="top">
			<img src="image/default.jpg">
			<!-- <h1>Halo, "Nama Penjaga"</h1> -->
		</div>
		<div class="bot">
			<div class="nav-links">
				<div class="nav-links-wrapper" style="<?php echo ($title == "Data Penghuni"?"background: #1c1e1d;":"") ?>">
					<a href="penghuni.php"><span>Penghuni</span></a>
				</div>
				<div class="nav-links-wrapper" style="<?php echo ($title == "Data Sewa"?"background: #1c1e1d;":"") ?>">
					<a href="sewa.php"><span>Sewa</span></a>
				</div>
				<div class="nav-links-wrapper" style="<?php echo ($title == "Data Kamar"?"background: #1c1e1d;":"") ?>">
					<a href="kamar.php"><span>Kamar</span></a>
				</div>
				<div class="nav-links-wrapper keluar">
					<a href="../../index.php"><span>Keluar</span></a>
				</div>
			</div>
		</div>
	</nav>
	<div class="kanan">
		<div class="container mt-3">
	<!-- sidebar -->
<?php
}

 ?>