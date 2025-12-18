<?php
session_start();
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT,['cost' => 12]);
    $role = $_POST["role"];

    $sql = "INSERT INTO `users`(`username`, `email`,`password`,`role`) VALUES ($name,$email,$password,$role);";
    if (mysqli_query($conn,$sql)) {
        header("location: ../views/login.php");
    } else {
        echo 'signup faild';
    } 

    mysqli_close($conn);

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password,$user["password"])) {
            session_start();
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["name"] = $user["username"];
            $_SESSION["role"] = $user["role"];
            if ($user["role"] === "Coach") {
                echo 'rah coach';
            }  else {
                echo 'rah client';
            }
            exit;
            echo 'ps veruf';
        } else {
            echo 'wrong ps';
        }
    } else {
        echo 'hhhhhhhhh';
    }

    mysqli_close($conn);

}