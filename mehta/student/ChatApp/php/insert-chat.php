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
    if(isset($_SESSION['student_username'])){
        $outgoing_id = $_SESSION['student_username'];
        $incoming_id = mysqli_real_escape_string($connection, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($connection, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($connection, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ('$incoming_id', '$outgoing_id', '{$message}')") or die();
        }
    }else{
        header("location: ../login.php");
    }


    
?>