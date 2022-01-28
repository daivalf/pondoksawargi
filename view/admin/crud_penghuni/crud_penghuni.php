<?php
    session_start();
    if (!isset($_SESSION["id_penjaga"])) 
    {
        header("Location: ../../login.php?error=4");
    }
?>

<?php
    include("../../../functions.php");

    $db=dbConnect()
;?>