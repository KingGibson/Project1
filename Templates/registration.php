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
            <h2>Register</h2>
            <form action="connection.php" method="post">
                <label for="reg-username">Username</label>
                <input type="text" id="username" name="username" required>
                
                <label for="reg-email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="reg-password">Password</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    
    

?>