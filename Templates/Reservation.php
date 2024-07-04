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

                        <input type="text" name="time" placeholder="Time">
                        <input type="text" name="phone" placeholder="Phone">
                    </div>

                    <div>
                        <input type="text" name="date" placeholder="Date">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <center><button type="submit" class="btn">Book Now</button></center>
            </form>
        </div>
    </div>
<!--Reservation Section End-->

<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $people = $_POST['people'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO reservation (people, time, phone, date, name, email)
            VALUES ('$people', '$time', '$phone', '$date', '$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
