<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
define("DEVELOPMENT" , TRUE);

function dbConnect()
{
    $db = new mysqli("localhost", "root", "", "db_pondoksawargi");
    return $db;
}

function showErrorSalahPassword()
{
	?>
	<script>
	Swal.fire(
  			'ID atau Password salah',
  			'',
			'error'
	);
	</script>
	<?php
}

function showErrorDatabase()
{
	?>
	<script>
	Swal.fire(
  			'Database error',
  			'Silahkan hubungi teknisi',
			'error'
	);
	</script>
	<?php
}

function sidebar($title){
?>
<head>

	<title><?php echo $title ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="../../	style.css">

	<script src="https://kit.fontawesome.com/53dc4b1d0b.js" crossorigin="anonymous"></script>

	<style type="text/css">
		h1{
			font-weight: bold;
		}
	</style>
</head>
	<!-- sidebar -->
	<nav>
		<div class="top">
			<img src="image/logo.png">
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
					<a href="../../logout.php"><span>Keluar</span></a>
				</div>
			</div>
		</div>
	</nav>
	<div class="kanan">
		<div class="container mt-3">
	<!-- sidebar -->
<?php
}

function sidebar_crud($title){
?>
<head>

	<title><?php echo $title ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="../../../style.css">

	<script src="https://kit.fontawesome.com/53dc4b1d0b.js" crossorigin="anonymous"></script>

	<style type="text/css">
		h1{
			font-weight: bold;
			margin-top: 3%;
		}
	</style>
</head>
	<!-- sidebar -->
	<nav></nav>
	<div class="kanan">
		<div class="container mt-3">
	<!-- sidebar -->
<?php
}

function getKamar()
{
  $db = dbConnect();
  $sql = "SELECT * FROM kamar ORDER BY status_ketersediaan";
  return $db->query($sql);
}

function getDataKamar($id_kamar)
{
  $db = dbConnect();
  $sql = "SELECT * FROM kamar WHERE id_kamar = '$id_kamar'";
  return $db->query($sql);
}
?>