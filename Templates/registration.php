<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Register Here</h2>
            <form action="" method="post">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" required>
                
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" required>
                
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required min="1" max="120">
                
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
<a href="login.php">Login</a>
    <?php
    require 'connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["first_name"], $_POST["last_name"], $_POST["age"], $_POST["username"], $_POST["email"], $_POST["password"])) {
            $firstname = $_POST["first_name"];
            $lastname = $_POST["last_name"];
            $age = $_POST["age"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $duplicate = mysqli_query($conn, "SELECT * FROM registration WHERE username='$username' OR email='$email'");

            if (mysqli_num_rows($duplicate) > 0) {
                echo "<script>alert('Username or Email has been taken');</script>";
            } else {
                $query = "INSERT INTO registration (firstname, lastname, age, username, email, password) VALUES ('$firstname', '$lastname', '$age', '$username', '$email', '$password')";
                mysqli_query($conn, $query);
                echo "<script>alert('Registration Successful');</script>";
            }
        }
    }
    ?>
</body>
</html>