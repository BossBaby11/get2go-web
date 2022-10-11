<?php
    require "script/conn.php";

    if ( isset($_POST["submit"])) {
        $lokasi = htmlspecialchars($_POST["lokasi"]);
        $kategori = htmlspecialchars($_POST["lokasi"]);
        $utama = htmlspecialchars($_POST['utama']);
        
        mysqli_query($conn, $insert);

        $_SESSION["type"] =  "data berhasil ditambah";
        $_SESSION["dst"] = "/admin/acara";

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
        <link rel="stylesheet" href="/style/home.css">
        <link rel="stylesheet" href="/style/home.tmp.css">
        <title>Home | Nama Website</title>
    </head>
    <body>
        <div class="backimg">
            <div class="parent">
                <div class="child">
                    <h1>Choose Your Destination</h1>
    
                    <form action="" method="post">
                        <select name="lokasi" id="lokasi" onclick="select()" onchange="optionshow()">
                            <option value="" id="placeholder">Seach here...</option>
                            <option value=""></option>
                            <option value="jakarta-utara">Jakarta Utara</option>
                            <option value="jakarta-barat">Jakarta Barat</option>
                            <option value="jakarta-pusat">Jakarta Pusat</option>
                            <option value="jakarta-timur">Jakarta Timur</option>
                            <option value="jakarta-selatan">Jakarta Selatan</option>
                        </select>

                        <label class="option" style="display:none;"><input type="radio" name="optradio" value="indoor"> Indoor</label>
                        <label class="option" style="display:none;"><input type="radio" name="optradio" value="outdoor"> Outdoor</label>

                        <br><button type="submit">Telusuri</button>
                    </form>
                </div>
            </div>
        </div>        
    </body>
</html>
<script src="/script/select.js"></script>