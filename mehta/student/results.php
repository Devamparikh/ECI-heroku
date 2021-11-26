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
    * {
      box-sizing: border-box;
    }

    .row {
      margin-left:-5px;
      margin-right:-5px;
    }

    .column {
      float: left;
      width: 50%;
      padding: 5px;
    }

    /* Clearfix (clear floats) */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: white;
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
            <h1>Performance/Results</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="column">
          <table>
            <tr>
              <th>Rank</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Points</th>
            </tr>

            <?php
          
          $select_student_mark_roll = "SELECT * FROM `student_marks` WHERE `student_marks`.`student_roll` = '$student_username_session' ";
          $select_student_mark = mysqli_query($connection,$select_student_mark_roll);
          while($student_marks = mysqli_fetch_assoc($select_student_mark)){
            if(($student_marks['student_marks']) == 'AB' || ($student_marks['student_marks']) == 'ab'){
          $last_test = 0;
          $msg = "Absent";
            }else{
              
            $marks_entry_id = $student_marks['marks_entry_id'];
            $student_marks_ob = $student_marks['student_marks'];
            $subject_id = $student_marks['subject_id'];
            $total_marks = $student_marks['total_marks'];
            $last_test_mark = (($student_marks_ob * 100)/$total_marks);
            $last_test_mark = ceil($last_test_mark);
            $last_test = ($last_test_mark/10);

            // $last_test = ($student_marks_ob/100);  

        }
      }



          $select_student_mark_roll = "SELECT * FROM `student_marks` WHERE `student_marks`.`marks_entry_id` = $marks_entry_id ";
          $select_student_mark = mysqli_query($connection,$select_student_mark_roll);
          while($student_marks = mysqli_fetch_assoc($select_student_mark)){
            if(($student_marks['student_marks']) == 'AB' || ($student_marks['student_marks']) == 'ab'){
          $last_test = 0;
          $msg = "Absent";
            }else{
              
            $marks_entry_id = $student_marks['marks_entry_id'];
            $student_roll = $student_marks['student_roll'];
            $student_marks_ob = $student_marks['student_marks'];
            $subject_id = $student_marks['subject_id'];
            $total_marks = $student_marks['total_marks'];
            $last_test_mark = (($student_marks_ob * 100)/$total_marks);
            $last_test_mark = ceil($last_test_mark);
            $last_test = ($last_test_mark/10);
            $lastTestArray[$student_roll] = $last_test;

            // echo $last_test . " ";
            // $last_test = ($student_marks_ob/100);
            
            

        }
      }

      
$allLastTestKeys = array_keys($lastTestArray);
// print_r($allLastTestKeys);
$allLastTestValues = array_values($lastTestArray);
// print_r($allLastTestValues);
// echo $allLastTestKeys[0]." ".$allLastTestValues[0];
rsort($allLastTestValues);
// print_r($allLastTestValues);
$uniqueLastTestValues = array_unique($allLastTestValues);
// print_r($uniqueLastTestValues);
$countLastTestValues = count($uniqueLastTestValues);
// $array = array('apple', 'orange', 'pear', 'banana', 'apple', 'pear', 'kiwi', 'kiwi', 'kiwi');

for ($i=0; $i < $countLastTestValues ; $i++) { 
$searchLastTestObject = $uniqueLastTestValues[$i];
$lastTestkeys[$i] = array_keys($lastTestArray, $searchLastTestObject);
}

// $searchLastTestObject = ;
// $lastTestkeys = array_keys($array, $searchLastTestObject);
// print_r($lastTestkeys);
$countLastTestArray = count($lastTestkeys);
for ($j=0; $j < $countLastTestArray; $j++) { 
echo"<tr>";
$l = $j + 1;
  echo"<td>$l</td>";
  echo"<td> <img src='images/medal" . $j . ".svg' alt='' style='width: 30px;'></td>";
  echo"<td>";
$countLastTestArrInArr = count($lastTestkeys[$j]);
  for ($k=0; $k < $countLastTestArrInArr; $k++) { 
  echo $lastTestkeys[$j][$k] . "<br>";
}
  echo"</td>";
  echo"<td>$uniqueLastTestValues[$j]</td>";
  echo"</tr>";

}

        
        
        
        ?>

          </table>
        </div>
        <div class="column">
          <table>
            <tr>
              <th>Rank</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Points</th>
            </tr>


            <?php

  $i = 1;

  $class_number = $student_std;
  $board_name = $student_board;
  $select_student_query_roll = "SELECT * FROM `student` WHERE `student`.`student_std` = '$class_number' AND `student`.`student_board` =  '$board_name' ";
  $select_student_roll = mysqli_query($connection,$select_student_query_roll);
  while($student = mysqli_fetch_assoc($select_student_roll)){
    
    $student_id = $student['student_id'];
    $student_name = $student['student_name'];
    $student_roll = $student['student_roll'];
    $mark_obtained = 0;
    $mark_total = 0;

    $select_student_mark_query = "SELECT * FROM `student_marks` WHERE `student_marks`.`student_roll` LIKE '$student_roll'";
    $select_marks = mysqli_query($connection,$select_student_mark_query);
    while($marks = mysqli_fetch_assoc($select_marks)){
      if(($marks['student_marks']) == 'AB' || ($marks['student_marks']) == 'ab'){

      }else{
      $total_marks_obtained = $marks['student_marks'];
      $total_marks = $marks['total_marks'];
      $mark_obtained = $mark_obtained + $total_marks_obtained;
      $mark_total = $mark_total + $total_marks;
      }
    }

    $percentage = (($mark_obtained * 100)/$mark_total);
    $percentage = ceil($percentage);
    // echo"$i";
    // echo"$student_name";
    // echo"<div class='progress-bar bg-green' role='progressbar' aria-volumenow='$percentage' aria-volumemin='0' aria-volumemax='100' style='width: $percentage%'>";
    $CGPA = ($percentage/10);
    // echo"CGPA $CGPA";
    // $marksArray = array(
    //   array("name" => $student_roll, "overall" => $CGPA),
    // );
    $marksArray[$student_name] = $CGPA;

$i++;
  }


  $allKeys = array_keys($marksArray);
// print_r($allKeys);
$allValues = array_values($marksArray);
// print_r($allValues);
// echo $allKeys[0]." ".$allValues[0];
rsort($allValues);
// print_r($allValues);
$uniqueValues = array_unique($allValues);
// print_r($uniqueValues);
$countValues = count($uniqueValues);
// $array = array('apple', 'orange', 'pear', 'banana', 'apple', 'pear', 'kiwi', 'kiwi', 'kiwi');

for ($i=0; $i < $countValues ; $i++) { 
  $searchObject = $uniqueValues[$i];
$keys[$i] = array_keys($marksArray, $searchObject);
}

// $searchObject = ;
// $keys = array_keys($array, $searchObject);
// print_r($keys);
$countArray = count($keys);
for ($j=0; $j < $countArray; $j++) { 
  echo"<tr>";
  $l = $j + 1;
    echo"<td>$l</td>";
    echo"<td> <img src='images/medal" . $j . ".svg' alt='' style='width: 30px;'></td>";
    echo"<td>";
  $countArrInArr = count($keys[$j]);
    for ($k=0; $k < $countArrInArr; $k++) { 
    echo $keys[$j][$k] . "<br>";
  }
    echo"</td>";
    echo"<td>$uniqueValues[$j]</td>";
    echo"</tr>";

}

//  arsort($marksArray);
//  print_r($marksArray);

?>



          </table>
        </div>
      </div>


      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">

          <form role="form" action="" method = "post">
            <table class="table">
              <tr>
                <th>Subjects</th>
              </tr>
              <tr >
                <td>

                  <!-- <select style="margin-left: 400px;"> -->
                  <select class="form-control select2" name="subject" style="width: 100%;">
                  <?php
                  
                  $query = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` = '$student_username_session'";
                  $result = mysqli_query($connection,$query);
                  while($student_subject_detail = mysqli_fetch_assoc($result)){
                    $subject_id = $student_subject_detail['subject_id'];
                    $subject_name = $student_subject_detail['subject_name'];
                    // echo $subject_name;
                    echo"<option value='$subject_id'>$subject_name</option>";

                  }
                  
                  ?>
                  </select>
                </td>

                <td>
                  <button type="submit" name="search" class="btn btn-info float-left" style="margin-left: 100px;">Search</button>
                </td>
              </tr>
            </table>
          </form>




                        <?php

              
if(isset($_POST['search'])){

echo"  <div class='card'>";
echo"<div class='card-body p-0'>";
echo" <table style='text-align:center' class='table table-striped projects'>";
echo"     <tr>";
echo"         <td  style='width: 40%'>";
echo"             <a>";
echo"                 <b>Current SGPA<b>";
echo"             </a>";

  $subject_id = $_POST['subject'];
    $student_roll = $student_username_session;
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



                
              <!-- php
              
              // if(isset($_POST['search'])){
              //   $subject_id = $_POST['subject'];
              //   $student_roll = $_POST['student_roll'];
                
              // }
              
              ?> -->
              <?php

              
if(isset($_POST['search'])){

echo "</tr>";
echo "      </table>";
echo "  </div>";
echo "  <div class='card-body p-0'>";
echo "    <table class='table table-striped projects'>";
      echo "        <thead>";
      echo "      <tr>";
      echo "          <th>";
                echo "          No.";
            echo"          </th>";
            echo"     <th>";
            echo"         Exam Name";
            echo"     </th>";
            echo"     <th>";
            echo"         Date";
            echo"     </th>";
            echo"     <th>";
            echo"         Marks";
            echo"     </th>";
            echo"     <th class='text-center'>";
            echo"         Status";
            echo"     </th>";
            echo" </tr>";
            echo"</thead>";
            echo"<tbody>";


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



                    echo "</tbody>";
                    echo "</table>";

                    ?>
                      
                  
              




        </div>
        <!-- /.card-body -->
      </div>



        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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
