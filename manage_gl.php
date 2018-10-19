<?php
include('function.php');
?>


<!doctype html>
<html>
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
      
      <div>
        <p class="text">Please choose your</p>
        <p class="textGC"><a href="manage_gl.php">Group Leader</a> / <a href="manage_agl.php">Assistant Group Leader</a></p>
       
      </div>

      <!-- Page Content -->


      <form name="form" action="data.php" method="post">
        <div class="form-manage">
          <p class='manage1'>Group Code</p>
            <select name='group_id' id='codeee' class='group_codee' onChange='change_code()'>
              <?php 
                $query = mysqli_query($connection, "SELECT * FROM `group_table` WHERE 1");
                while($row = mysqli_fetch_array($query)) {
                  echo '<option value="'.$row['id'].'">'.$row['group_code'].'</option>';
                }
              ?>
            </select>
        </div>

        <div class="form-manage" >
          <p class='manage2' >Group Leader</p>
            <select id="gl" name='user_id' class='group_codee1'>
              <option>Select Group Leader</option>
            </select>
        </div>

      <div class="savee">
        <input class="btnn2" type="submit" value="Save Changes" name="submitGL">
       <input type="button" class="btnn3"  name="Cancelses" value="Cancel" onclick="javascript:history.back();return false;"/>
          </div>
        </form>

<script type="text/javascript">
  function change_code(){
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","data.php?code="+document.getElementById("codeee").value,false);
    xmlhttp.send(null);
    document.getElementById("gl").innerHTML=xmlhttp.responseText;
  }


</script>

    </body>
</html>
