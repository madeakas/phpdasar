<?php 
//ambil file dari functions.php
require'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

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
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>
    <table border="1" cellpadding="10" cellspacing="0"> 

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
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
        <td><?= $mhs["email"]; ?></td> 
        <td><?= $mhs["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>



    </table>
</body>
</html>