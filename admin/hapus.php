<?php
    session_start();
    require "../../script/auth.php";
    require "../../script/conn.php";

    $id = $_GET["id"];

    $result = mysqli_query($conn, "DELETE FROM tempat WHERE id = $id");

    
?>