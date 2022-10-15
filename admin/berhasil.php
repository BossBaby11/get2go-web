<?php
    session_start();
    require "../script/php/auth.php";
    require "../script/php/conn.php";

    $message = $_SESSION["type"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Berhasil Ditambah</title>
    <link rel="stylesheet" href="/style/admin.css">
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <section class="result">
        <h2><?= $message; ?></h2>
        <a href="<?= $dst; ?>"><button>Kembali ke Dashboard</button></a>
    </section>
    
</body>
</html>