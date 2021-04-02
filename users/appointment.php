<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Request Appointment</title>
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
            <h1>Request Appointment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Request Appointment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <section class="content">

<div class="container-fluid col-lg-10">

<div class="row">
    <!-- left column -->
    

    <div class="card card-primary">
    
        <div class="card-header">
          <h3 class="card-title"></h3>
        </div>
        <!-- /.card-header -->

        <?php
       include('../conn.php');
        $user_id = $_SESSION['user_id'];

       
       ?>

        <!-- form start -->
        <form action="users_scripts/submit_appointment.php" role="form" method="POST">
          <div class="card-body">
          <input name="id" type="hidden" class="form-control" id="exampleInputPassword1" placeholder="Enter Purpose" value="<?php echo $user_id; ?> ">
          <div class="form-group">
              <label for="exampleInputPassword1">Date</label>
              <input class="form-control" type="date" name="date" id="">
            </div>
          <div class="form-group">
                  <div class="form-group">
                  <label>Time Schedule</label>
                  <select name="time" class="form-control select2" style="width: 100%;">
                    <option>8am - 11am</option>
                    <option>1pm - 5pm</option>
                  </select>
                  </div>

                  <div class="form-group">
                  <label>Nature of visit</label>
                  <select name="nature" class="form-control select2" style="width: 100%;">
                    <option>Official</option>
                    <option>Personal</option>
                  </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Purpose</label>
                    <input name="purpose" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Purpose">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Department</label>
                    <input name="department" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter department">
                  </div>
            
                  

            <div class="form-group">
            <label for="exampleInputPassword1">Sore throat pananakit ng lalamunan/ lumunok</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio1" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio1" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">body pains pananakita ng katawan</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio2" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio2" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">headache pananakit ng ulo, cough ubo or colds sipon</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio3" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio3" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Fever for the past few days lagnat sas mga makalipas na araw</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio4" value="yes">
              <label class="form-check-label">Yes</label> 
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio4" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">sbortness of breath hirap sa paghinga </label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio5" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio5" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">changes in ability to smell or taste  pagiba ng abilidad na panlahap at panlasa</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio6" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio6" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>
            

          <div class="form-group">
            <label for="exampleInputPassword1">Have you work together or stayed in the same close environment  of a confirmed
COVID 19 case? May nakasama ka ba, nakasalimuha o nakatrabahong tao na nag positibo sa Covid 19?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio7" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio7" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Have you been tested for COVID 19 ? Ikaw ba ay dumaan na sa pagsusuri para sa Covid 19?
if yes what the result? Ano ang resulta kung Oo</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio8" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio8" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>
           
          <div class="form-group">
            <label for="exampleInputPassword1">Have you been evaluateas PUI OR PUM? Ikaw ba ay nagging PUI OR PUM
if yes when did quarantine start? kung Oo kelan ba nagsimulang iquarantine</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio9" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio9" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Have you have had any Contact with any person  who had fever , cough, colds and sore throat
of the past two 2 weeks Mayroon ka ba bang nakasama sa may lagnat, ubo, sipon ate masakit ang lalamunan sa nakaraan dalawang linggo?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio10" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio10" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Have you travelled outside the Philppines in the last fourteen 14 days? ikaw ba ay bumilyahe sa labas ng Pilipinas sa nakalipas labing apat na araw?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio11" value="yes">
              <label class="form-check-label">Yes</label>
             </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio11" checked value="no">
              <label class="form-check-label">No</label>
            </div>        
          </div>


          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->



         


</section>

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
