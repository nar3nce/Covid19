<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Profile</title>
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
            <h1>Accept Appointment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Accept Appointment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Date Requested</th>
                      <th>Time Schedule</th>
                      <th>Appointment Purpose</th>
                      <th>View Profile</th>
                      <th>View Form</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                <?php 
                include "../conn.php";
                $sql = "SELECT * FROM `user_appointments` WHERE status = 'pending' ";
                $result = $conn->query($sql);
                while($row = $result->fetch_array()){
                  $date = date_create($row['date']);
                ?>
                      <td><?= date_format($date,"F m, Y"); ?></td>
                      <td><?= $row['time_sched']; ?></td>
                      <td><?= $row['purpose']; ?></td>
                      <td>profile</td>
                      <td><input data-toggle="modal" data-target="#modal-default<?= $row['id']; ?>" type="button" value="view"></td>
                    
                    
                    <div class="modal fade" id="modal-default<?= $row['id']; ?>">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Default Modal<?= $row['id']; ?></h4>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body center">
              
            
            <div class="form-group">
            <label for="exampleInputPassword1">Sore throat pananakit ng lalamunan/ lumunok</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio1<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio1']; ?></label>
            </div>
      
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">body pains pananakita ng katawan</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio2<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio2']; ?></label>
            </div>     
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">headache pananakit ng ulo, cough ubo or colds sipon</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio3<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio3']; ?></label>
            </div>       
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Fever for the past few days lagnat sas mga makalipas na araw</label>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="radio4<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio4']; ?></label>
            </div>          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">sbortness of breath hirap sa paghinga </label>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="radio5<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio5']; ?></label>
            </div>          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">changes in ability to smell or taste  pagiba ng abilidad na panlahap at panlasa</label>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="radio6<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio6']; ?></label>
            </div>          </div>
            

          <div class="form-group">
            <label for="exampleInputPassword1">Have you work together or stayed in the same close environment  of a confirmed
COVID 19 case? May nakasama ka ba, nakasalimuha o nakatrabahong tao na nag positibo sa Covid 19?</label>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="radio7<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio7']; ?></label>
            </div>          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Have you been tested for COVID 19 ? Ikaw ba ay dumaan na sa pagsusuri para sa Covid 19?
if yes what the result? Ano ang resulta kung Oo</label>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="radio8<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio8']; ?></label>
            </div>          </div>
           
          <div class="form-group">
            <label for="exampleInputPassword1">Have you been evaluateas PUI OR PUM? Ikaw ba ay nagging PUI OR PUM
if yes when did quarantine start? kung Oo kelan ba nagsimulang iquarantine</label>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="radio9<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio9']; ?></label>
            </div>          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Have you have had any Contact with any person  who had fever , cough, colds and sore throat
of the past two 2 weeks Mayroon ka ba bang nakasama sa may lagnat, ubo, sipon ate masakit ang lalamunan sa nakaraan dalawang linggo?</label>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="radio10<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio10']; ?></label>
            </div>          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Have you travelled outside the Philppines in the last fourteen 14 days? ikaw ba ay bumilyahe sa labas ng Pilipinas sa nakalipas labing apat na araw?</label>
             <div class="form-check">
              <input class="form-check-input" type="radio" name="radio11<?= $row['id']; ?>" checked value="no">
              <label  class="form-check-label"><?= $row['radio11']; ?></label>
            </div>          </div>
          
            
            </div>
            <div class="modal-footer justify-content-between">
              
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
                  <!-- /.modal-dialog -->
                  </div>
      <!-- /.modal -->
                  <td><a class="btn btn-primary" href="admin_scripts/accept_appointment.php?acceptid=<?= $row['id']; ?>">Accept</a> <a class="btn btn-danger" href="admin_scripts/accept_appointment.php?rejectid=<?= $row['id']; ?>">Reject</a></td>
                  </tr>
                  <?php
                }
                ?>
                  </tbody>
                </table>
              </div>
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
