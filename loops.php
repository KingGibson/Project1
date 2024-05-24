<h1>Loops</h1>
<h4>While Loop</h4>
<?php 
//While Loop

$in = 0;
while($in < 10){
    print $in . "<br>";
    $in++;
}
?>
<h4>Do-While Loop</h4>

<?php 
//do-While Loop

$s = 55;
do{
    print $s . "<br>";
    $s++;
}while($s < 15);
?>

<h4>For Loop</h4>
<?php
for($f=45; $f<55; $f++)
    print $f . "<br>";
?>

<h4>ForEach</h4>
<?php 
$months =[ "January","Febuary","March","April","May","June","July","August","September","October","Novermber","December"];

foreach($months AS $month){
    print $month. "<br>";
}

?>
