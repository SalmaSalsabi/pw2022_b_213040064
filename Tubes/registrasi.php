<?php
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "pw2022_b_213040064") or die(mysqli_error($conn));

if( isset($_POST["register"]) ) {
    global $conn;
    if(registrasi($_POST) > 0){
        echo"<script>
            alert('user baru berhasil ditambahkan!');
            document.location.href='login.php'
            </script>";
    }else{
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Halaman Registrasi</title>
        <link rel="stylesheet" href="style.css">
        <style>
            label {
                display: block;
            }
        </style>
    </head>
    <body>
    <div class="regist-box"> 
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <div class="user-box">
            <label for="username">Usename</label>
            <input type="text" name="username" id="username">
        </div>
        <div class="user-box">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="user-box">
            <label for="password2">konfirmasi password</label>
            <input type="password" name="password2" id="password2">
        </div>
        <br>
            <button type="submit" name="register">Sign up!</button>

    </form>
    </div>

</body>
</html>