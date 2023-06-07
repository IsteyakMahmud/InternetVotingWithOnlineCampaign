<?php
session_start();
include 'includes/conn.php';
include 'sms.php';
//$otp=$_SESSION["OTP"];
if (isset($_POST['login'])) {
    $voter = $_POST['voter'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM voters WHERE voters_id = '$voter'";
    $query = $conn->query($sql);

    if ($query->num_rows < 1) {
        $_SESSION['error'] = 'Cannot find voter with the ID';
    } else {
        $row = $query->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['voter'] = $row['id'];
        } else {
            $_SESSION['error'] = 'Incorrect password';
        }
    }

    // This is my hosting mail
    $email = $row['email'];
    $from = "mahabubiiuc45@gmail.com";
    $to = $email;
    $subject = "OTP Verification";
    // Generating otp with php rand variable
    $otp = rand(100000, 999999);
    $message = strval($otp);
    $sms_message = "Your voting otp is ".$message;
    sendsms($sms_message);
    //$message=file_get_contents('otp_send.php');
    $headers = "From:" . $from;
    if (mail($to, $subject, $message, $headers)) {
        $_SESSION["OTP"] = $otp;
        $_SESSION["Email"] = $email;
        //header("location:verify-otp.php");
    } else
        echo("Mail Send Failed");

    /////......SMS....///
    //include 'sms.php';

} else {
    $_SESSION['error'] = 'Input voter credentials first';
}

header('location: index.php');

?>