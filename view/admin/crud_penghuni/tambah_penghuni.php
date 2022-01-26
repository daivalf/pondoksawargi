<?php 	
	include("../functions.php");
 ?>
 <head>
 <!DOCTYPE html>
<html>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  </head>

  <body>
<div class="container mt-3">

  <p class="fs-1">Tambah Data Penghuni</p>

  <table class="table table-borderless">
  <tr><td>Id Penghuni</td>
          <td>Jenis Kelamin</td></tr>
      <tr><td><input name="" type="text"></input></td>
          <td><input name="" type="text"></input></td></tr>

      <tr><td>Nama Penghuni</td>
          <td>Nomor Ktp</td>
      <tr><td><input name="" type="text"></input></td>
          <td><input name="" type="text"></input></td></tr>

      <tr><td>Nomor Telepon</td>
          <td>Nomor Telepon</td>
      <tr><td><input name="" type="text"></input></td>
          <td><input name="" type="text"></input></td></tr>

        <tr><td>Alamat Asal</td>
            <td>Nama Wali</td>
        <tr><td><input name="" type="text"></input></td>
            <td><input name="" type="text"></input></td></tr>
            
        <tr><td>Tanggal Lahir</td></tr>
        <tr><td><input name="" type="date"></input></td>

    <tr><td></td><td><a href="../penghuni.php" type="button" class="btn btn-outline-secondary btn-lg">Kembali</a>
                      <a href="" type="button" class="btn btn-outline-secondary btn-lg">Simpan</a></td></tr>

  </table>
</div>
</html>