<?php 	
	include("../../functions.php");
 ?>
<!DOCTYPE html>
<head>
	<?php sidebar("Data Sewa"); ?>
</head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">

  <h1>Data Sewa</h1>
  <table class="table table-borderedless" >
      
  <tr><td>
  <form>
  <div class="form-floating">
  <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
  <label for="floatingTextarea">Masukan Nama Penghuni</label></td>
</div>
  </div>
  <td><button type="button" class="btn btn-outline-secondary btn-lg">Cari</button></td>
  <td align="right"><button type="button" class="btn btn-outline-secondary btn-lg">Tambah</button></td>
</form>
</table>
  <center>            
  <table class="table table-bordered">
      <tr class="bg-dark text-white" align="center">
        <th>Nama Penghuni</th>
        <th>Id Kamar</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Perpanjangan</th>
        <th>Harga Sewa</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
      <tr>
        <td>asdhj</td>
        <td>asodkal</td>
        <td>asldmals</td>
        <td>asda</td>
        <td>xcacas</td>
        <td>asdawa</td>
        <td><div align="right">
		    	<a href="" class="btn btn-primary"><i class="fa fa-pen"></i></a>
		    </div></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><div align="right"><a href="" class="btn btn-primary"><i class="fa fa-pen"></i></a></div></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><div align="right"><a href="" class="btn btn-primary"><i class="fa fa-pen"></i></a></div></td>
      </tr>
  </table>
    </center>
</div>
</body>
</html>
