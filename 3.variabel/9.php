<!DOCTYPE html>
<html>
<body>

<?php  // pembuka script PHP
function myTest() {
    static $x = 0;
    /*static kata kunci ketika pertama kali mendeklarasikan variabel . 
    ketika fungsi dieksekusi, semua variabel yang akan dihapus. 
    Namun, variabel lokal tidak akan dihapus*/

    echo $x; // untuk menampilkan text
    $x++;
}

myTest(); // menjalankan fungsi
echo "<br>";  //untuk memberikan atau menampilkan enter
myTest(); // menjalankan fungsi
echo "<br>"; //untuk memberikan atau menampilkan enter
myTest(); // menjalankan fungsi
?> <!--penutup script PHP--> 

</body>
</html>
