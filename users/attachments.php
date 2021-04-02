<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Attachments</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <?php include('users_scripts/restriction.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="logout.php" <button type="button" class="btn btn-block btn-danger"> <i class="fas fa-sign-out-alt"></i> Logout</button> </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Attachments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My Attachments</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid col-lg-8">

      <div class="row">
          <!-- left column -->
          <div class="col-md-12">

          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
         
              <!-- form start -->
              <form action="users_scripts/submit_attachment.php" role="form" method="POST" enctype="multipart/form-data">
              
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">Select file</label>
                    <div class="input-group">
                    <input name="id" type="hidden" class="form-control" id="exampleInputPassword1" placeholder="Enter Full Name" value="<?php echo $_SESSION['user_id']; ?>">
                      <input name="newname" type="hidden" class="form-control" id="exampleInputPassword1" placeholder="Enter Full Name" value="<?php echo $_SESSION['user_id']."_".$_SESSION['email']; ?>">
                        
                      <div class="custom-file">
                        <input required name="attachment" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <table width="101%" class="table">
									<thead>
									<div class="row">
				
				</div>
										<tr>
											<th><i class="fa fa-files-o"></i> File Name</th>
											<th><i class="icon_cogs"></i> Action</th>
										</tr>							
									</thead>
									<tbody> 
                    
										
										<!-- ############################################## responsive table design -->
										<?php
										//display contents from specific folder
                    
										
                    include('../conn.php');
                    $user_id = $_SESSION['user_id'];
		  
             
             
              $sql1 = "SELECT * FROM `user_attachment` WHERE user_id = '$user_id' ";
              $result1 = $conn->query($sql1);
              
              while($row1 = $result1->fetch_array()){

            ?>
											<tr>
                        <td> <a href="user_attachments/<?php echo $row1['attachment_name']; ?>"><?php echo $row1['attachment_name']; ?></a></td>
												<td><a class="btn btn-warning" href="users_scripts/submit_attachment.php?deletefile=<?php echo $row1['attachment_name']; ?>&fileid=<?php echo $row1['id']; ?>"><span class="fa fa-times"></span> Delete</a></td>
											</tr>
											
											<?php	
											
										}//display contents from specific folder end 
										?>
										<!-- ################################################### end -->
										
									</tbody>
								</table>
            <!-- /.card -->


          </div>

      </div>     
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <?php include('footer.php'); ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
