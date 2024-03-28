<?php
// Penulisan Array
$hari = array("senin", "selasa", "rabu");
$bulan = ["Januari", "Februari", "Maret"];
$gabungan = [100, "teks", true];

// Memanggil Array
// Versi debug
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// Versi user
echo $gabungan[0];
?>
