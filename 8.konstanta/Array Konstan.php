<!DOCTYPE html>
<html>
<body>

<?php //pembuka script PHP
define("cars", [ //konstanta dapat ditulis dengan keyword define. secara default bersifat case sensitive, namun optional dapat di buat case insensitive;
    "Alfa Romeo",
    "BMW",
    "Toyota"
]); //Anda dapat membuat konstan Array menggunakan define fungsi.

//index array di mulai dari 0

echo cars[0]; //hasil output "Alfa Romeo" sebab menempati posisi 0 .
?> <!--penutup script PHP-->

</body>
</html>
