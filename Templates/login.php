<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Login Here</h2>
            <form action="login.php" method="post">
                <label for="usernameemail">Username or Email</label>
                <input type="text" id="usernameemail" name="usernameemail" required>
                
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" required>
                
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    
    <?php
session_start();
include 'connection.php'; // Ensure your connection file is included and correct

if (isset($_POST["usernameemail"], $_POST["password"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    
    $stmt = $conn->prepare("SELECT * FROM registration WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $usernameemail, $usernameemail);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) { // Assuming passwords are hashed
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('Wrong Password');</script>";
        }
    } else {
        echo "<script>alert('User not Registered');</script>";
    }
}

?>


