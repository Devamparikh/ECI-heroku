<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Time Table | ECI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
<?php

include 'themepart-ap/header.php'

?>
<?php include 'db.php'; ?>
<?php include 'function.php'; ?>
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-warning elevation-4">
  <!-- Brand Logo -->
  <a href="index3.php" class="brand-link">
    <img src="../images/Logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Edu Crafters Institute</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin Name</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			  <li class="nav-item">
				<a href="index.php" class="nav-link">
				<i class="nav-icon fas fa-chalkboard-teacher" style='font-size:21px'></i>
				  <p>
					Home
				  </p>
				</a>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				<i class='nav-icon far fa-calendar-check'></i>
				  <p>
					Attendance Portal
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="attendee.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Attendance</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="attendance_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Attendance Manage</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				<i class='nav-icon fas fa-users'></i>
				  <p>
					Students Portal
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="students.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Students</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="add_student.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Add Students</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				<i class='nav-icon fas fa-user-tie'></i>
				  <p>
					Professors Portal
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="add_professor.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Add Professors</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="professor_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Professor Manage</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				  <i class='nav-icon fas fa-clipboard-check'></i>
				  <p>
					Test Link
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="add-test-link.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Add Test Link</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="test_link_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Test Link Manage</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				  <i class='nav-icon far fa-edit'></i> 
				  <p>
					Assignments Portal
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="assignments.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Assignments</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="assignment_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Assignments Manage</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				<i class='nav-icon fas fa-chart-bar'></i>
				  <p>
					Results Portal
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="marks_upload.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Marks Upload</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="student_mark_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Students Marks Manage</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="results.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Results</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="students-for-results.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Students for result</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				<i class='nav-icon far fa-newspaper'></i>
				  <p>
					News Portal
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="news_for_student.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>News for students</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="popup.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Popup</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="popup_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Popup Manage</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="student_news_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Students News Manage</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				<i class='nav-icon fas fa-money-check-alt'></i>
				  <p>
					Fees Portal
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="fees.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Fees</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="fee_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Fees Manage</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="fee_popup.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Fees Popup</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="fee_popup_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Fees Popup Manage</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				<i class='nav-icon fas fa-money-check'></i>
				  <p>
					Salary Portal
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="salary_insights.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Salary Insights</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="salary_insights_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Salary Insights Manage</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				<i class='nav-icon fas fa-clipboard-list'></i>
				  <p>
					Question Papers
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="add_ques_paper.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Add Question Paper</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="question_paper_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Question Paper Manage</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
				<i class='nav-icon fas fa-book'></i>
				  <p>
					Study Material
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="upload_book.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Upload Book</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="study_material_manage.php" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Study Material Manage</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item">
				<a href="tt.php" class="nav-link">
				<i class='nav-icon fas fa-tasks'></i>
				  <p>
					Time Table
				  </p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="assignments.php" class="nav-link">
				<i class='nav-icon fas fa-cog'></i>
				  <p>
					Settings
				  </p>
				</a>
			  </li>
			  <li class="nav-item">
				<a href="login.php" class="nav-link">
				  <i class="nav-icon fas fa-sign-out-alt" style='font-size:22px'></i>
				  <p>
					Log Out
				  </p>
				</a>
			  </li>
		  </nav>
  </div>
  <!-- /.sidebar -->
</aside>

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Time Table Update</h1>
          </div>
                <!-- Main content -->
                <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <hr>
              <div class="card">
                <div class="card-header">
                  <form action="" method="post">
                    <div class="card-body" align="center">
                    <select style="align:center;" class="btn btn-warning" name="dept">
                     <option value="" disabled selected hidden >Department</option>
                     <?php select_dept();?>
                    </select>

                    <select name="sem" class="btn btn-warning">
                     <option value="" disabled selected hidden >Semester</option>
                     <?php select_sem();?>
                    </select>
                    </div>
                     <!-- /.card-header -->
                      <div>


                       <table style="text-align:center" id="example2" class="table table-bordered table-hover">
                         <thead>
                         <tr>
                           <th>TIME</th>
                           <th colspan="2">MONDAY</th>
                           <th colspan="2">TUESDAY</th>
                           <th colspan="2">WEDNESDAY</th>
                           <th colspan="2">THURSDAY</th>
                           <th colspan="2">FRIDAY</th>
                           <th colspan="2">SATURDAY</th>
                         </tr>
                         </thead>

                         <tbody>
                         <tr>
                           <th>8:00 - 8:45</th>

                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_m_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       <?php 
                                      // $query = UPDATE `5_it` SET `monday` = '' WHERE `5_it`.`slot` = 1;

                                       ?>
                                       </select>


                                       <select class="btn btn-warning" name="s1_m_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_t_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>


                                       <select class="btn btn-warning" name="s1_t_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_w_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-warning" name="s1_w_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_th_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-warning" name="s1_th_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_f_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-warning" name="s1_f_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s1_s_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-warning" name="s1_s_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>
                         </tr>


                         <tr>
                           <th>8:55 - 9:40</th>
                           <td colspan="2">
                                   <select class="btn btn-default" name="s2_m_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                   </select>

                                   <select class="btn btn-warning" name="s2_m_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                   </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s2_t_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-warning" name="s2_t_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                   <select class="btn btn-default" name="s2_w_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                   </select>

                                       <select class="btn btn-warning" name="s2_w_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s2_th_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-warning" name="s2_th_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s2_f_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-warning" name="s2_f_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s2_s_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>

                                       <select class="btn btn-warning" name="s2_s_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>
                           </td>
                         </tr>


                         <tr>
                           <tr>
                           <th>10:00 - 10:45</th>
                           <td colspan="2">
                                       <select class="btn btn-default" name='s3_m_f'>
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s3_m_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_t_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s3_t_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_w_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s3_w_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_th_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s3_th_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_f_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s3_f_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s3_s_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s3_s_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>
                         </tr>
                         <tr>
                           <th>10:55 - 11:40</th>
                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_m_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s4_m_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_t_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s4_t_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_w_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s4_w_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_th_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s4_th_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_f_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s4_f_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>


                           <td colspan="2">
                                       <select class="btn btn-default" name="s4_s_f">
                                       <option value="" disabled selected hidden>Faculty</option>
                                       <?php faculty();?>
                                       </select>



                                       <select class="btn btn-warning" name="s4_s_s">
                                       <option value="" disabled selected hidden >Subject</option>
                                       <?php subject();?>
                                       </select>

                           </td>
                         </tr>



                         <tr>
                           <th>12:10 - 12:55</th>

                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_m_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_m_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_t_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_t_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_w_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_w_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_th_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_th_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_f_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_f_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_s_s_d1">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-warning" name="s5_s_s_d2">
                           <option value="" disabled selected hidden >Subject</option>
                           <?php subject();?>
                           </select>

                           </div>
                           </td>
                         </tr>
                         <tr>
                           <th>12:55 - 1:40</th>
                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_m_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_m_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_t_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_t_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_w_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_w_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_th_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_th_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_f_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_f_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_s_f_d1">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>


                           <td>
                           <div class="form-group">
                           <select class="btn btn-default" name="s6_s_f_d2">
                           <option value="" disabled selected hidden >Faculty</option>
                           <?php faculty();?>
                           </select>

                           </div>
                           </td>
                           </tr>
                    </table>
                      </div>      
                    <div  class="card-body" align="center">
                        <button type="submit"  name="submit" class="btn bg-gradient-warning">Submit</button>
                    </div>
               </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               
            </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
<!-- /.content-header -->



  <!-- /.content-wrapper -->
  <?php
  
  include 'themepart-ap/footer.php'
  
  ?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ../wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
