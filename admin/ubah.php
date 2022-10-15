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
        <input type="url" name="gambar1" id="gambar1" required autocomplete="off" value="<?= $row[9]; ?>">
        
        <h3>Link Gambar 2</h3>
        <input type="url" name="gambar2" id="gambar2" required autocomplete="off" value="<?= $row[10]; ?>">

        <h3>Link Gambar 3</h3>
        <input type="url" name="gambar2" id="gambar2" required autocomplete="off" value="<?= $row[11]; ?>">

        <br><br>
        <button type="submit" name="submit">Simpan Perubahan</button>
    </form>

</body>
</html>