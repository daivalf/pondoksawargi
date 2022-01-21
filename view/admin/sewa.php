<?php 	
	include("../../functions.php");
 ?>
<!DOCTYPE html>
<head>
	<?php sidebar("Data Kamar"); ?>
</head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">

  <p class="fs-1">Data Sewa</p>
  <table class="table table-borderedless" >
      
  <tr><td>
  <form>
  <div class="form-floating">
  <input class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></input>
  <label for="floatingTextarea">Masukan Nama Penghuni</label></td>
</div>
  </div>
  <td><button type="button" class="btn btn-outline-secondary btn-lg">Cari</button></td>
  <td><button type="button" class="btn btn-outline-secondary btn-lg">Tambah</button></td>
</form>
</table>
  <center>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama Penghuni</th>
        <th>Id Kamar</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Perpanjangan</th>
        <th>Harga Sewa</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
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
    </tbody>
  </table>
    </center>
</div>
</body>
</html>
