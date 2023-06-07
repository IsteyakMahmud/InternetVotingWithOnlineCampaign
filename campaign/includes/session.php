<?php
include 'includes/conn.php';
//include_once ('conn.php');
session_start();

if(isset($_SESSION['voter'])){
    $sql = "SELECT * FROM voters WHERE id = '".$_SESSION['voter']."'";
    $query = $conn->query($sql);
    $voter = $query->fetch_assoc();
}
elseif (isset($_SESSION['candidate'])){
    $sql = "SELECT * FROM candidates WHERE id = '".$_SESSION['candidate']."'";
    $query = $conn->query($sql);
    $candidate = $query->fetch_assoc();
}
else{
    header('location: index.php');
    exit();
}

?>