<?php 
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
?>


<?php 
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $select_query = "SELECT * FROM site WHERE s_id=$id";
    $select_result = mysqli_query($conn,$select_query);
    $select_row = $select_result->fetch_assoc();
    $slider_name = $select_row['name'];
    $slider_key = $select_row['site_key'];
    $slider_value = $select_row['site_value'];
 
    $slider_status = $select_row['status'];
  
   
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <?php
              if(isset($_POST['submit'])) {
                $name = $_POST['name'];
                $key = $_POST['site_key'];
                $value = $_POST['site_value'];
                
                 $status = $_POST['status'];

                if($name!="" && $key!="" && $value!="" && $status !="")
                {
                            # code...
                            $query ="UPDATE site SET name='$name', site_key='$key', site_value='$value', status='$status' WHERE s_id=$id";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        echo header("Location:managesite.php");
                    }
                    else 
                    {
                         ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>Cannot be updated</strong> 
                                                </div>
                                                
                                                <script>
                                                  $(".alert").alert();
                                                </script>
                                                <?php
                    }
                        
                       
                    
                   
                    
                }
                else {
                    
                     ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>Field cannot be empty</strong> 
                                                </div>
                                                
                                                <script>
                                                  $(".alert").alert();
                                                </script>
                                                <?php
                }


              }
            ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Site</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="" value="<?php echo $slider_name; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Key</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="site_key" placeholder="" value="<?php echo $slider_key; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Value </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="site_value" placeholder="" value="<?php echo $slider_value; ?>">
                  </div>
                 
                 <div class="form-group">
                     <label for="">Status</label>
                     <select class="custom-select" name="status" id="">
                         <option selected value="<?php echo $slider_status;?>"><?php echo $slider_status;?></option>
                         <?php
                         if ($slider_status=="active") {
                             # code...
                             ?>
                             <option value="deactive">Deactive</option>
                             <?php
                         }
                         else {
                             # code...
                             ?>
                             <option value="active">Active</option>
                             <?php
                         }
                         ?>
                         
                         
                     </select>
                 </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <?php
  require('inc/footer.php'); 
  ?>