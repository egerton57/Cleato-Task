<?php 

$server = "localhost";
$user = "root";
$pws = "";
$db = "Cleato-test";

$connect = new mysqli($server,$user,$pws,$db);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

echo "Connected successfully";

?>