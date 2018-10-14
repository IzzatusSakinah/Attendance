<?php
	//connect to database
	$connection = mysqli_connect('localhost','root','','attendance');

	//retrieve user detail
	$user = mysqli_query($connection, "SELECT * FROM user");

	//retrieve record
	$results = mysqli_query($connection, "SELECT * FROM session");
?>