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

        <title>Session</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       
        <!-- Side Navigation -->
        <?php
            include('sidenav.php');
        ?>

        <?php
            include('header.php');  
        ?>
        <div class="box-organize">
            <p class="textss">This class Attendance Session only for</p>
            <p class="textsse">Group Leader and Assistance Group Leader.</p>
        </div>
       
        <!-- Table -->
    <div class="table-pos">
        <table>

            <tr>
                <th>DATE</th>
                <th>Group Code</th>
                <th>TIME</th>
                <th>ROOM</th>
                <th>ACTION</th>
            </tr>
            <tr>
            <?php
                $query2 = "SELECT * FROM session INNER JOIN group_table ON group_table.id = session.group_id INNER JOIN slot ON slot.id = session.slot_id";
                $session = mysqli_query($connection, $query2);
                
                while ($row = mysqli_fetch_array($session)) { ?>

                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['group_code'] ?></td>
                <td><?php echo $row['time'] ?></td>
                <td><?php echo $row['room'] ?></td>
                
                <?php $id = $row['id'];
                echo      '<td>
                        <a href="attendance_sheet.php?id='.$row['id'].'"><button class="cal2" name="sDel"><i class="fa fa-play"></i></button></a>
                        <a href="delete.php"><button class="cal3" name="sDel"><i class="fa fa-remove"></i></button></a>
                        </td>';
                ?>
            </tr>
            <?php } ?>
        </table>
    </div>

    </body>
</html>


