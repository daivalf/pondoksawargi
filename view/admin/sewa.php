<?php 	
	include("../../functions.php");
 ?>

<!DOCTYPE html>
<html>

    <head>
      <?php sidebar("Data Sewa"); ?>
    </head>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<body>

<div class="container mt-3">

  <h1>Data Sewa</h1>

  <table class="table table-borderedless" >
      
  <tr>
    <td>
    <form>
      <div class="form-floating">
        <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
      <label for="floatingTextarea">Masukan Nama Penghuni</label>
      </div>
    </td>

      <td>
        <button type="button" class="btn btn-outline-secondary btn-lg">Cari</button>
      </td>
      <td align="right">
        <a href="crud_sewa/tambah_sewa.php" type="button" class="btn btn-outline-secondary btn-lg">Tambah</button>
      </td>
    </form>
  </tr>

  </table>

  <center>
     
  <?php
      $db=dbConnect();
      if($db->connect_errno==0){
        $sql="SELECT  p.id_penghuni,
                      k.nama_penghuni namapenghuni,
                      p.id_kamar,
                      p.id_penjaga,
                      p.tanggal_sewa,
                      p.tanggal_perpanjangan,
                      i.harga_tahunan hargasewa,
                      p.status_lunas
          FROM sewa p 
          JOIN penghuni k 
          ON p.id_penghuni=k.id_penghuni
          JOIN kamar i
          on p.id_kamar=i.id_kamar";
          
        $res=$db->query($sql);
        if($res){
          ?>
    <table class="table table-bordered">
      <tr class="bg-dark text-white" align="center">
        <th>Nama Penghuni</th>
        <th>ID Kamar</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Perpanjangan</th>
        <th>Harga Sewa</th>
        <th>Status Lunas</th>
        <th>Aksi</th>
      </tr>
      <?php
                  $data=$res->fetch_all(MYSQLI_ASSOC); // ambil seluruh baris data
                  foreach($data as $datadiri){ // telusuri satu per satu
                    ?>
        <tr>
          <td align="center"><?php echo $datadiri["namapenghuni"];?></td>
          <td align="center"><?php echo $datadiri["id_kamar"];?></td>
          <td align="center"><?php echo $datadiri["tanggal_sewa"];?></td>
          <td align="center"><?php echo $datadiri["tanggal_perpanjangan"];?></td>
          <td align="center"><?php echo $datadiri["hargasewa"];?></td>
          <td align="center"><?php echo $datadiri["status_lunas"];?></td>
          <td><div align="center"><a href="crud_sewa/edit_sewa.php" class="btn btn-primary"><i class="fa fa-pen"></i></a></div></td>
          </tr>

          <?php
              }
          ?>  
    
        </table>
    </center>
</div>
<?php
		$res->free();
	}else
		echo "Gagal Eksekusi SQL".(DEVELOPMENT?" : ".$db->error:"")."<br>";
}
else
	echo "Gagal koneksi".(DEVELOPMENT?" : ".$db->connect_error:"")."<br>";
?>
</body>
</html>
