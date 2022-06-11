<?php

require 'function.php';
$conn = mysqli_connect('localhost', 'root', '', 'pw2022_b_213040064');
//session_start ();

// if( !isset($_SESSION["login"]) ) {
//header("Location: login.php");
//}

// pagination
// konfigurasi
//$jumlahDataPerhalaman = 5;
//$jumlahData = count(query("SELECT * FROM musik"));
//$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
//$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
//$awalData =  ( $jumlahDataPerhalaman * $halamanAktif ) - $jumlahDataPerhalaman;

$musik = query("SELECT * FROM musik ");

// tombol cari di tekan
if(isset($_POST["submit"]) ) {
    $musik = cari($_POST["keyword"]);
    
  }
?>
<!DOCTYPE html>
<html lang="en">>
<head>
    <tittle>Halaman admin</tittle>
    <link rel= "stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <a href="logout.php" class="logout'>Logout | <a href="cetak.php">Cetak</a>
  <style>
    @media print {
      .logout, .tambah, .form-cari, .navbar, .navigasi, .aksi{
        display: none;
      }
    }
   </style>

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
        <a class="navbar-brand" href="#">Spotify</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" Id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" Id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="index.php">Home</a></li>
                    <li><a class="dropdown-item" href="tambah.php" class="tambah">Tambah data</a></li>
                </ul>
            </li>
                <li class="nav-item">
            </ul>
        <form action="" method="post" class="form-cari">
            <input class="form-control me-2" type="text" name="keyword" autofocus placeholder="Search" aria-label="Search" autocomplete="off" id="keyword">
            <button class="btn btn-outline-light" type="submit" name="submit" id="tombol-cari">Search</button>

        </form>
        </div>
    </div>
    </nav>
    <br>

<div id="container">
<div class="wrapper">
<table class="table table-secondary" border="1" cellpadding="10" cellspacing="0">
    <thead class="table-dark">
    <tr>

    <tr>
        <th>No.</th>
        <th>Nama Musik</th>
        <th>Pencipta</th>
        <th>Penyanyi</th>
        <th>Gendre</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr> 
    </thead>
 
  <?php $no = 1; ?>
  <?php foreach($musik as $row) : ?>
  <tr> 
    <td><?= $no++; ?></td>
    <td><?= $row["nama_musik"]; ?></td>
    <td><?= $row["pencipta"]; ?></td>
    <td><?= $row["penyanyi"]; ?></td>
    <td><?= $row["gendre"]; ?></td>
    <td>
      <img src="img/<?= $row["gambar"]; ?>" width="65">
    </td>
    <td class="aksi">
      <a href="ubah.php?Id=<?= $row["Id"];?>" class="btn btn-succes btn-sm">ubah</a>
          <a href="hapuss.php?Id=<?= $row["Id"];?>" onclick="return confirm ('apakah anda yakin?');"class="btn btn-danger btn-sm">hapus</a>
    </td>
    
  </tr>
  
  <?php endforeach; ?>

</table>
</div>
</div>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
</body>
</html>


