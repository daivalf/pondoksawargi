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
<?php
    if (isset($_GET["id_penghuni"]))
    {
        $db = dbConnect();
        $id_penghuni = $db->escape_string($_GET["id_penghuni"]);
        echo $id_penghuni;
    }
?>