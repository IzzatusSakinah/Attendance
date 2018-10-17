<?php
include('function.php');
?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       
        <!-- Side Navigation -->
        <?php
            include('sidenav.php')
        ?>

        <!-- Top header -->
        <?php
        include('header.php');
        ?>

        <!-- Page Content -->

        <form method = "POST" action = "functionProfileUpdate.php">
            
            <?php
                $query = 'SELECT * FROM user WHERE id="'.$_SESSION['id'].'"';
                $run_query = mysqli_query($connection, $query);
            ?>
            
            <?php
                foreach($run_query as $user){
                    echo"


                    <div class='organize'>
                        <p class='status'>Status</p>
                        <p class='student'>".$user['role']."</p>   

                    <div class='userbox'> 
                        <p class='userstudent'>&nbsp;&nbsp;Username&nbsp;&nbsp;</p>

                        <input name = 'username' value = '" . $user["username"] . "' class = 'control'>

                    </div>

                    <input type = 'hidden' name = 'id' value = '" . $user["id"] . "'>
                    
                    <div class='B'>
                        <div class='userbox'> 
                            <p class='userstudent'>&nbsp;&nbsp;Fullname&nbsp;&nbsp;</p>

                            <input name = 'name' value = '" . $user["name"] . "' class = 'control'>

                        </div>
                    </div>";
                }
            ?>

            <?php   
                if($_SESSION['role'] == "student"){
                echo"
                    <div class='copy'>
                        <p class='status'>Student Id</p>
                        <p class='student'>".$user['code']."</p>
                    </div>
                ";
                }
            ?>    

            <?php
                foreach($run_query as $user){
                    echo"
                    <div class='C'>
                        <div class='userbox'> 
                            <p class='userstudent'>&nbsp;&nbsp;Email&nbsp;&nbsp;</p>
                            
                            <input type = 'email' name = 'email' value = '" . $user["email"] . "' class = 'control'>
                            
                        </div>
                    </div>

                    <div class='D'>
                            <div class='userbox'> 
                                <p class='userstudent'>&nbsp;&nbsp;Password&nbsp;&nbsp;</p>   

                                <input type = 'password' name = 'password' value = '" . $user["password"] . "' class = 'control'>

                            </div>
                        </div>

                        <div class=''>

                            <input type = 'submit' name = 'editProfile' value = 'Edit Profile' class = 'edit-btn'>

                        </div>
                    </div>";
                }
            ?>

        </form>
    </body>

</html>