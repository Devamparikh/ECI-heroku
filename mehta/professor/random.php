<!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <h2>Popup Form</h2>
    <p>Click on the "Open Form" button to open the popup form.</p>
<?php include "../includes/db.php"; ?>

<?php

$student_username_session = "ECI3826";
$query_student_detail = "SELECT * FROM `student` WHERE `student`.`student_roll` = '$student_username_session'";
$select_student_detail = mysqli_query($connection,$query_student_detail);
while($student_detail = mysqli_fetch_assoc($select_student_detail)){
  
  $student_id = $student_detail['student_std'];
  $student_std = $student_detail['student_std'];
  $student_board = $student_detail['student_board'];
}
$query_subject = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` =  '$student_username_session' ";
$select_subject_detail = mysqli_query($connection,$query_subject);
$total_subject_row = mysqli_num_rows($select_subject_detail);
$j=0;
while($subject_detail = mysqli_fetch_assoc($select_subject_detail)){
  $subject_id = $subject_detail['subject_id'];
  if($total_subject_row !== 0 && $j < $total_subject_row){
    $subject_array[$j] = $subject_id;
  }
  $j++;  
}
$sql = array('0'); // Stop errors when $words is empty
foreach($subject_array as $word){
    $sql[] = '`attendance_entry`.`student_subject` LIKE '.$word.'';
}

echo $sql = "SELECT * FROM `attendance_entry` WHERE `attendance_entry`.`student_std` = $student_std AND `attendance_entry`.`student_board` = '$student_board' AND ( ".implode(" OR ", $sql) .")";
$select_attendance = mysqli_query($connection,$sql);
$total_attendance_row = mysqli_num_rows($select_attendance);
while ($total_attendance = mysqli_fetch_assoc($select_attendance)) {
  $attendance_entry_id = $total_attendance['attendance_entry_id'];
}

?>
    <div class="openBtn">
      <button class="openButton" onclick="openForm()"><strong>Open Form</strong></button>
    </div>
    <div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="" class="formContainer">
          <h2>Please Log in</h2>
          <label for="email">
            <strong>E-mail</strong>
          </label>
          <input type="text" id="email" placeholder="Your Email" name="email" required>
          <label for="psw">
            <strong>Password</strong>
          </label>
          <input type="password" id="psw" placeholder="Your Password" name="psw" required>
          <button type="submit" class="btn">Log in</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
    </div>
  </body>
</html>