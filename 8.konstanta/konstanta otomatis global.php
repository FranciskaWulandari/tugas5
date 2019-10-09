<!DOCTYPE html>
<html>
<body>

<?php //pembuka script PHP
//nama konstan case-insensitive
define("GREETING", "Welcome to W3Schools.com!");
//Untuk membuat sebuah konstanta dengan parameter nama,nilai dan nama konstan harus case-insensitive. Default adalah palsu

function myTest() { //sebuah intruksi atau katakunci
    echo GREETING; //perintah cetak atau output
}
 
myTest(); //output berupa text yang ada di GREETING

?>  <!--penutup script PHP-->

</body>
</html>