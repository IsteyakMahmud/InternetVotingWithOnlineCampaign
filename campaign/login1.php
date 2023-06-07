<?php
session_start();
include 'includes/conn.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM voters WHERE email = '$email'";
    $query = $conn->query($sql);

    if($query->num_rows < 1){
        $_SESSION['error'] = 'Cannot find account with the Email';
    }
    else{
        $row = $query->fetch_assoc();
        if(password_verify($password, $row['password'])){
            $_SESSION['voter'] = $row['id'];
        }
        else{
            $_SESSION['error'] = 'Incorrect password';
        }
    }

}
else{
    $_SESSION['error'] = 'Input voters credentials first';
}

header('location: index.php');

?>