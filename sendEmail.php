<?php
$name=$_POST['name'];
$email=$_POST['name'];
$subject=$_POST['name'];
$message=$_POST['name'];

$to="darshrp@yahoo.com";
mail($to,$subject, $message, "From: ". $name);
echo "sent"
    
?>