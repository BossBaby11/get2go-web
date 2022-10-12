<?php
    session_start();

    if( !isset($_SESSION["lokasi"])) {
        header("Location: /");
        exit;
    } else {
        echo $lokasi = $_SESSION["lokasi"];
        echo " - ";
        echo $tipe = $_SESSION["tipe"];
    }
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