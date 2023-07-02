<!DOCTYPE html>

<?php
// panggil koneksi database
include_once('config.php');

if (isset($_POST['update'])){
    $id = $_POST['input_id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE paket SET nama='$nama', deskripsi='$deskripsi', harga='$harga' WHERE id='$id'" );

    // rederect menuju halaman home
    header('location: home.php');
}
?>

<?php
// ambil dari url
$id = $_GET['id'];

// panggil data dari database berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM paket WHERE id=$id");

while  ($user_data = mysqli_fetch_array($result)){
    $nama = $user_data['nama'];
    $deskripsi = $user_data['deskripsi'];
    $harga = $user_data['harga'];
}
?>

<html lang="en">
<head>
    <title>edit data paket</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Silahkan Edit Data Yang Ingin Diedit Dibawah Ini</h2>
    <pre>
    <form action="edit_paket.php" method="post" name="update_user">
        <label>Nama         : </label><input type="text" name="nama" value="<?php echo $nama; ?>" style="width:70rem; height:50px;"><br>
        <label>Deskripsi    : </label><input type="text" name="deskripsi" value="<?php echo $deskripsi; ?>" style="width:70rem; height:50px;"><br>
        <label>Harga        : </label><input type="text" name="harga" value="<?php echo $harga; ?>" style="width:70rem; height:50px;"><br>
        <input type="submit" value="Update" name="update" style="width:10rem; height:4rem; font-size: 2rem; ">
        <input type="hidden" name="input_id" value="<?php echo $_GET['id']; ?>" >
        <a href="home.php" class="kembali">Kembali</a>
    </form>
    </pre>

    <?php
    // apakah data sudah lengkap
    if(isset($_POST['submit'])){
        $nama=$_POST['nama'];
        $deskripsi=$_POST['deskripsi'];
        $harga=$_POST['harga'];

        // panggil file koneksi database
        include_once('config.php');

        // coding query untuk simpanke database
        $result=mysqli_query($mysqli, "INSERT INTO paket(nama, deskripsi, harga) VALUES('$nama', '$deskripsi', '$harga')");
    
        // notifikasi data berhasil di simpan
        echo'data berhasil disimpan';
    }
    ?>
</body>
</html>