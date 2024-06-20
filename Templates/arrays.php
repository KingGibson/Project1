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

<?php 
//Multidimentional Arrays

$user_details =[
    "Director"=> array(
    "Fullname"=> "Alex Okama",
    "address"=> "Mada",
    "Email"=> "AOkama@yahoo.com",
    "Phone"=> [
        "Home" => "+2548458565",
        "Work" => "+2543245679",
        "Mobile" => "+254675645",
    ]
        
    ),
    "Secretary"=> array(
        "Fullname"=> "Mercy Okama",
        "address"=> "Mada",
        "Email"=> "AOkama@yahoo.com",
        "Phone"=> [
            "Home" => "+2548458565",
            "Work" => "+2543245679",
            "Mobile" => "+254675645",
        ]
            
        ),

        "Manager"=> array(
            "Fullname"=> "John Okama",
            "address"=> "Mada",
            "Email"=> "AOkama@yahoo.com",
            "Phone"=> [
                "Home" => "+2548458565",
                "Work" => "+2543245679",
                "Mobile" => "+254675645",
            ]
                
            ),
        ];
        print $user_details["Secretary"]["Phone"]["Work"];

?>
<pre>
    <?php print_r($user_details);?>
</pre>