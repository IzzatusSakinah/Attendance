<?php
include('function.php');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>PB Attendance</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/box.css">
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
            <a href="gcsession"><img id="image-2" src="img/lecture.png" style="width:80px; height:80px;"></a>
                <p class="B-heading">Business</p>
        </div>

        <div class="box-class-hse">
            <a href="gcsession"><img id="image-2" src="img/lecture.png" style="width:80px; height:80px;"></a>
                <p class="B-heading">Health & Science</p>
        </div>
        <div class="box-class-engineering">
            <a href="gcsession"><img id="image-2" src="img/lecture.png" style="width:80px; height:80px;"></a>
                <p class="B-heading">Engineering</p>
        </div>
</div> <!-- End Content -->
<div class="button-post">
    <a href="addlecturer.php"><button class="cal"><i class="fa fa-plus"></i>Add Lecturer</button></a>
</div>

<div class="table-list">
    <table>
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ROLE</th>
                <th>ACTION</th>

            </tr>
            <tr>
            <?php
                $query1 = "SELECT name, email, username, password, role FROM user WHERE role='module lecturer'";
                
                $lect = mysqli_query($connection, $query1);
                
                while ($row = mysqli_fetch_array($lect)) { ?>

                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><?php echo $row['role'] ?></td>
                <td>
                <a href="edit-lecturer.php"><button class="cal2"><i class="fa fa-edit"></i></button></a>

                <a href="remove-lecturer.php"><button class="cal3"><i class="fa fa-remove"></i></button></a>
    
                </td>
            </tr>
            <?php } ?>


        </table>
</div>
    </body>
</html>