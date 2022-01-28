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
    $data = getDataPenghuni($id_penghuni)->fetch_assoc();
 ?>
 <head>
 <!DOCTYPE html>
 <?php sidebar_crud("Ubah Data Penghuni"); ?>
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

  <p class="fs-1">Ubah Data Penghuni</p>
  <form action="edit.php" method="post">
  <table class="table table-borderless" style="font-size: 20px; width: 80%">
  <tr><td width="55%">Id Penghuni</td>
      <td>Jenis Kelamin</td></tr>
      <tr><td><input class="form-control" name="id_penghuni" type="text" value="<?php echo $data["id_penghuni"]; ?>" readonly></input></td>
          <td><select class="form-select" name="jenis_kelamin">
						<option <?php echo ($data["jenis_kelamin"] == "Pria"?"selected":"") ?>>Pria</option>
						<option <?php echo ($data["jenis_kelamin"] == "Wanita"?"selected":"") ?>>Wanita</option>
			  </select></td>
      </tr>
      <tr><td>Nama Penghuni</td>
          <td>Nomor Ktp</td>
      </tr>
      <tr><td><input name="nama_penghuni" type="text" value="<?php echo $data["nama_penghuni"]; ?>"
          class="form-control"></input></td>
          <td><input name="no_ktp" type="text" value="<?php echo $data["no_ktp"]; ?>" class="form-control"></input></td></tr>

      <tr><td>Nomor Telepon</td>
          <td>Nomor Wali</td>
      </tr>
      <tr><td><input name="no_telp" type="text" value="<?php echo $data["no_telp"]; ?>" class="form-control"></input></td>
          <td><input name="no_telp_wali" type="text" value="<?php echo $data["no_telp_wali"]; ?>" class="form-control"></input></td></tr>

        <tr><td>Alamat Asal</td>
            <td>Nama Wali</td>
        <tr><td><input name="alamat_asal" type="text" value="<?php echo $data["alamat_asal"]; ?>" class="form-control"></input></td>
            <td><input name="nama_wali" type="text" value="<?php echo $data["nama_wali"]; ?>" class="form-control"></input></td></tr>
            
        <tr><td>Tanggal Lahir</td>
            <td>Status Aktif</td></tr>
        <tr><td><input name="tanggal_lahir" type="date" value="<?php echo $data["tanggal_lahir"]; ?>" class="form-control"></input></td>
        <td><select class="form-select" name="status_aktif">
						<option <?php echo ($data["status_aktif"] == "Aktif"?"selected":"") ?>>Aktif</option>
						<option <?php echo ($data["status_aktif"] == "Tidak"?"selected":"") ?>>Tidak</option>
			</select></td></tr>

    <tr><td></td><td align="right"><a href="../penghuni.php" type="button" class="btn btn-primary btn-lg">Kembali</a>
                      <input type="submit" name="simpan" value="Simpan" class="btn btn-success btn-lg"></td></tr>
  </form>
  </table>
</div>
</html>