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
  <title>Results | ECI</title>
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
                Students
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
            <a href="results.php" class="nav-link active">
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
            <h1>Results</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">

        <form role="form" action="" method = "post">              
<table class="table">
  <tr>
    <th>Class</th>
    <th>Board</th>
    <th></th>
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
<button type="submit" name="search" class="btn btn-info float">Search</button>
    </td>
  </tr>
</table>
</form>

<table class="table table-striped projects">
              <thead>
              <br/>
              <div class="form-group" style="text-align:center" >
          </div>
                  <tr>
                      <th>
                          No.
                      </th>
                      <th style="width: 25%">
                          Student Name
                      </th>
                      <th style="width: 15%">
                          Standard
                      </th>
                      <th style="width: 15%">
                          Board
                      </th>
                      <th style="width: 25%">
                      Current CGPA
                      </th>
                      <th style="width: 20%" class="text-center">
                          Status
                      </th>
                  </tr>
              </thead>
              <tbody>


<?php

if(isset($_POST['search'])){
  $i = 1;

  $class_number = $_POST['class'];
  $board_name = $_POST['board'];
  $select_student_query_roll = "SELECT * FROM `student` WHERE `student`.`student_std` = '$class_number' AND `student`.`student_board` =  '$board_name' ";
  $select_student_roll = mysqli_query($connection,$select_student_query_roll);
  while($student = mysqli_fetch_assoc($select_student_roll)){
    
    $student_id = $student['student_id'];
    $student_name = $student['student_name'];
    $student_roll = $student['student_roll'];
    $mark_obtained = 0;
    $mark_total = 0;

    $select_student_mark_query = "SELECT * FROM `student_marks` WHERE `student_marks`.`student_roll` LIKE '$student_roll'";
    $select_marks = mysqli_query($connection,$select_student_mark_query);
    while($marks = mysqli_fetch_assoc($select_marks)){
      if(($marks['student_marks']) == 'AB' || ($marks['student_marks']) == 'ab'){

      }else{
      $total_marks_obtained = $marks['student_marks'];
      $total_marks = $marks['total_marks'];
      $mark_obtained = $mark_obtained + $total_marks_obtained;
      $mark_total = $mark_total + $total_marks;
      }
    }

    $percentage = (($mark_obtained * 100)/$mark_total);
    $percentage = ceil($percentage);
    $CGPA = ($percentage/10);

    echo"<tr>";
    echo"<td>";
    echo"$i";
    echo"</td>";
    echo"<td>";
    echo"<a href='students-for-results.php?student_id=$student_roll'>";
    echo"$student_name";
    echo"</a>";
    echo"</td>";
    echo"<td>";
    echo"<a>";
    echo"$class_number th";
    echo"</a>";
    echo"</td>";
    echo"<td>";
    echo"<a>";
    echo"$board_name";
    echo"</a>";
    echo"</td>";            
    echo"<td class='project_progress'>";
    echo"<div class='progress progress-sm'>";
    echo"<div class='progress-bar bg-green' role='progressbar' aria-volumenow='$percentage' aria-volumemin='0' aria-volumemax='100' style='width: $percentage%'>";
    echo"</div>";
    echo"</div>";
    echo"<small>";
    echo"CGPA $CGPA";
    echo"</small>";
    echo"</td>";
    echo"<td class='project-state'>";
    if($CGPA == 10 || $CGPA == '10'){
    echo"<span class='badge badge-success'>Excellent Work!</span>";
    }elseif(($CGPA >= 7.5 || $CGPA >= '7.5') && ($CGPA < 10 || $CGPA < '10')){
      echo"<span class='badge badge-success'>Good Work!</span>";
    }elseif(($CGPA >= 6 || $CGPA >= '6') && ($CGPA < 7.5 || $CGPA < '7.5')){
      echo"<span class='badge badge-warning'>Average!</span>";
    }else{
      echo"<span class='badge badge-danger'>Warning!</span>";
    }
    echo"</td>";
    echo"</tr>";

$i++;
  }
}

?>
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
