<?php
    session_start();
    require "../script/php/auth.php";
    require "../script/php/conn.php";

    if ( isset($_POST["submit"])) {
        $id = $_POST["id"];
        $lokasi = htmlspecialchars($_POST["lokasi"]);
        $nama = htmlspecialchars($_POST["nama"]);
        $tipe = htmlspecialchars($_POST["tipe"]);
        $deskripsi = htmlspecialchars($_POST["deskripsi"]);
        $buka = htmlspecialchars($_POST["buka"]);
        $tutup = htmlspecialchars($_POST["tutup"]);
        $htm = htmlspecialchars($_POST["htm"]);
        $gmaps = htmlspecialchars($_POST["gmaps"]);
        $foto1 = htmlspecialchars($_POST["foto1"]);
        $foto2 = htmlspecialchars($_POST["foto2"]);
        $foto3 = htmlspecialchars($_POST["foto3"]);
        $timestamp = htmlspecialchars($_POST["timestamp"]);

        $insert = "INSERT INTO `tempat`(`id`,`lokasi`,`nama`,`tipe`,`deskripsi`,`buka`,`tutup`,`htm`,`gmaps`,`foto1`,`foto2`,`foto3`,`timestamp`) VALUES (NULL,'$lokasi','$nama','$tipe','$deskripsi','$buka','$tutup','$htm','$gmaps','$foto1','$foto2','$foto3','$timestamp')";

        mysqli_query($conn, $insert);

        $_SESSION["type"] =  "ditambah";

        header("Location: /admin/berhasil.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data | Get2Go</title>
    <link rel="stylesheet" href="/style/input.css">
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <h1>Tambah Data Tempat Wisata</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Lokasi Tempat Wisata</h3>
        <input type="text" name="lokasi" id="lokasi" required autocomplete="off" autofocus>

        <h3>Nama Tempat Wisata</h3>
        <input type="text" name="nama" id="nama" required autocomplete="off">

        <h3>Kategori Tempat Wisata</h3>
        <input type="text" name="tipe" id="tipe" required autocomplete="off">

        <h3>Deskripsi Tempat Wisata</h3>
        <input type="text" name="deskripsi" id="deskripsi" required autocomplete="off">

        <h3>Jam Buka Operasional</h3>
        <input type="time" name="buka" id="buka" required autocomplete="off">
        
        <h3>Jam Tutup Operasional</h3>
        <input type="time" name="tutup" id="tutup" required autocomplete="off">
        
        <h3>HTM Tempat Wisata</h3>
        <input type="text" name="htm" id="htm" required autocomplete="off">

        <h3>Link Google Maps</h3>
        <input type="url" name="gmaps" id="gmaps" required autocomplete="off">
        
        <h3>Link foto 1</h3>
        <input type="text" name="foto1" id="foto1" required autocomplete="off">
        
        <h3>Link foto 2</h3>
        <input type="text" name="foto2" id="foto2" required autocomplete="off">

        <h3>Link foto 3</h3>
        <input type="text" name="foto3" id="foto3" required autocomplete="off">

        <h3>Timestamp</h3>
        <input type="datetime-local" name="timestamp" id="timestamp" required autocomplete="off">

        <br><br>
        <button type="submit" name="submit">Simpan Perubahan</button>
    </form>

</body>
</html>