<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $election = $_POST['election'];
    $position = $_POST['position'];
    $platform = $_POST['platform'];
    $password = password_hash("admin", PASSWORD_DEFAULT);


    $sql = "UPDATE candidates SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', position_id = '$position', election_id = '$election' , platform = '$platform', password = '$password' WHERE id = '$id'";
    if ($conn->query($sql)) {
        $_SESSION['success'] = 'Candidate updated successfully';
    } else {
        $_SESSION['error'] = $conn->error;
    }
} else {
    $_SESSION['error'] = 'Fill up edit form first';
}

header('location: candidates.php');

?>