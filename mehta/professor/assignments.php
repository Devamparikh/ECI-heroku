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
  <title>Assignment | ECI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- Navbar -->
<?php

include 'themepart-ap/header.php';

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
            <a href="assignments.php" class="nav-link active">
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
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="width: 100%">

        <?php
        
        if(isset($_POST['submit'])){
  $file = $_FILES['file'];
          $class_number = $_POST['class'];
          $subject_id = $_POST['subject'];
          $board_name = $_POST['board'];
          $assignment = $_POST['assignment'];
          $submission_date = $_POST['submission_date'];
          $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileError = $_FILES['file']['error'];
  $fileSize = $_FILES['file']['size'];
  $fileType = $_FILES['file']['type'];
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  if($fileError === 0){
    $fileNameNew = uniqid('',true).".".$fileActualExt;
    $fileDestination = '../admin/uploads/'.$fileNameNew;
    move_uploaded_file($fileTmpName,$fileDestination);
    // header("Location: 500.php?uploadsuccess");

    $assignment_query = "INSERT INTO `assignment` (`class_number`, `subject_id`, `board_name`, `assignment`, `submission_date`,`filename`, `time_stamp`) VALUES ($class_number, $subject_id, '$board_name', '$assignment', '$submission_date','$fileNameNew', now())";
    $insert_assignment_data = mysqli_query($connection,$assignment_query);
    
  }else{
    echo "There was an error uploading your file!";
  }


          
          
        }
        
        ?>

          <!-- /.col -->
          <div class="col-md-14">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Compose New Work Assigned Message</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
    <form role="form" action="" method = "post" enctype="multipart/form-data">
                
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
                  <hr>
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="assignment">
                      <h4><u>Assignment: Heading</u></h4>
                      <p>The data of assignment that is to be assigned to students has to be entered here. You can use different features of the text editor according to you convinience.</p>
                      <ul>
                        <li>Example List item one</li>
                        <li>Example List item two</li>
                      </ul>
                      <p>Thank you,</p>
                       <p>-Team Edu Crafters Institute.</p>
                    </textarea>
                </div>
                
                  <label for="ending_time" class="btn btn-flat" style="align-items: right">Submission Date : </label>
                    <input type="date" name="submission_date">

              </div>
              <div class="card-group">
                                  <label for="" style="align-items: right; padding-right: 63px; padding-left:32px">Select File :</label><br>
                                  <input type="file" id="file" name="file" >
                                </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="submit" class="btn btn-warning" value="submit" name="submit"><i class="far fa-envelope"></i> Send</button>
                </div>
                  <!-- <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button> -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </form>
  </div>
<!-- /.content-wrapper -->

<?php

include 'themepart-ap/footer.php';

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
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>
