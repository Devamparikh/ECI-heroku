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
<select class='class form-control select2' name='student' style='width: 100%;'>

<?php

$class_number = $_POST['class_number_value'];
$board_name = $_POST['board_name_value'];
$subject_id = $_POST['subject_id_value'];

echo "<option value='all'>All students</option>";

        $query = "SELECT * FROM `student`,`student_opt_subject` WHERE `student`.`student_id` = `student_opt_subject`.`student_id` AND `student`.`student_std` = $class_number AND `student`.`student_board` LIKE '$board_name' AND `student_opt_subject`.`subject_id` = $subject_id";
        $select_student = mysqli_query($connection,$query);
        while($student = mysqli_fetch_assoc($select_student)){
        $student_id  = $student['student_id '];
        $student_roll = $student['student_roll'];
        $student_name = $student['student_name'];

        echo "<option value='$student_roll'>$student_roll - $student_name</option>";
        }
?>