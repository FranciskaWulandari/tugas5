<!DOCTYPE html>
<html>
<body>

<?php //pembuka script PHP

// Periksa apakah variabelnya numerik  
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));

//fungsi dapat digunakan untuk menemukan apakah suatu variabel numerik. 
//fungsi mengembalikan nilai true jika variabel adalah angka atau string numerik, false jika tidak

?>  <!--penutup script PHP-->

</body>
</html>
