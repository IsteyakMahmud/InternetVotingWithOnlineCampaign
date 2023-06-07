<?php
include 'includes/session.php';

if(isset($_POST['contact'])){
    $type = $_POST['type'];
    $message = $_POST['message'];
    $filename = $_FILES['credentials']['name'];
    if(!empty($filename)){
        move_uploaded_file($_FILES['credentials']['tmp_name'], 'img/'.$filename);
    }

    $sql = "INSERT INTO contacts (types, message, photo) VALUES ('$type', '$message', '$filename')";
    if($conn->query($sql)){
        $_SESSION['success'] = 'Candidate added successfully';
    }
    else{
        $_SESSION['error'] = $conn->error;
    }

}
else{
    $_SESSION['error'] = 'Fill up add form first';
}

header('location: candidates.php');
?>