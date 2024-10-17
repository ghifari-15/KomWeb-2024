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

$sql = "INSERT INTO myguest (firstname, lastname, email)
VALUES 
       ('Elben', 'Jelek', 'awokawokelben@example.com')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>