<?php
    session_start();
    if (!isset($_SESSION["id_penjaga"])) 
    {
        header("Location: ../../login.php?error=4");
    }
?>

<?php
    include("../../../functions.php");
    
    if(isset($_POST["simpanTambahPenghuni"])){
    $db=dbConnect();
    $id_Penghuni    =$db->escape_string($_POST["id_penghuni"]);
    $nama_Penghuni  =$db->escape_string($_POST["nama_penghuni"]);
    $no_telp        =$db->escape_string($_POST["no_telp"]);
    $alamat_asal    =$db->escape_string($_POST["alamat_asal"]);
    $tanggal_lahir  =$db->escape_string($_POST["tgl_lahir"]);
    $jenis_kelamin  =$db->escape_string($_POST["jenis_kelamin"]);
    $no_ktp         =$db->escape_string($_POST["no_ktp"]);
    $no_telp_wali   =$db->escape_string($_POST["no_telp_wali"]);
    $nama_wali      =$db->escape_string($_POST["nama_wali"]);
    $status_aktif   =$db->escape_string($_POST["status_aktif"]);

    $sql ="INSERT INTO penghuni VALUES ('$id_Penghuni', 
                                        '$nama_Penghuni', 
                                        '$no_telp', 
                                        '$alamat_asal',
                                        '$tanggal_lahir', 
                                        '$jenis_kelamin',
                                        '$no_ktp',
                                        '$no_telp_wali',
                                        '$nama_wali',
                                        '$status_aktif')";

    $res = $db->query($sql);
    
    if ($db->affected_rows > 0) {
        header("Location: ../penghuni.php?status=2");
    }
    }

;?>