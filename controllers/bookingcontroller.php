<?php
    session_start();
    require_once '../config/db.php';

    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'athlete') {
        die('Unauthorized');
    }

    $athlete_id = $_SESSION['user_id'];
    $availability_id = $_POST['availability_id'] ?? null;

    if (!$availability_id) {
        die('Invalid request');
    }

    /* Get coach_profile_id from availability */
    $sql = "SELECT coach_profile_id FROM availabilities WHERE id = ? AND status = 'available'";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $availability_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        die('Slot not available');
    }

    $coach_profile_id = $data['coach_profile_id'];

    /* Transaction */
    mysqli_begin_transaction($conn);

    try {
        // Insert booking
        $sql = "INSERT INTO bookings (athlete_id, coach_profile_id, availability_id)
                VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "iii", $athlete_id, $coach_profile_id, $availability_id);
        mysqli_stmt_execute($stmt);

        // Mark availability as booked
        $sql = "UPDATE availabilities SET status = 'booked' WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $availability_id);
        mysqli_stmt_execute($stmt);

        mysqli_commit($conn);
        header("Location: ../views/athlete/mybookings.php");
        exit;
    } catch (Exception $e) {
        mysqli_rollback($conn);
        echo "Booking failed";
    }
