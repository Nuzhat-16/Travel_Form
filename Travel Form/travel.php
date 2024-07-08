<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "travel_form";


$con = mysqli_connect($server, $username, $password, $dbname);


if (!$con) {
    die("Connection to this database failed due to " . mysqli_connect_error());
}
echo "Success connecting to the db";


$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dept = $_POST['dept'];
$other = $_POST['other']; 


$sql = "INSERT INTO `form` (`name`, `age`, `gender`, `email`, `phone`, `dept`, `other`, `dt`) 
        VALUES ('$name', '$age', '$gender', '$email', '$phone', '$dept', '$other', current_timestamp());";


if ($con->query($sql) === true) {
    $insert = true;
    echo "Successfully inserted";
} else {
    echo "ERROR: $sql <br> $con->error";
}


$con->close();
?>
