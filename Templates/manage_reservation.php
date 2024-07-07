<?php
include 'connection.php';

$action = $_GET['action'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($action == "update") {
        $reservation_id = $_POST['reservation_id'];
        $person = $_POST['people'];
        $time = $_POST['time'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        $stmt = $conn->prepare("UPDATE reservation SET people=?, reservation_time=?, phone=?, reservation_date=?, reservation_name=?, email=? WHERE id=?");
        $stmt->bind_param("isisssi", $person, $time, $phone, $date, $name, $email, $reservation_id);
        $stmt->execute();
        echo "Reservation updated!";
        $stmt->close();

    } elseif ($action == "delete") {
        $reservation_id = $_POST['reservation_id'];

        $stmt = $conn->prepare("DELETE FROM reservation WHERE id=?");
        $stmt->bind_param("i", $reservation_id);
        $stmt->execute();
        echo "Reservation deleted!";
        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Reservation</title>

     <!--Custom css file link-->
  <link rel="stylesheet" href="../assets/css/styles.css">
  
</head>
<body>
<div class="reservation" id="reservation">
    <div class="image"></div>
    <div class="form">
        <?php if ($action == "update") { ?>
            <h2>Update Reservation</h2>
            <form action="" method="post">
                <input type="text" name="reservation_id" placeholder="Reservation ID">
                <div class="form-holder">
                    <div>
                        <select name="people" id="">
                            <option value="1">1 person</option>
                            <option value="2">2 people</option>
                            <option value="3">3 people</option>
                            <option value="4">4 people</option>
                        </select>

                        <input type="time" name="time" placeholder="Time">
                        <input type="text" name="phone" placeholder="Phone">
                    </div>

                    <div>
                        <input type="date" name="date" placeholder="Date">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <center><button type="submit" class="btn">Update</button></center>
            </form>
        <?php } elseif ($action == "delete") { ?>
            <h2>Delete Reservation</h2>
            <form action="" method="post">
                <input type="text" name="reservation_id" placeholder="Reservation ID">
                <center><button type="submit" class="btn">Delete</button></center>
            </form>
        <?php } else { ?>
            <h2>Invalid Action</h2>
        <?php } ?>
    </div>
</div>
</body>
</html>
