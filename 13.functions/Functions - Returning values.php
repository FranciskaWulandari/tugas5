<?php declare(strict_types=1); // persyaratan yang ketat ?>
<!DOCTYPE html>
<html>
<body>

<?php //pembuka script PHP
function sum(int $x, int $y) { // membuat fungsi

    $z = $x + $y;// menjumlahkan parameter
    return $z; // mengembalikan hasil penjumlahan
}
// mencetak kalimat
echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?> <!-- penutup script PHP-->

</body>
</html>