<?php
    require "../script/php/conn.php";

    $id = $_GET["id"];

    $result = mysqli_query($conn, "SELECT * FROM tempat WHERE id = $id");

    $row = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detail tempat wisata <?= $row[1]; ?>, yang berisi lokasi, jam operasional, dan galeri tempat wisata">
    <title>Nama Tempat | Get2Go</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/style/place.css">
</head>
<body>

    <nav>
        <a href="/destination" class="icon-btn"><img src="../img/icon.webp" class="icon" alt="Gambar icon"></a>    
    </nav>
    
    <div class="centre">
        <article>
            <img src="<?= $row[9]; ?>" alt="Gambar <?= $row[1]; ?>">

            <h1><?= $row[2]; ?> | <?= $row[1]; ?></h1>

            <h2>Lokasi Tempat Wisata</h2>
            <div><div><iframe title="Gmap iframe" width="100%" height="500" id="gmap_canvas" src="<?= $row[8]; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>

            <h2>Jam Operasional Tempat Wisata</h2>
            <p>Jam Buka : <?= $row[5]; ?></p>
            <p>Jam Tutup : <?= $row[6]; ?></p>

            <h2>Harga Tiket Masuk</h2>
            <p>HTM : <?= $row[7]; ?></p>

            <h2>Galeri Tempat Wisata</h2>
            <img src="<?= $row[10]; ?>" alt="Gambar <?= $row[1]; ?>">
            <img src="<?= $row[11]; ?>" alt="Gambar <?= $row[1]; ?>">
            
            <br><br><br><hr>
            <p class="timestamp">Data diambil pada <?= $row[12]; ?></p>
        </article>
    </div>
</body>
</html>