<?php 
//cek apakah tidak ada data di $_GET\
if( !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["email"])){
        //redirect
        header("Location: latihan1.php");
}
?>

<!doctype html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <ul>
        <li><?php echo $_GET["nama"] ?></li>
        <li><?php echo $_GET["nim"] ?></li>
        <li><?php echo $_GET["email"] ?></li>
    </ul>
    <a href="latihan1.php">Kembali</a>
</body>
</html>