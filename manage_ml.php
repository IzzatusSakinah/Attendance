<?php
include('function.php');
?>

<!doctype html>
<html">
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
        include('sidenav.php');
        ?>

        <!-- Top header -->
        <?php
        include('header.php');
        ?>

          <p class="text">Please choose your</p>
          <p class="textGC">Group Coordinator</p>
          <p class="text2">for the class.</p>
          
         
        </div>

        <!-- Page Content -->
        <form name="form" action="data.php" method="post">
            <div class="form-manage">
              <p class='manage1'>Group Code</p>
                <select name='group_code' id='codeee' class='group_codee' onChange='change_code()'>
                  <?php 
                    $query = mysqli_query($connection, "SELECT * FROM `group` WHERE 1");
                    while($row = mysqli_fetch_array($query)) {
                    echo '<option value="'.$row['id'].'">'.$row['group_code'].'</option>';
                    }
                  ?>
                </select>
            </div>

            <div class="form-manage">
                <p class='manage1'>Module Lecturer</p>
                    <select name='group_code' id='codeee' class='group_codee' onChange='change_code()'>
                        <?php 
                        $query = mysqli_query($connection, "SELECT * FROM user WHERE role='module lecturer'");
                        while($row = mysqli_fetch_array($query)) {
                        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                        }
                        ?>
                </select>
            </div>


            <div class="save-button">
                <p class="save">Save Changes</p>
            </div>
        </div>  
        
    </body>
</html>