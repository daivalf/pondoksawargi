<?php
    session_start();
    if (!isset($_SESSION["id_penjaga"])) 
    {
        header("Location: ../../login.php?error=4");
    }
?>
<?php 
	include("../../../functions.php");

	if (isset($_POST["id_kamar"])) {
		$db = dbConnect();
		$id_kamar	= $db->escape_string($_POST["id_kamar"]);
		$tipe		= $db->escape_string($_POST["tipe"]);
		$harga		= $db->escape_string($_POST["harga"]);
		$status		= $db->escape_string($_POST["status"]);

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