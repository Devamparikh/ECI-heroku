<?php
session_start();
ob_start();
if(!isset($_SESSION['student_username'])){
  header("Location: 404.php");
}else{
    echo $student_username_session = $_SESSION['student_username'];
}
?>
<?php include "../../includes/db.php"; ?>
<?php
$query_student_detail = "SELECT * FROM `student` WHERE `student`.`student_roll` = '$student_username_session'";
$select_student_detail = mysqli_query($connection,$query_student_detail);
                    $student_detail = mysqli_fetch_assoc($select_student_detail);

                    $student_id = $student_detail['student_id'];
                    $student_name = $student_detail['student_name'];
                    $student_contact = $student_detail['student_contact'];
                    $student_email = $student_detail['student_email'];
                    $student_father_name = $student_detail['student_father_name'];
                    $student_father_contact = $student_detail['student_father_contact'];
                    $student_father_occ = $student_detail['student_father_occ'];
                    $student_mother_name = $student_detail['student_mother_name'];
                    $student_mother_contact = $student_detail['student_mother_contact'];
                    $student_previous_std = $student_detail['student_previous_std'];
                    $student_previous_std_marks = $student_detail['student_previous_std_marks'];
                    $student_dob = $student_detail['student_dob'];
                    $student_std = $student_detail['student_std'];
                    $student_board = $student_detail['student_board'];
                    $student_accept_teams = $student_detail['student_accept_teams'];
                    $student_form_fill = $student_detail['student_form_fill'];
                    $student_img = $student_detail['student_img'];

?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($connection, "SELECT * FROM `student` WHERE `student`.`student_roll` = '$student_username_session'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="<?php if(isset($student_img)){echo "../" . $student_img;}else {echo '../upload/user.jpg';} ?>" alt="">
          <div class="details">
            <span><?php echo $row['student_name']; ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['student_roll']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
