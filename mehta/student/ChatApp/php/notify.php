<?php
session_start();
ob_start();
if(!isset($_SESSION['student_username'])){
  header("Location: 404.php");
}else{
    $student_username_session = $_SESSION['student_username'];
}
?>
<?php include "../../../includes/db.php"; ?>
<?php
    if (isset($_SESSION['student_username'])) {
        $sql = "SELECT * FROM `messages` LEFT JOIN professor ON professor.professor_username = messages.outgoing_msg_id WHERE `messages`.`incoming_msg_id` = '$student_username_session' AND `messages`.`notify` = 0 ORDER BY msg_id";
        $query = mysqli_query($connection, $sql);
        $data = mysqli_num_rows($query);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){

                $professor_name = $row['professor_name'];
                $outgoing_msg_id = $row['outgoing_msg_id'];
                $msg = $row['msg'];
                $msg_id = $row['msg_id'];

                $return_arr[] = array(
                    "id" => $msg_id,
                    "professor_username" => $outgoing_msg_id,
                    "professor_name" => $professor_name,
                    "msg" => $msg

                );

                $sql1 = "UPDATE `messages` SET `notify` = '1' WHERE `messages`.`msg_id` = $msg_id";
                $query1 = mysqli_query($connection, $sql1);


            }
        }

                echo json_encode($return_arr);
                exit;
    }
                ?>
<!-- 
<script>
    function updateNotify(){
        Push.create("", {
        body: "",
        icon: '../../images/logo.png',
        timeout: 4000,
        onClick: function () {
            window.focus();
            this.close();
        }
        });

        document.querySelector("#audioBox")[0].play();

    }

    updateNotify();


</script> -->


<!-- 

// -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="ChatApp/javascript/push.min.js"></script>
  <script src="ChatApp/javascript/serviceWorker.min.js"></script>