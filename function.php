<?php
	//connect to database
	$connection = mysqli_connect('localhost','root','','attendance');

	//check if connection is connected
	if($connection === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	//retrieve user detail
	$user = mysqli_query($connection, "SELECT * FROM user");

	//retrieve record
	$results = mysqli_query($connection, "SELECT * FROM session");

	$query = 'SELECT * FROM session INNER JOIN group_table ON session.id = group_table.id';
    $ses = mysqli_query($connection, $query);
?>