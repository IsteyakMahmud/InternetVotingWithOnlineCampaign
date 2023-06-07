<?php
include 'includes/session.php';

$sql = "DELETE FROM voters";
if($conn->query($sql)){
    $_SESSION['success'] = "Voters Reset Successfully";
}
else{
    $_SESSION['error'] = "Something went wrong in reseting";
}

header('location: voters.php');

?>