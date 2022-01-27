<?php
    session_start();
    if (!isset($_SESSION["id_penjaga"])) 
    {
        header("Location: ../../login.php?error=4");
    }
?>
<?php 
	include("../../../functions.php");

	if (isset($_POST["simpan"])) {
		$db = dbConnect();
		$id_penghuni	    = $db->escape_string($_POST["id_penghuni"]);
		$nama_penghuni		= $db->escape_string($_POST["nama_penghuni"]);
		$no_telp		    = $db->escape_string($_POST["no_telp"]);
		$alamat_asal		= $db->escape_string($_POST["alamat_asal"]);
        $tanggal_lahir      = $db->escape_string($_POST["tanggal_lahir"]);
        $jenis_kelamin      = $db->escape_string($_POST["jenis_kelamin"]);
        $no_ktp             = $db->escape_string($_POST["no_ktp"]);
        $no_telp_wali       = $db->escape_string($_POST["no_telp_wali"]);
        $nama_wali          = $db->escape_string($_POST["nama_wali"]);
        $status_aktif       = $db->escape_string($_POST["status_aktif"]);

		$sql = "UPDATE penghuni SET id_penghuni='$id_penghuni',nama_penghuni='$nama_penghuni',no_telp='$no_telp',alamat_asal='$alamat_asal',
                tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',no_ktp='$no_ktp',no_telp_wali='$no_telp_wali',
                nama_wali='$nama_wali',status_aktif='$status_aktif' 
				WHERE id_penghuni ='$id_penghuni'";

		$res = $db->query($sql);

		if ($db->affected_rows > 0) {
			header("Location: ../penghuni.php?status=1");
		} else {
			header("Location: ../penghuni.php?status=2");
		}
	}
 ?>