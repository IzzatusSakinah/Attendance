<?php 
include('function.php');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>attendance sheet</title>

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
                $query = 'SELECT * FROM user WHERE username="'.$_SESSION['username'].'"';
                $run_query = mysqli_query($connection, $query);
                ?>
                <?php
                    foreach($run_query as $users){
                        echo"<tr>
                                <td>Group:</td>
                                <td><p>".$users['code']."</p></td>
                            </tr>";
                    }
                ?>   
                <tr>
                    <td>Lecturer:</td>
                    <td>Ms. Azu</td>
                </tr>    
                <tr>
                    <td>Room:</td>
                    <td>5.04</td>    
                </tr>
                <tr>
                    <td>Date:</td>
                    <td><input type="date" name="date"></td>
                </tr>
                <tr>
                    <td>Time:</td>
                    <td>
                        <select>
                            <option>8:00am-10.00am</option>
                            <option>10:30am-12:00pm</option>
                            <option>01:00pm-02:30pm</option>
                            <option>02:30pm-04:30pm</option>
                        </select>
                    </td>
                </tr>
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
                    <td>Syahmil</td>
                </tr>
                <tr>
                    <td>AGL</td>
                    <td>Rafidahtulatiqah</td>
                </tr>

            </table>
        </div>

        <!-- Table -->    
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
                        <?php while ($row = mysqli_fetch_array($user)){ ?>
                        <td><?php echo $row ['id'] ?></td>
                        <td><?php echo $row ['name'] ?></td>
                        <td><?php echo $row ['code'] ?></td>
                        <td><?php echo $row ['email'] ?></td>
                        <td><input type="checkbox" name="checkbox[<?php echo $row ['id'] ?>]" value="Present"></td>
                        <td><input type="checkbox" name="checkbox[<?php echo $row ['id'] ?>]" value="Late"></td>
                        <td><input type="checkbox" name="checkbox[<?php echo $row ['id'] ?>]" value="Excuse"></td>
                        <td><input type="checkbox" name="checkbox[<?php echo $row ['id'] ?>]" value="Absent"></td>
                        <td><input type="text" name="remark"></td>
                    </tr>    
                        <?php } ?>
                    <tr>  
                        <td><input type="submit" value="submit" name="sub"></td>  
                    </tr>    
                </thead>
                <tbody>
                </tbody>
            </table>
            </form>

            <?php  
                if(isset($_POST['sub']))  
                {  
                $host="localhost";//host name  
                $username="root"; //database username  
                $word="";//database word  
                $db_name="attendance";//database name  
                $tbl_name="attendance_status"; //table name  
                $con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string 
                $checkbox1=$_POST['checkbox'];  
                $chk="";

                foreach($checkbox1 as $chk1)  
                   {  
                      $chk = $chk1.",";  
                   }  
                $in_ch=mysqli_query($connection,"insert into attendance_status(status) values ('$chk')");  
                if($in_ch==1)  
                   {  
                      echo'<script>alert("Inserted Successfully")</script>';  
                   }  
                else  
                   {  
                      echo'<script>alert("Failed To Insert")</script>';  
                   }  
                }  
?>
        </div>    
    </body>
</html>
