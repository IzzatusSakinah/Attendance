<?php
include('function.php');
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
    	<!-- Side Navigation -->
       <?php
            include('sidenav.php')
        ?>

        <!-- Top header -->
        <?php 
            include('header.php');
        ?>

        <!-- Page Content -->
        <div class="box-profile">
            <p class="profile-heading">Profile</p>
            <p class="profile-subheading">Edit Your Profile</p>
            <div class="box-profileA">
                <a href="profile.php" style="text-decoration: none;"><p class="A-btext">View Profile</p></a>
            </div>
        </div>

        <div class="box-report">
            <p class="report-heading">Attendance</p>
            <p class="report-subheading">Monthly Reports</p>
            <div class="box-reportA">
                <a href="view_report.php"><p class="B-btext">View Attendance Report</p></a>
            </div>
        </div>

        <?php
        //only visible to admin, ML, GC
        if($_SESSION['role'] == "gl" || $_SESSION['role'] == "agl"){    
        echo'

        <div class="box-nominate">
            <p class="nominate-heading">Class Attendance Sheet</p>
            <p class="nominate-subheading">Update Weekly Class Attendance</p>
            <div class="box-profileA">
                <a href="attendance_sheet.php"><p class="B-btext">Update Class Attendance</p></a>
            </div>
        </div>';
        }
        ?>

        

        <?php
        //only visible to admin, ML, GC
        if($_SESSION['role'] == "module lecturer" || $_SESSION['role'] == "group coordinator"){    
        echo'

        <div class="box-nominate">
            <p class="nominate-heading">Nominated GL & AGL</p>
            <p class="nominate-subheading">List of GL & AGL</p>
            <div class="box-nominateA">
            <a href="manage_gl.php" style="text-decoration: none;"><p class="C-ctext">Edit/View GL & AGL</p></a>
            </div>
        </div>';
        }
        ?>

        <?php
        //only visible to admin, ML, GC
        if($_SESSION['role'] == "administration" || $_SESSION['role'] == "module lecturer" || $_SESSION['role'] == "group coordinator"){    
        echo'
        <div class="box-report">
            <p class="report-heading">Class Attendance Sheet</p>
            <p class="report-subheading">Monthly Reports</p>
            <div class="box-reportA">
                <a href="attendance_sheet.php"><p class="B-btext">Edit/View Attendance Report</p></a>
            </div>
        </div>

        <div class="box-session">
            <p class="session-heading">Class Session</p>
            <p class="session-subheading">By Semester Session</p>
            <div class="box-sessionA">
            <a href="session.php" style="text-decoration: none;"><p class="D-btext">Edit/View Session</p></a>
            </div>
        </div>';
        }
        ?>

        <?php
        //only visible to admin
        if($_SESSION['role'] == "administration"){    
        echo'
        <div class="box-ml">
            <p class="ml-heading">Nominated Module Lecturer</p>
            <p class="ml-subheading">List of Module Lecturer (ML)</p>
            <div class="box-mlA">
            <a href="manage_ml.php" style="text-decoration: none;"><p class="C-ctext">Edit/View ML</p></a>
            </div>
        </div>

        <div class="box-nominate">
            <p class="nominate-heading">Nominated Group Coordinator</p>
            <p class="nominate-subheading">List of Group Coordinator</p>
            <div class="box-nominateA">
            <a href="manage_gl.php" style="text-decoration: none;"><p class="C-ctext">Edit/Edit/View Group Coordinator</p></a>
            </div>
        </div>';
        } 
        ?> 
    </body>
</html>