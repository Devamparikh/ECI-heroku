<?php
session_start();
ob_start();
if(!isset($_SESSION['student_username'])){
  header("Location: 404.php");
}else{
    echo $student_username_session = $_SESSION['student_username'];
}
?>
<?php include "../includes/db.php"; ?>
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


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta http-equiv="refresh" content="1"> -->
  <title>Home | ECI </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>

<!-- 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

  <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script> -->
  <!-- <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> -->

  <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- Google Font: Source Sans Pro -->



</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php
    include "themepart-ap/header.php"
?>


<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2196F3;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

    </style>

    
<style>
      * {
        box-sizing: border-box;
      }
      .openBtn {
        display: flex;
        justify-content: left;
      }
      .openButton {
        border: none;
        border-radius: 5px;
        background-color: #1c87c9;
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        position: fixed;
      }
      .loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .formPopup {
        display: none;
        position: fixed;
        left: 50%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 999999;
        background-color: #fff;
        width: 900;
        overflow-y: auto;
        max-height: 600px;


      }
      .formContainer {
        max-width: 1000;
        padding: 20px;
        background-color: #fff;
      }
      .formContainer input[type=text],
      .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        background-color: #8ebf42;
        color: #fff;
        cursor: pointer;
        width: 30%;
        float: right;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      }
    </style>


  <!-- /.navbar -->

  <?php
    $student_roll_id =0;
    $terms = 0;
    $form_fill = 0;
    $query ="SELECT * FROM `student` WHERE `student`.`student_roll`='$student_username_session' AND `student`.`student_accept_teams` =0";
    $result = mysqli_query($connection,$query);
    while($student_term_detail = mysqli_fetch_assoc($result)){
      echo $student_roll_id = $student_term_detail['student_roll'];
    }
    if ($student_username_session === $student_roll_id) {

      ?>
      <script type='text/javascript'>
          // echo"$(window).on('load', function() {";
          //     echo"$('#myModal').modal('show');";
          // echo"});";
         function openForm() {
            document.getElementById('popupForm').style.display = 'block';
          }
          window.onload = function() {
            openForm();
          };

      </script>
<?php      
    }else{
      $terms = true;
    }
    
    ?>

  <div class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="" class="formContainer" method="POST">
          <h2>Please accept terms and conditions to continue</h2>
          <p>Rules and Regulations

Educrafters students must abide by the rules and regulations of the institute. The institute authority may take disciplinary action if any student violates the institute rules and regulations. Students are advised to adhere to the rules and Regulations of the institute and discharge their responsibilities as a student with diligence, fidelity and honor. The rules and regulations are categorized as mentioned below. Students are required to follow these rules. If at any stage after admission, it comes to our notice that vital information concerning the admission of their child has been withheld by the parents, or that they have given incorrect information, the admission of the student will be cancelled and his/her name struck off the rolls.
These Rules and Regulations in black and white format shall come into force with effect from June 1st 2018.

General Rules

• Behave with dignity and respect with everyone whom you meet inside the institute or surrounding area, especially with any person working with institute. Give respect, gain respect. 
• Do not stand or roam nearby the institute or inside, outside or exit during your schedule hours. 
• Park your vehicles at proper places suggested to you by management. In any case, institute is not responsible for any kind of issue regarding improper vehicle parking and stolen vehicle/bicycle/things.
• As soon as, you enter the institute, if you carry mobile or smart phone or any electric gadget without permission of Institute, submit it at the reception. If you are caught with it you must pay a fine of INR 500 at a time & you will never get your device back. 
• Carrying any kind of illegal material, unwelcome metal gadgets, cigarettes, alcohols, chewing gums, pan-masalas, narcotics, drugs, matchboxes or like, firecrackers, coloured powder, splash colour or any kind of spray are not at all allowed inside the campus.
• Do not make the management, to give you a uniform. Boys or girls must come in full body dress. Overly attractive, seductive or eye-catching heavy clothes are not allowed. Formal and decent dresses for both males and females are advisable. 
• Do not, harm institute premises, scratch or paint or write on any furniture or on walls or any property of others as well as on institute’s property. Never dare to touch any academic material of institute or any other property of the authority, not even board, its pen or ink like things without any authority’s permission. 
• Read every notice & listen every instruction by any faculty or non-teaching staff, carefully. 
• Avoid any kind of spitting, smoking or even throwing paper waste inside the campus. Use dustbin for throwing garbage. 
• You have no rights to harm the reputation of institute or any person connected with institute through any medium. 
• Inform the institution regarding any change in your personal, medical, academic or contact details. 

Strict Don’ts

• Committing forgery, tempting with identity card or institute records, impersonation, misusing institute’s property, documents and records, tearing of pages, defacing, burning or in any way destroying the books, journals, magazines any material of library or unauthorized photocopying or possession of library books, journals, magazines or any other material. 
• Furnishing false certificates or false information in any manner to the institute. 
• Arousing communal, caste or regional feeling or creating disharmony among students. 
• Anything which brings disrepute to institute. 
• Entry of any unauthorized person inside the premises. 
• Indulging in any acts of gambling, possessing or consuming or distributing alcohol, harmful drugs, illegal narcotics, ghutkas, tobacco, chewing gums, food packets and smoking cigarettes inside institute premises. Conduction of funding programme or sending information to press, newspapers, board-casting agencies or placement companies. 
• Misusing institute resources and interfering any security system of institute. 
• Violation of security or safety rules or any other guidelines given to you by the institute. 
• Any intimidation or insulting behaviour towards a student, staff, faculty, parent, visitor or any other person. 
• Eve-teasing or disrespectful behaviour or any kind of misbehaviour with a girl student, woman staff member or visitor. Ragging in any form. 
• By a male or female, to a male or female, sexual proposition/ advancements, sexually graphic comments of a body, unwelcome touching, pinching, patting or leering or persistent offensive or sexual jokes or vulgar comments. 
• Any other act which may be considered by the chairperson or coordinator to be an act of violation of discipline and conduct.
• Sharing of Institute’s study material, worksheets, papers, meeting passwords, videos to any other students. (If it will be found then enrolment of such students will be terminated and fees will not be refunded)

Academic Rules

• You must carry textbooks, class notebooks, worksheets or every other necessary academic material with you as per instruction of your subject faculty. Doubt solution is privilege not a right, so take prior appointment of faculty and wait. 
• During lecture or before or after never dare to do any such act which brings disrepute to you or people surrounding you. 
• Any kind of misbehaviour during lecture, use of disrespectful language with anyone, murmuring, talking continuously, showing boredom to your faculties or any act in opposition of their command, will be treated as wilful neglect of your duty and in that case be ready for suspension or dismissal from institute anytime. 
• Examinations are conducted to make you learn seriously, do not do any acts which make the authorities to take actions against you seriously. Copying, asking for any equipment, talking, passing messages in any other way are all included. 
• It’s your responsibility to ask syllabus of your exam before one week to respective faculty and if answer papers are not given to you after one week, then only ask for same. Students will not be allowed for exam/test other than exam/test timings.
• When chairperson or coordinator declares for holiday/s, is the only case you are not having lectures. There is no question of asking for a leave when you are in class 9, 10, 11 or 12. Don’t anticipate date of completion of syllabus, it isn’t certain. 

General Guidelines & Regulations

• If institute finds violation of any rule or if authorities find something wrong, complete rights of taking disciplinary actions are reserved with coordinator or chairperson. 
• Respect the decisions of coordinator or chairperson and understand that they have many responsibilities. You must have a great working relationship with them but respect the fact that their time is valuable. 
• Result of any student is completely depended on student’s interest, involvement and work. For any kind of result or performance related things in any exam, teachers and Institute are not responsible and won’t be. Because of certain reason Venue of institute, batch, subject timings, exam timings and subject teachers of student can be changed as per requirement, for a reason or need.
• All fees must be paid by the given due date without fail, if it isn’t then admission will be cancelled.
• All rights of admission or admission continuation are reserved to the chairperson.
• Every member of teaching or non-teaching staff is like another parent to you, treat them with affection and utmost respect. 
• We authorize the Institute to send SMS on our Mobile numbers given.
• We authorize the Institute to use photograph and student details for Broucher, advertisement and website purpose.
• Parents to note that concealing correct medical history may result in risks, Share genuine detail to Institution for immediate actions.
• Due to uncertain conditions institute has rights to conduct lectures in online mode or non-conductance.
•By pressing agree for this agreement, you confirm that you will abide by all above rules & regulations and promise that you will follow the same.(Students/Parents can ask for Gujarati/Hindi translation of this document, If they require)


We (Student, Parents/Guardian(s)), hereby, certify that the information given in this enrolment form is correct to the best of my knowledge and belief.
Only adults 18 years of age and older listed on a Student’s Enrollment/Medical Information/Release Form will be able to take students from the Institutes’ premises.
Relatives other than parents/legal guardians and other designated adults must be listed on the student’s Enrollment/Medical Information/Release Form in order for us to allow the student to leave the premises with those persons. In case of a last-minute change or addition, please send or call to the Institute office a signed and dated note authorizing your student’s release to the new person and including the dates for which permission is given.
Institute will not release students to anyone, under any circumstance, other than those stated above. Anyone picking up students must carry a photo ID Proof. Permission may not be left in a voice mail.

We acknowledge that participating in activities involves certain risks (some of which we may not be fully aware of) and that injuries, death or other harm could occur inadvertently to my ward or others.
We agree to indemnify and hold the Institute harmless from all losses, liabilities, damages, costs or expenses, which arise during or result from my ward’s participation in the activities.
If at any stage after admission, it comes to our notice that vital information concerning the admission of their child has been withheld by the parents, or that they have given incorrect information, the admission of the student will be cancelled and his/her name struck off the rolls.
Institute reserves the right to cancel the admission of any student if it is found that the declaration / certificate submitted at the time of admission is found to be false / improper.
We, on behalf of our ward, hereby, undertake to abide by all the notification / instructions / circulars issued by the Head of the Institute from time to time.
All disputes are subject to the jurisdiction of Rajkot Courts only.
We further declare that we shall not make any request either in the Date of Birth or the Spelling of his / her name.
Press agree to confirm the above declaration.

</p>
          <button type="submit" class="btn" name='accept' onclick="closeForm()">I Agree</button>
        </form>
      </div>
    </div>

    

      <?php
      
      if(isset($_POST['accept'])){

        $update_query = "UPDATE `student` SET `student`.`student_accept_teams` = 1 WHERE `student`.`student_roll` = '$student_username_session'";
        $update = mysqli_query($connection,$update_query);
      ?>

<script type='text/javascript'>
         function closeForm() {
            document.getElementById('popupForm').style.display = 'none';
            location.reload();
            
          }
          window.onload = function() {
            closeForm();
          };
      </script>

      <?php
      }
      // header("Location: index.php");
      ?>



<?php
    $student_roll_id =0;
    $query ="SELECT * FROM `student` WHERE `student`.`student_roll`='$student_username_session' AND `student`.`student_form_fill` =0";
    $result = mysqli_query($connection,$query);
    while($student_term_detail = mysqli_fetch_assoc($result)){
      echo $student_roll_id = $student_term_detail['student_roll'];
    }
    if ($student_username_session === $student_roll_id && $terms == true) {
      ?>
      <script type='text/javascript'>
          // echo"$(window).on('load', function() {";
          //     echo"$('#myModal').modal('show');";
          // echo"});";
         function openForm() {
            document.getElementById('popupForm1').style.display = 'block';
          }
          window.onload = function() {
            openForm();
          };

      </script>
<?php      
    }else{
      $form_fill = true;
    }
    
    ?>

  <div class="loginPopup">
      <div class="formPopup" id="popupForm1">
        <form action="" class="formContainer" method="POST">
          <h2>Please fill proper details </h2>
          
          <label for="full_name">
            <strong style="color: black;">Full Name</strong>
          </label>
          <input type="text" id="full_name" placeholder="Enter full name" name="full_name" required>

          <label for="contact_no">
            <strong style="color: black;">Contact Number</strong>
          </label>
          <input type="text" id="contact_no" placeholder="Enter contact number" name="contact_no" required>

          <label for="father_name">
            <strong style="color: black;">Father Name</strong>
          </label>
          <input type="text" id="father_name" placeholder="Enter father name" name="father_name" required>
          <label for="father_contact_no">
            <strong style="color: black;">Father Contact Number</strong>
          </label>
          <input type="text" id="father_contact_no" placeholder="Enter father contact number" name="father_contact_no" required>
          <label for="father_occ">
            <strong style="color: black;">Father Occupation</strong>
          </label>
          <input type="text" id="father_occ" placeholder="Enter father occupation" name="father_occ" required>
          <label for="mother_name">
            <strong style="color: black;">Mother Name</strong>
          </label>
          <input type="text" id="mother_name" placeholder="Enter mother name" name="mother_name" required>
          <label for="mother_contact_no">
            <strong style="color: black;">Mother Contact Number</strong>
          </label>
          <input type="text" id="mother_contact_no" placeholder="Enter mother contact number" name="mother_contact_no" required>
          <label for="student_previous_std">
            <strong style="color: black;">Previous Class Number</strong>
          </label>
          <input type="text" id="student_previous_std" placeholder="Enter previous class number" name="student_previous_std" required>
          <label for="previous_std_marks">
            <strong style="color: black;">Previous Class Result</strong>
          </label>
          <input type="text" id="previous_std_marks" placeholder="Enter previous class result" name="previous_std_marks" required>
          <label for="dob">
            <strong style="color: black;">Date Of Birth</strong>
          </label>
          <input type="date" id="dob" placeholder="Enter contact number" name="dob" required>
<br>
          <button type="submit" class="btn" name='save' onclick="closeForm()">Save</button>
        </form>
      </div>
    </div>

    

      <?php
      
      if(isset($_POST['save'])){

        $full_name = $_POST['full_name'];
        $contact_no = $_POST['contact_no'];
        $father_name = $_POST['father_name'];
        $father_contact_no = $_POST['father_contact_no'];
        $father_occ = $_POST['father_occ'];
        $mother_name = $_POST['mother_name'];
        $mother_contact_no = $_POST['mother_contact_no'];
        $student_previous_std = $_POST['student_previous_std'];
        $previous_std_marks = $_POST['previous_std_marks'];
        $dob = $_POST['dob'];


        $update_query = "UPDATE `student` SET `student_name` = '$full_name', `student_contact` = '$contact_no', `student_father_name` = '$father_name', `student_father_contact` = '$father_contact_no', `student_father_occ` = '$father_occ', `student_mother_name` = '$mother_name', `student_mother_contact` = '$mother_contact_no', `student_previous_std` = '$student_previous_std', `student_previous_std_marks` = '$previous_std_marks', `student_dob` = '$dob',`student_form_fill` = 1 WHERE `student_roll` = '$student_username_session'";
        $update = mysqli_query($connection,$update_query);
      ?>

<script type='text/javascript'>
         function closeForm() {
            document.getElementById('popupForm1').style.display = 'none';
            // window.locati
            
          }
          window.onload = function() {
            closeForm();
          };
      </script>

      <?php
      }
      // header("Location: index.php");
      ?>




<?php
                  $popup_notpresent = false;
                  $query_student_detail = "SELECT * FROM `student` WHERE `student`.`student_roll` = '$student_username_session'";
                  $select_student_detail = mysqli_query($connection,$query_student_detail);
                  while($student_detail = mysqli_fetch_assoc($select_student_detail)){
                    
                    $student_id = $student_detail['student_id'];
                    $student_name = $student_detail['student_name'];
                    $student_std = $student_detail['student_std'];
                    $student_board = $student_detail['student_board'];
                  }

                  $query_student_fee_detail = "SELECT * FROM `fee` WHERE `fee`.`student_id` = $student_id";
                  $select_student_fee_detail = mysqli_query($connection,$query_student_fee_detail);
                  while($student_fee_detail = mysqli_fetch_assoc($select_student_fee_detail)){
                    
                    $fee_destribution = $student_fee_detail['fee_destribution'];
                    $installments = $student_fee_detail['installments'];
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
                      $sql[] = '`popup`.`subject_id` LIKE '.$word.'';
                  }

                  $sql = "SELECT * FROM `popup` WHERE ((`popup`.`class_number` = '$student_std' AND `popup`.`student_roll` = 'all' AND `popup`.`board_name` = '$student_board' AND ( ".implode(" OR ", $sql) .")) OR (`popup`.`student_roll` = '$student_username_session') OR (`popup`.`class_number` = 0 AND `popup`.`subject_id` = $installments AND `popup`.`board_name` = '$fee_destribution')) AND `popup`.`publish_date` = CURRENT_DATE AND `popup`.`shown` = 0";
                  $select_popup = mysqli_query($connection,$sql);
                  // $total_attendance_row = mysqli_num_rows($select_news);
                  $k=1;
                  while ($popup = mysqli_fetch_assoc($select_popup)) {
                    $popup_msg = $popup['popup_msg'];
          $popup_id = $popup['popup_id'];
                  
                  $k++;
                  }
                  if (!(mysqli_num_rows($select_popup) > 0)) {
                    $popup_notpresent = true;
                  }elseif ($popup_notpresent == false && $terms == true && $form_fill == true) {
                    ?>

<script type='text/javascript'>
          // echo"$(window).on('load', function() {";
          //     echo"$('#myModal').modal('show');";
          // echo"});";
         function openForm() {
            document.getElementById('popupForm2').style.display = 'block';
          }
          window.onload = function() {
            openForm();
          };

      </script>


                    <?php
                  }
                  
                  ?>

<div class="loginPopup">
      <div class="formPopup" id="popupForm2">
        <form action="" class="formContainer" method="POST">
          <h2>Attention</h2>
          <p><?php if($popup_notpresent == false){ echo $popup_msg; } ?></p>
          <button type="submit" class="btn" name='gtk' onclick="closeForm()">Good to know</button>
        </form>
      </div>
    </div>



  

    

      <?php
      
      if(isset($_POST['gtk'])){

        $update_query = "UPDATE `popup` SET `popup`.`shown` = 1 WHERE `popup`.`popup_id` = $popup_id";
        $update = mysqli_query($connection,$update_query);
      ?>

<script type='text/javascript'>
         function closeForm() {
            document.getElementById('popupForm2').style.display = 'none';
            location.reload();
            
          }
          window.onload = function() {
            closeForm();
          };
      </script>

      <?php
      }
      // header("Location: index.php");
      ?>





  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4" style="overflow: hidden;">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="../images/Logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Edu Crafters Institute</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php if(isset($student_img)){echo $student_img;}else {echo '../upload/user.jpg';} ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="ChatApp/users.php" class="d-block"><?php if(isset($student_name)){echo $student_name;}else{ echo'User Name'; } ?></a>
          <div id="notify"> 

          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <i style='font-size:21px'></i>
            <!-- <button type="button" class="btn btn-primary float-center" style="width: 230px;;"><i class="fas fa-link"></i> Test Link</button> -->
            <!-- <a href="https://google.com" class="btn btn-primary"><i class="fas fa-link"></i>Go to Google</a> -->
            <?php 

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
  $sql[] = '`add_link`.`subject_id` LIKE '.$word.'';
}
$currentTime = date("H:i:s");
$sql = " SELECT * FROM `add_link` WHERE `add_link`.`class_number` = $student_std AND `add_link`.`board_name`='$student_board' AND ( ".implode(" OR ", $sql) .") AND CURRENT_TIMESTAMP BETWEEN `add_link`.`link_start` AND `add_link`.`link_close`";
$select_test_link = mysqli_query($connection,$sql);
// $total_attendance_row = mysqli_num_rows($select_news);
$k=1;
$link_url = "www.benaam.com";
while ($test_link_detail = mysqli_fetch_assoc($select_test_link)) {
  $link_url = $test_link_detail['link_url'];
  $link_desc = $test_link_detail['link_desc'];

  $k++;
}


            
            ?>
           
            <a type="button" href = "<?php if(isset($link_url)){ echo $link_url; } ?>" target="_blank" class="btn btn-primary float-center" style="width: 230px;"  ><i class="fas fa-link"></i> Test Link</a>
            </a>
          </li>

          <audio id="audioBox">
  <source src="insight-578.mp3" type="audio/mpeg"/>
  <source src="insight-578.m4r" type="audio/wav"/>
  <source src="insight-578.ogg" type="audio/ogg"/>

      </audio>
<script src="ChatApp/javascript/push.min.js"></script>
  <script src="ChatApp/javascript/serviceWorker.min.js"></script>
  <script src="ChatApp/javascript/notify.js"></script>

          <br>
          <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="results.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
              <p>
                Result / Performance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="attendance.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
              <p>
                Attendance
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="fee.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
              <p>
                Fees Details
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="work_assigned.php" class="nav-link">
              <i class="nav-icon fas fa-chart-bar" style='font-size:21px'></i>
              <p>
                Work Assigned
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tt.php" class="nav-link">
                <i class="nav-icon fas fa-edit" style='font-size:21px'></i>
              <p>
                Time Table
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reference_book.php" class="nav-link">
              <i class="nav-icon fas fa-tasks" style='font-size:20px'></i>
              <p>
                Reference Book
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="prev_ques_paper.php" class="nav-link">
            <i class="nav-icon fas fa-clipboard-check" style='font-size:23px'></i>
              <p>
                Previous Questions Papers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../login.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt" style='font-size:22px'></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="overflow: hidden;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">

        <form role="form" action="" method = "post">
<table class="table">

  <tr>
    <td>
      <div class="row" >
        <div class="col-lg-5 ">

        <img src="<?php if(isset($student_img)){echo $student_img;}else {echo '../upload/user.jpg';} ?>" style="width:200px;height:200px;margin-left:90px;margin-top:90px; border-radius: 50%;" >

        </div>



        <div class="col-lg-3" style="margin-top: 120px;">
        <?php
        
        $query = "SELECT * FROM `student` WHERE `student`.`student_roll` = '$student_username_session'";
        $result = mysqli_query($connection,$query);
        while($student_detail = mysqli_fetch_assoc($result)){
          $student_name = $student_detail['student_name'];
          $student_id = $student_detail ['student_id'];
          $student_board = $student_detail ['student_board'];
          $student_std = $student_detail ['student_std'];
          }


          

        ?>
          <h1 class="text-primary" ><?php if(isset($student_name)){echo $student_name;} ?></h1>
          <h2>Grade <?php if(isset($student_std)){echo $student_std;} ?>(<?php if(isset($student_board)){echo $student_board;} ?>)</h2>
          Unique ID: <?php echo $student_username_session; ?><br>
          Subject(s): <?php $query = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` = '$student_username_session' LIMIT 1";
          $result = mysqli_query($connection,$query);
          while($student_subject_detail = mysqli_fetch_assoc($result)){
            $subject_name = $student_subject_detail['subject_name'];
            echo $subject_name;
            }
            
            $query = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` = '$student_username_session' LIMIT 1, 25";
          $result = mysqli_query($connection,$query);
          while($student_subject_detail = mysqli_fetch_assoc($result)){
            $subject_name = $student_subject_detail['subject_name'];
            echo ", " . $subject_name;
            }
            ?><br>
        </div>
      </div>


      <div class="loaders">
      <div class="container">




        <div class="row elements_loaders_container" >

          <div class="col-lg-4 loader_col">
          <?php
          
            $select_student_query_roll = "SELECT * FROM `student` WHERE `student`.`student_roll` = '$student_username_session' ";
            $select_student_roll = mysqli_query($connection,$select_student_query_roll);
            while($student = mysqli_fetch_assoc($select_student_roll)){
              
              $student_id = $student['student_id'];
              $student_name = $student['student_name'];
              $student_roll = $student['student_roll'];
              $mark_obtained = 0;
              $mark_total = 0;
          
              $select_student_mark_query = "SELECT * FROM `student_marks` WHERE `student_marks`.`student_roll` LIKE '$student_username_session'";
              $select_marks = mysqli_query($connection,$select_student_mark_query);
              while($marks = mysqli_fetch_assoc($select_marks)){
                if(($marks['student_marks']) == 'AB' || ($marks['student_marks']) == 'ab'){
          
                }else{
                $total_marks_obtained = $marks['student_marks'];
                $total_marks = $marks['total_marks'];
                $mark_obtained = $mark_obtained + $total_marks_obtained;
                $mark_total = $mark_total + $total_marks;
                }
              }
          
              $percentage = (($mark_obtained * 100)/$mark_total);
              $percentage = ceil($percentage);
              $CGPA = ($percentage/100);
             
          }
          
          
          
          ?>
            <!-- Loader -->
            <div class="loader" data-perc="<?php echo $CGPA;?>"></div>
            <div class="loader_text text-center">Overall Performance</div>
            <div class="loader_sub text-center"></div>
            <span></span>
          </div>
          <div class="col-lg-4 loader_col">
            <!-- Loader -->
            <?php
          
          $select_student_mark_roll = "SELECT * FROM `student_marks` WHERE `student_marks`.`student_roll` = '$student_username_session' ";
          $select_student_mark = mysqli_query($connection,$select_student_mark_roll);
          while($student_marks = mysqli_fetch_assoc($select_student_mark)){
            if(($student_marks['student_marks']) == 'AB' || ($student_marks['student_marks']) == 'ab'){
          $last_test = 0;
          $msg = "Absent";
            }else{
            $student_marks_ob = $student_marks['student_marks'];
            $subject_id = $student_marks['subject_id'];
            $total_marks = $student_marks['total_marks'];
            $last_test_mark = (($student_marks_ob * 100)/$total_marks);
            $last_test_mark = ceil($last_test_mark);
            $last_test = ($last_test_mark/100);

            // $last_test = ($student_marks_ob/100);  

        }
      }
        
        
        
        ?>
            <div class="loader" data-perc="<?php echo $last_test;?>"></div>
            <div class="loader_text text-center">Recent Test Performance<?php if($last_test == 0){echo ": " . $msg;}?> </div>
            <div class="loader_sub text-center"></div>
          </div>
          <div class="col-lg-3 " style="margin-top: -85px; margin-left: -80px; !important;">



<?php   

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

$sql = "SELECT * FROM `attendance_entry` WHERE `attendance_entry`.`student_std` = '$student_std' AND `attendance_entry`.`student_board` = '$student_board' AND ( ".implode(" OR ", $sql) .")";
$select_attendance = mysqli_query($connection,$sql);
$total_attendance_row = mysqli_num_rows($select_attendance);
while ($total_attendance = mysqli_fetch_assoc($select_attendance)) {
  $attendance_entry_id = $total_attendance['attendance_entry_id'];
}
$attendance_total_present = "SELECT * FROM `attendance` WHERE `attendance`.`student_roll` = '$student_username_session' AND `attendance`.`present` = '1'";
$select_present = mysqli_query($connection,$attendance_total_present);
$total_present_row = mysqli_num_rows($select_present);
while ($total_present = mysqli_fetch_assoc($select_present)) {
  $attendance_id  = $total_present['attendance_id'];
}
$attendance_total_late = "SELECT * FROM `attendance` WHERE `attendance`.`student_roll` = '$student_username_session' AND `attendance`.`late` = '1'";
$select_late = mysqli_query($connection,$attendance_total_late);
$total_late_row = mysqli_num_rows($select_late);
while ($total_late = mysqli_fetch_assoc($select_late)) {
  $attendance_id  = $total_late['attendance_id'];
}
$attendance_total_absent = $total_attendance_row - $total_present_row;  
?>
            <div id="piechart" ></div>

            <script type="text/javascript">
              // Load google charts
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);

              // Draw the chart and set the chart values
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Attendance', 'Till Date'],
                  ['Present', <?php echo $total_present_row; ?>],
                  ['Absent', <?php echo $attendance_total_absent; ?>],
                  ['Late', <?php echo $total_late_row; ?>]
                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {'title':'Attendance', 'width':550, 'height':400};

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
              }
            </script>
          </div>
        </div>

      </div>
        </div>
    </div>
    <div class="col-md-5" style="padding-bottom: 100px;padding-top: 100px;">
          <div class="card" >
            <div class="card-header" style="background-color: #7e9a9a" >
              <h3 class="card-title" style="color: black" >News</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                  <?php
                  
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
                      $sql[] = '`news_for_student`.`subject_id` LIKE '.$word.'';
                  }

                  $sql = "SELECT * FROM `news_for_student` WHERE ((`news_for_student`.`class_number` = '$student_std' AND `news_for_student`.`student_roll` = 'all' AND `news_for_student`.`board_name` = '$student_board' AND ( ".implode(" OR ", $sql) .")) OR `news_for_student`.`student_roll` = '$student_username_session') AND `news_for_student`.`publish_date` >= CURRENT_DATE";
                  $select_news = mysqli_query($connection,$sql);
                  // $total_attendance_row = mysqli_num_rows($select_news);
                  $k=1;
                  while ($news = mysqli_fetch_assoc($select_news)) {
                    $assignment = $news['assignment'];
                  
                  echo "<li data-target='#carouselExampleIndicators' data-slide-to='$k'></li>";
                  $k++;
                  }

                  if ($student_dob == date("Y-m-d") ) {
                  echo "<li data-target='#carouselExampleIndicators' data-slide-to='7'></li>";
                  }
                  
                  ?>

                  <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li> -->
                  <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                </ol>
                <div class="carousel-inner" style="height:250px;">
                  <div class="carousel-item active">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                  </p>
                  </div>

                  <?php
                  
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
                      $sql[] = '`news_for_student`.`subject_id` LIKE '.$word.'';
                  }

                  $sql = "SELECT * FROM `news_for_student` WHERE ((`news_for_student`.`class_number` = '$student_std' AND `news_for_student`.`student_roll` = 'all' AND `news_for_student`.`board_name` = '$student_board' AND ( ".implode(" OR ", $sql) .")) OR `news_for_student`.`student_roll` = '$student_username_session') AND `news_for_student`.`publish_date` >= CURRENT_DATE";
                  $select_news = mysqli_query($connection,$sql);
                  // $total_attendance_row = mysqli_num_rows($select_news);
                  while ($news = mysqli_fetch_assoc($select_news)) {
                    $assignment = $news['assignment'];
                  
                    echo "<div class='carousel-item'>";
                    echo"<p>$assignment</p>";
                    echo "</div>";
                  }


                  if ($student_dob == date("Y-m-d") ) {
                    echo "<div class='carousel-item'>";
                    echo"<p><h1> Happy Birthday</h1></p>";
                    echo "</div>";
                    }
                  
                  ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-custom-icon" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                  <span class="sr-only">Next</span>
                </a>

              </div>

            </div>
            <div class="card-footer clearfix"  >
            * For any queries regarding newslaters, please contact institue.
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        <div class="col-lg-6"style="position: absolute;bottom: 700px;width: 100%;left: 600px;">


          <!-- textarea -->




          <!-- <script>

function reject_salary(id){
  var ans = prompt('Please write your grievance.');
  if( ans !== null){
window.location.assign('salary_insights_manage.php?reject='+id+'&grievance='+ans)
  }
}

</script> -->
<script>
      function openTodo() {
        document.getElementById("todoForm").style.display = "block";
        // document.getElementById("id").value = id;
      }
      function closeTodo() {
        document.getElementById("todoForm").style.display = "none";
      }
    </script>

<script>
      function openEditTodo(data) {
        console.log(data);
        var data = data.split(",");
        console.log(data[1]);
        document.getElementById("todoEditForm").style.display = "block";
        document.getElementById("editTodoId").value = data[0];
        document.getElementById("editTaskName").value = data[1];
        document.getElementById("editTimeForTask").value = data[2];
      }
      function closeEditTodo() {
        document.getElementById("todoEditForm").style.display = "none";
      }
    </script>


<div class="loginPopup">
      <div class="formPopup" id="todoForm">
        <form action="" class="formContainer">
          <h2>Please Enter Task Details</h2>
          <!-- <input type="hidden" id="id" name="id" value=""> -->
          
          <label for="taskName">
            <strong>Task name:</strong>
          </label>
          <input type="text" id="taskName" placeholder="Enter task" name="taskName" required>

          <label for="timeForTask">
            <strong>Approx time to complete task:</strong>
          </label>
          <input type="text" id="timeForTask" placeholder="Enter time in mins or hours.." name="timeForTask" required>

          <button type="submit" name="todoSubmit" onclick="addtodo()" class="btn">Add</button>
          <button type="button" class="btn cancel" onclick="closeTodo()">Close</button>
        </form>
      </div>
    </div>


    <div class="loginPopup">
      <div class="formPopup" id="todoEditForm">
        <form action="" class="formContainer" method="post">
          <h2>Please Enter Task Details</h2>
          <input type="hidden" id="editTodoId" name="editTodoId" value="">
          
          <label for="taskName">
            <strong>Task name:</strong>
          </label>
          <input type="text" id="editTaskName" placeholder="Enter task" name="editTaskName" value="" required>

          <label for="timeForTask">
            <strong>Approx time to complete task:</strong>
          </label>
          <input type="text" id="editTimeForTask" placeholder="Enter time in mins or hours.." value="" name="editTimeForTask" required>

          <button type="button" name="editTodoSubmit" onclick="updateEditTodo()" class="btn">Update</button>
          <button type="button" class="btn cancel" onclick="closeEditTodo()">Close</button>
        </form>
      </div>
    </div>


<script>


function showTodo(){
  var showTodo = "showTodo";


  $.ajax({
    url: "todo.php",
    type: "post",
    data: {showTodo : showTodo
    },
    success: function(data,status){
      $('#todoList').html(data);
      // $('#todoSort').sortable({
      //   animation: 350,
      //   update: function(event, ui){
      //     console.log($(this));
      //   }
      // });

      const dragArea = document.querySelector("#todoSort")
      new Sortable(dragArea, {
        animation: 350,
        onUpdate: function(evt){

          $('#todoList ul').each(function(){
            $(this).find('li').each(function(index){
              if($(this).attr('data-position') != (index+1)){
                $(this).attr('data-position', (index+1)).addClass('updated');
              }
            });
          });
          savePositionInTodo();
        }
      });
    }
  });
}



$(document).ready(function(){
  showTodo();
});



function savePositionInTodo(){

var positionsArray = [];
$('.updated').each(function (){
  positionsArray.push([$(this).attr('data-id'), $(this).attr('data-position')]);
  $(this).removeClass('updated');
});


$.ajax({
  url: "todo.php",
  type: "post",
  data: {positionsArray : positionsArray
  },
  success:function(data,status){
    showTodo();
  }
});

}





function editTodo(id){

  var todoEditId = id;


  $.ajax({
    url: "todo.php",
    type: "post",
    data: {todoEditId : todoEditId
    },
    success:function(data,status){
      console.log(data);
      openEditTodo(data);
    }
  });

}


function deleteTodo(id){

var todoDeleteId = id;


$.ajax({
  url: "todo.php",
  type: "post",
  data: {todoDeleteId : todoDeleteId
  },
  success:function(data,status){
    showTodo();
  }
});

}



function checkboxToggle(id){
  // var taskName = $('#taskName').val();
  // var timeForTask = $('#timeForTask').val();

  var todoId = id;


  $.ajax({
    url: "todo.php",
    type: "post",
    data: {todoId : todoId
    },
    success:function(data,status){
      showTodo();
    }
  });

}



function addtodo(){
  var taskName = $('#taskName').val();
  var timeForTask = $('#timeForTask').val();


  $.ajax({
    url: "todo.php",
    type: "post",
    data: {taskName : taskName,
      timeForTask : timeForTask,
    },
    success:function(data,status){
      showTodo();
    }
  });

}


function updateEditTodo(){

  var editTodoId = $('#editTodoId').val();
  var editTaskName = $('#editTaskName').val();
  var editTimeForTask = $('#editTimeForTask').val();

  document.getElementById("todoEditForm").style.display = "none";

  $.ajax({
    url: "todo.php",
    type: "post",
    data: {editTodoId : editTodoId,
      editTaskName : editTaskName,
      editTimeForTask : editTimeForTask,
    },
    success:function(data,status){
      showTodo();
    }
  });

}

// $(document).ready(function(){
//   $('#todoSort').sortable();
// });


</script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script> -->

<!-- <script src="//code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js" ></script>


<?php 

      // if (isset($_POST['todoSubmit'])) {
      //   $taskName = $_POST['taskName'];
      //   $timeForTask = $_POST['timeForTask'];
      //   $todo_username = $student_username_session;
        

      //   $addTodo = "INSERT INTO `todo` (`todo_id`, `todo_username`, `todo_task`, `todo_task_time`, `todo_position`, `todo_task_complete`) VALUES (NULL, '$todo_username', '$taskName', '$timeForTask', 0, 0)";
      //   $todoQuery = mysqli_query($connection,$addTodo);

        


      // }

?>





          <!-- TO DO List -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                To Do List
              </h3>

              <div class="card-tools">
                <!-- <ul class="pagination pagination-sm">
                  <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                  <li class="page-item"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                </ul> -->
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body" id="todoList">
              
            </div>

            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <button onclick="openTodo()" type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
            </div>
          </div>
        </div>

<?php

$query_subject = "SELECT * FROM `student_opt_subject` WHERE `student_opt_subject`.`student_roll` =  '$student_username_session' ";
$select_subject_detail = mysqli_query($connection,$query_subject);
$total_subject_row = mysqli_num_rows($select_subject_detail);
$j=0;
while($subject_detail = mysqli_fetch_assoc($select_subject_detail)){
  $subject_id = $subject_detail['subject_id'];
  $subject_name = $subject_detail['subject_name'];
  if($total_subject_row !== 0 && $j < $total_subject_row){
    $subject_id_array[$j] = $subject_id;
    $subject_name_array[$j] = $subject_name;
  }
  $j++;  
}

// for ($a=0; $a < $total_subject_row; $a++) {
$query_marks = "SELECT * FROM `student_marks` WHERE `student_marks`.`student_roll` = '$student_username_session' ORDER BY `exam_date` ASC";
$select_marks = mysqli_query($connection,$query_marks);
$k=0;
while ($marks_detail = mysqli_fetch_assoc($select_marks)) {
  $student_marks_id = $marks_detail['student_marks_id'];
  $exam_date = $marks_detail['exam_date'];
  $time=strtotime($exam_date);
  $month2=date("F",$time);
  $month_array[$k] = date("F",$time);
  $k++;
}

$unique_month_array = array_values(array_unique($month_array));

?>

<div class="card-header" style="background-color: #7e9a9a" >
        <h3 class="card-title" style="color: black" >Monthwise Performance</h3>
      </div>
      <br>
      <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Month' <?php
              for ($a=0; $a < $total_subject_row; $a++) { 
                echo ", '".$subject_name_array[$a]."'";
              }              
              ?>]<?php
              for ($d=0; $d < count($unique_month_array); $d++) { 
                echo ", ['$unique_month_array[$d]'";
                for ($e=0; $e < count($subject_id_array); $e++) { 
                  $query_marks_by_month = "SELECT * FROM `student_marks` WHERE monthname(exam_date)='$unique_month_array[$d]' AND `subject_id` = $subject_id_array[$e] AND `student_marks`.`student_roll` = '$student_username_session'";
                  $select_marks_by_month = mysqli_query($connection,$query_marks_by_month);
                  $mark_obtained=0;
                $mark_total=0;
                $percentage=0;
                $CGPA = 0;
                  while ($marks_detail_by_month = mysqli_fetch_assoc($select_marks_by_month)) {
                    $total_marks = $marks_detail_by_month['total_marks'];
                    $student_marks = $marks_detail_by_month['student_marks'];
                    if(($marks_detail_by_month['student_marks']) == 'AB' || ($marks_detail_by_month['student_marks']) == 'ab'){
              
                    }else{
                    $total_marks_obtained = $marks_detail_by_month['student_marks'];
                    $total_marks = $marks_detail_by_month['total_marks'];
                    $mark_obtained = $mark_obtained + $total_marks_obtained;
                    $mark_total = $mark_total + $total_marks;
                    }
                  }
                  if($mark_total == 0){
                    $percentage = 0;
                  }else {
                  $percentage = (($mark_obtained * 100)/$mark_total);
                  }
                  $percentage = ceil($percentage);
                  $CGPA = ($percentage/10);
                  echo ", $CGPA";
                }  
                echo "]";
              }
              ?>
          ]);

          var options = {
            chart: {
              title: 'Company Performance',
              subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            },
            bars: 'horizontal' // Required for Material Bar Charts.
          };

          var chart = new google.charts.Bar(document.getElementById('barchart_material'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
        }
      </script>
      <div id="barchart_material" style="width: 900px; height: 500px;"></div>

      <!-- /.content -->
        </div>      <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- /.row -->
<!-- END ACCORDION & CAROUSEL-->




<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="styles/bootstrap4/popper.js"></script>
        <script src="styles/bootstrap4/bootstrap.min.js"></script>
        <script src="plugins/greensock/TweenMax.min.js"></script>
        <script src="plugins/greensock/TimelineMax.min.js"></script>
        <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="plugins/greensock/animation.gsap.min.js"></script>
        <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="plugins/progressbar/progressbar.min.js"></script>
        <script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="js/elements_custom.js"></script>

        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE App -->
        <script src="js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/demo.js"></script>
        
  

        <!-- Page specific script -->
     </body>
</html>
