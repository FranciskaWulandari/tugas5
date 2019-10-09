<!DOCTYPE html>
<html>
<body>

<?php // pembuka script PHP
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";//pernyataan untuk output data ke layar
} 
myTest();// menjalankan fungsi

// menggunakan x di luar fungsi akan menghasilkan kesalahan
echo "<p>Variable x outside function is: $x</p>"; //pernyataan untuk output data ke layar
?><!--penutup script PHP-->

</body>
</html>