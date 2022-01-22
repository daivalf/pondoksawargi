<?php
    include_once("functions.php");
?>
<?php
    $db = dbConnect();
    if (isset($_POST["TblLogin"])) 
    {
        $id_penjaga = $db->escape_string($_POST["id_penjaga"]);
        $password = $db->escape_string($_POST["password"]);
        $sql = "SELECT id_penjaga, nama_penjaga
                FROM penjaga
                WHERE id_penjaga = '$id_penjaga' and password = '$password'";
        $res = $db->query($sql);
        if ($res) 
        {
            if ($res->num_rows == 1) 
            {
                $data = $res->fetch_assoc();
                session_start();
                $_SESSION["id_penjaga"] = $data["id_penjaga"];
                $_SESSION["nama_penjaga"] = $data["nama_penjaga"];
                header("Location: view/admin/sewa.php");
            }
            else 
            {
                header("Location: view/login.php?error=1");
            }
        }
        else 
        {
            header("Location: view/login.php?error=2");
        }
    }
    else {
        header("Location: view/login.php?error=3");
    }
?>