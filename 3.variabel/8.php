<!DOCTYPE html>
<html>
<body>

<?php // pembuka script PHP
$x = 5;
$y = 10;
//Sebuah variabel

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y']; //variabel global dalam sebuah array dapat diakses dari dalam fungsi dan dapat digunakan untuk memperbarui variabel global secara langsung.
} 

myTest();// menjalankan fungsi
echo $y; // output nilai baru untuk variabel $ y
?> <!--penutup script PHP-->

</body>
</html>