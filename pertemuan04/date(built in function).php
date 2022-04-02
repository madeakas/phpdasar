<?php
    //Date untuk menampilkan tanggal tertentu
    echo date("l, d-M-Y");

    echo "<br>";

    //Time
    //UNIX Timestamp /Epoch Time
    //detik yang sudah berlalu 1 januari 1970
    echo time();

    echo "<br>";


    //penggabungan date dengan time
    echo date("l, d M Y", time()-60*60*24*100);

    echo "<br>";

    //mktime
    //membuat detik sendiri
    //mktime(0,0,0,0,0,0);
    // jam menit detik bulan tanggal tahun

    echo mktime(0,0,0,12,29,1999);

    echo "<br>";

    //kombinasi date dan mktime
    
    echo date("l, d M Y", mktime(0,0,0,12,29,1999));

    echo "<br>";

    //strtotime
    //string ke time
    echo strtotime("29 Dec 1999");

    echo "<br>";
    //kombinasi

    echo date("l, d M Y", strtotime("29 Dec 1999"));




?>