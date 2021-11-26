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
  <title>Add Professor | ECI </title>
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
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i class='nav-icon fas fa-user-tie'></i>
              <p>
                Professors Portal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
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

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Professor</h1>
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
                    <!-- Main content -->
                    <div class="container-fluid">
                        <!-- general form elements -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">To Add Professor Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="" method = "post">
                            <?php
if(isset($_POST['add_professor'])){
  $class_number = $_POST['class'];
  $board_name = $_POST['board'];

  $username = $_POST['username'];
  $password = $_POST['password'];
  $professor_name = $_POST['professor_name'];
  $contactnumber =$_POST['contactnumber'];
  $counter1 = 1;
  $counter2 = 1;
  $counter3 = 1;


  if(!empty($username) && !empty($password)){

  $username = mysqli_real_escape_string($connection, $username);
  $password = mysqli_real_escape_string($connection, $password);


    if(!empty($_POST['subject']) && !empty($_POST['class']) && !empty($_POST['board'])) {
  $subject_name = $_POST['subject'];
  $class_number = $_POST['class'];
  $board_name = $_POST['board'];


      if(isset($_GET['edit'])){
      $professor_id = $_GET['edit'];
      $update_change = "UPDATE `professor` SET `professor_username` = $username,`professor_contact` = $contactnumber, `professor_pass` = '$password' WHERE `professor`.`professor_id` = $professor_id";
      $update_professor = mysqli_query($connection,$update_change);
    }else{
  $add_professor_query = "INSERT INTO `professor` (`professor_name`, `professor_username`, `professor_contact`, `professor_pass`) VALUES ('$professor_name', '$username' , $contactnumber , '$password')";
  $insert_professor_data = mysqli_query($connection,$add_professor_query);
  $last_insert_id = mysqli_insert_id($connection);
    }
//   $add_professor_query = "INSERT INTO `professor` (`professor_name`, `professor_username`, `professor_contact`, `professor_pass`) VALUES ('$username', '$professor_name' , $contactnumber , '$password')";
//   $insert_professor_data = mysqli_query($connection,$add_professor_query);
//   $last_insert_id = mysqli_insert_id($connection);


  for($i=0; $i<6; $i++){
    if(!empty($class_number[$i])){
      $select_class_query = "SELECT * FROM `class` WHERE `class_number` = '$class_number[$i]'";
        $select_class_id = mysqli_query($connection,$select_class_query);
        while($class = mysqli_fetch_assoc($select_class_id)){
        $class_id = $class['class_id'];
      }

      if(isset($_GET['edit'])){
        $professor_id = $_GET['edit'];
        if($counter1 == 1){
        //   $update_change = "UPDATE `professor` SET `professor_username` = '$username',`professor_contact` = $contactnumber, `professor_pass` = '$password' WHERE `professor`.`professor_id` = $professor_id";
        //   $update_professor = mysqli_query($connection,$update_change);
          $delete_query = "DELETE FROM `professor_given_class` WHERE `professor_given_class`.`professor_id` = $professor_id";
          $delete = mysqli_query($connection,$delete_query);
          $counter1++;
        }
        $professor_given_class_query = "INSERT INTO `professor_given_class` (`professor_id`, `professor_username`, `class_id`, `class_number`) VALUES ('$professor_id', '$username', '$class_id', '$class_number[$i]')";
        $insert_professor_given_class_data = mysqli_query($connection,$professor_given_class_query);
      }else{
      $professor_given_class_query = "INSERT INTO `professor_given_class` (`professor_id`, `professor_username`, `class_id`, `class_number`) VALUES ('$last_insert_id', '$username', '$class_id', '$class_number[$i]')";
      $insert_professor_given_class_data = mysqli_query($connection,$professor_given_class_query);
      }
    }
  }


  for($i=0; $i<11; $i++){
    if(!empty($board_name[$i])){
      $select_board_query = "SELECT * FROM `board` WHERE `board_name` = '$board_name[$i]'";
        $select_board_id = mysqli_query($connection,$select_board_query);
        while($board = mysqli_fetch_assoc($select_board_id)){
        $board_id = $board['board_id'];
      }

           if(isset($_GET['edit'])){
        $professor_id = $_GET['edit'];
        if($counter2 == 1){
        //   $update_change = "UPDATE `professor` SET `professor_username` = '$username',`professor_contact` = $contactnumber, `professor_pass` = '$password' WHERE `professor`.`professor_id` = $professor_id";
        //   $update_professor = mysqli_query($connection,$update_change);
          $delete_query = "DELETE FROM `professor_given_board` WHERE `professor_given_board`.`professor_id` = $professor_id";
          $delete = mysqli_query($connection,$delete_query);
          $counter2++;
        }
        $professor_given_board_query = "INSERT INTO `professor_given_board` (`professor_id`, `professor_username`, `board_id`, `board_name`) VALUES ('$professor_id', '$username', '$board_id', '$board_name[$i]')";
        $insert_professor_given_board_data = mysqli_query($connection,$professor_given_board_query);
      }else{
      $professor_given_board_query = "INSERT INTO `professor_given_board` (`professor_id`, `professor_username`, `board_id`, `board_name`) VALUES ('$last_insert_id', '$username', '$board_id', '$board_name[$i]')";
      $insert_professor_given_board_data = mysqli_query($connection,$professor_given_board_query);
    }
    }
  }


  for($i=0; $i<11; $i++){
    if(!empty($subject_name[$i])){
      // echo $subject_name[$i];
      $select_subject_query = "SELECT * FROM `subject` WHERE `subject_name` = '$subject_name[$i]'";
        $select_subject_id = mysqli_query($connection,$select_subject_query);
        while($subject = mysqli_fetch_assoc($select_subject_id)){
        $subject_id = $subject['subject_id'];
      }

      if(isset($_GET['edit'])){
        $professor_id = $_GET['edit'];
        if($counter3 == 1){
        //   $update_change = "UPDATE `professor` SET `professor_username` = '$username',`professor_contact` = $contactnumber, `professor_pass` = '$password' WHERE `professor`.`professor_id` = $professor_id";
        //   $update_professor = mysqli_query($connection,$update_change);
          $delete_query = "DELETE FROM `professor_given_subject` WHERE `professor_given_subject`.`professor_id` = $professor_id";
          $delete = mysqli_query($connection,$delete_query);
          $counter3++;
        }
       $professor_given_subject_query = "INSERT INTO `professor_given_subject` (`professor_id`, `professor_username`, `subject_id`, `subject_name`) VALUES ('$professor_id', '$username', '$subject_id', '$subject_name[$i]')";
      $insert_professor_given_subject_data = mysqli_query($connection,$professor_given_subject_query);
      }else{
      $professor_given_subject_query = "INSERT INTO `professor_given_subject` (`professor_id`, `professor_username`, `subject_id`, `subject_name`) VALUES ('$last_insert_id', '$username', '$subject_id', '$subject_name[$i]')";
      $insert_professor_given_subject_data = mysqli_query($connection,$professor_given_subject_query);
      }
    }
  }

  // $subject_name = implode(",",$_POST['subject']);
  // extract($subject_name);
  // echo $subject_name[0];
  }

  echo "<p class='card-body'>Professor Added: <a href='professor_manage.php'>View Professor</a></p>";

  }
  else{
    echo "<p class='card-body'>Username or Password Can't be Empty!</p>";
  }
}
?> 
<div class="card-body">
<table class="table">
  <tr>
    <th>Class</th>
    <th>Board</th>
    <th>Subject(s)</th>
  </tr>
  <tr>
    <td>
      <?php
        $query = "SELECT * FROM class";
        $select_class = mysqli_query($connection,$query);
        while($class = mysqli_fetch_assoc($select_class)){
        $class_id = $class['class_id'];
        $class_number = $class['class_number'];
        echo "<input type='checkbox' name='class[]' value='$class_number'>";
        echo "<label for='$class_number'> $class_number</label><br>";
        }
?>
    </td>
    <td>
      <?php
        $query = "SELECT * FROM board";
        $select_board = mysqli_query($connection,$query);
        while($board = mysqli_fetch_assoc($select_board)){
        $board_id = $board['board_id'];
        $board_name = $board['board_name'];
        echo "<input type='checkbox' name='board[]' value='$board_name'>";
        echo "<label for='$board_name'> $board_name</label><br>";
        }
?>
    </td>
    <td>
    <?php
        $query = "SELECT * FROM `subject`";
        $select_subject = mysqli_query($connection,$query);
        while($subject = mysqli_fetch_assoc($select_subject)){
        $subject_id = $subject['subject_id'];
        $subject_name = $subject['subject_name'];
        echo "<input type='checkbox' name='subject[]' value='$subject_name'>";
        echo "<label for='$subject_name'> $subject_name</label><br>";
        }
?>
    </td>
  </tr>
</table>


<div class="form-group">
  
</div>
  <div class="form-group">
    <label>Enroll No.</label>
    <input type="text" value= "<?php if(isset($_GET['edit'])){
      $professor_id = $_GET['edit'];
      $query_get_value = "SELECT * FROM `professor` WHERE `professor`.`professor_id`=$professor_id";
      $get_value = mysqli_query($connection,$query_get_value);
      while($value = mysqli_fetch_assoc($get_value)){
        echo $professor_username = $value['professor_username'];
      }
    } ?>" class="form-control" id="username" name="username" placeholder="Enter Enroll Number">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" class="form-control" value= "<?php if(isset($_GET['edit'])){
      $professor_id = $_GET['edit'];
      $query_get_value = "SELECT * FROM `professor` WHERE `professor`.`professor_id`=$professor_id";
      $get_value = mysqli_query($connection,$query_get_value);
      while($value = mysqli_fetch_assoc($get_value)){
        echo $professor_pass = $value['professor_pass'];
      }
    } ?>" id="password" name="password" placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label>Professor name</label>
    <input type="text" value= "<?php if(isset($_GET['edit'])){
      $professor_id = $_GET['edit'];
      $query_get_value = "SELECT * FROM `professor` WHERE `professor`.`professor_id`=$professor_id";
      $get_value = mysqli_query($connection,$query_get_value);
      while($value = mysqli_fetch_assoc($get_value)){
        echo $professor_name = $value['professor_name'];
      }
    } ?>" class="form-control" id="professor_name" name="professor_name" placeholder="Enter Professor Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Number</label>
    <input type="contactnumber" value= "<?php if(isset($_GET['edit'])){
      $professor_id = $_GET['edit'];
      $query_get_value = "SELECT * FROM `professor` WHERE `professor`.`professor_id`=$professor_id";
      $get_value = mysqli_query($connection,$query_get_value);
      while($value = mysqli_fetch_assoc($get_value)){
        echo $professor_contact = $value['professor_contact'];
      }
    } ?>" class="form-control" id="contactnumber" name="contactnumber" placeholder="Enter Contact Number">
  </div>
  
        <br>
  
  <div class="card" align='center'>
      <button type="submit" class="btn btn-warning" name="add_professor">Add Professor</button>
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


<script>

document.getElementById("username").onkeyup = function() {myFunction()};

function myFunction() {
  var x = document.getElementById("username").value;
  document.getElementById("password").value = x;
}
</script>


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
