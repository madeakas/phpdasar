<?php 
//koneksi ke db
$conn = mysqli_connect("localhost", "root", "","phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row =mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

//ambil data dari tabel mahasiswa / (query)
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data mahasiswa dari object result (fetch)
// mysqli_fetch_row(); //mengembalikan array numerik
// mysqli_fetch_assoc(); //mengembalikan array asosatif
// mysqli_fetch_array(); //mengembalikan array numerik dan asosiatif
// mysqli_fetch_object();

// while ( $mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }
?>