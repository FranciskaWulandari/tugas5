<!DOCTYPE html>
<html>
<body>

<?php //pembuka script PHP
$t = date("H"); // variabel t dengan nilai dari Hour

// mencetak kalimat dibawah ini
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") { 
    // jika t kurang dari 10

    // mencetak kalimat dibawah ini
    echo "Have a good morning!";
} elseif ($t < "20") {  // jika t kurang dari 20 dan lebih dari 10
   
     // mencetak kalimat dibawah ini
    echo "Have a good day!";
} else {
     // mencetak kalimat dibawah ini
    echo "Have a good night!";
}
?> <!-- penutup script PHP-->
 
</body>
</html>
