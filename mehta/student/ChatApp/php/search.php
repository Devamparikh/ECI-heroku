<?php
session_start();
ob_start();
if(!isset($_SESSION['student_username'])){
  header("Location: 404.php");
}else{
    echo $student_username_session = $_SESSION['student_username'];
}
?>
<?php include "../../../includes/db.php"; ?>
<?php
$query_student_detail = "SELECT * FROM `student` WHERE `student`.`student_roll` = '$student_username_session'";
$select_student_detail = mysqli_query($connection,$query_student_detail);
                    $student_detail = mysqli_fetch_assoc($select_student_detail);
                    $student_id = $student_detail['student_id'];
                    $student_name = $student_detail['student_name'];
                    $student_img = $student_detail['student_img'];
?>
<?php

    $outgoing_id = $_SESSION['student_username'];
    $searchTerm = mysqli_real_escape_string($connection, $_POST['searchTerm']);

    $sql = "SELECT * FROM professor WHERE NOT professor_username = '$outgoing_id' AND (professor_name LIKE '%{$searchTerm}%' OR professor_username LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($connection, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>