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

        <!--Page Content-->

        <div class="box-organize">
            <form method="POST" action="">
                <div class="box-organizeAdd">
                      <label>Account Type:</label>
                      <select name="account">
                        <option value="student">Student</option>
                        <option value="module lecturer">Module Lecturer</option>
                        <option value="group coordinator">Group Coordinator</option>
                      </select><br/><br/>
                </div>

                <div class="box-organizeAdd">
                    <label> Name:</label>
                    <input type="text" name="name" placeholder="name"><br/><br/>

                    <label> Email Address:</label>
                    <input type="email" name="email" placeholder="email"><br/><br/>

                    <label> Student Id:</label>
                    <input type="text" name="code" placeholder="student ID"><br/><br/>

                    <label> Password:</label>
                    <input type="password"  name="password" placeholder="password"><br/><br/>

                    <input value="Add New User" type="submit" name="add">
                </div>
            </form>
        </div>

<?php        
    if(isset($_POST['submit'])){
        
        $id = $_POST['id'];
        $uname = $_POST['name'];
        $email = $_POST['email'];
        $code = $_POST['code'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $name = "/^[a-zA-Z ]+$/";
        $emailValidation = "/^[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
        $number = "/^[278][0-9]{6}+$/";

    if(empty($name) || empty($email) || empty($password) || empty($code) || empty($role)){

            echo "
            <div>
            <b>PLease Fill all fields..!</b>
            </div>
            ";
           exit();

    } else {
        if(!preg_match($name,$uname)){
            echo "
                <div>
                    <b>this $uname is not valid..!</b>
                </div>
            ";
            exit();

        }

        if(!preg_match($emailValidation,$email)){
            echo "
                <div>
                    <b>this $email is not valid..!</b>
                </div>
            ";
            exit();
        }


        if(strlen($password) < 5 ){
            echo "
                <div>
                    <b>Password is weak</b>
                </div>
            ";
            exit();
        }

        //existing email address in our database
        $sql = "SELECT id FROM user WHERE email = '$user_email' LIMIT 1" ;
        $check_query = mysqli_query($connection,$sql);
        $count_email = mysqli_num_rows($check_query);
        if($count_email > 0){
            echo "
                <div>
                    <b>Email Address is already available Try Another email address</b>
                </div>
            ";
            exit();
        } else {


        
$sql = 'INSERT INTO user (`id`, `name`, `password`, `email`, `code`, `role`) VALUES (NULL, "'.$name.'", "'.$password.'", "'.$email.'", '.$code.', "'.$role.'")';
                            
                           $run_query = mysqli_query($connection,$sql);
                           $_SESSION["id"] = mysqli_insert_id($connection);
                           $_SESSION["name"] = $email;
                           $_SESSION["role"] = $role;
                           $_SESSION["name"] = $uname;
                           $ip_add = getenv("REMOTE_ADDR");
                           //$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
                           //if(mysqli_query($con,$sql)){
                             //  echo "register_success";
                              // exit();

                            //}
                    }
                    
                 }
             
}
?>
</body>
</html>