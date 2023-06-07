<?php
session_start();

// ini_set('dispaly_errors',1);
// error_reporting(E_ALL);
$from ="mahabubiiuc45@gmail.com";
$to=$_SESSION["Email"];
$subject="OTP Verification";
$otp=rand(100000,999999);
$message=strval($otp);
$headers="From:" .$from;

if(mail($to,$subject,$message,$headers)){
    $_SESSION["OTP"]=$otp;
    header("Location:verify-otp.php");
}
else{
    echo("Mail send failed");
}

