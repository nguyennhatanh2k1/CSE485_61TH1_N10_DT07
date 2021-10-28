<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "test1";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>