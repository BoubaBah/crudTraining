<?php
$host = "localhost";
$username = "root";
$passeword = "";
$dbname = "crudtraining";

$conn = mysqli_connect($host, $username, $passeword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}













?>