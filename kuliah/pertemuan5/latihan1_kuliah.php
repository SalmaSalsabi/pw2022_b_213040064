<?php
//array
//array adalah variabel yang dapat menyimpan lebih dari satu nilai sekaligus

$hari1= "senin";
$hari2= "Selasa";
$hari7= "minggu";

$bulan= "januari";
$bulan12= "Desember";

$mahasiswa= "Salma";

$hari ["Senin", "Selasa", "Rabu"]; //cara baru
$bulan array("Januari", "Febuari", "Maret"); //Cara lama

$myarray [100, "Salma", true];

//menampilakan array
//menampilkan satu element menggunakan index dimulai dari nol

echo $hari[1];
echo "<br>";
echo $Bulan[2];
echo "<hr>";

//menampilkan semua isi array sekaligus
//var_dump() atau print_r()
//khusus untuk debugging 
var_dump ($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

//mencetak semua isi array menggunakan looping
//for

for($i =0; $i < 7; $i++) {
echo $hari[$i];
echo "<br>";
}
echo "<hr>";

//foreach
foreach ($bulan as $b){
    echo= $b;
    echo "<br>";
}
echo "<hr>";

//memanipulasi array
//menambahkan element di ahir array 
$hari [5] "jum'at";
$hari [6] "Sabtu"; 
var_dump $hari

?>