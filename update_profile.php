<?php

require "function.php";

session_start();

if(isset($_POST["editProfile"])){

	$id = $_POST["id"];
	$username = mysqli_real_escape_string($connection, $_POST["username"]);
	$name = mysqli_real_escape_string($connection, $_POST["name"]);
	$email = mysqli_real_escape_string($connection, $_POST["email"]);
	$password  = mysqli_real_escape_string($connection, $_POST["password"]);

	$sql = "UPDATE user
	SET username = '$username', name = '$name', email = '$email', password = '$password'
	WHERE id = '$id'";

	if(mysqli_query($connection, $sql)){
        $_SESSION["name"] = $row["name"];
        $_SESSION["username"] = $row["username"];
		
		header("Location: profile.php");

	} else{
		echo "ERROR";
	}
}

?>