<?php
include('function.php');

$id = $_GET['id'];
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
        <div>
        <p class="texts">Edit your</p>
        <p class="textsess">Class Session.</p> 
        </div>

        <table class="table-pos">
            <tr>
                <th>DATE</th>
                <th>Group Code</th>
                <th>TIME</th>
                <th>ROOM</th>
            </tr>
            
            <?php
                $query2 = "SELECT * FROM session INNER JOIN group_table ON group_table.id = session.group_id INNER JOIN slot 
                ON slot.id = session.slot_id WHERE session.id = '$id'";
                $session = mysqli_query($connection, $query2);
            ?>
                
            <?php
            foreach ($session as $edit) {
                echo"
                <tr>
                    <td><input type='text' name='date' value= '". $edit["date"]."'></td>
                    <td><input type='text' name='group_code' value= '". $edit["group_code"]."'></td>
                    <td><input type='text' name='time' value= '". $edit["time"]."'></td>
                    <td><input type='text' name='room' value= '". $edit["room"]."'></td>
                    <td></td>
                </tr>";
                }
            ?>    
   
        </table>
    </body>
</html>
