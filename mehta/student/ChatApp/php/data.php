<?php
    while($row = mysqli_fetch_assoc($query)){

        $professor_username = $row['professor_username'];

        
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = '$professor_username' OR outgoing_msg_id = '$professor_username') AND (outgoing_msg_id = '$outgoing_id' OR incoming_msg_id = '$outgoing_id') ORDER BY msg_id DESC LIMIT 1";
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
        ($outgoing_id == $row['professor_username']) ? $hid_me = "hide" : $hid_me = "";


        $sql3 = "SELECT * FROM messages WHERE incoming_msg_id = '$outgoing_id' AND outgoing_msg_id = '$professor_username' AND seen = 0";
        $query3 = mysqli_query($connection, $sql3);
        $total_row = mysqli_num_rows($query3);
        // while($row3 = mysqli_fetch_assoc($query3)){
        // }

        $output .= '<a href="chat.php?professor_id='. $row['professor_username'] .'">
                    <div class="content">
                    <img src="../'. $row['professor_img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['professor_name'].' '.$total_row.'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>