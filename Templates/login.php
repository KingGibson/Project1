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
                <label for="login-username">Username</label>
                <input type="text" id="login-username" name="username" required>
                
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" required>
                
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    
</body>
</html>
