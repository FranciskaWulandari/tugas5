<!DOCTYPE html>
<html>
<body>

<?php // pembuka script PHP
$color = "red";

//hanya pernyataan pertama akan menampilkan nilai dari $colorvariabel. karena $color, $COLOR, dan $coLOR diperlakukan sebagai tiga variabel yang berbeda
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";

?><!--penutup script PHP-->

</body>
</html>