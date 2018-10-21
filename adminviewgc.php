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
    


<div class="box-organize">
            <div class="box-class-ict">
                <div class="boxa"></div>
                    <div id="image-1">
                        <a href="adminviewgc.php"><img src="img/class.png" style="width:80px; height:80px;"></a>
                    </div>
                        <p class="A-heading">ICT</p>
            </div>
           
        <div class="box-class-business">
            <img id="image-2" src="img/lecture.png" style="width:80px; height:80px;">
                <p class="B-heading">Business</p>
        </div>

        <div class="box-class-hse">
            <img id="image-2" src="img/lecture.png" style="width:80px; height:80px;">
                <p class="B-heading">Health & Science</p>
        </div>
        <div class="box-class-engineering">
            <img id="image-2" src="img/lecture.png" style="width:80px; height:80px;">
                <p class="B-heading">Engineering</p>
        </div>
</div> <!-- End Content -->


<table>
            <tr>
                <th>COURSE</th>
                <th colspan="2">GROUP</th>
                <th colspan="2">ASSISTANT GROUP LEADER</th>
                <th>ACTION</th>
            </tr>
            <tr>
            <?php
                $query = "SELECT * FROM gc INNER JOIN user ON user.id = gc.user_id INNER JOIN group_table ON group_table.id = gc.group_id INNER JOIN course ON course.id = gc.course_id";
                $gc = mysqli_query($connection, $query);
                
                while ($row = mysqli_fetch_array($gc)) { ?>

                <td><?php echo $row['course_name'] ?></td>
                <td colspan="2"><?php echo $row['group_code'] ?></td>
                <td colspan="2"><?php echo $row['name'] ?></td>
                <td></td>
            </tr>
                <?php } ?>
        </table>

         <table class="table-1">
            <tr>
                <th>COURSE</th>
                <th colspan="2">GROUP</th>
                <th colspan="2">ASSISTANT GROUP LEADER</th>
            </tr>
            <tr>
                <td>INS02</td>
                <td colspan="2">DiICT(INS)0216/02</td>
                <td colspan="2">Siti Nur Afifah Binti Sait</td>
            </tr>
           
        </table> 


        </body>
</html>
        