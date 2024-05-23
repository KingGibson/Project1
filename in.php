<?php 
date_default_timezone_set("Africa/Nairobi");


echo "This is my first php"; //Displaying a sentence or a string

print "<br>";//Using HTML's <br> to break a line

print "Today <span style ='color: #ff4856;
text-transform;uppercase;'> Thursday";

print "<br>"; //Using HTML's <br> to break a line

print 1999;

print "<br>";//Using HTML's <br> to break a line

print "5475";//THIS IS  A STRING

print "<br>";//Using HTML's <br> to break a line

print date('l'); //Displaying the current day of the week

print "<br>"; //Using HTML's <br> to break a line

print date('l, F jS Y', strtotime('+5 months'));

print "<br>";//Using HTML's <br> to break a line

print "Today is " .date('l, F jS Y H:i:s');


//Creating (Declaring) a varriable

$fname = "Alex Okama"; //Declaration of a variable or a string or group of words

$yob = 1999; //Declaration of digit or an integer

print "<br>";

print $fname;

print "<br>"; //Using HTML's <br> to break a line

echo $yob;

print "<br>"; //Using HTML's <br> to break a line

$current_year = date('Y');

echo $current_year;

print "<br>"; //Using HTML's <br> to break a line

$age = $current_year - $yob;

print $fname . " is " . $age ."years old.";

print $age;

$user_dob ="1999-05-26";

echo $fname . "was born in " .$yob;

print "<br>"; //Using HTML's <br> to break a line

echo $fname . "was actually born on " .$user_dob;

print "45+96";

print "<br>"; //Using HTML's <br> to break a line

print 45+69;


$birthday = new DateTime($user_dob);
$today = new DateTime('Today');

$interval = $birthday->diff($today);


echo '<pre>';
print_r($interval);
echo '</pre>';

print "<br>";

print $fname . "is, actually, " .$interval->y . "
years " . $interval->m . " months, and " . 
$interval->d . " days old.";

//The if else statement 

print "<br>";

$adult_age =18;
if($interval->y > $adult_age){
    print $fname . " is an adult"
}








?>