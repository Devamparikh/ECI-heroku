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
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assignment | Scheduler</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<?php

// include 'themepart1/header.php';

?>
  <!-- /.navbar -->
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
          <img src="<?php if(isset($student_img)){echo $student_img;}else {echo '../upload/user.jpg';} ?>" class="img-circle elevation-2" alt="User Image">
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
            <h1>Assignment</h1>
          </div>


<?php



if(isset($_POST['submit'])){
  $file = $_FILES['file'];
  $assignment_id = $_POST['assignment_id'];
          $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileError = $_FILES['file']['error'];
  $fileSize = $_FILES['file']['size'];
  $fileType = $_FILES['file']['type'];
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  if($fileError === 0){
    $fileNameNew = uniqid('',true).".".$fileActualExt;
    $fileDestination = '../uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName,$fileDestination);
    // header("Location: 500.php?uploadsuccess");

    $assignment_query = "INSERT INTO `student_assignment` (`student_assignment_id`, `student_roll`, `assignment_id`, `filename`, `time_stamp`, `status`) VALUES (NULL, '$student_username_session', $assignment_id, '$fileNameNew', now(), 0)";
    $insert_assignment_data = mysqli_query($connection,$assignment_query);
    
  }else{
    echo "There was an error uploading your file!";
  }


          
          
        }



$query_subject = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` =  '$student_username_session' ";
$select_subject_detail = mysqli_query($connection,$query_subject);
$total_subject_row = mysqli_num_rows($select_subject_detail);
$j=0;
while($subject_detail = mysqli_fetch_assoc($select_subject_detail)){
  $subject_id = $subject_detail['subject_id'];
  if($total_subject_row !== 0 && $j < $total_subject_row){
    $subject_array[$j] = $subject_id;
  }
  $j++;  
}
$sql = array('0'); // Stop errors when $words is empty
foreach($subject_array as $word){
    $sql[] = '`assignment`.`subject_id` LIKE '.$word.'';
}

$sql = "SELECT * FROM `student_assignment` WHERE CURRENT_TIMESTAMP > `student_assignment`.`submission_date` AND (`student_assignment`.`status` = 0 OR `student_assignment`.`status` = 3 OR `student_assignment`.`status` = 6) AND `student_assignment`.`student_roll` = '$student_username_session' ORDER BY `student_assignment`.`status` DESC";
$select_student_assignment = mysqli_query($connection,$sql);
// $total_student_assignment_row = mysqli_num_rows($select_student_assignment);
while ($total_student_assignment = mysqli_fetch_assoc($select_student_assignment)) {
  $assignment_id  = $total_student_assignment['assignment_id'];
  $student_assignment_id = $total_student_assignment['student_assignment_id'];
  $student_roll = $total_student_assignment['student_roll'];
  $filename = $total_student_assignment['filename'];
  $status = $total_student_assignment['status'];
  $submission_date = $total_student_assignment['submission_date'];

  $sql = "SELECT * FROM `assignment` WHERE `assignment`.`assignment_id` = $assignment_id";
$select_assignment = mysqli_query($connection,$sql);
// $total_student_assignment_row = mysqli_num_rows($select_assignment);
while ($total_assignment = mysqli_fetch_assoc($select_assignment)) {
  $assignment_id  = $total_assignment['assignment_id'];
  $assignment = $total_assignment['assignment'];
  $filename = $total_assignment['filename'];
  $subject_id = $total_assignment['subject_id'];
  $submission_date = $total_assignment['submission_date'];

}

  echo"<div class='row' style='width: 110%'>";
  echo"<div class='col-md-12'>";
  echo"<div class='card'>";
  echo"<div class='card-header'>";
  echo"<h3 class='card-title'>";

  echo"<strong>";
  $query = "SELECT * FROM `subject` WHERE `subject`.`subject_id` = $subject_id";
$select_subject = mysqli_query($connection,$query);
while ($subject_detail = mysqli_fetch_assoc($select_subject)) {
  $subject_name  = $subject_detail['subject_name'];
  echo"$subject_name $status";
}

  echo"</strong>";





  echo"</h3>";


  echo"</div>";
  echo"<div class='card-body'>";
  echo" <blockquote>";

  echo"   <p>$assignment</p>";
  echo"   <strong>Submission Date: $submission_date</strong>";
  echo"   <br>";
  echo"   <a class='fas fa-cloud-download-alt' href='../admin/uploads/$filename' download=$filename style='font-size:18px; color: green;padding-right: 5px;'></a>Download";

  echo"<form action='' method = 'post' enctype='multipart/form-data'>";
  echo"<input type='hidden' id='assignment_id' name='assignment_id' value='$student_assignment_id'>";
  echo"<input type='hidden' id='status' name='status' value='3'>";
  echo"   <i class='fas fa-cloud-upload-alt' style='font-size:18px; color: ; padding-right: 5px;padding-left: 10px;'></i><input type='file' id='file' name='file' >";
  echo"<input type='submit' name='submit' value='Upload'>";
  echo"</form>";



  echo" </blockquote>";
  echo"</div>";

  echo"</div>";
  echo"</div>";
  echo"</div>";


}


$query_subject = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` =  '$student_username_session' ";
$select_subject_detail = mysqli_query($connection,$query_subject);
$total_subject_row = mysqli_num_rows($select_subject_detail);
$j=0;
while($subject_detail = mysqli_fetch_assoc($select_subject_detail)){
  $subject_id = $subject_detail['subject_id'];
  if($total_subject_row !== 0 && $j < $total_subject_row){
    $subject_array[$j] = $subject_id;
  }
  $j++;  
}
$sql = array('0'); // Stop errors when $words is empty
foreach($subject_array as $word){
    $sql[] = '`assignment`.`subject_id` LIKE '.$word.'';
}

$sql = "SELECT * FROM `student_assignment` WHERE CURRENT_TIMESTAMP BETWEEN `student_assignment`.`time_stamp` AND `student_assignment`.`submission_date` AND `student_assignment`.`status` = 0 AND `student_assignment`.`student_roll` = '$student_username_session'";
$select_student_assignment = mysqli_query($connection,$sql);
// $total_student_assignment_row = mysqli_num_rows($select_student_assignment);
while ($total_student_assignment = mysqli_fetch_assoc($select_student_assignment)) {
  $assignment_id  = $total_student_assignment['assignment_id'];
  $student_assignment_id = $total_student_assignment['student_assignment_id'];
  $student_roll = $total_student_assignment['student_roll'];
  $filename = $total_student_assignment['filename'];
  $status = $total_student_assignment['status'];
  $submission_date = $total_student_assignment['submission_date'];

  $sql = "SELECT * FROM `assignment` WHERE `assignment`.`assignment_id` = $assignment_id";
$select_assignment = mysqli_query($connection,$sql);
// $total_student_assignment_row = mysqli_num_rows($select_assignment);
while ($total_assignment = mysqli_fetch_assoc($select_assignment)) {
  $assignment_id  = $total_assignment['assignment_id'];
  $assignment = $total_assignment['assignment'];
  $filename = $total_assignment['filename'];
  $subject_id = $total_assignment['subject_id'];
  $submission_date = $total_assignment['submission_date'];

}

  echo"<div class='row' style='width: 110%'>";
  echo"<div class='col-md-12'>";
  echo"<div class='card'>";
  echo"<div class='card-header'>";
  echo"<h3 class='card-title'>";

  echo"<strong>";
  $query = "SELECT * FROM `subject` WHERE `subject`.`subject_id` = $subject_id";
$select_subject = mysqli_query($connection,$query);
while ($subject_detail = mysqli_fetch_assoc($select_subject)) {
  $subject_name  = $subject_detail['subject_name'];
  echo"$subject_name";
}

  echo"</strong>";





  echo"</h3>";


  echo"</div>";
  echo"<div class='card-body'>";
  echo" <blockquote>";

  echo"   <p>$assignment</p>";
  echo"   <strong>Submission Date: $submission_date</strong>";
  echo"   <br>";
  echo"   <a class='fas fa-cloud-download-alt' href='../admin/uploads/$filename' download=$filename style='font-size:18px; color: green;padding-right: 5px;'></a>Download";

  echo"<form action='' method = 'post' enctype='multipart/form-data'>";
  echo"<input type='hidden' id='assignment_id' name='assignment_id' value='$student_assignment_id'>";
  echo"   <i class='fas fa-cloud-upload-alt' style='font-size:18px; color: ; padding-right: 5px;padding-left: 10px;'></i><input type='file' id='file' name='file' >";
  echo"<input type='submit' name='submit' value='Upload'>";
  echo"</form>";



  echo" </blockquote>";
  echo"</div>";

  echo"</div>";
  echo"</div>";
  echo"</div>";


}


$query_subject = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` =  '$student_username_session'";
$select_subject_detail = mysqli_query($connection,$query_subject);
$total_subject_row = mysqli_num_rows($select_subject_detail);
$j=0;
while($subject_detail = mysqli_fetch_assoc($select_subject_detail)){
  $subject_id = $subject_detail['subject_id'];
  if($total_subject_row !== 0 && $j < $total_subject_row){
    $subject_array[$j] = $subject_id;
  }
  $j++;  
}
$sql = array('0'); // Stop errors when $words is empty
foreach($subject_array as $word){
    $sql[] = '`assignment`.`subject_id` LIKE '.$word.'';
}

$sql = "SELECT * FROM `student_assignment` WHERE CURRENT_TIMESTAMP > `student_assignment`.`submission_date` AND (`student_assignment`.`status` = 1 OR `student_assignment`.`status` = 4) AND `student_assignment`.`student_roll` = '$student_username_session' ORDER BY `student_assignment`.`status` DESC";
$select_student_assignment = mysqli_query($connection,$sql);
// $total_student_assignment_row = mysqli_num_rows($select_student_assignment);
while ($total_student_assignment = mysqli_fetch_assoc($select_student_assignment)) {
  $assignment_id  = $total_student_assignment['assignment_id'];
  $student_assignment_id = $total_student_assignment['student_assignment_id'];
  $student_roll = $total_student_assignment['student_roll'];
  $filename = $total_student_assignment['filename'];
  $status = $total_student_assignment['status'];
  $submission_date = $total_student_assignment['submission_date'];

  $sql = "SELECT * FROM `assignment` WHERE `assignment`.`assignment_id` = $assignment_id";
$select_assignment = mysqli_query($connection,$sql);
// $total_student_assignment_row = mysqli_num_rows($select_assignment);
while ($total_assignment = mysqli_fetch_assoc($select_assignment)) {
  $assignment_id  = $total_assignment['assignment_id'];
  $assignment = $total_assignment['assignment'];
  $filename = $total_assignment['filename'];
  $subject_id = $total_assignment['subject_id'];
  $submission_date = $total_assignment['submission_date'];

}

  echo"<div class='row' style='width: 110%'>";
  echo"<div class='col-md-12'>";
  echo"<div class='card'>";
  echo"<div class='card-header'>";
  echo"<h3 class='card-title'>";

  echo"<strong>";
  $query = "SELECT * FROM `subject` WHERE `subject`.`subject_id` = $subject_id";
$select_subject = mysqli_query($connection,$query);
while ($subject_detail = mysqli_fetch_assoc($select_subject)) {
  $subject_name  = $subject_detail['subject_name'];
  echo"$subject_name";
}

  echo"</strong>";





  echo"</h3>";


  echo"</div>";
  echo"<div class='card-body'>";
  echo" <blockquote>";

  echo"   <p>$assignment</p>";
  echo"   <strong>Submission Date: $submission_date</strong>";
  echo"   <br>";
  echo"   <a class='fas fa-cloud-download-alt' href='../admin/uploads/$filename' download=$filename style='font-size:18px; color: green;padding-right: 5px;'></a>Download";


  echo" </blockquote>";
  echo"</div>";

  echo"</div>";
  echo"</div>";
  echo"</div>";


}

$query_subject = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` =  '$student_username_session'";
$select_subject_detail = mysqli_query($connection,$query_subject);
$total_subject_row = mysqli_num_rows($select_subject_detail);
$j=0;
while($subject_detail = mysqli_fetch_assoc($select_subject_detail)){
  $subject_id = $subject_detail['subject_id'];
  if($total_subject_row !== 0 && $j < $total_subject_row){
    $subject_array[$j] = $subject_id;
  }
  $j++;  
}
$sql = array('0'); // Stop errors when $words is empty
foreach($subject_array as $word){
    $sql[] = '`assignment`.`subject_id` LIKE '.$word.'';
}

$sql = "SELECT * FROM `student_assignment` WHERE CURRENT_TIMESTAMP > `student_assignment`.`submission_date` AND (`student_assignment`.`status` = 2 OR `student_assignment`.`status` = 5) AND `student_assignment`.`student_roll` = '$student_username_session' ORDER BY `student_assignment`.`status` DESC";
$select_student_assignment = mysqli_query($connection,$sql);
// $total_student_assignment_row = mysqli_num_rows($select_student_assignment);
while ($total_student_assignment = mysqli_fetch_assoc($select_student_assignment)) {
  $assignment_id  = $total_student_assignment['assignment_id'];
  $student_assignment_id = $total_student_assignment['student_assignment_id'];
  $student_roll = $total_student_assignment['student_roll'];
  $filename = $total_student_assignment['filename'];
  $status = $total_student_assignment['status'];
  $submission_date = $total_student_assignment['submission_date'];

  $sql = "SELECT * FROM `assignment` WHERE `assignment`.`assignment_id` = $assignment_id";
$select_assignment = mysqli_query($connection,$sql);
// $total_student_assignment_row = mysqli_num_rows($select_assignment);
while ($total_assignment = mysqli_fetch_assoc($select_assignment)) {
  $assignment_id  = $total_assignment['assignment_id'];
  $assignment = $total_assignment['assignment'];
  $filename = $total_assignment['filename'];
  $subject_id = $total_assignment['subject_id'];
  $submission_date = $total_assignment['submission_date'];

}

  echo"<div class='row' style='width: 110%'>";
  echo"<div class='col-md-12'>";
  echo"<div class='card'>";
  echo"<div class='card-header'>";
  echo"<h3 class='card-title'>";

  echo"<strong>";
  $query = "SELECT * FROM `subject` WHERE `subject`.`subject_id` = $subject_id";
$select_subject = mysqli_query($connection,$query);
while ($subject_detail = mysqli_fetch_assoc($select_subject)) {
  $subject_name  = $subject_detail['subject_name'];
  echo"$subject_name";
}

  echo"</strong>";





  echo"</h3>";


  echo"</div>";
  echo"<div class='card-body'>";
  echo" <blockquote>";

  echo"   <p>$assignment</p>";
  echo"   <strong>Submission Date: $submission_date</strong>";
  echo"   <br>";
  echo"   <a class='fas fa-cloud-download-alt' href='../admin/uploads/$filename' download=$filename style='font-size:18px; color: green;padding-right: 5px;'></a>Download";


  echo" </blockquote>";
  echo"</div>";

  echo"</div>";
  echo"</div>";
  echo"</div>";


}

// $query = "";CURRENT_TIMESTAMP BETWEEN `assignment`.`time_stamp` AND `assignment`.`submission_date`
// SELECT * FROM `assignment` WHERE CURRENT_TIMESTAMP BETWEEN `assignment`.`time_stamp` AND `assignment`.`submission_date` AND `assignment`.`class_number` = $student_std AND ( ".implode(" OR ", $sql) .") AND `assignment`.`board_name` = '$student_board'
// echo date('Y-m-d\TH:i:sP');
// $query_subject = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` =  '$student_username_session' ";
// $select_subject_detail = mysqli_query($connection,$query_subject);
// $total_subject_row = mysqli_num_rows($select_subject_detail);
// $j=0;
// while($subject_detail = mysqli_fetch_assoc($select_subject_detail)){
//   $subject_id = $subject_detail['subject_id'];
//   if($total_subject_row !== 0 && $j < $total_subject_row){
//     $subject_array[$j] = $subject_id;
//   }
//   $j++;  
// }
// $sql = array('0'); // Stop errors when $words is empty
// foreach($subject_array as $word){
//     $sql[] = '`assignment`.`subject_id` LIKE '.$word.'';
// }

// $sql = "SELECT * FROM `assignment` WHERE CURRENT_TIMESTAMP BETWEEN `assignment`.`time_stamp` AND `assignment`.`submission_date` AND `assignment`.`class_number` = $student_std AND ( ".implode(" OR ", $sql) .") AND `assignment`.`board_name` = '$student_board'";
// $select_assignment = mysqli_query($connection,$sql);
// $total_assignment_row = mysqli_num_rows($select_assignment);
// while ($total_assignment = mysqli_fetch_assoc($select_assignment)) {
//   $assignment_id  = $total_assignment['assignment_id'];
//   $assignment = $total_assignment['assignment'];
//   $filename = $total_assignment['filename'];
//   $subject_id = $total_assignment['subject_id'];
//   $submission_date = $total_assignment['submission_date'];

//   echo"<div class='row' style='width: 110%'>";
//   echo"<div class='col-md-12'>";
//   echo"<div class='card'>";
//   echo"<div class='card-header'>";
//   echo"<h3 class='card-title'>";

//   echo"<strong>";
//   $query = "SELECT * FROM `subject` WHERE `subject`.`subject_id` = $subject_id";
// $select_subject = mysqli_query($connection,$query);
// while ($subject_detail = mysqli_fetch_assoc($select_subject)) {
//   $subject_name  = $subject_detail['subject_name'];
//   echo"$subject_name";
// }

//   echo"</strong>";





//   echo"</h3>";


//   echo"</div>";
//   echo"<div class='card-body'>";
//   echo" <blockquote>";

//   echo"   <p>$assignment</p>";
//   echo"   <strong>Submission Date: $submission_date</strong>";
//   echo"   <br>";
//   echo"   <a class='fas fa-cloud-download-alt' href='../admin/uploads/$filename' download=$filename style='font-size:18px; color: green;padding-right: 5px;'></a>Download";

//   echo"<form action='' method = 'post' enctype='multipart/form-data'>";
//   echo"<input type='hidden' id='assignment_id' name='assignment_id' value='$assignment_id'>";
//   echo"   <i class='fas fa-cloud-upload-alt' style='font-size:18px; color: ; padding-right: 5px;padding-left: 10px;'></i><input type='file' id='file' name='file' >";
//   echo"<input type='submit' name='submit' value='Upload'>";
//   echo"</form>";



//   echo" </blockquote>";
//   echo"</div>";

//   echo"</div>";
//   echo"</div>";
//   echo"</div>";


// }

?>

<!-- <style>
input#file {
  display: inline-block;
  width: 100%;
  padding: 0 0 0 0;
  height: 1px;
  overflow: hidden;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  /* background: url('images/Download.png') center center no-repeat #e4e4e4; */
  border-radius: 20px;
  background-size: 60px 60px;
}
</style> -->


            <div class="row" style="width: 110%">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">

                        <strong>
                          Mathematics


                        </strong>





                      </h3>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <blockquote>

                        <p>Whole Assignment content given by perticular faculty. ---> Whole Assignment content given by perticular faculty. ---> Whole Assignment content given by perticular faculty.</p>
                        <strong>Submission Date: dd/mm/yyyy</strong>
                        <br>
                        <i class='fas fa-cloud-download-alt' style='font-size:18px; color: green;padding-right: 5px;'></i>Download
                        <i class='fas fa-cloud-upload-alt' style='font-size:18px; color: ; padding-right: 5px;padding-left: 10px;'></i>Upload




                      </blockquote>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
          <!-- ./col -->
            </div>
        <!-- /.row -->



          <div class="row" style="width: 110%">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">

                    <strong>
                      Mathematics


                    </strong>





                  </h3>


                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <blockquote>

                    <p>Whole Assignment content given by perticular faculty. ---> Whole Assignment content given by perticular faculty. ---> Whole Assignment content given by perticular faculty.</p>
                    <strong>Submission Date: dd/mm/yyyy</strong>
                    <br>
                    <i class='fas fa-cloud-download-alt' style='font-size:18px; color: green;padding-right: 5px;'></i>Download
                    <i class='fas fa-cloud-upload-alt' style='font-size:18px; color: ; padding-right: 5px;padding-left: 10px;'></i>Upload




                  </blockquote>
                </div>

                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- ./col -->
          </div>
    </section>

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

// include 'themepart1/footer.php';

?>



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
