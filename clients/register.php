<?php

if (isset($_POST["submit"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hms";

    $email =  $_POST["email"];
    $pass = $_POST["password"];
    $hashed_password = password_hash($pass, PASSWORD_BCRYPT);

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$hashed_password')";

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

<div class="main">

    <div class="logo">
        <img src="../images/Logotipas.png" alt="">
    </div>

    <h1>A warm welcome to <span class="Sunset">Sunset Resort!</span></h1>
    <h3>Would you like to book a stay?</h3>

    <form action="" method="post" class="main-form">

        <fieldset>
            <legend>Date</legend>
            <label for="check-in" id="check-in">Check-in</label>
            <input type="date" name="check-in" id="check-in">
            <label for="check-out" id="check-out">Check-out</label>
            <input type="date" name="check-out" id="check-out">
        </fieldset>

        <fieldset>
            <legend>sjdgs</legend>

            <label for="Rooms" id="Rooms">Rooms</label>
            <input type="number" name="Rooms" id="Rooms" value="0" required>

            <label for="Adults" id="Adults">Adults</label>
            <input type="number" name="Adults" id="Adults" value="0" required>


            <label for="Children" id="Children">Children</label>
            <input type="number" name="Children" id="Children" value="0" required>

            <label for="Pets" id="Pets">Pets</label>
            <input type="number" name="Pets" id="Pets" value="0" required>

        </fieldset>

        <input type="submit" id="submit" name="submit" value="Book Now" class="formos-mygtukas">

    </form>

</div>



</body>
</html>
