<!DOCTYPE html>
<html lang="en">
<head>
    <title>halaman utama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // koneksi ke database
    include_once('config.php');

    // coding query untuk panggil data dari database (READ)
    $result=mysqli_query($mysqli, 'SELECT *FROM paket ORDER BY id DESC');

    ?>


    <h1>Data Paket Sunny Future</h1>

    <table cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)){
            ?>
            <td><?php echo $user_data['nama']; ?></td>
            <td><?php echo $user_data['deskripsi']; ?></td>
            <td><?php echo $user_data['harga']; ?></td>
            <td ><a href="edit_paket.php?id=<?php echo $user_data['id']; ?>">Edit</a></td>
            <td class="warnain"><a href="hapus_paket.php?id=<?php echo $user_data['id']; ?>">Delete</a></td>

        </tr>
    <?php
    }
    ?>
    </table>
    
    <a href="tambah_paket.php" class="tambah">Tambah Paket</a> <br><br> 

    <a href="../index.php" class="beranda">Beranda</a> <br><br> 
</body>
</html>