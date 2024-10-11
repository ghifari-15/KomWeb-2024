<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Anda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                $hobbies = $_POST['hobby'];

                echo "<div class='card'>";
                echo "<div class='card-header bg-primary text-white'><h3><i class='fas fa-user'></i> Profile<br></h3></div>";
                echo "<div class='card-body'>";
                echo "<p><strong><i class='fas fa-user'></i> Name:</strong> $fullname</p>";
                echo "<p><strong><i class='fas fa-envelope'></i> Email:</strong> $email</p>";
                echo "<p><strong><i class='fas fa-venus-mars'></i> Gender:</strong> $gender</p>";
                echo "<p><strong><i class='fas fa-heart'></i> Hobbies:</strong> $hobbies</p>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </div>

<h2></h2>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

