<?php
session_start();
require "config/db.php";

if(isset($_POST['login'])) {

$username = $_POST['username'];
$password = $_POST['password'];

// Get user
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Check login
if($user && password_verify($password, $user['password'])) {

    $_SESSION['user'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    // ROLE BASED REDIRECT
    if($user['role'] == 'admin'){
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: user_dashboard.php");
        exit();
    }

} else {
    echo "<script>alert('Invalid Login');window.location='login.php';</script>";
}

}
?>
