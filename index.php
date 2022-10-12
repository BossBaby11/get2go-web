<?php
    session_start();

    if ( isset($_POST["submit"])) {
        $_SESSION["lokasi"] =  $_POST["lokasi"];
        $_SESSION["tipe"] = $_POST["tipe"];

        header("Location: /destination/");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/style/home.css">
        <link rel="stylesheet" href="/style/home.tmp.css">
        <title>Home | Get2Go</title>
    </head>
    <body>
        <div class="backimg">
            <div class="parent">
                <div class="child">
                    <h1>Choose Your Destination</h1>
    
                    <form action="" method="post">
                        <select name="lokasi" id="lokasi" onclick="select()" required autofocus>
                            <option value="" id="placeholder">Pick an area ...</option>
                            <option value=""></option>
                            <option value="jakarta-utara">Jakarta Utara</option>
                            <option value="jakarta-barat">Jakarta Barat</option>
                            <option value="jakarta-pusat">Jakarta Pusat</option>
                            <option value="jakarta-timur">Jakarta Timur</option>
                            <option value="jakarta-selatan">Jakarta Selatan</option>
                        </select>
                        <label class="option"><input type="radio" name="tipe" value="indoor" required> Indoor</label>
                        <label class="option"><input type="radio" name="tipe" value="outdoor" required> Outdoor</label>

                        <br><button type="submit" name="submit"><b>Telusuri</b></button>
                    </form>
                </div>
            </div>
        </div>        
    </body>
</html>
<script src="/script/js/select.js"></script>