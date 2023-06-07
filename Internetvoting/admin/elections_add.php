<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$title = $_POST['title'];
        $positions = $_POST['positions'];
        $candidates = $_POST['candidates'];
        $voters = $_POST['voters'];
        $started_date = $_POST['started_date'];
        $end_date = $_POST['end_date'];



        $sql = "INSERT INTO elections ( title, positions, candidates, voters, started_date, end_date) VALUES ( '$title', '$positions', '$candidates','$voters','$started_date', '$end_date')";
		if($conn->query($sql)){
            $_SESSION['success'] = 'Election added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
        $sql2 = "INSERT INTO publish (election_id) VALUES ('".$conn->insert_id."')";
        $conn->query($sql2);
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: elections.php');
?>