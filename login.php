<?php
session_start();
$error = ''; //variable to store error message

if (isset($_POST['submit'])){
	if (empty($_POST['email']) || empty($_POST['number'])){
	$error = "Email or Phone number is invalid";}
	else{
		$email = $_POST['email'];
		$number = $_POST['number'];
		
		$conn = mysqli_connect("sql9.freesqldatabase.com", "sql9541030", "wrrFDdY8u8", "sql9541030");
		
		$query = "SELECT email, number from customerenquiries where email=? AND number=? LIMIT 1";
		
		$stmt = $conn->prepare($query);
		$stmt->bind_param("si", $email, $number);
		$stmt->execute();
		$stmt->bind_result($email, $number);
		$stmt->store_result();
		
		if($stmt->fetch()){
			$_SESSION['login_user'] = $username;
			header("location:EnquiryProgress.php");
		}
		else{
			$error = "Email or Phone Number is invalid";
		}
		mysqli_close($conn);
	}
	}
?>