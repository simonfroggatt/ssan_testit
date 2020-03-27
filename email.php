<?php

$email_to = "simonfroggatt76@googlemail.com";
$email_from = "test@crownsigns.co.uk";
$message = $_POST["message"];
$email_subject = "Test gmail from website";
$headers = "From: " . $email_from . "\n";
$headers .= "Reply-To: " . $email_from . "\n";

$message = "This is a test email to check gmail accounts can receive from Fasthost server";

ini_set("sendmail_from", $email_from);
$sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
if ($sent)
{
    echo "Email sent";
} else {
    echo "There has been an error sending your comments. Please try later.";
}