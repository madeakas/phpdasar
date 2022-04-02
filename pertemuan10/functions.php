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

function tambah($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
    $query ="INSERT INTO mahasiswa
                VALUES
            (null, '$nrp', '$nama', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);

    //mengembalikan hasil affected setelah insert data
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    
    //query hapus data
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);

    //mengembalikan hasil affected setelah insert data
    return mysqli_affected_rows($conn);
}


?>