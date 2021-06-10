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
                $title = $_POST['title'];
                $details = $_POST['details'];
               
                $status = $_POST['status'];
                $date = $_POST['date'];
                

                if($title!="" && $details!="" &&  $status !="" && $date !="" )
                {
                   
                        # code...
                  $query ="INSERT INTO event(title,content,status,e_date)VALUES('$title','$content','$status','$date')";
                    $result = mysqli_query($conn,$query);
                    
                if($result)
                    {
                         ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>New Event Inserted</strong> 
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
                                                  <strong>Event cannot be inserted</strong> 
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
                <h3 class="card-title">Add Events</h3>
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div>
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Event Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Event Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Event Details</label>
                    
                    <input type="text" class="form-control" id="exampleInputEmail1" name="details" placeholder="Enter Event Details">
                  </div>
                  
                  <div class="form-group">
                      <label for="">Status</label>
                      <select class="form-control" name="status" id="">
                          <option selected>Select one</option>
                          <option value="active">Active</option>
                          <option value="deactive">Deactive</option>
                          
                      </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Event Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="date">
                  </div>
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