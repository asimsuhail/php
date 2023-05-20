<?
$to = "suhail.wpbrigade@gmail.com";

$msg = " hi asim how are you";

$sub = " greetings";

$from = "From: macimo1068@unicsite.com" . "\r\n";

mail($to,$sub,$msg,$from);

echo "<h2>sent</h2>";