<?php
    session_start();
    require "../script/php/auth.php";
    require "../script/php/conn.php";

    $admin_name = $_SESSION["name"];

    $result = mysqli_query($conn, "SELECT * FROM tempat");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Get2Go</title>
    <link rel="stylesheet" href="/style/admin.css">
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <nav>
        <h1> Selamat datang, <?= $admin_name ?>!</h1>
    
        <a href="logout.php"><button>Logout</button></a>

    </nav>

    <section>
        <h2>Data Tempat Wisata</h2><br>

        <a href="tambah.php" class="add-button">Tambah</a>
        <div style="overflow-x:auto;">
            <table border="1" cellpadding="10" cellspacing="2">
                <tr>
                    <th>ID</th>
                    <th>Aksi</th>
                    <th>Lokasi</th>
                    <th>Nama Tempat</th>
                    <th>Kategori Tempat</th>
                    <th>Deskripsi</th>
                    <th>Jam Buka</th>
                    <th>Jam Tutup</th>
                    <th>HTN</th>
                    <th>Link GMaps</th>
                    <th>Gambar 1</th>
                    <th>Gambar 2</th>
                    <th>Gambar 3</th>
                    <th>Timestamp</th>
                </tr>

                <?php while ( $row = mysqli_fetch_row($result)) : ?>
                    <tr>
                        <td><?= $row[0]; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row[0]; ?>">Ubah</a> |
                            <a href="hapus.php?id=<?= $row[0]; ?>">Hapus</a>
                        </td>
                        <td><?= $row[1]; ?></td>
                        <td><?= $row[2]; ?></td>
                        <td><?= $row[3]; ?></td>
                        <td><?= $row[4]; ?></td>
                        <td><?= $row[5]; ?></td>
                        <td><?= $row[6]; ?></td>
                        <td><?= $row[7]; ?></td>
                        <td><?php if(isset($row[8])){echo "✅";}else {echo "❌";} ?></td>
                        <td><img src="<?= $row[9]; ?>" alt=""></td>
                        <td><img src="<?= $row[10]; ?>" alt=""></td>
                        <td><img src="<?= $row[11]; ?>" alt=""></td>
                        <td><?php echo $row[12]; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </section>

</body>
</html>