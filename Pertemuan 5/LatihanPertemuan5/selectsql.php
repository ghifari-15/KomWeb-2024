<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Guests</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 class="my-4">My Guests</h2>
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

    $sql = "SELECT * FROM myguest";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<table class="table table-striped">';
        echo '<thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr></thead>';
        echo '<tbody>';
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row["ID"] . '</td>';
            echo '<td>' . $row["firstname"] . '</td>';
            echo '<td>' . $row["lastname"] . '</td>';
            echo '<td>' . $row["email"] . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<div class="alert alert-warning" role="alert">0 results</div>';
    }

    mysqli_close($conn);
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>