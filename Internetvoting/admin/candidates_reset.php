<?php
include 'includes/session.php';

$sql = "DELETE FROM candidates";
if($conn->query($sql)){
    $_SESSION['success'] = "Candidates Reset Successfully";
}
else{
    $_SESSION['error'] = "Something went wrong in reseting";
}

header('location: candidates.php');

?>