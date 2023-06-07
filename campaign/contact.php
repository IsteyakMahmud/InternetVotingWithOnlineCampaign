<?php
include 'includes/session.php';
$subject = $_POST["subject"];
$message = $_POST["message"];
$filename = $_FILES["proof"]['name'];
$user = $_POST['user'];
if(!empty($filename)){
    move_uploaded_file($_FILES['proof']['tmp_name'], 'img/'.$filename);
}

// Insert the data into the database
$sql = "INSERT INTO contactus (subject, message, proof, user)
VALUES ('$subject', '$message', '$filename','$user')";

mysqli_query($conn,$sql);
mysqli_close($conn);
header('location:home.php');

?>