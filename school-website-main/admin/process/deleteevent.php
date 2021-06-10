<?php 
require('../../connection/config.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM event WHERE e_id=$id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo header('Location: ../manageevent.php?msg=dsuccess');
    }
    else 
    {
        echo header("Location: ../manageevent.php?msg=derror");
    }
}
?>