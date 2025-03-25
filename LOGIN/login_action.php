<?php
session_start();
$valid_username = "abc@gmail.com";
$valid_password = "12345";
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == $valid_username && $password == $valid_password) {
    $_SESSION['username'] = $username;
    echo "<script> window.location.href='welcome.php';</script>";
    exit;
} else {
    $_SESSION['login_error'] = "Invalid username or password!";
    echo "<script> window.location.href='login.php';</script>";
    exit;
}
?>
