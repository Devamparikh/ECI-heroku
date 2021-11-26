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
  <title>Question Paper Manager | ECI</title>
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
            <a href="add_student.php" class="nav-link active">
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
            <h1>Question paper manager</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="form-group">
      <button style="text-align:left" type="submit" href="add-new-students.php" class="btn btn-primary">Upload New Paper</button>               
    </div>
      <!-- Default box -->
      <div class="card">
      <?php
      
      if (isset($_GET['delete'])) {
        # code...
        $ques_paper_id = $_GET['delete'];
        $delete_query = "DELETE FROM `ques_paper` WHERE `ques_paper_id` = $ques_paper_id";
        $delete = mysqli_query($connection,$delete_query);
      }
      
      ?>
        <div class="card-body p-0">
        <form role="form" action="" method = "post">              
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
    <td>
<button type="submit" name="search" class="btn btn-info float">Search</button>
    </td>
  </tr>
</table>
</form>
          <table class="table table-striped projects">
              <thead>
                
                  <tr>
                      <th>
                          No.
                      </th>
                      <th>
                          Time Stamp
                      </th>
                      <th>
                          Year
                      </th>
                      <th>
                      Type
                      </th>
                      <th>
                      File Name
                      </th>
                      
                      <!-- <th class="text-center">
                          File Name
                      </th> -->
                      <th>
                          
                      </th>
                  </tr>
              </thead>
              <tbody>

              <?php
              
              if(isset($_POST['search'])){
                $class_number = $_POST['class'];
                $board_name = $_POST['board'];
                $subject_id = $_POST['subject'];
                $i=1;
$query_ques_paper_table = "SELECT * FROM `ques_paper` WHERE `ques_paper`.`class_number` = $class_number AND `ques_paper`.`subject_id` = $subject_id AND `ques_paper`.`board_name` LIKE '$board_name' ORDER BY `ques_paper_id` DESC";
$select_paper = mysqli_query($connection,$query_ques_paper_table);
while ($ques_paper = mysqli_fetch_assoc($select_paper)) {
  $ques_paper_id  = $ques_paper['ques_paper_id'];
  $paper_year  = $ques_paper['paper_year'];
  $paper_type  = $ques_paper['paper_type'];
  $filename  = $ques_paper['filename'];
  $timestamp  = $ques_paper['timestamp'];
//   $ques_paper_id  = $ques_paper['ques_paper_id '];

//   $time_stamp = $file['time_stamp'];
//   $chap_number = $file['chap_number'];
//   $chap_name = $file['chap_name'];
//   $brief_info = $file['brief_info'];
//   $filename = $file['filename'];


                  echo"<tr>";
                  echo"    <td>";
                  echo"     $i";
                  echo"</td>";
                  echo"<td>";
                  echo"  <a>";
                  echo"     $timestamp";
                  echo"   </a>";
                  echo" </td>";
                  echo" <td>";
                  echo"     <a>";
                  echo"         $paper_year";
                  echo"     </a>";
                  echo" </td>";
                  echo" <td>";
                  echo"     <a>";
                //   $query_select_subject = "SELECT * FROM `student`,`student_opt_subject` WHERE `student`.`student_id`=`student_opt_subject`.`student_id` AND `student`.`student_id` = $student_id";
                //   $select_subject = mysqli_query($connection,$query_select_subject);
                //   while($subject = mysqli_fetch_assoc($select_subject)){
                //     $subject_name = $subject['subject_name'];
                //     echo $subject_name . " <br>";
                //   }
                  echo"      $paper_type ";
                  echo"     </a>";
                  echo" </td>  ";
                  echo"    <td>";
                  echo"   <a>";
                  echo"       $filename";
                  echo"   </a>";
                  echo"</td>               "; 
                  // echo"<td class="project_progress">";
                  // echo"   <div class="progress progress-sm">";
                  // echo"       <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">";
                  // echo"       </div>";
                  // echo"   </div>";
                  // echo"   <small>";
                  // echo"       57% Complete";
                  // echo"   </small>";
                  // echo"</td>";
                //   echo"<td>";
                  // echo"   <span>Good Work!</span>";
                //   echo" <a>$filename</a>";
                //   echo"</td> ";
                //   echo"<td>";
                  // echo"<form action='add_student.php?edit=$student_id'>";
                  // echo" <button type='submit' class='btn btn-primary'>Edit</button>";
                  // echo"</form>";
                //   echo"<a href='add_student.php?edit=$student_id' class='btn btn-primary'>Edit</a>";
                //   echo"</td>";
                  echo"<td>";
                  echo" <a href='question_paper_manage.php?delete=$ques_paper_id' class='btn btn-danger'>Delete</a>";
                  echo"</td> ";
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
