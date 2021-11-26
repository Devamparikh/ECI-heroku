<?php
session_start();
ob_start();
if(!isset($_SESSION['professor_username'])){
  header("Location: 404.php");
}else{
    echo $professor_username = $_SESSION['professor_username'];
}
?>
<?php include "../../../includes/db.php"; ?>
<?php

    $outgoing_id = $_SESSION['professor_username'];
    $searchTerm = mysqli_real_escape_string($connection, $_POST['searchTerm']);

    $sql = "SELECT * FROM student WHERE NOT student_roll = '$outgoing_id' AND (student_name LIKE '%{$searchTerm}%' OR student_roll LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($connection, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>