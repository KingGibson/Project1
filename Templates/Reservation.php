<!--Reservation Section Start-->
<div class="reservation" id="reservation">
    <div class="image"></div>
    <div class="form">
        <h1 class="heading">Book a Table</h1>
        <center><h3 class="sub-heading"> ~ Check out our place ~</h3></center>

        <form action="" method="post">
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
            <center><button type="submit" name="action" value="create" class="btn">Book Now</button></center>
        </form>

        <!-- Links to Update and Delete Forms -->
        <h2>Manage Reservations</h2>
        <center>
            <a href="manage_reservation.php?action=update" class="btn">Update Reservation</a>
            <a href="manage_reservation.php?action=delete" class="btn">Delete Reservation</a>
        </center>
    </div>
</div>
<!--Reservation Section End-->

<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == "create") {
    $person = $_POST['people'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO reservation(people, reservation_time, phone, reservation_date, reservation_name, email)
    VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isisss", $person, $time, $phone, $date, $name, $email);
    $stmt->execute();
    echo "Reservation successful!";
    $stmt->close();

    $conn->close();
}
?>
