<?php
session_start();
require_once '../config/db.php';

// Security
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'coach') {
    header("location: ../views/editprofile.php");
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request');
}

$user_id = $_SESSION['user_id'];

$description = $_POST['description'];
$experience_years = (int) $_POST['experience_years'];
$certification = $_POST['certification'];
$photo_url = $_POST['photo_url'];

$sql = "UPDATE coach_profiles 
        SET description = ?, experience_years = ?, certifications = ?, photo = ?
        WHERE user_id = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sissi",
    $description,
    $experience_years,
    $certification,
    $photo_url,
    $user_id
);

if (mysqli_stmt_execute($stmt)) {
    header("Location: ../views/profile.php");
    exit;
} else {
    echo "Error updating profile";
}
