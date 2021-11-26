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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php 
    include "themepart-ap/header.php"
?>


<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }
    </style>


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
            <a href="#" class="nav-link active">
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
            <h1>Attendance</h1>
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
    <th>Subject</th>
  </tr>
  <tr>
    <td>
      <select class="form-control select2" name="class" style="width: 100%;">
      <?php
        $query = "SELECT * FROM class";
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
        $query = "SELECT * FROM board";
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
<button type="submit" name="show_list" class="btn btn-info float-right">-></button>
    </td>
  </tr>
</table>
</form>

<?php
if(isset($_POST['proceed'])){
 $class_number = $_POST['class_number'];
 $board_name = $_POST['board_name'];
 $subject_id = $_POST['subject_id'];
 $date = $_POST['date'];
 $total_row = $_POST['total_row'];
 $attendance_query = "INSERT INTO `attendance_entry` (`attendance_date`,`attendance_time`,`student_std`,`student_board`,`student_subject`) VALUES ('$date',now(),'$class_number','$board_name','$subject_id')";
 $insert_attendance_entry = mysqli_query($connection,$attendance_query);
 $last_insert_id = mysqli_insert_id($connection); 
 if(!empty($_POST['present'] )){
    $present_student_name = $_POST['present'];
    for ($j=0; $j<$total_row; $j++) { 
        for ($k=0; $k<$total_row; $k++) {
            if(!empty($_POST['late'])){
                $late_student_name = $_POST['late'];
                if(!empty($present_student_name[$j]) && !empty($late_student_name[$k]) && ($present_student_name[$j] == $late_student_name[$k])){
                    $late = 1;
                    $select_student_query = "SELECT * FROM `student` WHERE `student_roll` = '$present_student_name[$j]'";
        $select_student_name = mysqli_query($connection,$select_student_query);
        while($student = mysqli_fetch_assoc($select_student_name)){
          $student_name = $student['student_name'];
        }

        $attendance_entry = "INSERT INTO `attendance` (`attendance_entry_id`,`attendance_date`,`attendance_time`,`student_roll`,`student_name`,`student_std`,`student_board`,`student_subject`,`present`,`late`) VALUES ($last_insert_id,'$date',now(),'$present_student_name[$j]','$student_name',$class_number,'$board_name','$subject_id','1',$late)";
        $insert_attendance_data = mysqli_query($connection,$attendance_entry);
                }else if(!empty($present_student_name[$j]) && !empty($late_student_name[$k]) && ($present_student_name[$j] !== $late_student_name[$k])){
                    $late = 0;
                    $select_student_query = "SELECT * FROM `student` WHERE `student_roll` = '$present_student_name[$j]'";
        $select_student_name = mysqli_query($connection,$select_student_query);
        while($student = mysqli_fetch_assoc($select_student_name)){
          $student_name = $student['student_name'];
        }

        $attendance_entry = "INSERT INTO `attendance` (`attendance_entry_id`,`attendance_date`,`attendance_time`,`student_roll`,`student_name`,`student_std`,`student_board`,`student_subject`,`present`,`late`) VALUES ($last_insert_id,'$date',now(),'$present_student_name[$j]','$student_name',$class_number,'$board_name','$subject_id','1',$late)";
        $insert_attendance_data = mysqli_query($connection,$attendance_entry);
                }else{}
            }
        }
      }
  }
}
?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
 <script type="text/javascript">
     //Near checkboxes
      $(document).ready(function(){
        $("#selectAllPresent").click(function(event){
          if(this.checked){
            $('.checkBoxes').each(function(){
              this.checked = true;
            });
          }else{
            $('.checkBoxes').each(function(){
              this.checked = false;
            });
          }
        });
      });
  </script>
<form role='form' name='present_table' action='' method = 'post'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label for="date">Date</label>
  <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">   
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                        Student Enrollment Number
                      </th>
                      <th>
                        Student Name  
                      </th>
                      <th>
                      Present <input type='checkbox' id = 'selectAllPresent' name='present' value='hello' onchange = 'checkAll()'>
                      </th>
                      <th>
                      Late
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php        
if(isset($_POST['show_list'])){
  $class_number = $_POST['class'];
  $board_name = $_POST['board'];
  $subject_id = $_POST['subject'];
  $i=0;
  $select_student_query_id = "SELECT * FROM `student_opt_subject`,`student` WHERE `student_opt_subject`.`subject_id` = '$subject_id' AND `student_opt_subject`.`student_id` = `student`.`student_id` AND `student`.`student_std` = '$class_number' AND `student`.`student_board` LIKE '$board_name'";
  $select_student_id = mysqli_query($connection,$select_student_query_id);
  while($student = mysqli_fetch_assoc($select_student_id)){
    $total_row = mysqli_num_rows($select_student_id);
    $student_name[$i] = $student['student_name'];
    $student_roll[$i] = $student['student_roll'];
    echo"<input type='hidden' name='class_number' value='$class_number'>";
    echo"<input type='hidden' name='board_name' value='$board_name'>";
    echo"<input type='hidden' name='subject_id' value='$subject_id'>";
    echo"<input type='hidden' name='total_row' value='$total_row'>";

      echo"<tr>";
                      echo"<td>";
                          echo"$student_roll[$i]";
                      echo"</td>";
                      echo"<td>";
                        echo"$student_name[$i]";
                      echo"</td>";
                      echo"<td style='text-align: center'>";
                      echo"<input type='checkbox' class='checkBoxes' id='' name='present[]' value='$student_roll[$i]'>";
                      echo"</td>";
                      echo"<td style='text-align: center'>";
                      echo"<label class='switch'>";
                        echo"<input type='checkbox' name='late[]' value='$student_name[$i]'>";
                        echo"<span class='slider round'></span>";
                      echo"</label>";
                    echo"</td>";
    echo "</tr>";
    $i++;
    }
}
?>
              </tbody>
          </table>
<button type="submit" name="proceed" class="btn btn-info float-right">Proceed</button>
</form>
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
