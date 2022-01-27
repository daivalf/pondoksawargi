<?php
    session_start();
    if (!isset($_SESSION["id_penjaga"])) 
    {
        header("Location: ../../login.php?error=4");
    }
?>
<?php 	
	include("../../../functions.php");
 ?>
 <head>
 <!DOCTYPE html>
<html>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
<div class="container mt-3">

  <p class="fs-1">Ubah Data Sewa</p>

  <table class="table table-borderless">
      <tr><td>Id Penghuni</td>
          <td>Tanggal Masuk</td></tr>
      <tr><td><input name="" type="text"></input></td>
          <td><input name="" type="date"></input></td></tr>

      <tr><td>Id Kamar</td>
          <td>Tanggal Perpanjangan</td>
      <tr><td><input name="" type="text"></input></td>
          <td><input name="" type="date"></input></td></tr>

      <tr><td>Id Penjaga</td>
          <td>Status Lunas</td>
      <tr><td><input name="" type="text"></input></td>
          <td><input name="" type="text"></input></td></tr>

    <tr><td></td><td><a href="../sewa.php" type="button" class="btn btn-outline-secondary btn-lg">Kembali</a>
                      <a href="simpan_sewa.php" type="button" class="btn btn-outline-secondary btn-lg">Simpan</a></td></tr>

  </table>
</div>
</html>