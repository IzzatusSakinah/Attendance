<?php
include('function.php');
?>

<!doctype html>
<html">
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

        <!-- Page Content -->
        <div class="box-organize">
            <div class="box-class">
                <div class="boxa"></div>
                    <div id="image-1">
                        <a href="schedule.php"><img src="img/class.png" style="width:80px; height:80px;"></a>
                    </div>
                        <p class="A-heading">Schedule</p>
            </div>
           
        <div class="box-lecture">
            <a href="session.php"><img id="image-2" src="img/lecture.png" style="width:80px; height:80px;"></a>
                <p class="B-heading">Session</p>
        </div>
        </div>  <!-- End Content -->

            <div class="cal"><a href="gceditsession"><img src="img/tri.png"  width="40px"></a></div>
            <div class="cal-1"><a href="gceditsession"><img src="img/pencil.png"  width="15px"></a></div>
        
        <!-- Table -->
        <table class="table-organize">
            <tr>
                <th>#</th>
                <th>GROUP</th>
                <th>DATE</th>
                <th>TIME</th>
                <th>ROOM</th>
                <th>ACTION</th>
            </tr>
            
            <?php
            $query = 'SELECT * FROM session';
            $run_query = mysqli_query($connection, $query);
            ?>
            
            <?php
                foreach($run_query as $session){
                    echo"
                    <tr>
                        <td>" . $session["id"] . "</td>
                        <td>" . $session["group_id"] . "</td>
                        <td>" . $session["date"] . "</td>
                        <td>" . $session["slot_id"] . "</td>
                        <td>" . $session["room"] . "</td>
                        <td></td>
                    </tr>";
                }
            ?>    
        </table>
    </body>
</html>
