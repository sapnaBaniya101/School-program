<?php 
require('inc/toppart.php');
require('inc/navbar.php');
require('inc/sidebar.php');
?>


<?php 
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $select_query = "SELECT * FROM awards WHERE id=$id";
    $select_result = mysqli_query($conn,$select_query);
    $select_row = $select_result->fetch_assoc();
    
    $slider_title = $select_row['title'];
    $slider_details = $select_row['content'];
    $slider_status = $select_row['status'];
    
    $slider_img=$select_row['img'];
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
                
                $finalfilelink = '../../uploads/'.$slider_img;
        unlink($finalfilelink);

                if($title!="" && $content!="" && $status!="" )
                {
                      if($ext=='jpg' || $ext == 'png' || $ext == 'gif')
                    {
                        if(move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/".$finalfile))
                        {
                    $query ="UPDATE awards SET title='$title', content='$content', status='$status',img='$finalfile' WHERE id=$id";
                    $result = mysqli_query($conn,$query);
                    if($result)
                    {
                        echo "Award is updated successfully.";
                    }
                    else 
                    {
                        echo "Award couldn't updated successfully.";
                    }
                }


              }
            ?>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Awards</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Award Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="" value="<?php echo $slider_title; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Award Content</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="content" placeholder="" value="<?php echo $slider_details; ?>">
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
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Image Link</label>
                    <input type="File" class="form-control" id="exampleInputEmail1" name="image" placeholder="" value="<?php echo $slider_img; ?>">
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