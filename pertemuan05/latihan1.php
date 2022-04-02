<?php
// array
// variable yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// keynya adalah index, dimulai dari 0


// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");

//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() atau print_r
// var_dump($bulan);
print_r($bulan);
echo "<br>";
// menampilkan elemen 1 pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

//menampilkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari [] = "Jumat";
echo "<br>";
var_dump($hari);

?>