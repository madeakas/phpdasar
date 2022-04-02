<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
//ambil file dari functions.php
require'functions.php';

//pagination
//konfigurasi halaman
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));

//round pembulatan biasa, ceil membulatkan ke atas, floor membulatkan kebawah
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);

//temukan halaman ke berapa, kalau pertama kali masuk ke halaman aktif pertama
if(isset($_GET["halaman"])){
    $halamanAktif = $_GET["halaman"];
} else {
    $halamanAktif = 1;
}
//mencari data awal
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;
// query data per halaman
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");

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
</head>
<body>
    <a href="logout.php">Log out</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus 
        placeholder="Masukan Keyword.." autocomplete="off">
        <button type="submit" name="cari">Cari</button>


    </form>
    <br><br>
    <!-- Navigasi -->
    <?php if($halamanAktif > 1 ) : ?>
    <a href="?halaman=<?= $halamanAktif-1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if( $i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jumlahHalaman ) : ?>
    <a href="?halaman=<?= $halamanAktif+1; ?>">&raquo;;</a>
    <?php endif; ?>



    <br>

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
</body>
</html>