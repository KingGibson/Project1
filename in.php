<?php 
date_default_timezone_set("Africa/Nairobi");


echo "This is my first php"; //Displaying a sentence or a string

print "<br>";//Using HTML's <br> to break a line

print "Today < span style ='color: #ff4856;
text-transform;uppercase;'> Thursday</span";

print "<br>"; //Using HTML's <br> to break a line

print 1999;

print "<br>";//Using HTML's <br> to break a line

print "5475";//THIS IS  A STRING

print "<br>";//Using HTML's <br> to break a line

print date('1'); //Displaying the current day of the week

print "<br>"; //Using HTML's <br> to break a line

print date('L, F jS Y', strtotime('+5 months'));

print "<br>";//Using HTML's <br> to break a line

print "Today is " .date('l, F jS Y H:i:s');









?>