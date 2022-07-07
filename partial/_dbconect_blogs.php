<?php
$serevername = "localhost";
$username = "scienced_blogs";
$password = "Rohit$$88303";
$database = "scienced_blogs";

$conn = mysqli_connect($serevername, $username, $password, $database);

if ($conn) {
    echo 'Succecc';
}

?>