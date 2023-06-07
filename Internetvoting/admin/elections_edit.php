<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
        $election_id = $_POST['election_id'];
        $title = $_POST['title'];
        $positions = $_POST['positions'];
        $candidates = $_POST['candidates'];
        $voters = $_POST['voters'];
        $started_date = $_POST['started_date'];
        $end_date = $_POST['end_date'];

		$sql = "SELECT * FROM elections WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();


		$sql = "UPDATE elections SET election_id = '$election_id', title = '$title', positions = '$positions', candidates = '$candidates', voters = '$voters', started_date = '$started_date', end_date = '$end_date' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Election updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: elections.php');

?>