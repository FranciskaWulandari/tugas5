<!DOCTYPE html>
<html>
<body>

<?php //pembuka script PHP
$t = date("H"); // variabel t dengan nilai dari Hour
 
if ($t < "20") { // jika t kurang dari 20
    echo "Have a good day!"; // mencetak kalimat ini
} else {
    echo "Have a good night!"; // jika tidak mencetak kalimat ini
}
?><!-- penutup script PHP-->
 
</body>
</html>