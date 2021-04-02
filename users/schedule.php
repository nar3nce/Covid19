<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My Schedule</title>
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
            <h1>My Schedule</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My Schedule</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid col-lg-7">

      <div class="row">
          <!-- left column -->
          <div class="col-md-12">

          <?php
              include('../conn.php');
               $user_id = $_SESSION['user_id'];
		  
              
             $color = "";
              $sql1 = "SELECT * FROM `user_appointments` WHERE user_id = '$user_id' ";
              $result1 = $conn->query($sql1);
              while($row1 = $result1->fetch_array()){
                $date= date_create($row1['date']);
                //$date = $row1['date'];
                
                if($row1['status'] == "pending"){
                  $color = "warning";
                }
                else if($row1['status'] == "Accepted"){
                  $color = "success";
                }
                else {
                  $color = "danger";
                }
             ?>
             
          <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-<?= $color; ?>">
                
                <!-- /.widget-user-image -->
               
                
              </div>

             

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      Status <span class="float-right badge bg-<?= $color; ?>"><?php echo $row1['status']; ?></span>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      Date Schedule<span class="float-right badge bg-primary"><?php echo date_format($date,"F m, Y"); ?></span>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                      Time Schedule <span class="float-right badge bg-primary"><?php echo $row1['time_sched']; ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Nature of visit <span class="float-right badge bg-primary"><?php echo $row1['nature']; ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Purpose <span class="float-right badge bg-primary"><?php echo $row1['purpose']; ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Department unit to visit <span class="float-right h4 badge bg-primary"><?php echo $row1['department']; ?></span>
                    </a>
                  </li>
                </ul>
              </div>
            
              
            </div>

            <?php
              }
              ?>
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
</body>
</html>
