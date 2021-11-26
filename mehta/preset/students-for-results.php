<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Name | ECI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php 
  include "themepart-ap/header.php"
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
          <img src="../img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            <a href="add_student.php" class="nav-link">
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
                Results
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Results / Student Name</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="form-group" style="text-align:center">
    <select class="btn btn-default" name="dept">
        <option value="" disabled selected hidden>Subject</option>
        <option value="">Maths</option>
        <option value="">Science</option>
        <option value="">English</option>
        <option value="">Gujarati</option>
    </select>
        <button type="submit" class="btn btn-warning">Search</button>                   
    </div>
      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">
            <table style="text-align:center" class="table table-striped projects">
                <tr>
                    <td  style="width: 40%">
                        <a>
                            Overall *Subject Name* Performance
                        </a>
                    </td  style="width: 60%">
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">
                            </div>
                        </div>
                        <small>
                            57% Complete
                        </small>
                    </td>
                </tr>
            </table>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          No.
                      </th>
                      <th>
                          Exam Name
                      </th>
                      <th>
                          Date
                      </th>
                      <th>
                          Marks
                      </th>
                      <th class="text-center">
                          Status
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          1
                      </td>
                      <td class="project_progress">
                          <a>
                            <b>Weekly Test</b>
                          </a>
                          <br/>
                          <small>
                              Chapter : 1,2
                          </small>
                      </td>
                      <td>
                          <a>
                              5/4/2021
                          </a>
                      </td>  
                      <td>
                          <a>
                              <b>28/30</b>
                          </a>
                      </td>                
                      <td class="project-state">
                          <span class="badge badge-success">Good Work!</span>
                      </td>        
                  </tr>
                  <tr>
                  <td>
                          1
                      </td>
                      <td class="project_progress">
                          <a>
                            <b>Weekly Test</b>
                          </a>
                          <br/>
                          <small>
                              Chapter : 3,4
                          </small>
                      </td>
                      <td>
                          <a>
                              5/4/2021
                          </a>
                      </td>  
                      <td>
                          <a>
                              <b>20/30</b>
                          </a>
                      </td>                
                      <td class="project-state">
                          <span class="badge badge-warning">Average!</span>
                      </td>        
                  </tr>
                  <tr>
                  <td>
                          1
                      </td>
                      <td class="project_progress">
                          <a>
                            <b>Weekly Test</b>
                          </a>
                          <br/>
                          <small>
                              Chapter : 5,6
                          </small>
                      </td>
                      <td>
                          <a>
                              20/4/2021
                          </a>
                      </td>  
                      <td>
                          <a>
                              <b>12/30</b>
                          </a>
                      </td>                
                      <td class="project-state">
                          <span class="badge badge-danger">Warning!</span>
                      </td>        
                  </tr>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
  include "themepart-ap/footer.php"
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
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
