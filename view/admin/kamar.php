<?php
    session_start();
    if (!isset($_SESSION["id_penjaga"])) 
    {
        header("Location: ../login.php?error=4");
    }
?>
<?php 	
	include("../../functions.php");

	dbConnect();

	$data = getKamar()->fetch_all(MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php sidebar("Data Kamar"); ?>
</head>
<body>
	<h1>Data Kamar</h1>
	<center>
		<?php 
			if (isset($_GET["status"])) {
				$status = $_GET["status"];
				if ($status == 1) {
					showSuksesEdit();
				} else {
					showGagalEdit();
				}
			}
		 ?>
		<table class="table table-bordered <?php if (isset($_GET["status"])) {echo "";} else echo "mt-4"; ?>" style="width: 80%">
				<tr align="center" class="bg-dark text-white">
					<th>Id Kamar</th>
					<th>Tipe</th>
					<th>Harga Tahunan</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			<?php 
				foreach ($data as $row) {
					?>
						<tr>
							<td align="center"><?php echo $row["id_kamar"] ?></td>
							<td align="center"><?php echo $row["tipe"] ?></td>
							<td>Rp. <?php echo number_format($row["harga_tahunan"], 0, ',', '.') ?></td>
							<td align=""><?php echo $row["status_ketersediaan"] ?></td>
							<td align="center"><a href="crud_kamar/edit_kamar.php?id_kamar=<?php echo $row['id_kamar']; ?>" class="fa fa-pen btn btn-primary"></a></td>
						</tr>
					<?php 
				}
			 ?>
		</table>
	</center>
</body>
</html>