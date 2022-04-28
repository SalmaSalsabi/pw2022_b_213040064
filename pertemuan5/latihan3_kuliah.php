<?php
// studi kasus

$mahasiswa = [
["Salma Salsabila", "213040064", "salmasalsabila073@gmail.com", "Teknik Informatika"];
["Putri Legiani", "213040039", "putrilegiani84@gmail.com", "Teknik Informatika"];
["Najwa", "213040041", "najwa04@gmail.com", "Teknik Informatika"];
];
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
    <li>Nama: <?php echo $mhs[0] ?></li>
    <li>NPM: <?php echo $mhs[1] ?></li>
    <li>Email: <?php echo $mhs[2] ?></li>
    <li>Jurusan: <?php echo $mhs[3] ?></li>
<?php } ?>
    