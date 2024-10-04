<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "iwp_project";

$connect = new mysqli($host, $user, $password, $dbname);

if ($connect->connect_error) {
    die("Database connection failed: " . $connect->connect_error);
} else {
    // echo "Connected to the MySQL database!";
}

?>
