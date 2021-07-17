<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$mes = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New form Submisson';

$email_body = "User Neme : $name.\n".
                "User Email : $email.\n".
                "User Subject : $subject.\n".
                "User Message : $message.\n";

$to = "kamelija.arnautova7@gmail.com";

$header = " From: $email_form \r\n";
$header .= " From: $email \r\n";

mail($to, $email_subject, $email_body, $header);

header("Location: contact.html");




?>