<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "automobile";
$table = "cars";

$con = mysqli_connect($host, $user, $pass);

if (!$con) {
    echo "<h3 class='container bg-dark text-center p-3 rounded-lg text-warning mt-5'>UNABLE TO ESTABLISH CONNECTION!</h3>";
}

// CREATE DATABASE IF NOT EXISTS
$createdb = "CREATE DATABASE IF NOT EXISTS $db";
if (mysqli_query($con, $createdb)) {
    $con = mysqli_connect($host, $user, $pass, $db);
    // CREATE TABLE IF NOT EXISTS
    $createtb = "CREATE TABLE IF NOT EXISTS $table(
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        car_name VARCHAR(225) NOT NULL,
        car_brand VARCHAR(225) NOT NULL,
        car_type VARCHAR(225) NOT NULL,
        car_color VARCHAR(225) NOT NULL,
        car_price FLOAT NOT NULL,
        discount FLOAT,
        discription TEXT,
        image VARCHAR(225) NOT NULL)";

    if (!mysqli_query($con, $createtb)) {
        echo "<script>
            alert('ERROR CREATING TABLE: ');
            </script>" . mysqli_error($con);
    }
} else {
    echo "<script>
        alert('Database cannot be Created');
        </script>" . mysqli_error($con);
}