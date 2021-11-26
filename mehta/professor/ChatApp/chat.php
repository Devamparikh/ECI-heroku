<?php
session_start();
ob_start();
if(!isset($_SESSION['professor_username'])){
  header("Location: 404.php");
}else{
    echo $professor_username = $_SESSION['professor_username'];
}
?>
<?php include "../../includes/db.php"; ?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $student_id = mysqli_real_escape_string($connection, $_GET['student_id']);
          $sql = mysqli_query($connection, "SELECT * FROM student WHERE student_roll = '$student_id'");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="../../student/<?php echo $row['student_img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['student_name']; ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $student_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
