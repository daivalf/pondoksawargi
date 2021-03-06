<?php
    session_start();
    if (!isset($_SESSION["id_penjaga"])) 
    {
        header("Location: ../login.php?error=4");
    }
?>
<?php 
	include_once("../../functions.php");
  ?>
  
<!DOCTYPE html>
<html>
  <head>
    
    <?php 
    sidebar("Data Penghuni"); 
    ?>
  </head>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript" src="js/sweethapus.js"></script>
  <body>
    <?php
      if(isset($_GET["status"])) {
        $status = $_GET["status"];
        if($status == 1){
          showSuksesCRUD("Data Penghuni Berhasil<br>Diedit");
        }
        if($status == 2){
          showSuksesCRUD("Data Penghuni Berhasil<br>Ditambahkan");
        }
      }

    ?>
      <div class="container mt-3">
      
<h1>Data Penghuni</h1>

<table class="table table-borderedless" >
    <tr>
      <td>
    <form method="post">
    <div class="form-floating">
      <input type="text" class="form-control" name="dicari" placeholder="Leave a comment here" id="floatingTextarea">
        </input>
      <label for="floatingTextarea">Masukan Nama Penghuni</label>
      </td>
    </div>
    
    <td>
    <button type="submit" name="TblCari" class="btn btn-outline-secondary btn-lg">Cari</button>
    </td>
    
    <td align="right">
      <a href="crud_penghuni/tambah_penghuni.php" type="button" class="btn btn-outline-secondary btn-lg">Tambah</button>
    </td>
    
    </form>
    </table>

    <center>            

    <?php
      $db=dbConnect();
      if($db->connect_errno==0){
        if (isset($_POST["TblCari"]))
        {
          $dicari = $db->escape_string($_POST["dicari"]);
          $sqlcari="SELECT  p.id_penghuni,
                            p.nama_penghuni,
                            p.no_telp,
                            p.alamat_asal,
                            p.tanggal_lahir,
                            p.jenis_kelamin,
                            p.no_ktp,
                            p.no_telp_wali,
                            p.nama_wali,
                            p.status_aktif
                    FROM penghuni p
                    WHERE p.nama_penghuni LIKE '%$dicari%'
                    ORDER BY p.nama_penghuni";
          $res = $db->query($sqlcari);
          if($res){
            ?>
      <table class="table table-bordered">
          <tr class="bg-dark text-white" align="center">
            <th>Nama Penghuni</th>
            <th>Nomor Telepon</th>
            <th>Alamat Asal</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Nomor KTP</th>
            <th>Nomor Wali</th>
            <th>Nama Wali</th>
            <th>Status Aktif</th>
            <th colspan="2">Aksi</th>
          </tr>
  
                    <?php
                    $data=$res->fetch_all(MYSQLI_ASSOC); // ambil seluruh baris data
                    foreach($data as $datadiri){ // telusuri satu per satu
                      ?>
  
            <tr>
            <td><?php echo $datadiri["nama_penghuni"];?></td>
            <td><?php echo $datadiri["no_telp"];?></td>
            <td><?php echo $datadiri["alamat_asal"];?></td>
            <td><?php echo $datadiri["tanggal_lahir"];?></td>
            <td align="center"><?php echo $datadiri["jenis_kelamin"];?></td>
            <td><?php echo $datadiri["no_ktp"];?></td>
            <td><?php echo $datadiri["no_telp_wali"];?></td>
            <td><?php echo $datadiri["nama_wali"];?></td>
            <td align="center"><?php echo $datadiri["status_aktif"];?></td>
  
            <td><div><a href="crud_penghuni/edit_penghuni.php?id_penghuni=<?php echo $datadiri["id_penghuni"]; ?>" class="btn btn-primary"><i class="fa fa-pen"></i></a>
          </td>
          <td>
          <a href="penghuni.php?id_penghuni=<?php echo $datadiri["id_penghuni"]; ?>">
          <button class="btn btn-danger" type="submit" name="TblHapus"><i class="fa fa-trash"></i></button>
          </a>
          </div>
          </td>
          </tr>
            <?php
            }
            ?>
      </table>
      <?php
      $res->free();
    }
        }
        else
        {
        $sql="SELECT  p.id_penghuni,
                      p.nama_penghuni,
                      p.no_telp,
                      p.alamat_asal,
                      p.tanggal_lahir,
                      p.jenis_kelamin,
                      p.no_ktp,
                      p.no_telp_wali,
                      p.nama_wali,
                      p.status_aktif
          FROM penghuni p
          ORDER BY p.nama_penghuni";
        $res=$db->query($sql);
        if($res){
          ?>
    <table class="table table-bordered">
        <tr class="bg-dark text-white" align="center">
          <th>Nama Penghuni</th>
          <th>Nomor Telepon</th>
          <th>Alamat Asal</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Nomor KTP</th>
          <th>Nomor Wali</th>
          <th>Nama Wali</th>
          <th>Status Aktif</th>
          <th colspan="2">Aksi</th>
        </tr>

                  <?php
                  $data=$res->fetch_all(MYSQLI_ASSOC); // ambil seluruh baris data
                  foreach($data as $datadiri){ // telusuri satu per satu
                    ?>

          <tr>
          <td><?php echo $datadiri["nama_penghuni"];?></td>
          <td><?php echo $datadiri["no_telp"];?></td>
          <td><?php echo $datadiri["alamat_asal"];?></td>
          <td><?php echo $datadiri["tanggal_lahir"];?></td>
          <td align="center"><?php echo $datadiri["jenis_kelamin"];?></td>
          <td><?php echo $datadiri["no_ktp"];?></td>
          <td><?php echo $datadiri["no_telp_wali"];?></td>
          <td><?php echo $datadiri["nama_wali"];?></td>
          <td align="center"><?php echo $datadiri["status_aktif"];?></td>

          <td><div><a href="crud_penghuni/edit_penghuni.php?id_penghuni=<?php echo $datadiri["id_penghuni"]; ?>" class="btn btn-primary"><i class="fa fa-pen"></i></a>
          </td>
          <td>
          <a href="penghuni.php?id_penghuni=<?php echo $datadiri["id_penghuni"]; ?>">
          <button class="btn btn-danger" type="submit" name="TblHapus"><i class="fa fa-trash"></i></button>
          </a>
          </div>
          </td>
          </tr>
          <?php
          }
          ?>
    </table>
    <?php
		$res->free();
	}else
		echo "Gagal Eksekusi SQL".(DEVELOPMENT?" : ".$db->error:"")."<br>";
}
}
else
	echo "Gagal koneksi".(DEVELOPMENT?" : ".$db->connect_error:"")."<br>";
?>

<?php
        if (isset($_GET["id_penghuni"]))
        {
          showMessageHapus();
          $db = dbConnect();
          if ($db->connect_errno == 0) 
          {
              $id_penghuni = $_GET["id_penghuni"];
              // susun query delete
              $sql = "DELETE FROM penghuni WHERE id_penghuni='$id_penghuni'";
              // eksekusi query
              $res = $db->query($sql);
              if ($res) 
              {
                  if ($db->affected_rows > 0) // jika ada data terhapus
                  {
                      showBerhasilHapus();
                  }
                  else // jika sql sukses tapi tidak ada data dihapus
                  {
                      showGagalHapus();
                  }
              }
              else // gagal query
              {
                  echo "Data gagal dihapus <br><br>";
              }
          }
          else 
          {
              echo "Gagal koneksi" . (DEVELOPMENT ? " : " . $db->connect_error : "") . "<br>";
          }
      }
        ?>

  </body>
</html>
