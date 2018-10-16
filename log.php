<?php
require('function.php');
session_start();

if(isset($_POST["username"]) && isset($_POST["password"])){
$username = mysqli_real_escape_string($connection,$_POST["username"]);
$password = $_POST["password"];
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$run_query = mysqli_query($connection,$sql);
$count = mysqli_num_rows($run_query);

    //if user record is available in database then $count will be equal to 1
    if($count == 1){
        $row = mysqli_fetch_array($run_query);
        $_SESSION["id"] = $row["id"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["role"] = $row["role"];
        header("location: dashboard.php");
    }else{
        echo'
            <script>alert("Incorrect Username/Password!")</script> 
            <p>Please try again! Click <a href="login.php">here</a> to login.</p>
        ';
        
    } 
}   
?>     