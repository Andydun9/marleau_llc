<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$companyname = $_POST['companyname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$currenturl = $_POST['currenturl'];
$detailsOfRequest = $_POST['detailsOfRequest']


$to = "thomas.a.duncan9@gmail.com";
$subject = "New Request";
$body = "This is an automated message. We will respond back to you shortly please do not respond to the message. /n/n $request";

mail ($to, $subject, $body)

echo "Message Sent!" <a href="rfc.html">Click Here to send another message</a>
?>