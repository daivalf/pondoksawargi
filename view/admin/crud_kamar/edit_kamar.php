<?php 
	include("../../../functions.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php sidebar_crud("Ubah Data Kamar"); ?>
	<style type="text/css">
		.gambar{
			max-width: 250px;
			max-height: 200px;
		}

		body{
			font-size: 26px;
		}
	</style>
</head>
<body>
	<h1>Ubah Data Kamar</h1>
	<center>
		<form action="" method="post" enctype="multipart/form-data">
			<table class="table table-borderless mt-4" style="width: 80%">
				<tr>
					<td width="35%">Tipe</td>
					<td width="20%"></td>
					<td align="center">Gambar Kamar
					<td width="10%"></td>
				</tr>
				<tr>
					<td><select class="form-control">
						<option>Deluxe</option>
						<option>Standard</option>
					</select></td>
					<td></td>
					<td align="center"><input type="file" name="gambar" class="form-control" id="uploadImage" onchange="return PreviewImage()"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td></td>
					<td rowspan="2" align="center">
						<img src="../image/default.jpg" id="uploadPreview" class="gambar" /><br>
					</td>
				</tr>
				<tr>
					<td style="height: 160px"><input type="number" name="harga" class="form-control"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td align="center">
						<a href="../kamar.php" class="btn btn-primary">Kembali</a>
						<input type="submit" name="" class="btn btn-success">
					</td>
				</tr>
			</table>
		</form>
	</center>
</table>
</html>

<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>