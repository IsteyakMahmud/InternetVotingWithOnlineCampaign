<?php
include 'includes/session.php';
//$title = $_POST["title"];
$title = mysqli_real_escape_string($conn, $_POST['title']);
//$description = $_POST["description"];
$description = mysqli_real_escape_string($conn, $_POST['description']);
//$body = $_POST["body"];
$body = mysqli_real_escape_string($conn, $_POST['body']);
$candidate_id = $_POST["body"];

// Insert the data into the database
$sql = "INSERT INTO posts (title, description, body, candidate_id)
VALUES ('$title', '$description', '$body', '$candidate_id')";

mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:inbox.php');
?>
