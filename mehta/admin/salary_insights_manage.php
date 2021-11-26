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
  <title>Salary Insights Manage | ECI</title>
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
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
                <a href="#" class="nav-link active">
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
            <h1>Salary Insights Manage</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <style>
      * {
        box-sizing: border-box;
      }
      .openBtn {
        display: flex;
        justify-content: left;
      }
      .openButton {
        border: none;
        border-radius: 5px;
        background-color: #1c87c9;
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        position: fixed;
      }
      .loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .formPopup {
        display: none;
        position: fixed;
        left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }
      .formContainer {
        max-width: 300px;
        padding: 20px;
        background-color: #fff;
      }
      .formContainer input[type=text],
      .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        background-color: #8ebf42;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      }
    </style>



    <!-- Main content -->
    <section class="content">
    <div class="form-group">
      <button style="text-align:left" type="submit" href="add-new-students.php" class="btn btn-primary">Add New Salary Insights</button>               
    </div>

    <script>

function reject_salary(id){
  var ans = prompt('Please write your grievance.');
  if( ans !== null){
window.location.assign('salary_insights_manage.php?reject='+id+'&grievance='+ans)
  }
}

</script>
<script>
      function openForm(id) {
        document.getElementById("popupForm").style.display = "block";
        document.getElementById("id").value = id;
      }
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script>

<div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="" class="formContainer">
          <h2>Please Enter Payment Details</h2>
          <input type="hidden" id="id" name="id" value="">
          
          <label for="paid_on">
            <strong>Paid On</strong>
          </label>
          <input type="date" id="paid_on" placeholder="Enter Date" name="paid_on" required>

          <label for="mode_of_payment">
            <strong>Mode of Payment</strong>
          </label>
          <select class="mode form-control select2" name="mode_of_payment" style="width: 100%;">
                                <option disabled selected value>select an option</option>
                                <option class="form-control select2" value='Online Transfer'>Online Transfer</option>
                                <option class="form-control select2" value='Check'>Check</option>
                                <option class="form-control select2" value='Cash'>Cash</option>
                                </select>
          <label for="refer">
            <strong>Reference / Cheque Number</strong>
          </label>
          <input type="text" id="refer" placeholder="Enter Reference number" name="refer" required>
          <button type="submit" class="btn">Submit</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
    </div>

      <!-- Default box -->
      <div class="card">
      <?php
      
      if (isset($_GET['delete'])) {
        # code...
        $salary_insights_id = $_GET['delete'];
        $delete_query = "DELETE FROM `salary_insights` WHERE `salary_insights_id` = $salary_insights_id";
        $delete = mysqli_query($connection,$delete_query);
      }
      if(isset($_GET['id'])){
        $salary_insights_id = $_GET['id'];
        $paid_on = $_GET['paid_on'];
        $mode_of_payment = $_GET['mode_of_payment'];
        $refer = $_GET['refer'];
        $update_query = "UPDATE `salary_insights` SET `paid` = '1', `paid_on` = '$paid_on', `paid_through` = '$mode_of_payment', `paid_via` = '$refer' WHERE `salary_insights`.`salary_insights_id` = $salary_insights_id";
        $update = mysqli_query($connection,$update_query);
      }
      
      ?>
        <div class="card-body p-0">
        <form role="form" action="" method = "post">              
<table class="table">
  <tr>
    <th>Professor</th>
    <th></th>
  </tr>
  <tr>
    <td>
      <select class="form-control select2" name="professor" style="width: 100%;">
      <?php
        $query = "SELECT * FROM `professor`";
        $select_professor = mysqli_query($connection,$query);
        while($professor = mysqli_fetch_assoc($select_professor)){
        $professor_id = $professor['professor_id'];
        $professor_username = $professor['professor_username'];
        $professor_name = $professor['professor_name'];
        echo "<option value='$professor_username'> $professor_username - $professor_name </option>";
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
                          Professor Name
                      </th>
                      <th>
                      Class
                      </th>
                      <th>
                      Board
                      </th>
                      <th>
                      Subject
                      </th>
                      <th>
                      From Date
                      </th>
                      <th>
                      To Date
                      </th>
                      <th>
                      Total Lecture
                      </th>
                      <th>
                      Amount <small>(per lecture)</small>
                      </th>
                      <th>
                      Total Salary
                      </th>
                      <!-- <th class="text-center">
                          File Name
                      </th> -->
                      <th>
                      Status
                      </th>

                      <th>
                          
                      </th>
                  </tr>
              </thead>
              <tbody>

              <?php
              
              if(isset($_POST['search'])){
                $professor_username = $_POST['professor'];
                $i=1;
$query_salary_table = "SELECT * FROM `salary_insights` WHERE `salary_insights`.`professor_username` LIKE '$professor_username' ORDER BY `salary_insights_id` DESC";
$select_salary = mysqli_query($connection,$query_salary_table);
while ($salary_row = mysqli_fetch_assoc($select_salary)) {
  $salary_insights_id   = $salary_row['salary_insights_id'];
  $professor_username  = $salary_row['professor_username'];
  $query_professor_name = "SELECT * FROM `professor` WHERE `professor_username` = '$professor_username'";
  $select_professor_name = mysqli_query($connection,$query_professor_name);
  while ($professor_row = mysqli_fetch_assoc($select_professor_name)) {
      $professor_name = $professor_row['professor_name'];
  }
  $class_number  = $salary_row['class_number'];
  $board_name  = $salary_row['board_name'];
  $subject_id  = $salary_row['subject_id'];
  $query_subject_name = "SELECT * FROM `subject` WHERE `subject_id` = $subject_id";
  $select_subject_name = mysqli_query($connection,$query_subject_name);
  while ($subject_row = mysqli_fetch_assoc($select_subject_name)) {
      $subject_name = $subject_row['subject_name'];
  }
  $from_date  = $salary_row['from_date'];
  $to_date  = $salary_row['to_date'];
  $lecture_no  = $salary_row['lecture_no'];
  $amount_per_lecture  = $salary_row['amount_per_lecture'];
  $total_salary  = $salary_row['total_salary'];
  $accept = $salary_row['accept'];
  $reject = $salary_row['reject'];
  $grievance = $salary_row['grievance'];
  $paid = $salary_row['paid'];



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
                  echo"     $professor_name";
                  echo"   </a>";
                  echo" </td>";
                  echo" <td>";
                  echo"     <a>";
                  echo"         $class_number th";
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
                  echo"      $board_name ";
                  echo"     </a>";
                  echo" </td>  ";
                  echo"    <td>";
                  echo"   <a>";
                  echo"       $subject_name";
                  echo"   </a>";
                  echo"</td>"; 
                  echo"    <td>";
                  echo"     $from_date";
                  echo"</td>";
                  echo"    <td>";
                  echo"     $to_date";
                  echo"</td>";
                  echo"    <td>";
                  echo"     $lecture_no";
                  echo"</td>";
                  echo"    <td>";
                  echo"     $amount_per_lecture";
                  echo"</td>";
                  echo"    <td>";
                  echo"     $total_salary";
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
                //   echo"<td>";
                  // echo"   <span class='badge badge-success'>Good Work!</span>";
                //   echo" <a>$filename</a>";
                //   echo"</td> ";
                //   echo"<td>";
                  // echo"<form action='add_student.php?edit=$student_id'>";
                  // echo" <button type='submit' class='btn btn-primary'>Edit</button>";
                  // echo"</form>";
                //   echo"<a href='add_student.php?edit=$student_id' class='btn btn-primary'>Edit</a>";
                //   echo"</td>";

                  if($paid == 1){
                  echo"<td class='project-state'>";
                  echo"<span class='badge badge-success'>Paid!</span>";
                  // echo" <a href='salary_insights_manage.php?accept=$salary_insights_id' onclick='return confirm(`Once aproved can not be modified!`);' class='btn btn-primary'>Approve</a>";
                  echo"</td> ";
                  }elseif($accept == 1){
                    echo"<td class='project-state'>";
                  echo"<span class='badge badge-primary' style='cursor: pointer;' onclick='openForm($salary_insights_id)'>Accepted!</span>";
                  // echo" <a href='salary_insights_manage.php?accept=$salary_insights_id' onclick='return confirm(`Once aproved can not be modified!`);' class='btn btn-primary'>Approve</a>";
                  echo"</td> ";
                  }elseif($reject == 1){
                    echo"<td class='project-state'>";
                  echo"<span class='badge badge-warning' style='cursor: pointer;' onclick='window.alert(`$grievance`);'>Rejected!</span>";
                  // echo" <a href='salary_insights_manage.php?accept=$salary_insights_id' onclick='return confirm(`Once aproved can not be modified!`);' class='btn btn-primary'>Approve</a>";
                  echo"</td> ";
                  }else {
                    echo"<td>";
                  echo"</td> ";
                  }

                  echo"<td>";
                  echo" <a href='salary_insights_manage.php?delete=$salary_insights_id' class='btn btn-danger'>Delete</a>";
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
