<?php
    session_start();
    if (!isset($_SESSION["id_penjaga"])) 
    {
        header("Location: ../../login.php?error=4");
    }
?>
<?php 	
	include("../../../functions.php");

  $id_penghuni = $_GET["id_penghuni"];
  $data = getDataSewa($id_penghuni)->fetch_assoc();

  $selected = "";
 ?>
 <head>
 <!DOCTYPE html>
<html>
<?php sidebar_crud("Ubah Data Sewa"); ?>
  
  </head>

  <body>
<div class="container mt-3">

  <h1>Ubah Data Sewa</h1>
  <form action="crud_sewa.php" method="post">
    <center>
    <table class="table table-borderless mt-4" style="font-size: 22px; width: 70%">
        <input type="hidden" name="tempIdPenghuni" <?php echo "value='".$id_penghuni."'" ?>>
        <tr><td>Nama Penghuni</td>
            <td>Tanggal Masuk</td></tr>
        <tr><td><select name="id_penghuni" class="form-select">
                <?php 
                  $dataPenghuni = getPenghuni();
                  foreach ($dataPenghuni as $row) {
                    if ($data["id_penghuni"] == $row["id_penghuni"]) {
                      $selected = "selected";
                    } else $selected = "";

                    echo "<option ".$selected." value=".$row["id_penghuni"].">".
                    $row["nama_penghuni"]."</option>"; 
                  }
                 ?>
                </select></td>
            <td>
              <input name="tgl_masuk" type="date" class="form-control" <?php echo "value='".$data["tanggal_sewa"]."'" ?>></input>
            </td></tr>

        <tr><td>Id Kamar</td>
            <td>Tanggal Perpanjangan</td>
        <tr><td><select name="id_kamar" class="form-select">
                <?php 
                  $dataKamar = getKamar();
                  foreach ($dataKamar as $row) {
                    if ($data["id_kamar"] == $row["id_kamar"]) {
                      $selected = "selected";
                    } else $selected = "";

                    echo "<option ".$selected." value=".$row["id_kamar"].">".$row["id_kamar"]."</option>"; 
                  }
                 ?>
                </select></td>
            <td>
              <input name="tgl_perpanjang" type="date" class="form-control" <?php echo "value='".$data["tanggal_perpanjangan"]."'" ?>></input>
            </td></tr>

        <tr><td>Nama Penjaga</td>
            <td>Status Lunas</td>
        <tr><td><select name="id_penjaga" class="form-select">
                <?php 
                  $dataPenjaga = getPenjaga();
                  foreach ($dataPenjaga as $row) {
                    if ($data["id_penjaga"] == $row["id_penjaga"]) {
                      $selected = "selected";
                    } else $selected = "";

                    echo "<option ".$selected." value=".$row["id_penjaga"].">".$row["nama_penjaga"]."</option>"; 
                  }
                 ?>
                </select></td>
            <td><select name="status_lunas" class="form-select">

                  <option  <?php echo ($data["status_lunas"] == "Lunas"?"selected":"") ?>>Lunas</option>
                  <option <?php echo ($data["status_lunas"] == "Belum"?"selected":"") ?>>Belum</option>
                </select></td></tr>

      <tr>
        <td></td>
        <td><a href="../sewa.php" type="button" class="btn btn-primary">Kembali</a>
            <input type="submit" class="btn btn-success" value="Simpan" name="simpanEditSewa"></input>
        </td></tr>
    </table>
    </center>
  </form>
</div>
</html>