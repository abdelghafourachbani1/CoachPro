<?php
    session_start();
    require_once '../config/db.php';

    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'coach') {
        die('Unauthorized');
    }

    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM coach_profiles WHERE user_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $profile = mysqli_fetch_assoc($result);

    if (!$profile) {
        header("Location: ../views/createprofile.php");
        exit;
    }
