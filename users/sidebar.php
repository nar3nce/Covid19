<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['fullname']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item has-treeview menu-open">
            
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Appointment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="myqrcode.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My QRCODE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="appointment.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Appointment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="schedule.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Schedule</p>
                </a>
              </li>
              
            </ul>
          </li>
          
         

          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My Profile
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="information.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                My information
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="attachments.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Attachments
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="emergency.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Emergency contact
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>