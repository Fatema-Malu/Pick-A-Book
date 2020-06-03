<?php 

	include-once 'dbh.php';

	$name = $_POST['name'];

	$add = $_POST['add'];

	$email = $_POST['email'];

	$uname = $_POST['uname'];

	$pass = $_POST['pass'];

	$ph = $_POST['ph'];

	$sql = "INSERT INTO signup (Name,Address,EmailId,Password,PhoneNo) VALUES ($name,$add,$email,$uname,$pass,$ph);";
	mysqli_query($conn,$sql);

	header("Location: ../signup.php?submit5=success");
?>