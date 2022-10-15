<?php
    session_start();
    require "../script/php/auth.php";
    require "../script/php/conn.php";

    $id = $_GET["id"];

    $result = mysqli_query($conn, "DELETE FROM tempat WHERE id = $id");

    $_SESSION["type"] =  "data berhasil dihapus";

    header("Location: /admin/berhasil.php");
    exit;
?>