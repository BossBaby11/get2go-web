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
        <input type="hidden" name="id" id="id" value="<?= $row[0]; ?>">

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

        <br><br>
        <button type="submit" name="submit">Simpan Perubahan</button>
    </form>

</body>
</html>