<!-- metode request get adalah metode mengirimkan data melalui URL sehingga dapat ditangkap oleh superglobal $_GET -->
<?php


$mahasiswa = [
    [
        "nama" => "Made",
        "nim" => "20180801370",
        "email" => "made@gmail.com",
    ],
    [
        "nama" => "Farhan",
        "nim" => "20180801371",
        "email" => "Farhan@gmail.com",
    ],
    [
        "nama" => "Kevin",
        "nim" => "20180801372",
        "email" => "Kevin@gmail.com",
    ],
];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Daftar Mahasiswa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <?php foreach($mahasiswa as $siswa) :?>
            <ul>
                <li> <a href="latihan2.php?nama=<?php echo $siswa["nama"]; ?>&nim=<?php echo $siswa["nim"]; ?>&email=<?php echo $siswa["email"]; ?>"><?php echo $siswa["nama"] ?></a></li>
            </ul>
        <?php endforeach ?>
    </body>
</html>