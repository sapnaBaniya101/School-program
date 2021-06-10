<?php
require('../connection/config.php');
if (isset($_POST['submit'])) {
  # code...
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  if ($email!=""&& $password!="") {
    # code...
   
    $login_query="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $login_result=mysqli_query($conn,$login_query);
    $row=mysqli_fetch_array($login_result);
    if ($login_result) {
      # code...
      if ($row['login']==0) {
$login=1;
        # code...
        $update_login="UPDATE user SET login='$login'";
        $update_result=mysqli_query($conn,$update_login);
        session_start();
        $_SESSION['email']=$row['email'];
        $_SESSION['login']=$row['login'];
        echo header("Location:dashboard.php");
      }
      else {
        echo header("Location:index.php?msg=alreadylogin");
        
      }
    }
    else {
       echo header("Location:index.php?msg=loginerror");
      
    }

  }
  else {
     echo header("Location:index.php?msg=empty");
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Admin</b>Panel</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

       <?php
                                        if(isset($_GET['msg'])) {
                                            $msg = $_GET['msg'];
                                            if($msg=='alreadylogin')
                                            {
                                                ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>Cannot be logined in </strong> 
                                                </div>
                                                
                                                <script>
                                                  $(".alert").alert();
                                                </script>
                                                <?php
                                            }
                                        } 
                                         if(isset($_GET['msg'])) {
                                            $msg = $_GET['msg'];
                                            if($msg=='loginerror')
                                            {
                                                ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>Your Credintial doesnot match</strong> 
                                                </div>
                                                
                                                <script>
                                                  $(".alert").alert();
                                                </script>
                                                <?php
                                            }
                                        } 
                                         if(isset($_GET['msg'])) {
                                            $msg = $_GET['msg'];
                                            if($msg=='empty')
                                            {
                                                ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>Field Cannot be empty</strong> 
                                                </div>
                                                
                                                <script>
                                                  $(".alert").alert();
                                                </script>
                                                <?php
                                            }
                                        } 
                                        ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form> 
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
