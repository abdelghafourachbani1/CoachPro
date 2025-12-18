<?php
$host = "localhost";
$user = "adbelghafour";
$password = "adbelghafour";
$dbname = "coachpro";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("conection failed: " . mysqli_connect_error());
}
