<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Visitors</title>
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
  <?php include('admin_scripts/restriction.php'); ?>
</head>
<style>
  .inline{
    display: inline;
  }
</style>
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
            <h1>Visitors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Visitors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">

      <form method="get">
        <div class="form-group">
        <input class="form-control w-25 inline" type="date" name="date_visited" id="">
        <select class="form-control w-25 inline" name="usertype" id="">
          <option value="visitor">visitors</option>
          <option value="student">students</option>
          <option value="employee">employee</option>
        </select>
            <button type="submit" class="btn btn-primary "><span class="fas fa-search"></span></button>
        </div>
      </form>
      <div class="row">
          <div class="col-12">
            <div class="card">
              

              <?php
                  if(isset($_GET['date_visited'])){
              ?>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Date Visited</th>
                      <th>Fullname</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Citezenship</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <tr>
                <?php 
                $date_visited = $_GET['date_visited'];
                $usertype = $_GET['usertype'];
                include "../conn.php";
                $visitors = fetch_all("
                SELECT DISTINCT visitors.visitor_id, visitors.date_visited, users.fullname, 
                user_information.address, user_information.phone, user_information.gender, 
                user_information.citizenship FROM `visitors` 
                LEFT JOIN users ON visitors.visitor_id = users.id
                LEFT JOIN user_information ON visitors.visitor_id = user_information.user_id
                WHERE date_visited LIKE '$date_visited%' and usertype = '$usertype'
                GROUP BY visitors.visitor_id
                ");
                foreach($visitors as $visitors_){
                  $date = date_create($visitors_['date_visited']);
                ?>
                      <td><?= date_format($date,"F j, Y H:i:s A");  ?></td>
                      <td><?= $visitors_['fullname'] ?></td>
                      <td><?= $visitors_['address'] ?></td>
                      <td><?= $visitors_['phone'] ?></td>
                      <td><?= $visitors_['gender'] ?></td>
                      <td><?= $visitors_['citizenship'] ?></td>
                      </tr>
                  <?php
                }
                ?>
                  </tbody>
                </table>
                
              </div>

              <?php
                }
                ?>
              <!-- /.card-body -->

              
            </div>
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
</body>
</html>
