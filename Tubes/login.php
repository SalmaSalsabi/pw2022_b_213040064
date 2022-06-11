<?php
session_start();
require 'function.php';
$conn = mysqli_connect('localhost', 'root', '', 'pw2022_b_213040064');

//cek cookie
if( isset($_COOKIE['Id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['Id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan Id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE Id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }
}

if( isset($_SESSION["login"]) ) {
    header('Location: index.php');
    exit;
}

    if( isset($_POST["login"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        //cek username
        if( mysqli_num_rows($result) === 1 ) {

            //cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                // set session
                $SESSION["Login"] = true;

                //cek remember me
                if( isset($_POST['remember'])) {
                    // but cookie
                    setcookie('Id', $row['Id'], time()+60);
                    setcookie('key', hash('sha256', $row['username']), time()+60);  
                }

                header("Location: index.php");
                exit;
            }
        }
        $error = true;
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <tittle></tittle>
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
            <link rel="stylesheet" href="style.css">
</head>
<body style="background-image:url(img/spotify.jpg); background-size: auto;">

<div class="login-box">
    <h1>Login yuk!</h1>
    <?php if( isset($error) ) : ?>
        <p style="color; blue; font-style; italic;">Username atau Password Salah</p>

    <?php endif; ?>

        <form action="" method="post">
            <div class="user-box>
            <i class="uil uil-user"></i>
            <label for="username"></label>
            <input type="username" placeholder="username" name="username" Id="username" required>
    </div>
    <div class="user-box">
        <i class="uil uil-unlock"></i>
        <label for="password"></label>
        <input type="password" placeholder="password" name="password" Id="password" required>
    </div>
    <input type="checkbox" name="remember" Id="remember">
    <label for="remember">Remember me</label>
    <br>
    <button type="submit" name="login" class="button">Login</button>
    
        </form>
    </div>
    </body>
    </html>

