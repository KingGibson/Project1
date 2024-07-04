<?php
session_start();

if (isset($_SESSION["fname"])) {
    print 'Hey ' . $_SESSION["fname"];

    print '<br> <a href="page3.php>Go to page 3</a>';
} else {
    header("Location:page3.php");
    exit();
}

?>

