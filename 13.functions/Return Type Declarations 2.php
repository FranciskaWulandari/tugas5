<?php ////pembuka script PHP
declare(strict_types=1); // persyaratan yang ketat
function addNumbers(float $a, float $b) : int {
    //membuat fungsi dan mengembalikan nilai dengan angka desimal
    return (int)($a + $b);
}
echo addNumbers(1.2, 5.2); // mencetak data
?><!--penutup script PHP-->
