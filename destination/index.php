<?php
    session_start();
    require "../script/php/conn.php";

    if( !isset($_SESSION["lokasi"])) {
        header("Location: /");
        exit;
    } else {
        $lokasi = $_SESSION["lokasi"];
        $tipe = $_SESSION["tipe"];
    }

    $result = mysqli_query($conn, "SELECT * FROM `tempat` WHERE `lokasi`='$lokasi' AND `tipe`='$tipe'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata | Get2Go</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    
</body>
</html>