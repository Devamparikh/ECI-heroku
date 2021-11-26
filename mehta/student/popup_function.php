<?php


function terms_conditions(){

$query = "SELECT * FROM `student` WHERE `student`.`student_roll`='$student_username_session' AND `student`.`student_accept_teams` =0";
$result = mysqli_query($connection,$query);
if (!$result) {
    
}


}