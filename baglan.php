<?php
$servername = "localhost";
$database = "macexpolorer";
$username = "root";
$password = "";
// Create connection
$conn = @mysqli_connect($servername, $username, $password, $database);
$conn -> set_charset("utf8");
// Check connection
if (!$conn) {
    die("Bağlantı Hatası: " . mysqli_connect_error());
}

if(!$conn)
{
	die("Baglanti hatası:".mysqli_connect_error());
}
// // {
// // 	echo "Veritabanı Hatası :".mysqli_connect_error(); echo "<br>";
// // 	exit();
// // }



?>




