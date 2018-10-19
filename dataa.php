<?php include 'function.php' ;

if(isset($_GET['code'])) {

	$code=$_GET["code"];

    if($code!="")
    {
       $query = mysqli_query($connection, "SELECT * FROM user WHERE role='student' AND group_id=$code");
       echo"<select id='nameee' onChange='change_nameee()'>";
                while($row = mysqli_fetch_array($query)) {
                  echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
              }
                  echo"</select>";
      }
    }

    if (isset($_POST['submitAGL'])) {
    
    $group_id = $_POST['group_id'];
    $user_id = $_POST['user_id'];

  $query1 = "INSERT INTO agl(group_id, user_id) VALUES ('$group_id', '$user_id')";
  //$row = mysqli_query($query);
  
  if(mysqli_query($connection, $query1)){


    $query2 = "UPDATE user SET role='Assistant Group Leader' Where id = '$user_id'";

    if(mysqli_query($connection, $query2)){
      header('location: view_report.php');

    }



  }

} else {

        echo'
        <p>error</p>';

    } 


    ?>