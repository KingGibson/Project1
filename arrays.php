<?php 
//indexed or Numeric Array
$colors = [ "Black", "Green","Yellow"];

print_r ($colors);

?>

<br>

<?php
 
//Indexed Array
$user = array ("Alex", "Peter", "Ann");
print $user[2];
?>

<pre>
    <?php print_r ($user);?>
</pre>

<?php 
//Associated Array

$user_data= [
    "Fullname"=> "Alex Okama",
    "Email"=> "AOkama@yahoo.com",
    "Phone"=> "+25434567898"
];

print $user_data["Email"];
?>
<pre>
    <?php print_r($user_data);?>
</pre>

