<?php

require "function.php";

if(isset($_POST["addLect"])){

	$name= $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$query1 = "INSERT INTO user (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";

	if(mysqli_query($connection, $query1)){
		header("Location: listlecturer.php");

	} else{
		echo "ERROR";
	}
}

?>