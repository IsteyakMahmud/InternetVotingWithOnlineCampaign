<?php include 'includes/session.php'; ?>
<?php
$_id = $_GET['id'];
$query = "DELETE FROM posts WHERE id = $_id";
$result = mysqli_query($conn, $query);

header("Location:post.php");
?>