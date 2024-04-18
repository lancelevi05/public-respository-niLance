<?php
session_start();

if(isset($_SESSION['user_id'])) {
    $username = $_SESSION['user_id'];
    echo "Welcome, $username! You are logged in.<br>";
    echo '<a href="logout.php">Logout</a>';
} else {
    header("Location: login.php");
    exit;
}
?>












