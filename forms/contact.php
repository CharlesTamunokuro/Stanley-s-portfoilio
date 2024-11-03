<?php
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $name = htmlspecialchars(trim( $_POST['name']) , ENT_QUOTES, 'UTF-8');
  $email = htmlspecialchars(trim( $_POST['email']) , FILTER_SANITIZE_EMAIL );
  $subject = htmlspecialchars(trim( $_POST['subject']) , ENT_QUOTES, 'UTF-8');
  $message = htmlspecialchars(trim( $_POST['message']) , ENT_QUOTES, 'UTF-8');

  $to = "charlesdima0000@gmail.com";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $email_subject = $subject;
  $email_body = "<p><strong>Name:</strong>{$name}</p>";
  $email_body = "<p><strong>Email:</strong>{$email}</p>";
  $email_body = "<p><strong>Subject:</strong>{$subject}</p>";
  $email_body = "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

  if (mail($to, $subject, $message, $email_body, $headers)){
    echo "<p> Thank You, $name! Your message has been sent successfully.</p>";
 }else{
  echo "<p>Oops! Something went wrong, and we couldn't send your message. Please Refresh This Page and try again.</p>";
 }
}else{
  echo "<p>Invalid request</p>";
}
 

 ?>