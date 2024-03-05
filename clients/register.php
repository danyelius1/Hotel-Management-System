<?php

if (isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hms";

    $email =  $_POST["email"];
    $pass = $_POST["password"];

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/register-style.css">
</head>
<body>

<form action="" method="post" class="main-form">

    <label for="email">Elektroninis paštas</label>
    <input type="email" id="email" name="email">

    <label for="password">Slaptažodis</label>
    <input type="password" id="password" name="password">

    <input type="submit" id="submit" name="submit" value="Sign up" class="formos-mygtukas">

</form>

</body>
</html>
