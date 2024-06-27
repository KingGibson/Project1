<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogOut</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
<div class="container">
        <div class="form-container">
            <h2>Logout Here</h2>
            <form action="connection.php" method="post">
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>

    <?php
    require 'connection.php';
    $_SESSION =[];
    session_unset();
    session_destroy();
    header("Location: login.php");
    ?>
</body>
</html>