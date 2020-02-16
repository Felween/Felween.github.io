<?php

$from = $_POST['name'];
$mail = $_POST['mail'];
$msg = $_POST['msg'];

$to = "ademski@rocketmail.com";

$subject = "Message Site Personnel";

$message = "Un nouveau message\nNom : $from\nE-mail : $mail\nMessage : $msg\n";

mail($to,$subject,$message);

include("index.html");

?>