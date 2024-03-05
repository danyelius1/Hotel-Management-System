<?php

$servername = "localhost";
$username = "login";
$password = "";
$dbname = "hms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (email,slaptazodsi)
VALUES ('')";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/login-style.css">
</head>
<body>

<form action="" method="post" class="main-form">
    <label for="email">Elektroninis paštas:</label>
    <input type="email" id="email" name="email">

    <label for="email">Slaptažodis:</label>
    <input type="password" id="slaptazodis" name="slaptazodis">

    <input type="submit" id="submit" name="submit" value="Login" class="formos-mygtukas">
</form>



</body>
</html>