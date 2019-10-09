<?php declare(strict_types=1); // persyaratan yang ketat ?>
<!DOCTYPE html>
<html>
<body>

<?php //pembuka script PHP
function setHeight(int $minheight = 50) { // membuat fungsi dan memberi nilai default parameter
    echo "The height is : $minheight <br>"; // mencetak kalimat
}
// memanggil fungsi dan mengirimkan parameter

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?> <!-- penutup script PHP-->

</body>
</html>
