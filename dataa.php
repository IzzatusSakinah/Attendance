.<?php include 'function.php' ;

	$code=$_GET["code"];

    if($code!="")
    {
       $query = mysqli_query($connection, "SELECT name FROM user WHERE role='student' AND group_id=$code");
       echo"<select id='nameee' onChange='change_nameee()'>";
                while($row = mysqli_fetch_array($query)) {
                  echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
              }
                  echo"</select>";
    }

    ?>