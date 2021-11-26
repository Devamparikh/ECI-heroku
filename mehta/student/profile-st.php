<?php
session_start();
ob_start();
if(!isset($_SESSION['student_username'])){
  header("Location: 404.php");
}else{
    echo $student_username_session = $_SESSION['student_username'];
}
?>
<?php include "../includes/db.php"; ?>
<?php
$query_student_detail = "SELECT * FROM `student` WHERE `student`.`student_roll` = '$student_username_session'";
$select_student_detail = mysqli_query($connection,$query_student_detail);
                    $student_detail = mysqli_fetch_assoc($select_student_detail);

                    $student_id = $student_detail['student_id'];
                    $student_name = $student_detail['student_name'];
                    $student_contact = $student_detail['student_contact'];
                    $student_email = $student_detail['student_email'];
                    $student_father_name = $student_detail['student_father_name'];
                    $student_father_contact = $student_detail['student_father_contact'];
                    $student_father_occ = $student_detail['student_father_occ'];
                    $student_mother_name = $student_detail['student_mother_name'];
                    $student_mother_contact = $student_detail['student_mother_contact'];
                    $student_previous_std = $student_detail['student_previous_std'];
                    $student_previous_std_marks = $student_detail['student_previous_std_marks'];
                    $student_dob = $student_detail['student_dob'];
                    $student_std = $student_detail['student_std'];
                    $student_board = $student_detail['student_board'];
                    $student_accept_teams = $student_detail['student_accept_teams'];
                    $student_form_fill = $student_detail['student_form_fill'];
                    $student_img = $student_detail['student_img'];

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta http-equiv="refresh" content="1"> -->
  <title>Home | ECI </title>
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
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- Google Font: Source Sans Pro -->



</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php
    include "themepart-ap/header.php"
?>
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4" style="overflow: hidden;">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="../images/Logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Edu Crafters Institute</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php if(isset($student_img)){echo $student_img;}else {echo '../upload/user.jpg';} ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php if(isset($student_name)){echo $student_name;} ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <i style='font-size:21px'></i>
            <button type="button" class="btn btn-primary float-center" style="width: 230px;;"><i class="fas fa-link"></i> Test Link</button>
            </a>
          </li>
          <br>
          <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="results.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
              <p>
                Result / Performance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="attendance.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
              <p>
                Attendance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="fee.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
              <p>
                Fees Details
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="work_assigned.php" class="nav-link">
              <i class="nav-icon fas fa-chart-bar" style='font-size:21px'></i>
              <p>
                Work Assigned
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tt.php" class="nav-link">
                <i class="nav-icon fas fa-edit" style='font-size:21px'></i>
              <p>
                Time Table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reference_book.php" class="nav-link">
              <i class="nav-icon fas fa-tasks" style='font-size:20px'></i>
              <p>
                Reference Book
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="prev_ques_paper.php" class="nav-link">
            <i class="nav-icon fas fa-clipboard-check" style='font-size:23px'></i>
              <p>
                Previous Questions Papers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../login.php" class="nav-link">
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

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Edit Profile</a>
      </li>
    </ul>
  </nav>
  
 
  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">


  <?php
  
  if (isset($_POST['save_change'])) {
    $student_name = $_POST['student_name'];
    $student_contact = $_POST['student_contact'];
    $student_dob = $_POST['student_dob'];
    $student_previous_std = $_POST['student_previous_std'];
    $student_previous_std_marks = $_POST['student_previous_std_marks'];
    $student_father_name = $_POST['student_father_name'];
    $student_father_contact = $_POST['student_father_contact'];
    $student_father_occ = $_POST['student_father_occ'];
    $student_mother_name = $_POST['student_mother_name'];

    
$update_query = "UPDATE `student` SET `student_name` = '$student_name', `student_contact` = '$student_contact', `student_father_name` = '$student_father_name', `student_father_contact` = '$student_father_contact', `student_father_occ` = '$student_father_occ', `student_mother_name` = '$student_mother_name', `student_mother_contact` = '$student_mother_contact', `student_previous_std` = '$student_previous_std', `student_previous_std_marks` = '$student_previous_std_marks', `student_dob` = '$student_dob' WHERE `student`.`student_roll` = '$student_username_session'";
$update = mysqli_query($connection,$update_query);

header("Location: profile-st.php");

  }
  
  ?>
    
  </div>

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                    
                    <?php
                    
                    if (isset($student_img)) {
echo "<img src='$student_img' alt='' width='140' height='140'>";
                    }else {
                      echo "<img src='images/default_profile.jpg' alt='' width='140' height='140'>";                      
                    }
                    
                    ?>

                      <!-- <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span> -->

                    </div>
                  </div>
                </div>
               
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php
                    
                    if (isset($student_name)) {
echo $student_name ;
                    }else {
                      echo "User Name";                      
                    }
                    
                    ?></h4>
                    <p class="mb-0"></p>
                    <br/>
                    <div class="mt-2">
                    <form action="crop.php" method = "POST">
                      <button class="btn btn-primary" name="changePhoto" type="submit">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                      </form>
                    </div>
                  </div>
                  
                </div>
              </div>
                
                <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <p><?php
                    
                    if (isset($student_username_session)) {
echo $student_username_session ;
                    }else {
                      echo "User Name";                      
                    }
                    
                    ?></p>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <p><?php
                    
                    if (isset($student_email)) {
echo $student_email ;
                    }else {
                      echo "Email@mail.com";                      
                    }
                    
                    ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <hr>
                <div class="tab-pane active">
                  <form class="form" novalidate="" action="" method="post">
                   
                            <div class="form-group">
                              <label>Name</label>
                              <input class="form-control" type="text" name="student_name" placeholder="Name" value="<?php
                    
                    if (isset($student_name)) {
echo $student_name ;
                    }else {
                      echo 'User Name';                      
                    }
                    
                    ?>">
                            </div>
                </div>
                
                
                        <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>DOB</label>
                              <input class="form-control" type="date" name="student_dob" placeholder="user@example.com" value="<?php
                    
                    if (isset($student_dob)) {
echo $student_dob ;
                    }
                    ?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Phone</label>
                              <input class="form-control" type="text" name="student_contact" placeholder="Contact No." value="<?php
                    
                    if (isset($student_contact)) {
echo $student_contact ;
                    }
                    ?>">
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Previous class</label>
                              <input class="form-control" type="text" name="student_previous_std" placeholder="user@example.com" value="<?php
                    
                    if (isset($student_previous_std)) {
echo $student_previous_std ;
                    }
                    ?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Previous class Score</label>
                              <input class="form-control" type="text" name="student_previous_std_marks" placeholder="Contact No." value="<?php
                    
                    if (isset($student_previous_std_marks)) {
echo $student_previous_std_marks ;
                    }
                    ?>">
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>


                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Father Name</label>
                              <input class="form-control" type="text" name="student_father_name" placeholder="user@example.com" value="<?php
                    
                    if (isset($student_father_name)) {
echo $student_father_name ;
                    }
                    ?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Mother Name</label>
                              <input class="form-control" type="text" name="student_mother_name" placeholder="Contact No." value="<?php
                    
                    if (isset($student_mother_name)) {
echo $student_mother_name ;
                    }
                    ?>">
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>

                    
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Father Contact</label>
                              <input class="form-control" type="text" name="student_father_contact" placeholder="user@example.com" value="<?php
                    
                    if (isset($student_father_contact)) {
echo $student_father_contact ;
                    }
                    ?>">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Mother Contact</label>
                              <input class="form-control" type="text" name="student_mother_contact" placeholder="Contact No." value="<?php
                    
                    if (isset($student_mother_contact)) {
echo $student_mother_contact ;
                    }
                    ?>">
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>


                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <label>Father Occupation</label>
                              <input class="form-control" type="text" name="student_father_occ" placeholder="user@example.com" value="<?php
                    
                    if (isset($student_father_occ)) {
echo $student_father_occ ;
                    }
                    ?>">
                            </div>
                          </div>
                          
                        </div>
                         
                      </div>
                    </div>
                
                <hr>
                     
                    <div class="row">
                      <div class="col-12">
                        <!-- <div class="mb-2"><b>Forgot your password?</b></div> -->
                        <div class="row">
                      <div class="col justify-content-end">
                          <a href='../reset-password.php'>
                       <button type="button" class="btn btn-block btn-outline-primary">Change Password</button>
                          </a>
                      </div>
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit" name="save_change">Save Changes</button>
                    </div>
                        </div>
                        </div>
                    </div>
                     
                    

                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     

  </div>
</div>
</div>

  <!-- /.content-wrapper -->
  <?php
  
  include '../themepart/footer.php'
  
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
