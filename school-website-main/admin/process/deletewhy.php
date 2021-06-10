<?php 
require('../../connection/config.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM choose_us_blog WHERE c_id=$id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo header('Location: ../managewhy.php?msg=dsuccess');
    }
    else 
    {
        echo header("Location: ../managewhy.php?msg=derror");
    }
}
?>