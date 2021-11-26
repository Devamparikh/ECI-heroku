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
    if(isset($_SESSION['professor_username'])){
        $outgoing_id = $_SESSION['professor_username'];
        $incoming_id = mysqli_real_escape_string($connection, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN student ON student.student_roll = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = '$outgoing_id' AND incoming_msg_id = '$incoming_id')
                OR (outgoing_msg_id = '$incoming_id' AND incoming_msg_id = '$outgoing_id') ORDER BY msg_id";
        $query = mysqli_query($connection, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="../../student/'.$row['student_img'].'" alt="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
            }

            
            $sql1 = "UPDATE `messages` SET `seen` = '1' WHERE `messages`.`incoming_msg_id` = '$outgoing_id' AND `messages`.`outgoing_msg_id` = '$incoming_id' AND `messages`.`seen` = 0";
            $query1 = mysqli_query($connection, $sql1);


        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>