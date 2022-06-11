<?php
// session_start();

// if( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

$id = $_GET["Id"];

require 'function.php';
 
   if(hapus($_GET["Id"])> 0 ) {
        echo "
        <script>
        alert('data berhasil dihapus!')
        document.location.href= 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}

?>
    
