<?php 

//cek apakah tombol tambah sudah di klik
require 'function.php';

// cek apakah tombol submit telah ditekan atau belum
if (isset($_POST["tambah"])) {


    // cek apakag data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan')
        document.location.href='index.php'
        </script>";
        
    } else {
        echo
        "        <script>
        alert('data gagal ditambahkan')
        document.location.href='index.php'
        </script>";
    }
}
       
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar nama_musik</title>
</head>
<body>
    
    <div class="container">
        <h1> From Tambah Data musik</h1>

        <a href="index.php" class="">Kembali ke data musik</a>
        <div class ="row mt-3">
            <div class ="row col-8">
                <form action ="" method="post" enctype="multipart/form-data">
                     
                    <div class="mb-3">
                        <label for="nama_musik" class="form-label">Nama_Musik </label>
                        <input type="text" name="nama_musik" class="form-control" id="nama_musik">
                    </div>
                    <div class="mb-3">
                        <label for="pencipta" class="form-label">Pencipta </label>
                        <input type="text" name="pencipta" class="form-control" id="pencipta">
                    </div>
                    <div class="mb-3">
                        <label for="penyanyi" class="form-label">Penyanyi </label>
                        <input type="text" name="penyanyi" class="form-control" id="penyanyi">
                    </div>
                    <div class="mb-3">
                        <label for="gendre" class="form-label">Gendre </label>
                        <input type="text" name="gendre" class="form-control" id="gendre">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar </label>
                        <input type="file" name="gambar" class="form-control" id="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary" name="tambah" id="tambah">Submit</button>
                </form>
            </div>                                                                                          
        </div>
    </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>