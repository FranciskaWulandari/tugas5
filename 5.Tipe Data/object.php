<!DOCTYPE html>
<html>
<body>

<?php //pembuka script PHP
class Car {  //mendeklarasikan kelas objek
    function Car() {
        $this->model = "VW"; //struktur class
    }
}
// buat objek
$herbie = new Car();

// tampilkan properti objek
echo $herbie->model;

?> <!--penutup script PHP-->

</body>
</html>
