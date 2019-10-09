<!DOCTYPE html>
<html>
<body>

<?php // pembuka script PHP
$x = 5;
$y = 10;
//Sebuah variabel

function myTest() {
    global $x, $y; //The globalkata kunci digunakan untuk mengakses variabel global dari dalam fungsi.
    $y = $x + $y;
} 

myTest();  // menjalankan fungsi
echo $y; // output nilai baru untuk variabel $ y
?><!--penutup script PHP-->

</body>
</html>
