<?php
//include 'includes/session.php';
session_start();
// Generate an OTP
$otp = $_SESSION["OTP"];
if(isset($_POST['verify'])){
    $entered_otp = $_POST['otp'];
    if ($otp == $entered_otp) {
        $_SESSION["VERIFY"] = 1;
        header('location: index.php');
    } else {
        //$_SESSION['otp-error'] = 'Incorrect OTP';
        echo "<script>alert('You enter an Incorrect OTP.');</script>";
    }
}

if(isset($_POST['resend'])){
    $from ="mahabubiiuc45@gmail.com";
    $to=$_SESSION["Email"];
    $subject="OTP Verification";
    $otp=rand(100000,999999);
    $message=strval($otp);
    $headers="From:" .$from;

    if(mail($to,$subject,$message,$headers)){
        $_SESSION["OTP"]=$otp;
        header("location:otp_send.php");
    }
    else{
        echo("Mail send failed");
    }
}


?>