<?php 
include('function.php');

$id = $_GET['id'];
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        <!-- Content -->
        <div class="box">
            <p>This is Class Attendance Sheet. Only GL and AGL can update the attendance.</p>
        </div>

        <!-- Detail -->
        <div class="box-B">
            <table class="detail"> 
                <?php
                $query2 = "SELECT * FROM session INNER JOIN group_table ON group_table.id = session.group_id INNER JOIN slot 
                ON slot.id = session.slot_id WHERE session.id = '$_GET['id']";
                $session = mysqli_query($connection, $query2);
                
                while ($row = mysqli_fetch_array($session)) { ?>
                <tr>
                    <td>Group Code:</td>
                    <td><?php echo $row['group_code'] ?></td>
                </tr>    
                <tr>
                    <td>Room:</td>
                    <td><?php echo $row['room'] ?></td>    
                </tr>
                <tr>
                    <td>Date:</td>
                    <td><?php echo $row['date'] ?></td>
                </tr>
                <tr>
                    <td>Time:</td>
                    <td><?php echo $row['time'] ?></td>
                </tr>
                <?php } ?>
            </table>
            
        </div>

        <!-- Detail -->
        <div class="box-C">
            <table>
                <tr>
                    <th colspan="2">Attendance Incharge</th>
                </tr>
                <tr>
                    <td>GL</td>
                    <td></td>
                </tr>
                <tr>
                    <td>AGL</td>
                    <td></td>
                </tr>

            </table>
        </div>

        <!-- Table     -->
        <div class="box-A">
            <form method="post"> 
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>ID</th>
                        <th>EMAIL</th>
                        <th>P</th>
                        <th>L</th>
                        <th>E</th>
                        <th>A</th>
                        <th>REMARKS</th>
                    </tr>
                    <tr>


                <?php 
                    $sql = "SELECT * FROM user WHERE role='student'";
                    $user = mysqli_query($connection, $sql);   
                    while ($row = mysqli_fetch_array($user)) { 
                ?>
                    <tr>
                        <td><?php echo $row ['id'] ?></td>
                        <td><?php echo $row ['name'] ?></td>
                        <td><?php echo $row ['code'] ?></td>
                        <td><?php echo $row ['email'] ?></td>
                        <td><input type="radio" name="radio<?php echo $row['id']; ?>" value="Present" checked></td>
                        <td><input type="radio" name="radio<?php echo $row['id']; ?>" value="Late"></td>
                        <td><input type="radio" name="radio<?php echo $row['id']; ?>" value="Excuse"></td>
                        <td><input type="radio" name="radio<?php echo $row['id']; ?>" value="Absent"></td>
                        <td><input type="text" name="remark<?php echo $row['id']; ?>"></td>
                    </tr>    
                        <?php } ?>
                    <tr>  
                        <td><input type="submit" value="submit" name="sub"></td>
                        <td><button onclick="myFunctionPrint()">Print this page</button></td>

                        <script>
                        function myFunctionPrint() {
                            window.print();
                        }
                        </script>  
                    </tr>    
                </thead>
                <tbody>
                </tbody>
            </table>
            </form>

<?php  
    if(isset($_POST['sub']))  
    {  

        $sql = "SELECT * FROM user WHERE role='student'";
        $user = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_array($user)) {
            $userid = $row['id'];
            $radioStatus = "radio" . $row['id'];
            $status = $_POST[$radioStatus];
            $textRemarks = "remark" . $row['id'];
            $remarks = $_POST[$textRemarks];
            $in_ch=mysqli_query($connection,"insert into attendance_status(user_id, status, attendance_id, remarks) values ('$userid', '$status', 2, '$remarks')");
        }
    } 
?>      
        </div>    
    </body>
</html>

