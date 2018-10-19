<<<<<<< HEAD
<?php include('function.php'); ?>
=======
<?php
require_once('function.php');
?>

>>>>>>> 849005425a22836519485aebc50a6d5eec185f40
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>Forgot Password</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">

    </head>


<div id="body1">
    <body @media max display= 1080px-0>
    <form action="php-emailStockAlert.php" method="POST">
       <div id="bg"><img src="img/campus.png" width="170%" height="1000px"></div>
            <div class="content box">
                <div class="m">
                    <div class="get">
                        Forgot Password?
                    </div> 
                </div> 
                    <div class="col sml size">
                        Enter your email you used when you joined and we’ll send you temporary password
                    </div> 
                    <div class="sml col1 size1">
                        eg: ins02_11111111@pb.edu.bn
                    </div> 

                    <div class="form-group">
         			    <input type="text" name="email" class="form-control"/>
                    </div>  
                    <div>
                        <input type="submit" name="submit" value="Send Password" class="btn" />

                    </div>
                    <div class="pic">
                        <img src="img/back.png" width="15px">
                    </div>
                    <div>
                        <a href="login.php" id="a">Sign In</a>
                    </div>

            </div>
        </div>

        </div>

  </form>

    </body>
</html>
