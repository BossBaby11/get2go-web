<?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: /auth");
        exit;
    } else {
        $admin_name = $_SESSION["name"];
    }

    $_SESSION = [];
    session_unset();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Berhasil</title>
    <link rel="stylesheet" href="/style/login.css">
    <link rel="icon" href="/favicon.ico">
</head>
<body>
<section class="result">

        <h2>Logout Berhasil</h2>
        <h4>Sampai jumpa <?= $admin_name; ?>!</h4>
        <a href="/auth"><button>Kembali ke Menu Login</button></a>
    </section>
</body>
</html>