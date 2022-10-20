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

    $result = mysqli_query($conn, "SELECT id, lokasi, nama, foto1 FROM `tempat` WHERE `lokasi`='$lokasi' AND `tipe`='$tipe'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="List tempat wisata di daerah <?= $lokasi; ?> yang bisa anda kunjungi.">
    <title>Destinasi Wisata | Get2Go</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/style/destination.css">
</head>

<body>
    <nav>
        <a href="/" class="icon-btn"><img src="/img/icon.webp" class="icon" alt="icon"></a>
        <h1>Rekomendasi Untuk Anda</h1>   
    </nav>
    
    <div class="centre">
        <article>
            <?php while ( $row = mysqli_fetch_row($result)) : ?>
            <div class="card">
                <a href="/place/index.php?id=<?= $row[0]; ?>"><img src="<?= $row[3]; ?>" alt="Gambar <?= $row[1]; ?>"></a>
                <div class="container">
                    <a href="/place/index.php?id=<?= $row[0]; ?>"><h2><b><?= $row[2]; ?></b></h2></a>
                    <a href="/place/index.php?id=<?= $row[0]; ?>"><h4><?= $row[1]; ?></h4></a>
                </div>
            </div>
            <?php endwhile; ?>
        </article>
    </div>
</body>
</html>