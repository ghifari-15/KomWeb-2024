<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pertemuan5";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
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