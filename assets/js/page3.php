<?php
session_start();

if (isset($_SESSION["fname"])) {
    print 'yes the session is alive';
    print '<br> <a href="page4.php">Destroy the session</a>';

}else {
    print 'no the session was destroyed';
    print '<br> <a href="page1.php">Create a new session/a>';
}
?>