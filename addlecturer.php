<?php
include('function.php');
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Student</title>

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
        <p class="texts">Add</p>
        <p class="textsess">Student.</p>
        
       
      </div>

      <!-- Page Content -->


      <form name="form" action="add-lecturer.php" method="post">
        <div class="form-manage">
          <p class='manage1'>Name</p>
            <input type="text" name='name' class='group_codee2''>
        </div>

        

        <div class="form-manage">
          <p class='manage2'>Email</p>
            <input type="email" name='email' class='group_codee2''>
        </div>

        <div class="form-manage">
          <p class='manage2'>Password</p>
            <input type="password" name='password' class='group_codee2''>
        </div>

        <div class="form-manage">
          <p class='manage2'>Role</p>
            <input type="text" name='role' class='group_codee2''>
        </div>

          <div class="savee">
          <input class="bt" type="submit" value="Add Lecturer" name="addLect">

        
          <input class="bt1" type="submit" value="Cancel" name="cancelses">
          </div>
        </form>

    </body>
</html>