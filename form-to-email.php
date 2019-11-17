<?php

$name = $_POST['name'];
$request = $_POST['request'];

$to = "dileep.nidiginti@nagra.com";
$subject = "php request";
$body = "Hi, its requetsed";

mail($to,$subject,$body);

echo "Message sent!!";
?> 
