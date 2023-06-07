<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $election = $_POST['election'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];
		$filename = $_FILES['photo']['name'];
        $password = password_hash("admin", PASSWORD_DEFAULT);
        //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //$pass = $_POST['password'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
			//move_uploaded_file($_FILES['photo']['tmp_name'], '../../campaign/img/'.$filename);
		}

		$sql = "INSERT INTO candidates (position_id, election_id, firstname, lastname, photo, email, phone, platform, password) VALUES ('$position', '$election', '$firstname', '$lastname', '$filename', '$email', '$phone', '$platform','$password')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>