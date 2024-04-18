<?php
session_start();

if(isset($_SESSION['user_id'])) {
    $welcome = "Welcome, ".$_SESSION['username']."!<br>";
    $logout= '<a href="logout.php">Logout</a>';
} else {
    header("Location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <?php echo $welcome; ?>
        <?php echo $logout; ?>
    </div>
</body>
</html>

<style>
    .card{
			width:400px;
			text-align:center;
			padding:30px;	
		}
	</style>