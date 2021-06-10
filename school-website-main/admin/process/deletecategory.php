<?php 
require('../../connection/config.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM gallery_category WHERE g_id=$id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo header('Location: ../managecategory.php?msg=dsuccess');
    }
    else 
    {
        echo header("Location: ../managecategory.php?msg=derror");
    }
}
?>