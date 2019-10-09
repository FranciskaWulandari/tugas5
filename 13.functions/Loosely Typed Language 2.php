<?php declare(strict_types=1); // persyaratan yang ketat
// membuat fungsi dan me return hasil penjumlahan parameter
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days"); // menampilkan data dari fungsi 
// karena ketat diaktifkan dan "5 hari" bukan bilangan bulat, kesalahan akan terjadi
?>
