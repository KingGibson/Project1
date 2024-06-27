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
            <form action="connection.php" method="post">
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

                <label for="reg-username">Username</label>
                <input type="text" id="reg-username" name="username" required>
                
                <label for="reg-email">Email</label>
                <input type="email" id="reg-email" name="email" required>
                
                <label for="reg-password">Password</label>
                <input type="password" id="reg-password" name="password" required>
                
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    
    

?>