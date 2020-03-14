<?php 
require("Connection.php");

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$country = $_POST['country'];

if(isset($_POST['submit'])) {
    $sql = "INSERT INTO user(firstname,lastname,email,country) VALUES ('$firstName','$lastName','$email','$country')";

    $query = $connect->query($sql);

    if (!$query) {
        echo "Error Occured : " . $sql . "<br>" . $connect->error;
    }
    else {
        header('LOCATION: index.php');
    }
}

?> 