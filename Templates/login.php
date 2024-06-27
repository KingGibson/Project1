<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

   
<div class="container">
        <div class="form-container">
            <h2>Login Here</h2>
            <form action="connection.php" method="post">
                <label for="usernameemail">Username or Email</label>
                <input type="text" id="usernameemail" name="usernameemail" required>
                
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" required>
                
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
<?php
require 'connection.php';
 if (isset($_POST["username"], $_POST["password"])){
    $username = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn,"SELECT * FROM registration WHERE username = '$usernameemail' OR email= '$usernameemail" );

    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)> 0){

        if($password == $rows["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");

        }
        else {
            echo "<script>alert('Wrong Password');</script>";
        }

    }

    else {
        echo "<script>alert('User not Registered');</script>";
    }
}
 ?>   
</body>
</html>
