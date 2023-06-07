<?php
include 'includes/session.php';
include 'sms.php';

if (isset($_POST['add'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //$pass = $_POST['password'];
    //$password = password_hash("admin", PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $election_id = $_POST['election_id'];
    $filename = $_FILES['photo']['name'];
    if (!empty($filename)) {
        move_uploaded_file($_FILES['photo']['tmp_name'], '../images/' . $filename);
    }
    //generate voters id
    $set = '123456789abcdefghijklmnopqrstuvwxyz';
    $voter = substr(str_shuffle($set), 0, 8);
    $pass = substr(str_shuffle($set), 0, 8);
    $password = password_hash($pass, PASSWORD_DEFAULT);
    //Send Email
    $to = $email;
    $subject = "Internet Voting With Online Campaign";
    $message = "Hi, Welcome to our project. As you are our voter for. Your details has given below.
                \nVoter Name: $firstname $lastname
                \nPhone: $phone\nVoter ID: $voter
                \nPassword: $pass 
                \nNow you can login voting panel.
                \nIf you face any kind of issues contact us.
                \nCall: 01843180191";
    $headers = "From: mahabubiiuc45@gmail.com" . "\r\n" .
        "Reply-To: mahabubiiuc45@gmail.com" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);

////////////------Sending SMS------////////////////
    //$sms_message = "Voter ID = ".$voter. "\nPassword = ".$pass;
    $sms_message = "Hi, Welcome to our project. As you are our voter for. Your details has given below.
                    \nVoter Name: $firstname $lastname
                    \nPhone: $phone
                    \nVoter ID: $voter
                    \nPassword: $pass 
                    \nNow you can login voting panel.";
    sendsms($sms_message,$phone);


    $sql = "INSERT INTO voters (voters_id, password, firstname, lastname, email, phone,election_id, photo) VALUES ('$voter', '$password', '$firstname', '$lastname','$email','$phone','$election_id', '$filename')";
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Voter added successfully';
    } else {
        $_SESSION['error'] = $conn->error;
    }

} else {
    $_SESSION['error'] = 'Fill up add form first';
}

header('location: voters.php');
?>