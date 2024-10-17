<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pertemuan5";
$port = "3360";
// Create connection

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
    echo "Koneksi berhasil";
// Check connection
} catch(mysqli_sql_exception $error) {
    echo "Connection failed: " . $error->getMessage();
}
?>