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
          <div class="card card-primary">
            <?php
 if(isset($_GET['msg']))
                    {
                        $msg = $_GET['msg'];
                        if($msg == 'dsuccess')
                        {
                            ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <strong>Image is deleted successfully.</strong> 
                            </div>
                            
                            <script>
                              $(".alert").alert();
                            </script>
                            <?php
                        }
                        if($msg == 'derror')
                        {
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <strong>Image cannot be deleted succesfully.</strong> 
                            </div>
                            
                            <script>
                              $(".alert").alert();
                            </script>
                            <?php
                        }
                    }
                ?>
              <div class="card-header">
                <h3 class="card-title">Manage Image</h3>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.N.</th>
                    <th>Action</th>
                    <th>Gallery Name</th>
                    <th>Gallery Category</th>
                     <th>status</th>
                      <th>Image</th>
                       
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $query = "SELECT * FROM gallery INNER JOIN gallery_category ON gallery.g_id=gallery_category.g_id";
                  $result = mysqli_query($conn,$query);
                  $sn = 0;
                  while($data=mysqli_fetch_array($result))
                  {
                    $sn+=1; //$sn = $sn+1
                    ?>
                  <tr>
                    <td><?php echo $sn; ?></td>
                    <td>
                        <a name="" id="" class="btn btn-danger btn-xs" href="process/deletegallery.php?id=<?php echo $data['id']; ?>" role="button">Delete</a>
                    </td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['g_name']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td> <img src="../uploads/<?php echo $data['img'];?>" alt="" height="100px;" width="100px;"></td>
                    
                  </tr>
                    <?php
                  }
                  ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
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