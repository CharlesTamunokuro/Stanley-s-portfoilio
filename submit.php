<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "charlesdima0000@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo "<h1>Thank You for Messaging us we will Respond Shortly<h1> <br> <p><a href='index.php'>Click To Return To Homepage</a>";

?>