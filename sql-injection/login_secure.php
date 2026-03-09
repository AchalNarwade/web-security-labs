<?php
include "db.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Secure query using prepared statements
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows > 0){
        echo "Login Successful";
    }else{
        echo "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login (Secure)</title>
</head>

<body>

<h2>Login Page - Secure</h2>

<form method="POST">

Username:<br>
<input type="text" name="username"><br><br>

Password:<br>
<input type="password" name="password"><br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>