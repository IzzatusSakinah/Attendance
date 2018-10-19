<?php
session_start();
?>

<div class="sidenav">
<img class="img" src="img/icon.png" style="width: 40px; height: 85px;">
<p class="PB"> Politeknik Brunei</p>

<p><a href="dashboard.php">Dashboard</a></p>

<?php 
if($_SESSION['role'] == "student"){
echo'<p><a href="view_report.php">Attendance</a></p>';
}
?>

<?php 
if($_SESSION['role'] == "Group Leader" || $_SESSION['role'] == "Assistant Group Leader"){
echo'<p><a href="attendance_sheet.php">Attendance</a></p>';
}
?>

<?php 
if($_SESSION['role'] == "group coordinator" || $_SESSION['role'] == "module lecturer"){
echo'<p><a href="verify_attendance.php">Attendance</a></p>';
}
?>

<?php 
if($_SESSION['role'] == "administration"){
echo'<p><a href="summary_report.php">Attendance</a></p>';
}
?>

<p><a href="schedule.php">Schedule</a></p>
<p><a href="profile.php">Profile</a></p>

<?php 
if($_SESSION['role'] == "group coordinator" || $_SESSION['role'] == "student"){
echo'<p><a href="leave_form.php">Leave Application</a></p>';
}
?>
</div>