<!DOCTYPE html>
<html lang="en">
<head>
    <title>tambah paket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Silahkan Isi Data Yang Ingin Ditambahkan Dibawah Ini</h2>
    <pre>
    <form action="tambah_paket.php" method="post">
        <label>Nama         : </label><input type="text" name="nama" style="width:70rem; height:50px;"><br>
        <label>Deskripsi    : </label><input type="text" name="deskripsi" style="width:70rem; height:50px;"><br>
        <label>Harga        : </label><input type="text" name="harga" style="width:70rem; height:50px;"><br>
        <input type="submit" value="Simpan" name="submit" style="width:10rem; height:4rem; font-size: 2rem; ">
        <a href="home.php" class="kembali">Kembali</a>
        <a href="../index.php" class="beranda">Beranda</a> <br><br> 
    </pre>
    </form>
    <?php
    // apakah data sudah lengkap
    if(isset($_POST['submit'])){
        $nama=$_POST['nama'];
        $deskripsi=$_POST['deskripsi'];
        $harga=$_POST['harga'];

        // panggil file koneksi database
        include_once('config.php');

        // coding query untuk simpan ke database
        $result = mysqli_query ($mysqli, "INSERT INTO paket (nama, deskripsi, harga) VALUES ('$nama', '$deskripsi', '$harga')");
    
        // notifikasi data berhasil di simpan
        echo'data berhasil disimpan';
    }
    ?>


</body>
</html>