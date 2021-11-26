<?php
    while($row = mysqli_fetch_assoc($query)){

        $student_roll = $row['student_roll'];

        
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = '$student_roll' OR outgoing_msg_id = '$student_roll') AND (outgoing_msg_id = '$outgoing_id' OR incoming_msg_id = '$outgoing_id') ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($connection, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 27) ? $msg =  substr($result, 0, 27) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['student_roll']) ? $hid_me = "hide" : $hid_me = "";


        $sql3 = "SELECT * FROM messages WHERE incoming_msg_id = '$outgoing_id' AND outgoing_msg_id = '$student_roll' AND seen = 0";
        $query3 = mysqli_query($connection, $sql3);
        $total_row = mysqli_num_rows($query3);

        $output .= '<a href="chat.php?student_id='. $row['student_roll'] .'">
                    <div class="content">
                    <img src="../'. $row['student_img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['student_name'].' '.$total_row.'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>