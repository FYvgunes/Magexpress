<?php
$servername = "localhost";
$database = "macexpolorer";
$username = "root";
$password = "1q2w3e4r5T*-?";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Bağlantı Hatası: " . mysqli_connect_error());
}
echo "Bağlantı Başarılı";
mysqli_close($conn);

