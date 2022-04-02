<!-- asosiatif array -->
<?php

$mahasiswa = [
    [
        "nama" => "Made",
        "nim" => "2018081370",
        "jurusan" => "Teknik Informatika",
        "email" => "Made@gmail.com",
    ],
    [
        "nama" => "Farhan",
        "nim" => "2018081371",
        "jurusan" => "Teknik Informatika",
        "email" => "Farhan@gmail.com",
    ],
    [
        "nama" => "Kevin",
        "nim" => "2018081372",
        "jurusan" => "Teknik Informatika",
        "email" => "Kevin@gmail.com",
    ],
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $siswa) :?>
    <ul>
        <li>Nama : <?php echo $siswa["nama"]?></li>
        <li>Nim : <?php echo $siswa["nim"]?></li>
        <li>Jurusan : <?php echo $siswa["jurusan"]?></li>
        <li>Email : <?php echo $siswa["email"]?></li>
    </ul>
    <?php endforeach?>
    
</body>
</html>