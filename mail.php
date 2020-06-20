<?php

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
if(empty($name)||empty($email)||empty($message)||empty($subject)){
    header("Location:contact.php?email=error");
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location:contact.php?email=emailerror");
}else{
$content="From: $name \n Email: $email \n Message: $message";
$recipient = "zapata_vlad@yahoo.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader);
header("Location: contact.php?mailsend");
}
}

?>