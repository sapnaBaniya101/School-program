<?php 
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
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

                if($name!="" && $key!="" && $value!="" && $status !="" )
                {
                    
                        # code...
                  $query ="INSERT INTO site(name,site_key,site_value,status)VALUES('$name','$key','$value','$status')";
                    $result = mysqli_query($conn,$query);
                    
                if($result)
                    {
                         ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>New Site Inserted</strong> 
                                                </div>
                                                
                                                <script>
                                                  $(".alert").alert();
                                                </script>
                                                <?php
                        
                    }
                    else 
                    {
                        ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>Site cannot be inserted</strong> 
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
                                                  <strong>Please Enter Every Field </strong> 
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
                <h3 class="card-title">Add Site</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div>
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Site Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Key</label>
                    
                    <input type="text" class="form-control" id="exampleInputEmail1" name="key" placeholder="Enter Site Key">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Value</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="value" placeholder="Enter Site Value">
                  </div>
                  
                  <div class="form-group">
                      <label for="">Status</label>
                      <select class="form-control" name="status" id="">
                          <option selected>Select one</option>
                          <option value="active">Active</option>
                          <option value="deactive">Deactive</option>
                          
                      </select>
                  </div>
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
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