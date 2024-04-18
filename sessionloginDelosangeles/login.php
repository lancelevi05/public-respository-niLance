<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate login credentials
    if($username === "john" && $password === "glen") {
        $_SESSION['user_id'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>


