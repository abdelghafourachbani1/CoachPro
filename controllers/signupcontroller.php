<?php
    require_once '../config/db.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ../views/signup.php");
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

    $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssss", $name, $email, $hashedPassword, $role);

    if ($stmt->execute()) {
        header("Location: ../views/login.php");
        exit;
    } else {
        header("Location: ../views/signup.php");
        exit;
    }
