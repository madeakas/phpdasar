<?php
// Pertemuan 2 - PHP Dasar

//standar Output
//echo, print (mencetak tulisan ke layar)
//print_r("isi") (khusus mencetak isi array / untuk debugging (khusus array dan string))
//var_dump (melihat isi variable (tipe data dan ukuran)/ untuk debugging)

echo "Made Aka";
echo 123;
echo true;
echo false;//tidak tampil (kosong)
print "Made Aka 2";
print_r ("Made Aka 3");
var_dump ("Made Aka 4");
?>

<!-- penulisan sintaks php
1. PHP di dalam HTML / Disarankan-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halo, <?php echo"Made"?></h1>
    <p><?php echo"tes"?></p>
</body>
</html>

<!-- 2. HTML di dalam PHP / Tidak disarankan-->

<?php

echo"<h1>Lalalala</h1>"

?>

<!-- Variable pada PHP untuk menampung Nilai-->
<!-- tidak boleh diawali angka -->
<!-- Harus pake kutip dua "" agar interpolansinya jalan -->
<!-- Contoh $nama untuk menampung string nama-->

<?php
$nama="Made";

echo"Helo, $nama";

?>

<!-- Operator -->
<!-- + - + / % -->
<?php

$x=10;
$y=1;

echo $x + $y;

?>

<!-- Penggabungan String / concat -->
<!-- pake . -->

<?php
$x="Lalisa";
$y="Ganteng";
echo $x . " " . $y;
?>

<!-- assignment / penugasan -->
<!-- =, +=, -=. *=, /=, %=, .= -->
<?php
$x=10;
$x+=5;
echo $x;
?>

<!-- Perbandingan -->
<!-- <, >, <=, >=, ==, !=  -->
<?php
var_dump(1 < 5)
?>

<!-- Identitas -->
<!-- ===, !== -->
<?php
var_dump(1 === "1")
?>

<!-- Logika / pengkondisian-->
<!-- &&, ||, ! -->
<?php
$x=10;
var_dump($x < 20 && $x % 2 == 0)


?>