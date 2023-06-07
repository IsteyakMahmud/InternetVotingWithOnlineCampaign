<?php
session_start();
include 'includes/conn.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM voters WHERE voters_id = '$email'";
    $query = $conn->query($sql);

    if($query->num_rows < 1){

        $sql = "SELECT * FROM candidates WHERE email = '$email'";
        $query = $conn->query($sql);
        if($query->num_rows < 1){
            $_SESSION['error'] = 'Cannot find account with the Email or id or matching password';
        }else{
            $row = $query->fetch_assoc();
            if(password_verify($password, $row['password'])){
                $_SESSION['candidate'] = $row['id'];
            }
            else{
                $_SESSION['error'] = 'Cannot find account with the Email or id or matching password';
            }
        }
    }
    else{
        $row = $query->fetch_assoc();
        if(password_verify($password, $row['password'])){
            $_SESSION['voter'] = $row['id'];
        }
        else{
            $_SESSION['error'] = 'Cannot find account with the Email or id or matching password';
        }
    }

}
else{
    $_SESSION['error'] = 'Input voters credentials first';
}

header('location: index.php');

?>