<?php

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// send email


$success = mail("simonfroggatt76@gmail.com", "My subject", $msg);
if (!$success) {
    $errorMessage = error_get_last()['message'];
}
else {
    echo 'success';
}