<?php
$first = $_POST['first'];
$first = strip_tags($first);
$last = $_POST['last'];
$last = strip_tags($last);
$email = $_POST['email'];
$email = strip_tags($email);
$object = $_POST['object'];
$object = strip_tags($object);
$message = $_POST['message'];
$message = strip_tags($message);

$to = "ademski@rocketmail.com";

$message = "Un nouveau message\nNom : $first $last\nE-mail : $email\nMessage : $msg\n";

mail($to,$object,$message);

include("index.html");

?>
