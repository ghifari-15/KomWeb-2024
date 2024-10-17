<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pertemuan5";
$port = "3360";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
    
// Check connection
} catch(mysqli_sql_exception $error) {
    echo "Connection failed: " . $error->getMessage();
}
// sql to delete a record
$sql = "DELETE FROM myguest WHERE id=1";


if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
mysqli_close($conn);
?>