<?php
    session_start();
    if (!isset($_SESSION["id_penjaga"])) 
    {
        header("Location: ../../login.php?error=4");
    }
?>
<?php 
	include("../../../functions.php");

	if (isset($_POST["simpanEditSewa"])) {
		$db = dbConnect();
		$tempIdPenghuni	= $db->escape_string($_POST["tempIdPenghuni"]);
		$id_penghuni		= $db->escape_string($_POST["id_penghuni"]);
		$id_kamar				= $db->escape_string($_POST["id_kamar"])		;
		$id_penjaga			= $db->escape_string($_POST["id_penjaga"]	);
		$tgl_masuk			= $db->escape_string($_POST["tgl_masuk"]);
		$tgl_perpanjang	= $db->escape_string($_POST["tgl_perpanjang"]);
		$status_lunas		= $db->escape_string($_POST["status_lunas"]);

		$sql = "UPDATE sewa SET id_penghuni='$id_penghuni',
														id_kamar='$id_kamar',
														id_penjaga='$id_penjaga',
														tanggal_sewa='$tgl_masuk',
														tanggal_perpanjangan='$tgl_perpanjang',
														status_lunas='$status_lunas'
					  WHERE id_penghuni ='$tempIdPenghuni'";

		$res = $db->query($sql);

		if ($db->affected_rows > 0) {
			header("Location: ../sewa.php?status=1");
		} else {
			header("Location: ../sewa.php?status=2");
		}
	}

	if (isset($_POST["simpanTambahSewa"])) {
		$db = dbConnect();
		$tempIdPenghuni	= $db->escape_string($_POST["tempIdPenghuni"]);
		$id_penghuni		= $db->escape_string($_POST["id_penghuni"]);
		$id_kamar				= $db->escape_string($_POST["id_kamar"])		;
		$id_penjaga			= $db->escape_string($_POST["id_penjaga"]	);
		$tgl_masuk			= $db->escape_string($_POST["tgl_masuk"]);
		$tgl_perpanjang	= $db->escape_string($_POST["tgl_perpanjang"]);
		$status_lunas		= $db->escape_string($_POST["status_lunas"]);

		$sql = "INSERT INTO sewa VALUES ('$id_penghuni','$id_kamar','$id_penjaga','$tgl_masuk','$tgl_perpanjang','$status_lunas')";

		$res = $db->query($sql);

		if ($db->affected_rows > 0) {
			header("Location: ../sewa.php?status=1");
		} else {
			header("Location: ../sewa.php?status=2");
		}
	}
 ?>