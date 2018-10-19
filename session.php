<?php
include('function.php');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
<div>
        <p class="texts">This is your</p>
        <p class="textsess">Class Session.</p>
        
       
      </div>
       
        <div class="box-organize">
            <div class="box-class-s">
                    <div id="image-1">
                        <a href="schedule.php"><img src="img/class.png" style="width:80px; height:80px;"></a>
                    </div>
                        <p class="s-heading">Schedule</p>
            </div>
           
        <div class="box-lecture-s">
            <div class="boxa-A"></div>
                <a href="session.php"><img id="image-2" src="img/lecture.png" style="width:80px; height:80px;"></a>
                <p class="s-heading1">Session</p>
            </div>
        </div>

        <a href="addsession.php"><input class="cal" type="submit" name="add" value="Add Session"/></a>
        <!-- Table -->
        <table>

            <tr>
                <th>#</th>
                <th>COURSE</th>
                <th>DATE</th>
                <th>TIME</th>
                <th>ROOM</th>
                <th>ACTION</th>
            </tr>
            <tr>
            <?php
                $query2 = "SELECT * FROM session INNER JOIN course ON course.id = session.course_id INNER JOIN group_table ON group_table.id = session.group_id INNER JOIN slot ON slot.id = session.slot_id";
                $sessi = mysqli_query($connection, $query2);
                
                while ($row = mysqli_fetch_array($sessi)) { ?>

                <td><?php echo $row['course_name'] ?></td>
                <td><?php echo $row['group_code'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['time'] ?></td>
                <td><?php echo $row['room'] ?></td>
                <td>
                <a href="editsession.php" name="sessEdit" class="cal2" style="text-decoration: none;" none;>Edit</a>
                <a href="session.php" name="sessDel" class="cal3" style="text-decoration: none;">Delete</a>
                </td>
            </tr>
            <?php } ?>

                <?php


if(isset($_POST["sessEdit"])){

    $id = $_POST["id"];
    $group_id = mysqli_real_escape_string($connection, $_POST["group_id"]);
    $course_id = mysqli_real_escape_string($connection, $_POST["course_id"]);
    $date = mysqli_real_escape_string($connection, $_POST["date"]);
    $slot_id  = mysqli_real_escape_string($connection, $_POST["slot_id"]);
      $room  = mysqli_real_escape_string($connection, $_POST["room"]);

    $sql = "UPDATE session
    SET group_id = '$group_id', course_id = '$course_id', date = '$date', slot_id = '$slot_id', room = '$room'
    WHERE id = '$id'";

    if(mysqli_query($connection, $sql)){
        $_SESSION["name"] = $row["name"];
        $_SESSION["username"] = $row["username"];
        
        header("Location: addsession.php");

    } else{
        echo "ERROR";
    }
}

?>
        </table>

    </body>
</html>
