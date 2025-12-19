<?php

    require_once '../config/db.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: ../views/login.php");
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows !== 1) {
        header("Location: ../views/signup.php");
        exit;
    }

    $user = $result->fetch_assoc();

    if (!password_verify($password, $user['password'])) {
        header("Location: ../views/signup.php");
        exit;
    }

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['name'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    if ($user['role'] === 'coach') {
        header("Location: ../views/createprofile.php");
    } else {
        header("Location: ../views/clientdashboard.php");
    }
    exit;
