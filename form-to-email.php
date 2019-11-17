<?php

$name = $_POST['name'];
$request = $_POST['request'];

$to = "dilepkumar234@gmail.com";
$subject = "php request";
$body = "Hi, its requetsed";

mail($to,$subject,$body);

echo "Message sent!!";
?> 