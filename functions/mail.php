<?php
ini_set("include_path", '/home5/vidyalio/php:' . ini_get("include_path") );
require_once "Mail.php";

$from = "Sandra Sender <admin@vidyalionsit.com>";
$to = "Ramona Recipient <admin@vidyalionsit.com>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";

$host = "give.solidhosting.pro";
$port = "25";
$username = "admin@vidyalionsit.com";
$password = "Password12";

$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }
?>


