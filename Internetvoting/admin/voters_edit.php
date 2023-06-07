<?php
include 'includes/session.php';
include 'sms.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
//		$password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $election_id = $_POST['election_id'];

    $sql = "SELECT * FROM voters WHERE id = $id";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

//		if($password == $row['password']){
//			$password = $row['password'];
//		}
//		else{
//			$password = password_hash($password, PASSWORD_DEFAULT);
//		}
    //generate voters id
    $set = '123456789abcdefghijklmnopqrstuvwxyz';
    $voter = substr(str_shuffle($set), 0, 8);
    $pass = substr(str_shuffle($set), 0, 8);
    $password = password_hash($pass, PASSWORD_DEFAULT);
    //Send Email
    $to = $email;
    $subject = "Internet Voting With Online Campaign";
    $message = "Hi, Welcome to our project. As you are our voter for. Your details has given below.\nVoter Name: $firstname $lastname\nPhone: $phone\nVoter ID: $voter\nPassword: $pass \nNow you can login voting panel.\nIf you face any kind of issues contact us.\nCall: 01843180191";
    $headers = "From: mahabubiiuc45@gmail.com" . "\r\n" .
        "Reply-To: mahabubiiuc45@gmail.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);

    //Send SMS
    //$sms_message = "Voter ID = ".$voter. "\nPassword = ".$pass;
    $sms_message = "Hi, Welcome to our project. As you are our voter for. Your details has given below.
                    \nVoter Name: $firstname $lastname
                    \nPhone: $phone
                    \nVoter ID: $voter
                    \nPassword: $pass 
                    \nNow you can login voting panel.";
    sendsms($sms_message, $phone);

    $sql = "UPDATE voters SET voters_id = '$voter', firstname = '$firstname', lastname = '$lastname', password = '$password', email = '$email', phone = '$phone', election_id = '$election_id' WHERE id = '$id'";
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Voter Updated Successfully';
    } else {
        $_SESSION['error'] = $conn->error;
    }
} else {
    $_SESSION['error'] = 'Fill up edit form first';
}

header('location: voters.php');

?>