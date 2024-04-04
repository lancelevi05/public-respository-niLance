<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli("localhost", "root", "", "3rdexam");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
        exit;
    } else {
        $error = '<p style="color:red;">Invalid username or password</p>';
    }

    $stmt->close();
    $conn->close();
} ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>
    
    <div class="card">
    <h2>Login</h2> 
    <?php if(isset($error)) { echo $error . "<br>"; } ?>
    <form method="post" action="">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" id="pass" required><br>
        <input type="checkbox" onclick="myFunction()">Show Password <br>
        <input type="submit" value="Login">
    </form>
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
    <script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
