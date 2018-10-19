<?php
require 'function.php';

if (isset($_POST['submitML'])) {
		$course_id = $_POST['course_id'];
		$group_id = $_POST['group_id'];
		$user_id = $_POST['user_id'];

	$query = "INSERT INTO ml(course_id, group_id, user_id) VALUES ('$course_id', '$group_id', '$user_id')";
	//$row = mysqli_query($query);
	
	if(mysqli_query($connection, $query)){


		$query1 = "UPDATE user SET role='module lecturer' Where id = '$user_id'";

		if(mysqli_query($connection, $query1)){
			header('location: adminviewgc.php');

		}
}
} else {

        echo'
        <p>error</p>';
    } 
?>