<?php 

// CONNECTION
$con = mysqli_connect('localhost', 'root', '', 'automobile');

if (!$con) {
    echo "<h3 class='container bg-dark text-center text-uppercase p-3 rounded-lg text-warning mt-5'>UNABLE TO ESTABLISH CONNECTION!</h3>";
}

$sql = "SELECT * FROM cars";
$selectCars = mysqli_query($con, $sql);

if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM cars WHERE id = $id";
    $selectCarsById = mysqli_query($con, $sql);
}

// LOGIC TO WRITE INTO TABLE cars
if(isset($_POST['new_post'])) {
    // GET IMAGE PATH
    $target = "C:/xampp/htdocs/tmautos.github.io/admin/buy/img/".basename($_FILES['image']['name']);

    // CONFIGURING DATA VARIABLES
    $car_name = $_POST['car_name'];
    $car_brand = $_POST['car_brand'];
    $car_type = $_POST['car_type'];
    $car_color = $_POST['car_color'];
    $car_price = $_POST['car_price'];
    $discount = $_POST['discount'];
    $discription = $_POST['discription'];
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];

    // INSERTING INTO TABLE cars
    $sql = "INSERT INTO cars(car_name, car_brand, car_type, car_color, car_price, discount, discription, image) VALUES('$car_name', '$car_brand', '$car_type', '$car_color', '$car_price', '$discount', '$discription', '$image')";

    if(mysqli_query($con, $sql)) {
        echo "
            <script>alert('PRODUCT ADDED SUCCESSFULLY!')</script>
        ";
    }

    // SAVE UPLOADED IMAGES TO img FOLDER
    move_uploaded_file($image_temp, $target);

    header("Location: buy.php");
}

// LOGIC TO UPDATE/EDIT TABLE cars
if(isset($_POST['update_post'])) {
    // GET IMAGE PATH
    $target = "C:/xampp/htdocs/tmautos.github.io/admin/buy/img/".basename($_FILES['image']['name']);

    // CONFIGURING DATA VARIABLES
    $car_name = $_POST['car_name'];
    $car_brand = $_POST['car_brand'];
    $car_type = $_POST['car_type'];
    $car_color = $_POST['car_color'];
    $car_price = $_POST['car_price'];
    $discount = $_POST['discount'];
    $discription = $_POST['discription'];
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];

    // INSERTING INTO TABLE cars
    $sql = "UPDATE cars SET car_name = '$car_name', car_brand = '$car_brand', car_type = '$car_type', car_color = '$car_color', car_price = '$car_price', discount = '$discount', discription = '$discription', image = '$image' WHERE id = $id";

    if(mysqli_query($con, $sql)) {
        echo "
            <script>alert('PRODUCT UPDATED/EDITED SUCCESSFULLY!')</script>
        ";
    }

    // SAVE UPLOADED IMAGES TO img FOLDER
    move_uploaded_file($image_temp, $target);

    header("Location: buy.php");
}

if(isset($_REQUEST['delete_post'])) {
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM cars WHERE id = $id";
    if(mysqli_query($con, $sql)) {
        echo "
            <script>
                alert('PRODUCT DELETED SUCCESSFULLY!')
            </script>";
    }

    header("Location: buy.php");
}




?>



    <!-- This car is very awesome relaxes your body while driving to your destination.
    Awesome brand and good name BMW -->