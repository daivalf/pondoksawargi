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
            <?php sidebar_crud("Tambah Data Penghuni"); ?>
        </html>
</head>

<body>
    <div class="container-mt-3">
        <h1>Tambah Data Penghuni</h1>
            <form action="crud_penghuni.php" method="post">
                <center>
                    <table class="table table-borderless mt-4" style="font-size: 22px; width: 70%">
                        <tr><td>Id Penghuni</td>
                            <td>Jenis Kelamin</td></tr>
                        <tr><td><input name="id_penghuni" class="form-control" type="text" required="">
                            <td><select name="jenis_kelamin" class="form-select" required="">
                                <option align=center value="">--Jenis Kelamin--</option>
                                <?php
                                    $dataPenghuni = getPenghuni();
                                    foreach ($dataPenghuni as $row){

                                        echo "<option ".$selected." value=".$row["id_penghuni"].">".
                                        $row["jenis_kelamin"]."</option>";

                                    }
                                ?>
                                </select></td>
                        
                        <tr><td>Nama Penghuni</td>
                            <td>Nomor KTP</td>
                        <tr><td><input name="nama_penghuni" class="form-control" type="text" required="">
                            <td><input name="no_ktp" class="form-control" type="text" required="">
                            </td></tr>     
                            
                        <tr><td>Nomor Telepon</td>
                            <td>Nomor Telepon Wali</td>
                        <tr><td><input name="no_telp" class="form-control" type="text" required="">
                            <td><input name="no_telp_wali" class="form-control" type="text" required="">
                            </td></tr>

                        <tr><td>Alamat Asal</td>
                            <td>Nama Wali</td>
                        <tr><td><input name="alamat_asal" class="form-control" type="text" required="">
                            <td><input name="nama_wali" class="form-control" type="text" required="">
                            </td></tr>

                        <tr><td>Tanggal Lahir</td>
                        <tr><td><input name="tgl_lahir" class="form-control" type="date" required="">
                            </td></tr>
                            
                            <tr>
                            <td></td>
                            <td align="right"><a href="../tambah.php" type="button" class="btn btn-primary btn-lg">Kembali</a>
                            <input type="submit" class="btn btn-success btn-lg" value="Simpan" name="simpanTambahPenghuni"></input>
                            </td></tr>
                    </table>
                </center>
    </div>
</body>