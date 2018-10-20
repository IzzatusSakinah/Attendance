
<?php
include('function.php');
?>

<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Leave Application</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/style1.css">
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
      
      <?php
        $mysqli = NEW MySQLi('localhost','root','','attendance');
        $resultSet = $mysqli->query("SELECT name FROM user WHERE role='group coordinator'");
      ?>

    <form name="form" action="" method="post">
     
      <div class="design_form"> 
        <input type="radio" id="radio1" name="cars" value="2" checked>
        <label for="radio1">Leave Form</label>
        <input type="radio" id="radio2" name="cars" value="3">
        <label for="radio2">View Form</label>
        <input type="radio" id="radio3" name="cars" value="4">
     
      <div class="main">
        <div id="Cars2" class="desc">
          <p class="main1">From<br />
            <input name="date"   class="date-" type="date" required="required" autocomplete="off" >
          </p>
       
          <p class="main2">To<br />
            <input name="date"   class="date-1" type="date" required="required" autocomplete="off" >
          </p>

          <p class="main3">Recipient<br />
            <select name="role" class="role-1">
          
              <?php 
                while($rows= $resultSet->fetch_assoc()) 
              {
                $name = $rows['name'];
                echo "<option value='$name'>$name</option>";
              }
              ?>
          
            </select>
          </p>
     
          <p class="main4">Attachment<br />
            <input name="file" class="drag" type="file" required="required">
          </p>
            <div class="submit-buttonn">
            <input type="submit" value="Submit" name="submit" class="btnn">
            </div>

      </div>
      
      <div id="Cars3" class="desc" style="display: none;">
          <p>Name<br />
            <input name="number"  class="search2" type="text" required="required" autocomplete="off" ></p>
          <p>&nbsp;</p>
          
          <p>Your Email_ID<br />
            <input name="email"    class="search2" type="text" required="required" autocomplete="off" >    </p> 
          
          <p>Password<br />
      <input name="email"  class="search2" type="text" required="required" autocomplete="off" ></p>    
      </div>
    </div></div>

    
  </form>

  </body>
</html>