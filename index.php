<?php require('function.php'); ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Authentication</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

    <div id="body">		
       <div class="flex-center position-ref full-height">
	       <div id="rotate"></div>
			    <div id="glass">
					<div class="content">
                        <div class="title m-b-md">
                            Welcome to
                        </div>

                	    <div class="sch">
                   		    Politeknik Brunei
					    </div> 

            <div id="image">
                <img src="img/campus.png" width="800px" >
            </div>

            <form method="POST" action="log.php">

            <div class="form u">    
         	<input type="text" id="username"  name="username" class="control" placeholder="Username" required>
            </div>

            <div class="form p">
          	<input type="password" id="password"  name="password" class="control" placeholder="Password" required>
            </div>
            
            <input type="checkbox" value="Remember" class="me"> Remember Me
            
            <input type="submit" value="Login" name="submit" class="btn1">
                    
            <p class="text-f">Forgot Password? <a href="forgot_password.php" class="text-c">Click here</a></p>
            </form>

        </div>    
    </div>
    </body>
</html>
