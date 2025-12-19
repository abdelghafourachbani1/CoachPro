<?php
session_start();
require_once '../../config/db.php';

$user_id = $_SESSION['user_id'];

/* Get coach profile */
$sql = "SELECT id FROM coach_profiles WHERE user_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$profile = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
$coach_profile_id = $profile['id'];

/* Get bookings */
$sql = "
SELECT 
    b.id,
    b.status,
    u.name AS athlete_name,
    a.date_avb,
    a.start_time,
    a.end_time
FROM bookings b
JOIN users u ON b.athlete_id = u.id
JOIN availabilities a ON b.availability_id = a.id
WHERE b.coach_profile_id = ?
ORDER BY a.date_avb, a.start_time
";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $coach_profile_id);
mysqli_stmt_execute($stmt);
$bookings = mysqli_fetch_all(mysqli_stmt_get_result($stmt), MYSQLI_ASSOC);
