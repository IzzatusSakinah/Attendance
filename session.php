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

        <p class="texts">This is your</p>
        <p class="textsess">Class Session.</p>
       
        <div class="box-organize">
            <div class="box-class-s">
                    <div id="image-1">
                        <a href="schedule.php"><img src="img/class.png" style="width:80px; height:80px;"></a>
                        <p class="s-heading">Schedule</p>
                    </div>
            </div>
           
        <div class="box-lecture-s">
            <div class="boxa-A"></div>
                <a href="session.php"><img id="image-2" src="img/lecture.png" style="width:80px; height:80px;"></a>
                <p class="s-heading1">Session</p>
            </div>
        </div>

        <a href="addsession.php" style="text-decoration: none;"><input class="cal" type="submit" name="add" value="Add Session"/></a>
        
        <!-- Table -->
        <table class="table-pos">

            <tr>
                <th>DATE</th>
                <th>Group Code</th>
                <th>TIME</th>
                <th>ROOM</th>
                <th>ACTION</th>
            </tr>

            <tr>
            <?php
                $query2 = "SELECT *, session.id as session_id FROM session 
                INNER JOIN group_table ON group_table.id = session.group_id 
                INNER JOIN slot ON slot.id = session.slot_id";
                
                $session = mysqli_query($connection, $query2);
                
                while ($row = mysqli_fetch_array($session)) { ?>

                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['group_code'] ?></td>
                <td><?php echo $row['time'] ?></td>
                <td><?php echo $row['room'] ?></td>
                
                <?php $id = $row['id'];

                echo
                '<td>
                    <a href="editSession.php?id='.$row['session_id'].'"><button class="cal2" name="editSession"><i class="fa fa-edit"></i></button></a>
                    <a href="delete.php"><button class="cal3" name="sDel"><i class="fa fa-remove"></i></button></a>
                </td>';
                ?>
            </tr>
            <?php } ?>

        </table>

    </body>
</html>
