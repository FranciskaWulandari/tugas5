<!DOCTYPE html>
<html>
<body>

<?php // pembuka script PHP
$x = 5; //ruang lingkup global
 
function myTest() {
    // menggunakan x di dalam fungsi ini akan menghasilkan kesalahan
    echo "<p>Variable x inside function is: $x</p>";
} 

//Variabel yang dideklarasikan di luar fungsi memiliki GLOBAL SCOPE dan hanya dapat diakses di luar fungsi

myTest();// menjalankan fungsi

echo "<p>Variable x outside function is: $x</p>"; 


?><!--penutup script PHP-->

</body>
</html>