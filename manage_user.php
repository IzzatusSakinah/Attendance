<?php 
include('function.php');
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

        <!-- Page Content -->
        <div class="box-organize">
        
            <table class="box-manageuser">
                  <thead>
                    <tr><th colspan="5">LIST OF STUDENT<a href="add_user.php"><button>Add New User</button></a></th></tr>
                    <tr> 
                      <th>ID</th>
                      <th>Student Name</th>
                      <th>Email</th>
                      <th>Student Id</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php 
                        $detail = 'SELECT * FROM user WHERE role="student"';
                        $run_query = mysqli_query($connection, $detail) or die(mysqli_error($connection));

                        echo '<tbody>';
                        foreach($run_query as $user){
                            echo '<tr>
                                      <th scope="row">'.$user['id'].'</th>
                                      <td>'.$user['name'].'</td>
                                      <td>'.$user['email'].'</td>
                                      <td>'.$user['code'].'</td>
                                      <td></td>
                                    </tr>';   
                        }
                        echo '</tbody>';
                  ?>
            </table>

            <br><br><br>

            <table class="box-managestaff">
                  <thead>
                    <tr><th colspan="5">LIST OF STAFF<a href="add_user.php"><button>Add New User</button></a></th></tr>
                    <tr> 
                      <th>ID</th>
                      <th>Staff Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php 
                        $detail = 'SELECT * FROM user WHERE role="module lecturer"';
                        $run_query = mysqli_query($connection, $detail) or die(mysqli_error($connection));

                        echo '<tbody>';
                        foreach($run_query as $user){
                            echo '<tr>
                                      <th scope="row">'.$user['id'].'</th>
                                      <td>'.$user['name'].'</td>
                                      <td>'.$user['email'].'</td>
                                      <td>'.$user['role'].'</td>
                                      <td></td>
                                    </tr>';   
                        }
                        echo '</tbody>';
                  ?>

                  <?php 
                        $detail = 'SELECT * FROM user WHERE role="group coordinator"';
                        $run_query = mysqli_query($connection, $detail) or die(mysqli_error($connection));

                        echo '<tbody>';
                        foreach($run_query as $user){
                            echo '<tr>
                                      <th scope="row">'.$user['id'].'</th>
                                      <td>'.$user['name'].'</td>
                                      <td>'.$user['email'].'</td>
                                      <td>'.$user['role'].'</td>
                                      <td></td>
                                    </tr>';   
                        }
                        echo '</tbody>';
                  ?>
            </table>

            <br><br><br>

            <table class="box-managestaff">
                  <thead>
                    <tr><th colspan="5">LIST OF ADMIN<a href="add_user.php"><button>Add New User</button></a></th></tr>
                    <tr> 
                      <th>ID</th>
                      <th>Admin Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php 
                        $detail = 'SELECT * FROM user WHERE role="administration"';
                        $run_query = mysqli_query($connection, $detail) or die(mysqli_error($connection));

                        echo '<tbody>';
                        foreach($run_query as $user){
                            echo '<tr>
                                      <th scope="row">'.$user['id'].'</th>
                                      <td>'.$user['name'].'</td>
                                      <td>'.$user['email'].'</td>
                                      <td></td>
                                    </tr>';   
                        }
                        echo '</tbody>';
                  ?>
            </table>   
        </div>
</body>
</html>
        