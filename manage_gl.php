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
      
      <div>
        <p class="text">Please choose your</p>
        <p class="textGC">GL and AGL</p>
        <p class="text1">in your group.</p>
       
      </div>

      <!-- Page Content -->
      

      <form name="form" action="" method="post">
        <div class="form-manage">
        <p class='manage1'>Group Code</p>
              <select name='group_code' class='group_codee'>
                <?php 
                $query = mysqli_query($connection, "SELECT * FROM `group` WHERE 1");
                while($code = mysqli_fetch_array($query)) {
                  echo '<option value="'.$code['id'].'">'.$code['group_code'].'</option>';
                }
                ?>
              </select>
        </div>

        <div class="form-manage">

            <p class='manage2'>Group Leader</p>
            <select name='group_code' class='group_codee1'>
              <?php 
                $query = mysqli_query($connection, "SELECT name FROM user WHERE role='student' ");
                while($code = mysqli_fetch_array($query)) {
                  echo '<option value="'.$code['id'].'">'.$code['name'].'</option>';
                }
                ?>
            </select>
        </div>

        <div class="form-manage">
          
            <select name='group_code' class='manage3'>
              <?php 
                $query = mysqli_query($connection, "SELECT role_name FROM role where id IN (4, 5)");
                while($code = mysqli_fetch_array($query)) {
                  echo '<option value="'.$code['id'].'">'.$code['role_name'].'</option>';
                }
                ?>
              </select>

            <p class='manage3'>Assistant Group Leader</p>
            <select name='group_code' class='group_codee2'>
              <?php 
                $query = mysqli_query($connection, "SELECT name FROM user WHERE role='student' ");
                while($code = mysqli_fetch_array($query)) {
                  echo '<option value="'.$code['id'].'">'.$code['name'].'</option>';
                }
                ?>
              </select>
        </div>


        <div class="save-button">
            <p class="save">Save Changes</p></a>
        </div>
        <div class="save-button-1">
            <p class="save-1">Cancel</p>
        </div>
    </body>
</html>
