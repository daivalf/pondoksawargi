<?php 
	include("../../../functions.php");

	if (isset($_POST["simpan"])) {
		$db = dbConnect();
		$id_kamar	= $_POST["id_kamar"];
		$tipe			= $_POST["tipe"];
		$harga		= $_POST["harga"];
		$status		= $_POST["status"];

		$sql = "UPDATE kamar SET id_kamar='$id_kamar',tipe='$tipe',harga_tahunan='$harga',status_ketersediaan='$status'
					  WHERE id_kamar ='$id_kamar'";

		$res = $db->query($sql);

		if ($db->affected_rows > 0) {
			header("Location: ../kamar.php?status=1");
		} else {
			header("Location: ../kamar.php?status=2");
		}
	}
 ?>