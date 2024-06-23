<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Registration</h2>
<form class="" action="" method="post" autocomplete="off">
    <label for="name">Name :</label>
    <input type="text" name="name" id="name" required value=""><br>

    <label for="username">Username :</label>
    <input type="text" name="Username" id="Username" required value=""><br>


    <label for="email">Email:</label>
    <input type="email" name="Email" id="Email" required value=""><br>

    <label for="password">Password:</label>
    <input type="password" name=password" id="password" required value=""><br>

    <label for="confirmpassword">confirmpassword:</label>
    <input type="confirmpassword" name="confirmpassword" id="confirmpassword" required value=""><br>

    <button type="submit" name="submit">Register</button>

</form>
<br>
<a href="login.php">Login</a>
</body>
</html>

<?php
require 'connection.php'
    if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM userinfo WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> alert('Username or Email has been Taken'); </script>";
    }
    else {
        if($password == $confirmpassword) {
            $query = "INSERT INTO userinfo VALUES('', '$name', '$username', '$email','$password')";
            mysqli_query($conn,$query);
            echo
        "<script> alert('Registration Successful'); </script>";

        }
        else {
            echo
        "<script> alert('Password does not Match'); </script>";
        }
    }
}
 
?>