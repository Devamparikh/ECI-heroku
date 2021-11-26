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
  <title>Marks Upload | ECI </title>
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
          <a href="marks_upload.php" class="nav-link active">
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

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Marks Upload</h1>
          </div>
                <!-- Main content -->
                    
    <!-- /.content -->
        </div>
      </div>
    </div><!-- /.col -->
	    <section>
        <div class="container-fluid">
            <div class='row'>
                <div class='col-md-6'>
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Student's Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <form role="form" action="" method = "post">
                              <div class="card-body" width="200" height="200">
                                <section class="content">
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
                                  <label>Chapter Name</label>
                                  <input type="text" class="form-control" id="name" name="chap_name" placeholder="Enter Exam Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Chapter Number</label>
                                    <input type="text" class="form-control" id="email" name="chap_number" placeholder="Enter Exam Course">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Exam Date</label>
                                    <input type="date" class="form-control" id="email" name="exam_date" placeholder="Enter Exam Course">
                                  </div>
                                <div class="form-group">
                                  <label for="exampleInputnumbeer">Total Marks</label>
                                  <input type="number" class="form-control" id="number" name="total_marks" placeholder="Enter Total Marks">
                                </div>
                                <div class="card" align='center'>
                                    <button type="submit" class="btn btn-warning" name="show_list"><b>-></b></button>
                                </div>
                              </div>
                            </form>
                    </div>
                </div>
               
                <?php

if(isset($_POST['add_marks'])){
  $total_row = $_POST['total_row'];
  $class_number = $_POST['class_number'];
  $board_name = $_POST['board_name'];
  $subject_id = $_POST['subject_id'];
  $chap_name = $_POST['chap_name'];
  $chap_number = $_POST['chap_number'];
  $exam_date = $_POST['exam_date'];
  $total_marks = $_POST['total_marks'];

  $add_marks_query = "INSERT INTO `marks_entry` (`exam_date`, `class_number`, `board_name`, `subject_id`, `chap_name`, `chap_number`, `total_marks`) VALUES ('$exam_date', $class_number, '$board_name', $subject_id, '$chap_name', '$chap_number', '$total_marks')";
  $insert_add_student_query = mysqli_query($connection,$add_marks_query);
  echo $last_insert_id = mysqli_insert_id($connection);


  if(!empty($_POST['marks'])){
    $student_marks = $_POST['marks'];
    $student_roll = $_POST['roll'];
    $total_row;
    for($j=0; $j<$total_row; $j++){
      if(!empty($student_marks[$j])){
        // $select_student_query = "SELECT * FROM `student` WHERE `student_roll` = '$present_student_name[$j]'";
        // $select_student_name = mysqli_query($connection,$select_student_query);
        echo$student_roll[$j];
        echo$student_marks[$j];
        
        $add_student_marks = "INSERT INTO `student_marks` (`student_marks_id`, `marks_entry_id`, `exam_date`, `class_number`, `board_name`, `subject_id`, `chap_name`, `chap_number`, `total_marks`, `student_roll`, `student_marks`) VALUES (NULL, $last_insert_id, '$exam_date', $class_number, '$board_name', $subject_id, '$chap_name', '$chap_number', '$total_marks', '$student_roll[$j]', '$student_marks[$j]')";
        $insert_student_marks_query = mysqli_query($connection,$add_student_marks);

        // while($student = mysqli_fetch_assoc($select_student_name)){
          // $student_name = $student['student_name'];
        // }
        // $attendance_entry = "INSERT INTO `attendance` (`attendance_date`,`attendance_time`,`student_roll`,`student_name`,`student_std`,`student_board`,`student_subject`,`present`) VALUES ('$date',now(),'$present_student_name[$j]','$student_name',$class_number,'$board_name','$subject_id','1')";
        // $insert_attendance_data = mysqli_query($connection,$attendance_entry);
      }
    }
  }
}


?>                    
                <div class="col-md-6">
                    <!-- Main content -->
                    <div class="card">
                        <div class="card-body p-0"> 
                          <table class="table table-striped projects">
                              <thead>
                                  <tr>
                                      <th style="width: 10%">
                                          No.
                                      </th>
                                      <th style="width: 35%">
                                          Student Name
                                      </th>
                                      <th style="width: 30%" class="text-center">
                                          Marks
                                      </th>
                                  </tr>
                              </thead>
                            <form role="form" action="" method = "post">
                              <tbody>
                                <?php
                                
                                if(isset($_POST['show_list'])){
                                  $subject_id = $_POST['subject'];
                                  $class_number = $_POST['class'];
                                  $board_name = $_POST['board'];
                                  $chap_name = $_POST['chap_name'];
                                  $chap_number = $_POST['chap_number'];
                                  $exam_date = $_POST['exam_date'];
                                  $total_marks = $_POST['total_marks'];
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
  echo"<input type='hidden' name='chap_name' value='$chap_name'>";
  echo"<input type='hidden' name='chap_number' value='$chap_number'>";
  echo"<input type='hidden' name='exam_date' value='$exam_date'>";
  echo"<input type='hidden' name='total_marks' value='$total_marks'>";



  echo"<tr>";
    echo"<td>";
        echo"$student_roll[$i]";
  echo"<input type='hidden' name='roll[]' value='$student_roll[$i]'>";

    echo"</td>";
    echo"<td>";
        echo"<a>";
            echo"<b>$student_name[$i]</b>";
        echo"</a>";
        echo"<br/>";
    echo"</td>";                
    echo"<td class='project-state'>";
    echo"<input type='text' id='marks' name='marks[]' value='' required>";
    echo"</td>";        
echo"</tr>";  
  $i++;
  }
}
?>

                                  
                                  <tr>
                                    <td colspan=3>
                                    <div class="card" align="center">
                                    <button type="submit" class="btn btn-warning" name="add_marks">Add Marks</button>
                                </div>
                                    </td>                                  
                                  </tr>
</form>
 
</tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
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
