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
  <title>Fees Manage | ECI</title>
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
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
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
                <a href="students-for-results.php" class="nav-link">
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
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
                <a href="#" class="nav-link active">
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
            <h1>Fees Manage</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="form-group">
    </div>
      <!-- Default box -->
      <div class="card">
      <?php
      
      if (isset($_GET['delete'])) {
        # code...
        $fee_id = $_GET['delete'];
        $delete_query = "DELETE FROM `fee` WHERE `fee_id` = $fee_id";
        $delete = mysqli_query($connection,$delete_query);
      }
      
      ?>
        <div class="card-body p-0">
        <form role="form" action="" method = "post">              

</form>
          <table class="table table-striped projects">
              <thead>
                
                  <tr>
                      <th>
                          No.
                      </th>
                      <th>
                          Student Name
                      </th>
                      <!-- <th>
                          Assignment
                      </th> -->
                      <th>
                          Date
                      </th>
                      <!-- <th>
                          Brief Information
                      </th> -->
                      
                      <th class="text-center">
                          Amount
                      </th>    
                      <th>
                          Mode
                      </th>
                      <th>
                        Referance                          
                      </th>
                      <th>
                      Fee Destribution                          
                      </th>
                      <th>
                      Installments                          
                      </th>
                      <th>
                                                 
                      </th>
                  </tr>
              </thead>
              <tbody>

              <?php
                $i=1;
$query_fee = "SELECT * FROM `fee` ORDER BY `fee_id` DESC";
$select_fee = mysqli_query($connection,$query_fee);
while ($fee_fetch = mysqli_fetch_assoc($select_fee)) {
  $fee_id  = $fee_fetch['fee_id'];
  $student_id  = $fee_fetch['student_id'];

  $query_student = "SELECT * FROM `student` WHERE `student_id` = $student_id";
  $select_student = mysqli_query($connection,$query_student);
  while ($student_fetch = mysqli_fetch_assoc($select_student)) {
  $student_name  = $student_fetch['student_name'];
  }
  
  $amount  = $fee_fetch['amount'];
  $mode  = $fee_fetch['mode'];
  $date  = $fee_fetch['date'];
  $refer  = $fee_fetch['refer'];
  $fee_destribution  = $fee_fetch['fee_destribution'];
  $installments  = $fee_fetch['installments'];

                  echo"<tr>";
                  echo"    <td>";
                  echo"     $i";
                  echo"</td>";
                  echo"<td>";
                  echo"  <a>";
                  echo"     $student_name";
                  echo"   </a>";
                  echo" </td>";
                  echo" <td>";
                  echo"     <a>";
                  echo"         $date";
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
                  echo"      $amount ";
                  echo"     </a>";
                  echo" </td>  ";
                  echo"    <td>";
                  echo"   <a>";
                  echo"       $mode";
                  echo"   </a>";
                  echo"</td>"; 
                  echo"    <td>";
                  echo"   <a>";
                  echo"       $refer";
                  echo"   </a>";
                  echo"</td>"; 
                  echo"    <td>";
                  echo"   <a>";
                  echo"       $fee_destribution";
                  echo"   </a>";
                  echo"</td>"; 
                  echo"    <td>";
                  echo"   <a>";
                  echo"       $installments";
                  echo"   </a>";
                  echo"</td>"; 
                  // echo"<td class="project_progress">";
                  // echo"   <div class="progress progress-sm">";
                  // echo"       <div class="progress-bar bg-green" role="progressbar" aria-volumenow="57" aria-volumemin="0" aria-volumemax="100" style="width: 57%">";
                  // echo"       </div>";
                  // echo"   </div>";
                  // echo"   <small>";
                  // echo"       57% Complete";
                  // echo"   </small>";
                  // echo"</td>";
                  // echo"<td>";
                  //  echo"   <span>Good Work!</span>";
                  // echo" <a>$filename</a>";
                  // echo"</td> ";
                //   echo"<td>";
                  // echo"<form action='add_student.php?edit=$student_id'>";
                  // echo" <button type='submit' class='btn btn-primary'>Edit</button>";
                  // echo"</form>";
                //   echo"<a href='add_student.php?edit=$student_id' class='btn btn-primary'>Edit</a>";
                //   echo"</td>";
                // echo"<td>";
                //   echo" <a href='assignments.php?edit=$assignment_id' class='btn btn-primary'>Edit</a>";
                //   echo"</td> ";
                  echo"<td>";
                  echo" <a href='fee_manage.php?delete=$fee_id' class='btn btn-danger'>Delete</a>";
                  echo"</td> ";
                  echo"</tr>";
                
                
                $i++;
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
