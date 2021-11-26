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
  <title>Salary Insights | ECI</title>
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
<!-- 
function  createConfirmationmbox() {  
    echo '<script type="text/javascript"> ';  
    echo ' function openulr(newurl) {';  
    echo '  if (confirm("Once aproved can not be modified!")) {';  
    echo '    document.location = newurl;';  
    echo '  }';  
    echo '}';  
    echo '</script>';  
}  
createConfirmationmbox();   -->



<?php
      
      if (isset($_GET['accept'])) {
        $salary_insights_id = $_GET['accept'];
        $accept_query = "UPDATE `salary_insights` SET `accept` = '1' WHERE `salary_insights`.`salary_insights_id` = $salary_insights_id";
        $accept = mysqli_query($connection,$accept_query);
      }

      if (isset($_GET['reject'])) {
        $salary_insights_id = $_GET['reject'];
        $grievance = $_GET['grievance'];
        $reject_query = "UPDATE `salary_insights` SET `grievance` = '$grievance', `reject` = '1' WHERE `salary_insights`.`salary_insights_id` = $salary_insights_id";
        $reject = mysqli_query($connection,$reject_query);
      }
    
      
      ?>


      <script>

        function reject_salary(id){
          var ans = prompt('Please write your grievance.');
          if( ans !== null){
    window.location.assign('salary_insights_manage.php?reject='+id+'&grievance='+ans)
          }
        }

      </script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Salary Insights</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
      <?php
      
     
      
      ?>
        <div class="card-body p-0">
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
                      <th>
                          
                      </th>
                  </tr>
              </thead>
              <tbody>

              <?php
              

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
                  echo"</td>               "; 
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
                  if($paid == 1){
                    echo"<td class='project-state'>";
                  echo"<span class='badge badge-primary' >Paid!</span>";
                  // echo" <a href='salary_insights_manage.php?accept=$salary_insights_id' onclick='return confirm(`Once aproved can not be modified!`);' class='btn btn-primary'>Approve</a>";
                  echo"</td> ";
                  }elseif($paid == 0){
                    echo"<td class='project-state'>";
                  echo"<span class='badge badge-warning'>Pending!</span>";
                  // echo" <a href='salary_insights_manage.php?accept=$salary_insights_id' onclick='return confirm(`Once aproved can not be modified!`);' class='btn btn-primary'>Approve</a>";
                  echo"</td> ";
                  }else {
                    echo"<td>";
                  echo"</td> ";
                  }
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
                if($accept == 0 && $reject == 0){
                  echo"<td>";
                  echo" <a href='salary_insights_manage.php?accept=$salary_insights_id' onclick='return confirm(`Once aproved can not be modified!`);' class='btn btn-primary'>Approve</a>";
                  echo"</td> ";
                  echo"<td>";
                  echo" <a style='color: white;' onclick='reject_salary($salary_insights_id)' class='btn btn-danger'>Reject</a>";
                  echo"</td> ";
                  echo"</tr>";
                }else{
                  echo"<td>";
                  echo"</td> ";
                  echo"<td>";
                  echo"</td> ";
                }
                
                
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
