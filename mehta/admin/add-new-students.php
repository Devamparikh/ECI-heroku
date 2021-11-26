<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Student | ECI </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?php

include 'themepart-ap/header.php'

?>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-warning elevation-4">
  <!-- Brand Logo -->
  <a href="index3.php" class="brand-link">
    <img src="../images/Logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Edu Crafters Institute</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin Name</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php" class="nav-link">
          <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="add_student.php" class="nav-link active">
          <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
            <p>
              Add Student
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="file_upload.php" class="nav-link">
          <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
            <p>
              File Upload
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="marks_upload.php" class="nav-link">
          <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
            <p>
              Marks Upload
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="results.php" class="nav-link">
            <i class="nav-icon fas fa-chart-bar" style='font-size:21px'></i>
            <p>
              Performance / Results
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="assignments.php" class="nav-link">
              <i class="nav-icon fas fa-edit" style='font-size:21px'></i>
            <p>
              Assignments
            </p>
          </a>
        </li>
       
       
        <li class="nav-item">
          <a href="tt.php" class="nav-link">
            <i class="nav-icon fas fa-tasks" style='font-size:20px'></i>
            <p>
              Time Table
            </p>
          </a>
        </li>
         <li class="nav-item">
          <a href="fees.php" class="nav-link">
          <i class="nav-icon fas fa-clipboard-check" style='font-size:23px'></i>
            <p>
              Fees
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="upload_book.php" class="nav-link">
            <i class="nav-icon fas fa-book" style='font-size:22px'></i>
            <p>
              Refrence Book
            </p>
          </a>
        </li>
         <li class="nav-item">
          <a href="add_ques_paper.php" class="nav-link">
            <i class="nav-icon fas fa-book-open" style='font-size:20px'></i>
            <p>
              Previous Question Paper
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="login.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt" style='font-size:22px'></i>
            <p>
              Log Out
            </p>
          </a>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users Data Entry</h1>
          </div>
                <!-- Main content -->
                    
    <!-- /.content -->
        </div>
      </div>
    </div><!-- /.col -->
	
	
    
    <section>
        <div class="container-fluid">
            <div class='row'>
                
                <div class="col-md-6">
                    <!-- Main content -->
                    <div class="container-fluid">
                        <!-- general form elements -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">To Add Students User Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="" method = "post">
                              <div class="card-body">
                                <div class="form-group">
                                  <select class="btn btn-default" name="dept">
                                            <option value="" disabled selected hidden>Subject</option>
                                            <option value="">IT</option>
                                            <option value="">CE</option>
                                            <option value="">EC</option>
                                            <option value="">EE</option>
                                            <option value="">ME</option>
                                            <option value="">Civil E</option>
                                            <option value="">Chem E</option>
                                            <option value="">BT</option>
                                            <option value="">NT</option>
                                        </select>
                                  <select class="btn btn-default" name="sem">
                                      <option value="" disabled selected hidden>Standard</option>
                                      <option value="">1</option>
                                      <option value="">2</option>
                                      <option value="">3</option>
                                      <option value="">4</option>
                                      <option value="">5</option>
                                      <option value="">6</option>
                                      <option value="">7</option>
                                      <option value="">8</option>
                                  </select>
                            </div>
                                <div class="form-group">
                                  <label>Enroll No.</label>
                                  <input type="enrollnumber" class="form-control" id="enroll no." name="enroll" placeholder="Enter Enroll Number">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputnumbeer">Name</label>
                                  <input type="text" class="form-control" id="number" name="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Contact Number</label>
                                  <input type="contactnumber" class="form-control" id="contact no." name="contact" placeholder="Enter Contact Number">
                                </div>
                                <div class="form-group">
                                  <label>Email Address</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Password</label>
                                  <input type="password" class="form-control" id="contact no." name="pass" placeholder="Enter Password">
                                </div>
                               
                                
                                      <br>
                               
                                <div class="card" align='center'>
                                    <button type="submit" class="btn btn-warning" name="student">Submit</button>
                                </div>
                              </div>
                            </form>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-header -->



  <!-- /.content-wrapper -->
  <?php
  
  include 'themepart-ap/footer.php'
  
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
