<?php 
	include("../../../functions.php");

	$id_kamar = $_GET["id_kamar"];
	$data = getDataKamar($id_kamar)->fetch_assoc();

 ?>
<!DOCTYPE html>
<html>
<head>
	<?php sidebar_crud("Ubah Data Kamar"); ?>
</head>
<body>
	<h1>Ubah Data Kamar</h1>
	<center>
		<form action="edit.php" method="post">
			<table class="table table-borderless mt-4" style="width: 70%; font-size: 22px">
				<tr>
					<td width="35%">Id Kamar</td>
					<td width="20%"></td>
					<td>Harga Tahunan</td>
					<td width="10%"></td>
				</tr>
				<tr style="height: 80px">
					<td><input type="text" name="id_kamar" class="form-control" value="<?php echo $data["id_kamar"] ?>" readonly></td>
					<td></td>
					<td><input type="number" name="harga" class="form-control" value="<?php echo $data["harga_tahunan"] ?>"></td>
				</tr>
				<tr>
					<td>Tipe</td>
					<td></td>
					<td>Status Ketersediaan</td>
				</tr>
				<tr style="height: 70px">
					<td><input type="text" name="tipe" class="form-control" value="<?php echo ($data["tipe"]); ?>" readonly	></td>
					<td></td>
					<td><select class="form-select" name="status">
						<option <?php echo ($data["status_ketersediaan"] == "Tersedia"?"selected":"") ?>>Tersedia</option>
						<option <?php echo ($data["status_ketersediaan"] == "Tidak"?"selected":"") ?>>Tidak</option>
					</select></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td align="right">
						<a href="../kamar.php" class="btn btn-primary">Kembali</a>
						<input type="submit" name="simpan" class="btn btn-success" value="Simpan">
					</td>
				</tr>
			</table>
		</form>
	</center>
</table>
</html>