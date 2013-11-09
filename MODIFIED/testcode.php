<?php
$to      = "sureshprasannaceg@gmail.com";
$subject = "Account Confirmation";
$headers = "From: xyz@gmail.com";
$message = "Testing";
$mail = mail($to, $subject, $message, $headers);

if ($mail) {
    echo "Mail sent.";
} else {
   echo "Some Error occur.";
}
?>