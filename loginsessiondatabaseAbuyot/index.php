<?php
session_start();

if (isset($_SESSION['user_id'])) {
    echo "Welcome, ".$_SESSION['username']."!<br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    header("Location: login.php");
    exit;
}
?>
