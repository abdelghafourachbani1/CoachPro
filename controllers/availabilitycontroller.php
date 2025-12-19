<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'coach') {
    die('Unauthorized');
}

// Get coach_profile_id
$user_id = $_SESSION['user_id'];
$sql = "SELECT id FROM coach_profiles WHERE user_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$profile = mysqli_fetch_assoc($result);
$coach_profile_id = $profile['id'] ?? null;

if (!$coach_profile_id) {
    die('Coach profile not found.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date_avb'];
    $start = $_POST['start_time'];
    $end   = $_POST['end_time'];

    if (!$date || !$start || !$end) {
        die('All fields are required');
    }

    $sql = "INSERT INTO availabilities (coach_profile_id, date_avb, start_time, end_time) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "isss", $coach_profile_id, $date, $start, $end);
    if (mysqli_stmt_execute($stmt)) {
        header("Location: ../../views/coach/availability.php");
        exit;
    } else {
        echo "Error adding availability";
    }
}
