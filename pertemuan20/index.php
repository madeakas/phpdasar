<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
//ambil file dari functions.php
require'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari di ketik
if (isset ($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader{
            width: 100px;
            position: absolute;
            top: 119px;
            left: 290px;
            z-index: -1;
            display: none;
        }
    </style>
</head>
<body>
    <a href="logout.php">Log out</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus 
        placeholder="Masukan Keyword.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
        <img src="img/loader.gif" class="loader">

    </form>
    <br>

    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0"> 
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $mhs) :?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> | 
            <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm ('yakin dihapus?');">Hapus</a>
        </td>
        <td><img src="img/<?= $mhs["gambar"]; ?>" alt="gambar" width="50"></td>
        <td><?= $mhs["nrp"]; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["email"]; ?></td> 
        <td><?= $mhs["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
    </div>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>