<?php
include "db.php";

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vulnerable query: user input directly included in SQL
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo "Login Successful";
    }else{
        echo "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login (Vulnerable)</title>
</head>

<body>

<h2>Login Page - Vulnerable</h2>

<form method="POST">

Username:<br>
<input type="text" name="username"><br><br>

Password:<br>
<input type="password" name="password"><br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>