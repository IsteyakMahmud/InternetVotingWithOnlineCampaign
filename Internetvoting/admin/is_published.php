<?php
include 'includes/session.php';


$election_id = $_POST['election_id'];
$sql = "UPDATE `publish` SET `is_published` = '1' WHERE `publish`.`election_id` =".$election_id ;
$conn->query($sql);
$_SESSION['success']= "Election Result Successfully published";
header('location: elections.php');