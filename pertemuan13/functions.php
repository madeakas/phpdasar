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
    
    //uploud gambar
    $gambar = uploud();
    if (!$gambar){
        return false;
    }

    //query insert data
    $query ="INSERT INTO mahasiswa
                VALUES
            (null, '$nrp', '$nama', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);

    //mengembalikan hasil affected setelah insert data
    return mysqli_affected_rows($conn);
}

function uploud(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah gambar di upload
    if($error === 4){
        echo "<script>
        alert('Pilih Gambar terlebih dahulu!');
        </script>";
        return false;
    }
    // cek apakah yang diuploud adalah gambar
    $ekstensiGambarValid=['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('Yang anda upload bukan gambar!');
        </script>";
        return false;
    };
    // cek ukuran file jika ukuran besar ditolak
    if($ukuranFile > 1000000){
        echo "<script>
        alert('Ukuran Gambar Terlalu Besar!');
        </script>";
        return false;
    }

    // lolos cek, kemudian generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    //gambar akan diuploud
    move_uploaded_file($tmpName,'img/' . $namaFileBaru);
    return $namaFileBaru;
}


function hapus($id){
    global $conn;
    
    //query hapus data
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn, $query);

    //mengembalikan hasil affected setelah insert data
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    //cek apakah user memilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else{
        $gambar = uploud();
    }
    
    //query update data
    $query ="UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            where id = $id
            ";
    mysqli_query($conn, $query);

    //mengembalikan hasil affected setelah update data
    return mysqli_affected_rows($conn);
}

function cari ($keyword){
    $query = "SELECT * FROM mahasiswa
                WHERE
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
            return query($query);
}


?>