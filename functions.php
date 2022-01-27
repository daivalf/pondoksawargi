<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
define("DEVELOPMENT" , TRUE);

function showMessageHapus()
{
	?>
	<script>
    Swal.fire({
        title: 'Apakah anda yakin akan menghapus data penghuni?',
        text: "Data yang dihapus tidak akan kembali",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Terhapus',
            'Data berhasil dihapus',
			'success'
          )
        }
      })
	</script>
	<?php
}

function showBerhasilHapus()
{
	?>
	<script>
	Swal.fire(
            'Terhapus',
            'Data berhasil dihapus',
			'success'
          )
	</script>
	<?php
}

function showGagalHapus()
{
	?>
	<script>
	Swal.fire(
            'Gagal',
            'Data gagal dihapus',
			'error'
          )
	</script>
	<?php
}

function dbConnect()
{
    $db = new mysqli("localhost", "root", "", "db_pondoksawargi");
    return $db;
}

function showPin()
{
	?>
	<script>
	Swal.fire(
  			'Kode pin berhasil diterima',
  			'Password untuk akun Admin1 adalah cucu29c',
			'success'
	);
	</script>
	<?php
}

function showPinSalah()
{
	?>
	<script>
	Swal.fire(
  			'PIN untuk Password salah',
  			'Silahkan coba kembali',
			'error'
	);
	</script>
	<?php
}

function showErrorSalahPassword()
{
	?>
	<script>
	Swal.fire(
  			'ID atau Password salah',
  			'Silahkan coba kembali',
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

function showErrorKoneksi()
{
	?>
	<script>
	Swal.fire(
  			'Koneksi ke Database gagal',
  			'Silahkan hubungi teknisi',
			'error'
	);
	</script>
	<?php
}

function showErrorBelumLogin()
{
	?>
	<script>
	Swal.fire(
  			'Tidak bisa mengakses halaman',
  			'Silahkan login terlebih dahulu',
			'error'
	);
	</script>
	<?php
}

function showErrorUnknown()
{
	?>
	<script>
	Swal.fire(
  			'Error tidak diketahui',
  			'',
			'error'
	);
	</script>
	<?php
}

function showSuksesEdit()
{
	?>
	<script>
	Swal.fire(
  			'Perubahan Data Kamar Berhasil',
  			'',
			'success'
	);
	</script>
	<?php
}

function showGagalEdit()
{
	?>
	<script>
	Swal.fire(
  			'Data Kamar Tidak Berubah!',
  			'',
			'warning'
	);
	</script>
	<?php
}

function showKonfirmasiUbahData(){
	?>
	<script>
	Swal.fire({
	  title: 'Apakah anda yakin akan menyimpan perubahan pada data kamar?',
	  showDenyButton: true,
	  showCancelButton: true,
	  confirmButtonText: 'Simpan',
	  denyButtonText: 'Batal',
	}).then((result) => {
	  /* Read more about isConfirmed, isDenied below */
	  if (result.isConfirmed) {
	    window.location = "redirectURL";
	  }
	})
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
					<a href="../logout.php"><span>Keluar</span></a>
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
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../../style.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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

<<<<<<< HEAD
function getDataPenghuni($id_penghuni)
{
  $db = dbConnect();
  $sql = "SELECT * FROM penghuni WHERE id_penghuni = '$id_penghuni'";
=======
function getPenghuni()
{
  $db = dbConnect();
  $sql = "SELECT * FROM penghuni";
  return $db->query($sql);
}

function getDataSewa($id_penghuni)
{
  $db = dbConnect();
  $sql = "SELECT * FROM sewa WHERE id_penghuni = '$id_penghuni'";
  return $db->query($sql);
}

function getPenjaga()
{
  $db = dbConnect();
  $sql = "SELECT * FROM penjaga";
>>>>>>> b93359428a99e3e3ed51e880d93dba3f5d6f9eb7
  return $db->query($sql);
}
?>