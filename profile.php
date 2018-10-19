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

        <form action="" method="post" enctype="multipart/form-data">
            <div class="organize">
            <label>Upload Picture:</label><br>
            <input type="file" name="file">
            </div>

            <input type="submit" name="submit" Value="Upload Picture" class="submitImage">

            <?php
                if(ISSET($_POST['submit'])){
                    $allowed_ext = array("jpg","png","jpg","gif");
                    $explode_ext = explode(".", $_FILES["file"]["name"]);
                    $ext = end($explode_ext);

                    if(($_FILES["file"]["type"] == "image/gif") 
                    || ($_FILES["file"]["type"] == "image/jpeg") 
                    || ($_FILES["file"]["type"] == "image/png") 
                    || ($_FILES["file"]["type"] == "image/gif")
                    && ($_FILES["file"]["size"] < 20000)
                    && in_array($ext, $allowed_ext)) {      
                        if($_FILES["file"]["error"] > 0){
                            echo "Return code: ".$_FILES["file"]["error"]."<br/>";
                        } else {
                            if(file_exists("img/profile_img/".$_FILES["file"]["name"])){
                                echo "<strong>".$_FILES["file"]["name"]." already exists</strong>";
                            } else {
                                move_uploaded_file($_FILES["file"]["tmp_name"],"img/profile_img/".$_FILES["file"]["name"]);
    
                                $query = "UPDATE user SET image='".$_FILES['file']['name']."' WHERE name='".$_SESSION['name']."'";

                            if(mysqli_query($connection, $query)){
                                echo("<script LANGUAGE='JavaScript'>
                                    window.alert('Image Upload Successful!');
                                    window.location.href='profile.php';
                                    </script>");
                                } else {
                                echo("<script LANGUAGE='JavaScript'>
                                    window.alert('Failed to Upload!');
                                    window.location.href='profile.php';
                                    </script>");
                                }
                            }
                        }
                    }
                }
            ?>
        </form>
            
            <?php
                $query = 'SELECT * FROM user WHERE id="'.$_SESSION['id'].'"';
                $run_query = mysqli_query($connection, $query);
            ?>
            
            <?php
                foreach($run_query as $user){
                    echo"
                    <div class='organize'>

                    <form method = 'POST' action = 'update_profile.php'>

                        <p class='status'>Status</p>
                        <p class='student'>".$user['role']."</p>      

                    <div class='userbox'> 
                        <p class='userstudent'>&nbsp;&nbsp;Username&nbsp;&nbsp;</p>

                        <p class = 'control'>" . $user["username"] . "</p>

                    </div>

                    <input type = 'hidden' name = 'id' value = '" . $user["id"] . "'>
                    
                    <div class='B'>
                        <div class='userbox'> 
                            <p class='userstudent'>&nbsp;&nbsp;Fullname&nbsp;&nbsp;</p>

                            <p class='control'>" . $user["name"] . "</p>

                        </div>
                    </div>";
                }
            ?>

            <?php   
                if($_SESSION['role'] == "student" || $_SESSION['role'] == "Group Leader" || $_SESSION['role'] == "Assistant Group Leader" ){
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
                            
                            <p class='control'>" . $user["email"] . "</p>
                            
                        </div>
                    </div>

                    <div class='D'>
                            <div class='userbox-change'> 
                                <p class='userstudent'>&nbsp;&nbsp;Password&nbsp;&nbsp;</p>   

                                <input type = 'password' name = 'password' value = '" . $user["password"] . "' class = 'control'>

                            </div>
                        </div>

                        <div>

                            <input type = 'submit' name = 'editProfile' value = 'Edit Profile' class = 'edit-btn'>
                            <input type='button' class='cancel-btn'  name='Cancelses' value='Cancel' onclick='javascript:history.back();return false;'/>

                        </div>
                    </div>";
                }
            ?>

        </form>
    </body>

</html>