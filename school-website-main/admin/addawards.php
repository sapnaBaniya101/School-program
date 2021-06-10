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
                $content = $_POST['content'];
                
                
                $status = $_POST['status'];

                

                $dataFile = $_FILES['image']['name'];
                //$dataFile consit info like hello.jpg
                $filesize = $_FILES['image']['size'];
                $explode_values = explode('.', $dataFile);
                //$explode_values become array having data in the form $explode_values = ['hello','jpg']
                $name = $explode_values[0];
                $fname = str_replace(' ','', $name);
                $finalname = strtolower($fname.time());
                $ext = $explode_values[1];
                $finalfile = $finalname.'.'.$ext;

                if($title!="" && $content!="" && $status!="" )
                {
                  if($ext=='jpg' || $ext == 'png' || $ext == 'gif')
                    {
                        if(move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/".$finalfile))
                        {
                    $query ="INSERT INTO awards (title,content,img,status) VALUES('$title','$content','$finalfile','$status')";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        ?>
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>New Award Inserted sucessfully</strong> 
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
                                                  <strong>Award cannot be Inserted</strong> 
                                                </div>
                                                
                                                <script>
                                                  $(".alert").alert();
                                                </script>
                                                <?php
                    }
                  }
                }
              }
                else {
                  ?>
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  <strong>Please enter every field</strong> 
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
                <h3 class="card-title">Add Awards</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Awards Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Awards Content</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="content" placeholder="Enter Content">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Award Image</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="">Status</label>
                    <select class="custom-select" name="status" id="">
                      <option selected>Select one</option>
                      <option value="active">Active</option>
                      <option value="deactive">Deactive</option>
                      
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