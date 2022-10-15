<?php
    session_start();
    require "../script/php/auth.php";
    require "../script/php/conn.php";

    $id = $_GET["id"];

    $result = mysqli_query($conn, "SELECT * FROM tempat WHERE id = $id");

    $row = mysqli_fetch_row($result);

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
        $gambar1 = htmlspecialchars($_POST["gambar1"]);
        $gambar2 = htmlspecialchars($_POST["gambar2"]);
        $gambar3 = htmlspecialchars($_POST["gambar3"]);

        $insert = "UPDATE `tempat` SET `id`='$id',`lokasi`='$lokasi',`nama`='$nama',`tipe`='$tipe',`deskripsi`='$deskripsi',`buka`='$buka',`tutup`='$tutup',`htm`='$htm',`gmaps`='$gmaps',`gambar1`='$gambar1',`gambar2`='$gambar2',`gambar3`='$gambar3' WHERE id = $id";

        mysqli_query($conn, $insert);

        $_SESSION["type"] =  "Data Berhasil Diubah";

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
    <title>Tambah Data | Kementerian Pariwisata</title>
    <link rel="stylesheet" href="/style/input.css">
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <h1>Tambah Data Tempat Wisata</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $row[0]; ?>">

        <h3>Lokasi Tempat Wisata</h3>
        <input type="text" name="lokasi" id="lokasi" required autocomplete="off" value="<?= $row[1]; ?>" autofocus>

        <h3>Nama Tempat Wisata</h3>
        <input type="text" name="nama" id="nama" required autocomplete="off" value="<?= $row[2]; ?>">

        <h3>Kategori Tempat Wisata</h3>
        <input type="text" name="tipe" id="tipe" required autocomplete="off" value="<?= $row[3]; ?>">

        <h3>Deskripsi Tempat Wisata</h3>
        <input type="text" name="deskripsi" id="deskripsi" required autocomplete="off" value="<?= $row[4]; ?>">

        <h3>Jam Buka Operasional</h3>
        <input type="time" name="buka" id="buka" required autocomplete="off" value="<?= $row[5]; ?>">
        
        <h3>Jam Tutup Operasional</h3>
        <input type="time" name="tutup" id="tutup" required autocomplete="off" value="<?= $row[6]; ?>">
        
        <h3>HTM Tempat Wisata</h3>
        <input type="text" name="htm" id="htm" required autocomplete="off" value="<?= $row[7]; ?>">

        <h3>Link Google Maps</h3>
        <input type="url" name="gmap" id="gmap" required autocomplete="off" value="<?= $row[8]; ?>">
        
        <h3>Link Gambar 1</h3>
        <input type="text" name="gambar1" id="gambar1" required autocomplete="off" value="<?= $row[9]; ?>">
        
        <h3>Link Gambar 2</h3>
        <input type="text" name="gambar2" id="gambar2" required autocomplete="off" value="<?= $row[10]; ?>">

        <h3>Link Gambar 3</h3>
        <input type="text" name="gambar3" id="gambar3" required autocomplete="off" value="<?= $row[11]; ?>">

        <br><br>
        <button type="submit" name="submit">Simpan Perubahan</button>
    </form>

</body>
</html>