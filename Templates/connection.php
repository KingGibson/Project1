<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
// Create connection
$connection = mysqli_connect($servername, $username, $password,$dbname);


if(!$connection) {die("".mysqli_connect_errno()); }
