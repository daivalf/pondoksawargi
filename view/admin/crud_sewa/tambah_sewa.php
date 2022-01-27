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
<?php sidebar_crud("Ubah Data Sewa"); ?>
  
  </head>

  <body>
<div class="container mt-3">

  <h1>Tambah Data Sewa</h1>
  <form action="crud_sewa.php" method="post">
    <center>
    <table class="table table-borderless mt-4" style="font-size: 22px; width: 70%">
        <tr><td>Nama Penghuni</td>
            <td>Tanggal Masuk</td></tr>
        <tr><td><select name="id_penghuni" class="form-select" required="">
                <option align=center value="">-- Pilih Penghuni --</option>
                <?php 
                  $dataPenghuni = getPenghuni();
                  foreach ($dataPenghuni as $row) {

                    echo "<option ".$selected." value=".$row["id_penghuni"].">".
                    $row["nama_penghuni"]."</option>"; 
                  }
                 ?>
                </select></td>
            <td>
              <input name="tgl_masuk" type="date" class="form-control" required=""></input>
            </td></tr>

        <tr><td>Id Kamar</td>
            <td>Tanggal Perpanjangan</td>
        <tr><td><select name="id_kamar" class="form-select" required="">
                <option align=center value="">-- Pilih Kamar --</option>
                <?php 
                  $dataKamar = getKamar();
                  foreach ($dataKamar as $row) {
                    echo "<option ".$selected." value=".$row["id_kamar"].">".$row["id_kamar"]."</option>"; 
                  }
                 ?>
                </select></td>
            <td>
              <input name="tgl_perpanjang" type="date" class="form-control" required=""></input>
            </td></tr>

        <tr><td>Nama Penjaga</td>
            <td>Status Lunas</td>
        <tr><td><select name="id_penjaga" class="form-select" required="">
                <option align=center value="">-- Pilih Penjaga --</option>
                <?php 
                  $dataPenjaga = getPenjaga();
                  foreach ($dataPenjaga as $row) {
                    echo "<option value=".$row["id_penjaga"].">".$row["nama_penjaga"]."</option>"; 
                  }
                 ?>
                </select></td>
            <td><select name="status_lunas" class="form-select" required="">
                  <option align=center value="">-- Pilih Status --</option>
                  <option>Lunas</option>
                  <option>Belum</option>
                </select></td></tr>

      <tr>
        <td></td>
        <td><a href="../sewa.php" type="button" class="btn btn-primary">Kembali</a>
            <input type="submit" class="btn btn-success" value="Simpan" name="simpanTambahSewa"></input>
        </td></tr>
    </table>
    </center>
  </form>
</div>
</html>