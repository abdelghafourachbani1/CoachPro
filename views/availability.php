<?php
session_start();
require_once '../../config/db.php';

// Get coach_profile_id
$user_id = $_SESSION['user_id'];
$sql = "SELECT id FROM coach_profiles WHERE user_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$profile = mysqli_fetch_assoc($result);
$coach_profile_id = $profile['id'] ?? null;

// Fetch existing availabilities
$sql = "SELECT * FROM availabilities WHERE coach_profile_id = ? ORDER BY date_avb, start_time";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $coach_profile_id);
mysqli_stmt_execute($stmt);
$avail_result = mysqli_stmt_get_result($stmt);
$availabilities = mysqli_fetch_all($avail_result, MYSQLI_ASSOC);
?>

<h1>Manage Availability</h1>

<!-- Add Slot Form -->
<form method="POST" action="../../controllers/availabilitycontroller.php">
    <input type="date" name="date_avb" required>
    <input type="time" name="start_time" required>
    <input type="time" name="end_time" required>
    <button type="submit">Add Slot</button>
</form>

<!-- Existing Slots -->
<h2>Existing Slots</h2>
<table border="1">
    <tr>
        <th>Date</th>
        <th>Start</th>
        <th>End</th>
        <th>Status</th>
    </tr>
    <?php foreach ($availabilities as $slot): ?>
        <tr>
            <td><?= htmlspecialchars($slot['date_avb']) ?></td>
            <td><?= htmlspecialchars($slot['start_time']) ?></td>
            <td><?= htmlspecialchars($slot['end_time']) ?></td>
            <td><?= htmlspecialchars($slot['status']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>