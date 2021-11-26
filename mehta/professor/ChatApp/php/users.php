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
    $sql = "SELECT * FROM student WHERE NOT student_roll = '$outgoing_id' ORDER BY student_id DESC";
    $query = mysqli_query($connection, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>