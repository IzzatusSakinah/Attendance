<?php

require "function.php";

if(isset($_POST["submitSession"])){

	$group_id = $_POST['group_id'];
	$course_id = $_POST['course_id'];
	$date = $_POST['date'];
	$slot_id = $_POST['slot_id'];
	$room = $_POST['room'];

	$query1 = "INSERT INTO session (group_id, course_id, date, slot_id, room) VALUES ('$group_id', '$course_id', '$date', '$slot_id', '$room')";

	if(mysqli_query($connection, $query1)){
		header("Location: session.php");

	} else{
		echo "ERROR";
	}
}

?>