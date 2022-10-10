<?php
$email = $_POST['email'];
$messsage = $_POST['message'];
$to = "support@smartdappsbuilder.com";
$from = $email;
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "Return-Path: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$headers .= "X-Mailer: PHP" . phpversion() . "\r\n";
$headers .= "X-Priority: 1 (Highest)\n";
$headers .= "X-MSMail-Priority: High\n";
$headers .= "Importance: High\n";

$subject = $subj;

$body = "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>{$message} <br/>you are about to chage your password. </p>";
$send = mail($to, $subject, $body, $headers);
header("location:./")
?>
