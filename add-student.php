<?php

require "function.php";

if(isset($_POST["addStd"])){

	$name= $_POST['name'];
	$code = $_POST['code'];
	$group_id = $_POST['group_id'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$query1 = "INSERT INTO user (name, code, group_id, email, password, role) VALUES ('$name', '$code', '$group_id', '$email', '$password', '$role')";

	if(mysqli_query($connection, $query1)){
		header("Location: liststudent.php");

	} else{
		echo "ERROR";
	}
}

?>