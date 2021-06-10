<?php

require('../../connection/config.php');

$login=0;
$update_login="UPDATE user SET login='$login'";
$update_result=mysqli_query($conn,$update_login);
if ($update_result) {
    session_start();
    # code...
    unset($_SESSION['email']);
    unset($_SESSION['login']);
    echo header("Location:index.php?msg=logout");
}
?>