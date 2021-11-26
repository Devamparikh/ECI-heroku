<?php
session_start();
if(!isset($_SESSION['professor_username'])){
  header("Location: 404.php");
}else{
    echo $professor_username = $_SESSION['professor_username'];
}
?>
<?php include "../includes/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Refrence Book | ECI </title>
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
    <img src="../img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
          <a href="upload_book.php" class="nav-link active">
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
            <h1 class="m-0 text-dark">Upload Study Material</h1>
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
                <?php
                
                if(isset($_POST['upload_study_material'])){
                  $class_number = $_POST['class'];
                  $subject_id = $_POST['subject'];
                  $board_name = $_POST['board'];
                  $study_material_desc = $_POST['detail'];
                  $file = $_FILES['file'];
                  $fileName = $_FILES['file']['name'];
                  $fileTmpName = $_FILES['file']['tmp_name'];
                  $fileError = $_FILES['file']['error'];
                  $fileSize = $_FILES['file']['size'];
                  $fileType = $_FILES['file']['type'];
                  $fileExt = explode('.', $fileName);
                  $fileActualExt = strtolower(end($fileExt));
                  if($fileError === 0){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = '../admin/uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $upload_file = "INSERT INTO `study_material` (`study_material_class`, `study_material_board`, `study_material_subject`, `study_material_desc`,`filename`,`time_stamp`) VALUES ($class_number, '$board_name', $subject_id, '$study_material_desc', '$fileNameNew',now())";
                    $insert_file = mysqli_query($connection,$upload_file);
                  }
                }

                ?>
                    <!-- Main content -->
                    <div class="container-fluid">
                        <!-- general form elements -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">To upload study material</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="" method = "post" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                <table class="table">
  <tr>
    <th>Class</th>
    <th>Board</th>
    <th>Subject</th>
  </tr>
  <tr>
    <td>
      <select class="form-control select2" name="class" style="width: 100%;">
      <?php
        $query = "SELECT * FROM `professor_given_class` WHERE `professor_given_class`.`professor_username` = '$professor_username'";
        $select_class = mysqli_query($connection,$query);
        while($class = mysqli_fetch_assoc($select_class)){
        $class_id = $class['class_id'];
        $class_number = $class['class_number'];
        echo "<option value='$class_number'>$class_number th</option>";
        }
?>
    </td>
    <td>
      <select class="form-control select2" name="board" style="width: 100%;">
      <?php
        $query = "SELECT * FROM `professor_given_board` WHERE `professor_given_board`.`professor_username` = '$professor_username'";
        $select_board = mysqli_query($connection,$query);
        while($board = mysqli_fetch_assoc($select_board)){
        $board_id = $board['board_id'];
        $board_name = $board['board_name'];
        echo "<option value='$board_name'>$board_name</option>";
        }
?>
    </td>
    <td>
    <select class="form-control select2" name="subject" style="width: 100%;">
    <?php
        $query = "SELECT * FROM `professor_given_subject` WHERE `professor_given_subject`.`professor_username` = '$professor_username'";
        $select_subject = mysqli_query($connection,$query);
        while($subject = mysqli_fetch_assoc($select_subject)){
        $subject_id = $subject['subject_id'];
        $subject_name = $subject['subject_name'];
        echo "<option value='$subject_id'>$subject_name</option>";
        }
?>
    </td>
  </tr>
</table>
                                </div>
                                <div class="form-group">
                                  <label>Detail of study material</label>
                                  <input type="text" class="form-control" id="name" name="detail" placeholder="Enter detail of study material">
                                </div>
                                <div class="form-group">
                                  <label for="">Select File</label><br>
                                  <input type="file" id="file" name="file" >
                                </div>
                                
                                      <br>
                               
                                <div class="card" align='center'>
                                    <button type="submit" class="btn btn-warning" name="upload_study_material">Upload</button>
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
