<?php
ob_start();
session_start();
if(!isset($_SESSION['admin_username'])){
  header("Location: 404.php");
}else{
  $admin_username = $_SESSION['admin_username'];
}
?>
<?php include "../includes/db.php"; ?>
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
    <a href="#" class="brand-link">
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
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class='nav-icon far fa-calendar-check'></i>
              <p>
                Attendance Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="attendee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="attendance_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class='nav-icon fas fa-users'></i>
              <p>
                Students Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="students.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Students</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class='nav-icon fas fa-user-tie'></i>
              <p>
                Professors Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_professor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Professors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="professor_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Professor Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class='nav-icon fas fa-clipboard-check'></i>
              <p>
                Test Link
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-test-link.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Test Link</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="test_link_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Test Link Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class='nav-icon far fa-edit'></i> 
              <p>
                Assignments Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="assignments.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assignments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assignment_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assignments Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i class='nav-icon fas fa-chart-bar'></i>
              <p>
                Results Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="marks_upload.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marks Upload</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="student_mark_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students Marks Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="results.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Results</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students for result</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class='nav-icon far fa-newspaper'></i>
              <p>
                News Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="news_for_student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News for students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="popup.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Popup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="popup_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Popup Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="student_news_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students News Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class='nav-icon fas fa-money-check-alt'></i>
              <p>
                Fees Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="fees.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fees</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fee_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fees Manage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fee_popup.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fees Popup</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="fee_popup_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fees Popup Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class='nav-icon fas fa-money-check'></i>
              <p>
                Salary Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="salary_insights.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salary Insights</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="salary_insights_mamnage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salary Insights Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class='nav-icon fas fa-clipboard-list'></i>
              <p>
                Question Papers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_ques_paper.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Question Paper</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="question_paper_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Question Paper Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
            <i class='nav-icon fas fa-book'></i>
              <p>
                Study Material
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="upload_book.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Book</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="study_material_manage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Study Material Manage</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="tt.php" class="nav-link">
            <i class='nav-icon fas fa-tasks'></i>
              <p>
                Time Table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="settings.php" class="nav-link">
            <i class='nav-icon fas fa-cog'></i>
              <p>
                Settings
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
    <form role="form" action="" method = "post">              
<table class="table">
  <tr>
    <th>Subject</th>
    <th></th>
  </tr>
  <tr>
  <td>
    <select class="form-control select2 float-right" name="subject" style="width: 50%;">
    <?php
        $query = "SELECT * FROM `subject`";
        $select_subject = mysqli_query($connection,$query);
        while($subject = mysqli_fetch_assoc($select_subject)){
        $subject_id = $subject['subject_id'];
        $subject_name = $subject['subject_name'];
        echo "<option value='$subject_id'>$subject_name</option>";
        }
?>
    </td>
   
    <td>
    <!-- <input type='hidden' name='student_roll' value=''> -->
    
<button type="submit" name="search" class="btn btn-info float-left">Search</button>
    </td>
  </tr>
</table>
</form>                   
    </div>
      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">
            <table style="text-align:center" class="table table-striped projects">
                <tr>
                    <td  style="width: 40%">
                        <a>
                            <b>Current SGPA<b>
                        </a>

                        <?php

              
if(isset($_POST['search'])){
  $subject_id = $_POST['subject'];
  if(isset($_GET['student_id'])){
    $student_roll = $_GET['student_id'];
  }
  // $student_roll = $_POST['student_roll'];
  $mark_obtained = 0;
  $mark_total = 0;
  $percentage =0;
  $SGPA =0;
  $i=1;

  $query_subject_mark = "SELECT * FROM `student_marks` WHERE `student_marks`.`student_roll` LIKE '$student_roll' AND `student_marks`.`subject_id`= $subject_id ORDER BY `student_marks`.`exam_date` DESC";
  $select_subject_mark = mysqli_query($connection,$query_subject_mark);
  while($subject_mark = mysqli_fetch_assoc($select_subject_mark)){
    if(($subject_mark['student_marks']) == 'AB' || ($subject_mark['student_marks']) == 'ab'){

    }else{
    $total_marks_obtained = $subject_mark['student_marks'];
    $total_marks = $subject_mark['total_marks'];
    $mark_obtained = $mark_obtained + $total_marks_obtained;
    $mark_total = $mark_total + $total_marks;
    $percentage = (($mark_obtained * 100)/$mark_total);
  $percentage = ceil($percentage);
  $SGPA = ($percentage/10);
    }
  }
  


                    echo"</td  style='width: 60%'>";
                    echo" <td class='project_progress'>";
                    echo" <div class='progress progress-sm'>";




                    echo"  <div class='progress-bar bg-green' role='progressbar' aria-volumenow='$percentage' aria-volumemin='0' aria-volumemax='100' style='width: $percentage%'>";
                    echo" </div>";
                    echo" </div>";
                    echo" <small>";
                    echo"   SGPA $SGPA";
                    echo" </small>";
                    echo" </td>";

}
?>



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
              <!-- php
              
              // if(isset($_POST['search'])){
              //   $subject_id = $_POST['subject'];
              //   $student_roll = $_POST['student_roll'];
                
              // }
              
              ?> -->
              <?php

              
if(isset($_POST['search'])){
  $subject_id = $_POST['subject'];
  // $student_roll = $_POST['student_roll'];
  $mark_obtained = 0;
  $mark_total = 0;
  $i=1;
  if(isset($_GET['student_id'])){
     $student_roll = $_GET['student_id'];
  }

  $query_subject_mark = "SELECT * FROM `student_marks` WHERE `student_marks`.`student_roll` LIKE '$student_roll' AND `student_marks`.`subject_id`= $subject_id ORDER BY `student_marks`.`exam_date` DESC";
  $select_subject_mark = mysqli_query($connection,$query_subject_mark);
  while($subject_mark = mysqli_fetch_assoc($select_subject_mark)){
    
    // $total_marks_obtained = $subject_mark['student_marks'];
    // $total_marks = $subject_mark['total_marks'];
    // $mark_obtained = $mark_obtained + $total_marks_obtained;
    // $mark_total = $mark_total + $total_marks;
    $exam_date = $subject_mark['exam_date'];
    $chap_name = $subject_mark['chap_name'];
    $chap_number = $subject_mark['chap_number'];
    $student_mark_opt = $subject_mark['student_marks'];
    $total_marks_from = $subject_mark['total_marks'];
    
    
    
    
                  echo"<tr>";
                  echo"<td>";
                  echo" $i";
                  echo"</td>";
                  echo" <td class='project_progress'>";
                  echo"  <a>";
                  echo"   <b>$chap_name</b>";
                  echo" </a>";
                  echo" <br/>";
                  echo"<small>";
                  echo" $chap_number";
                  echo"</small>";
                  echo"</td>";
                  echo"<td>";
                  echo"   <a>";
                  echo"       $exam_date";
                  echo"   </a>";
                  echo"       </td>";  
                  echo"<td>";
                  echo"   <a>";
                  echo"       <b>$student_mark_opt/$total_marks_from</b>";
                  echo"   </a>";
                  echo" </td>";
                  echo"<td class='project-state'>";
                  if($student_mark_opt == 'AB' || $student_mark_opt == 'ab'){
                    echo"<span class='badge badge-danger'>Absent</span>";
                  }else{
                    $grade = (($student_mark_opt * 100)/$total_marks_from);

                    if($grade == 100 || $grade == '100'){
                      echo"<span class='badge badge-success'>Excellent Work!</span>";
                      }elseif(($grade >= 75 || $grade >= '75') && ($grade < 100 || $grade < '100')){
                        echo"<span class='badge badge-success'>Good Work!</span>";
                      }elseif(($grade >= 60 || $grade >= '60') && ($grade < 75 || $grade < '75')){
                        echo"<span class='badge badge-warning'>Average!</span>";
                      }else{
                        echo"<span class='badge badge-danger'>Warning!</span>";
                      }
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
