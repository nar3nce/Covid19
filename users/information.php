<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Information</title>
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
            <h1>My Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My Information</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid col-lg-10">
      <div class="card card-primary ">
              <div class="card-header ">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
             <?php
              include('../conn.php');
              $user_id = $_SESSION['user_id'];
		  
              $sql = "SELECT * FROM `users` WHERE id = '$user_id' ";
              $result = $conn->query($sql);
              $row = $result->fetch_array();
              
              $uid = $row['id'];
             
              $sql1 = "SELECT * FROM `user_informarion` WHERE user_id = '$uid' ";
              $result1 = $conn->query($sql1);
              $row1 = $result1->fetch_array();
             
             ?>

              <!-- form start -->
              <form action="users_scripts/submit_info.php" role="form" method="POST">

                <div class="card-body">
            <input name="id" type="hidden" class="form-control" id="exampleInputPassword1" placeholder="Enter Full Name" value="<?php echo $user_id; ?>">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <textarea class="form-control" name="address" id="" cols="30" rows="3"><?php echo $row1['address']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input name="phone" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Full Name" value="<?php echo $row1['phone']; ?>">
                  </div>
                  <div class="form-group">
                  <label>Gender</label>
                  <select name="gender" class="form-control select2" style="width: 100%;">
                    
                    <option>Male</option>
                    <option>Female</option>
                    <option>Tomboy</option>
              
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input name="age" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Age" value="<?php echo $row1['age']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Citizenship</label>
                    <input name="citizenship" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Citizenship" value="<?php echo $row1['citizenship']; ?>">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


           

            
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
</body>
</html>
