<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = empty($_POST["message"]) ? "[no message]" : $_POST["message"];
$company = empty($_POST["company"]) ? "" : " from " . $_POST["company"];

$url = "http://www.abemor.com/api/v1/new_form_response";
$data = array('name' => $name . $company, "email" => $email, "phone" => $phone, "message" => $message);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);