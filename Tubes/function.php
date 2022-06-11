<?php 
//koneksi ke database
function koneksi() {
$conn = mysqli_connect('localhost', 'root', '', 'pw2022_b_213040064');

return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
}   
    return $rows;
}

function upload() {
    
    // cek apakah user tidak memilih gambar
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if( $error === 4 ) {
        echo ",script>
        alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }

    $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ektensiGambar = explode('.', $namaFile);
    $ektensiGambar = strtolower(end($ektensiGambar));
        if( !in_array($ektensiGambar, $ektensiGambarValid) ) {
            echo "<script>
            alert(yang anda upload bukan gambar!');
            </script>";
            return false;
    }

    // lolos pengecekan gambar siap di upload
    // cek jika ukuran terlalu besar
    if(  $ukuranFile > 1000000) {
        echo"<script>
        alert('ukuran gambar terlalu besar!');
        </script>";
        return false;
    }
    // generate nama gambar baru
    $nama_File_baru = uniqid();
    $nama_File_baru .= '.';
    $nama_File_baru .= $ektensiGambar;
    move_uploaded_file($tmpName, 'img/' . $nama_File_baru);

    return $nama_File_baru;

    }
    function tambah($data) {
        $conn = koneksi();

    $nama_musik = htmlspecialchars($data["nama_musik"]);
    $pencipta = htmlspecialchars($data["pencipta"]);
    $penyanyi = htmlspecialchars($data["penyanyi"]);
    $gendre = htmlspecialchars($data["gendre"]);
    //$gambar = htmlspecialchars ($data["gambar"]);

    //upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO 
                musik VALUES 
            (null, '$nama_musik', '$pencipta', '$penyanyi', '$gendre', '$gambar')
        ";

    mysqli_query($conn, $query) or die (mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
    }

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM musik WHERE Id = $id"); 
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();

    $id = $data["Id"];
    $nama_musik = htmlspecialchars($data["nama_musik"]);
    $pencipta = htmlspecialchars($data["pencipta"]);
    $penyanyi = htmlspecialchars($data["penyanyi"]);
    $gendre = htmlspecialchars($data["gendre"]);
    $gambarLama = htmlspecialchars ($data["gambarLama"]);
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else{
        // $gambar = upload();
        // upload gambar
        $gambar = upload();
        if(!$gambar){
            return false;
        }
    }

    
     $query = "UPDATE musik SET
                nama_musik = '$nama_musik',
                pencipta = '$pencipta',
                penyanyi = '$penyanyi',
                gendre = '$gendre',
                gambar = '$gambar'
            WHERE Id = $id;
             ";

    mysqli_query($conn, $query)or die(mysqli_error($conn)); 
    return mysqli_affected_rows($conn);
    }

function cari($keyword) {
    $query = "SELECT * FROM musik 
        WHERE
        nama_musik LIKE '%$keyword%' OR 
        gendre LIKE '%$keyword%'
        ";
        return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data ["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
        alert('username sudah terdaftar!')
        </script>";
    return false;
    }
    return1;
    
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

?>