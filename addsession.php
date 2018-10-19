<?php
include('function.php');
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PB Attendance</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/table.css">
    </head>
    <body>
      <!-- Side Navigation -->
      <?php
      include('sidenav.php');
      ?>

      <!-- Top header -->
      <?php
      include('header.php');
      ?>

      <?php
include('server.php');
?>
      
      <div>
        <p class="texts">Add your</p>
        <p class="textsess">Class Session.</p>
        
       
      </div>

      <!-- Page Content -->


      <form name="form" action="add-session.php" method="post">
        <div class="form-manage">
          <p class='manage1'>Group</p>
            <select name='group_id' class='group_codee''>
              <?php 
                $query = mysqli_query($connection, "SELECT * FROM `group_table` WHERE 1");
                while($row = mysqli_fetch_array($query)) {
                  echo '<option value="'.$row['id'].'">'.$row['group_code'].'</option>';
                }
              ?>
            </select>
        </div>

        <div class="form-manage" >
          <p class='manage2' >Course</p>
            <select name="course_id" class="group_codee">
            <?php 
                $query = mysqli_query($connection, "SELECT * FROM `course` WHERE 1");
                while($row = mysqli_fetch_array($query)) {
                  echo '<option value="'.$row['id'].'">'.$row['course_name'].'</option>';
                }
              ?>
               </select>
        </div>

        <div class="form-manage" >
          <p class='manage2' >Date</p>
            <input type="date" name="date" class="group_codee2">
        </div>

        <div class="form-manage" >
          <p class='manage2' >Time</p>
            <select  name="slot_id" class="group_codee">
            <?php 
                $query = mysqli_query($connection, "SELECT * FROM `slot` WHERE 1");
                while($row = mysqli_fetch_array($query)) {
                  echo '<option value="'.$row['id'].'">'.$row['time'].'</option>';
                }
              ?>
              </select>
        </div>

        <div class="form-manage" >
          <p class='manage2' >Room</p>
            <input type="text" name="room" class="group_codee2">
        </div>


          <div class="savee">
          <input class="bt" type="submit" value="Save Changes" name="submitSession">

        
          <input class="bt1" type="submit" value="Cancel" name="cancelses">
          </div>
        </form>

    </body>
</html>