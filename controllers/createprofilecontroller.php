<?php
    session_start();
    require_once '../config/db.php';

    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'Coach') {
        header("Location: ../views/signup.php");
    }

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("location: ../views/createprofile.php");
    }

    $user_id = $_SESSION['user_id'];
    $description = $_POST['description'];
    $experience_years = $_POST['experience_years'];
    $certification = $_POST['certification'];
    $photo_url = $_POST['photo_url'];

    $sql = "INSERT INTO coach_profiles
    (user_id, description, experience_years, certifications, photo)
    VALUES (?,?,?,?,?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param(
        $stmt,
        "isiss",
        $_SESSION["user_id"],
        $description,
        $experience_years,
        $certification,
        $photo_url
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../views/profile.php");
        exit;
    } else {
        header("location: ../views/createprofile.php");
    }
