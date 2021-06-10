<?php 
require('../../connection/config.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
        $select_query = "SELECT * FROM sliders WHERE id = $id";
        $select_result = mysqli_query($conn,$select_query);
        $select_row = $select_result->fetch_assoc();
        $filelink = $select_row['image'];
        $finalfilelink = '../../uploads/'.$filelink;
        unlink($finalfilelink);
    $query = "DELETE FROM sliders WHERE id=$id";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo header('Location: ../manageslider.php?msg=dsuccess');
    }
    else 
    {
        echo header("Location: ../manageslider.php?msg=derror");
    }
}
?>