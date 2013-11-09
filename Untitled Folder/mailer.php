<?php

//IT is PEAR mail function file. Don' t remove below line 
require_once "Mail.php";

$from = "sureshprasanna70@gmail.com";
$to = "sureshprasannaceg@gmail.com";

$subject = "Subject Of Your Mail";
$body = '<img src="youBanner.jpg/png/gif" />  <br/>';
$body.='Your Body content';

// SMTP and PORT setting for Gmail
$host = "ssl://smtp.gmail.com";
$port = "443";
$username = "sureshprasanna70@gmail.com";
$password = "9443892889";

//Setting up Headers for text and Image content type
$headers = array ('From' => $from,
                            'To' => $to,
                            'Subject' => $subject);

//Mail Header for Support HTML tags Images and UTF charset
$headers["Content-Type"] = 'text/html; charset=UTF-8';

$smtp = Mail::factory('smtp',
                                   array ('host' => $host,
                                             'port' => $port,
                                             'auth' => true,
                                             'username' => $username,
                                             'password' => $password));

//Send Email using pear sned option
$mail = $smtp->send($to, $headers, $body);

//If any errors occurs
if (PEAR::isError($mail)) {
            echo("<p>" . $mail->getMessage() . "</p>");
} 
else {
             echo("<p>Message successfully sent!</p>");
}

?>
