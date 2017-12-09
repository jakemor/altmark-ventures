<?php

$message = urlencode($_GET["message"] . "\n\nhttps://application.textline.com/conversations");

$url1 = "http://jakemor.com/services/sendSMS.php?number=+15165102133&message=$message";
$url2 = "http://jakemor.com/services/sendSMS.php?number=+15163535851&message=$message";

file_get_contents($url1);
file_get_contents($url2);

?>

