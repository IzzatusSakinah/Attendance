<?php require 'function.php';

if(isset($_POST["sDel"])){
    $id = $_GET['id'];

    $query = "DELETE * FROM session WHERE id='$id'";
    if(mysqli_query($connection, $query)){       
        header('Location: studentsession.php');

    } else {
        echo "ERROR";
    }
}

?>