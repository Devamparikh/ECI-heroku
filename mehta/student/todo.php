<?php
session_start();
ob_start();
if(!isset($_SESSION['student_username'])){
  header("Location: 404.php");
}else{
    $student_username_session = $_SESSION['student_username'];
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




                    extract($_POST);

                    if (isset($_POST['todoId'])) {

                        $todoId = $_POST['todoId'];

                        $queryTodo = "SELECT * FROM `todo` WHERE `todo`.`todo_id` = $todoId";
                        $selectTodo = mysqli_query($connection,$queryTodo);   

                        while ($todoRow = mysqli_fetch_assoc($selectTodo)) {

                            $todo_task_complete = $todoRow['todo_task_complete'];

                            if ($todo_task_complete == 0) {

                                $updateTodo = "UPDATE `todo` SET `todo_task_complete` = '1' WHERE `todo`.`todo_id` = $todoId;";
                                $todoQuery = mysqli_query($connection,$updateTodo);
                            
                            }else {

                                $updateTodo = "UPDATE `todo` SET `todo_task_complete` = '0' WHERE `todo`.`todo_id` = $todoId;";
                                $todoQuery = mysqli_query($connection,$updateTodo);
                            
                            }
                        
                        }

                    }



                    if (isset($_POST['todoEditId'])) {

                        $todoEditId = $_POST['todoEditId'];

                        $queryTodo = "SELECT * FROM `todo` WHERE `todo`.`todo_id` = $todoEditId";
                        $selectTodo = mysqli_query($connection,$queryTodo);   

                        while ($todoRow = mysqli_fetch_assoc($selectTodo)) {
                            
                            $todo_task = $todoRow['todo_task'];
                            $todo_task_time = $todoRow['todo_task_time'];
                            $todo_task_complete = $todoRow['todo_task_complete'];
                        
                        }

                        echo $data = "$todoEditId,$todo_task,$todo_task_time";
                        // $todoEditId;
                        // $data[1] = $todo_task;
                        // $data[2] = $todo_task_time;

                    }



                    
                    if (isset($_POST['todoDeleteId'])) {

                        $todoDeleteId = $_POST['todoDeleteId'];

                        $queryTodo = "DELETE FROM `todo` WHERE `todo`.`todo_id` = $todoDeleteId";
                        $deleteTodo = mysqli_query($connection,$queryTodo);   

                    }


                    if(isset($_POST['showTodo'])){

                        $queryTodo = "SELECT * FROM `todo` WHERE `todo`.`todo_username` = 'ECI3826' ORDER BY `todo`.`todo_position`";
                        $selectTodo = mysqli_query($connection,$queryTodo);

                        $data = '<ul class="todo-list" data-widget="todo-list" id="todoSort">';
                        
                        if (mysqli_num_rows($selectTodo) > 0) {
                            // $num = 1;
                            while ($todoRow = mysqli_fetch_assoc($selectTodo)) {
                                $todo_id = $todoRow['todo_id'];
                                $todo_username = $todoRow['todo_username'];
                                $todo_task = $todoRow['todo_task'];
                                $todo_task_time = $todoRow['todo_task_time'];
                                $todo_position = $todoRow['todo_position'];
                                $todo_task_complete = $todoRow['todo_task_complete'];
    
                                $data .= '<li data-id="'.$todo_id.'" data-position="'.$todo_position.'">

                                        <span class="handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                        </span>
                                    <div  class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" onclick="checkboxToggle('.$todo_id.')" value="" name="todo'.$todo_id.'" id="todoCheck'.$todo_id.'" ';
                                        if ($todo_task_complete == 1) {
                                            $data .= 'checked';
                                        }
                                        $data .= '>
                                        <label for="todoCheck'.$todo_id.'"></label>
                                    </div>
                                    <span class="text" ';
                                    if ($todo_task_complete == 1) {
                                        $data .= ' style="font-weight: 500 !important; text-decoration: line-through !important; color: #697582 !important; " ';
                                    }
                                    $data .= '>';
                                    $data .= $todo_task;
                                    $data .= '</span>
                                    <small class="badge badge-info" ';
                                    if ($todo_task_complete == 1) {
                                        $data .= ' style="background: #adb5bd!important; " ';
                                    }
                                    $data .= '><i class="far fa-clock"></i> ';
                                    $data .= $todo_task_time;
                                    $data .= '</small>
                                    <div class="tools">
                                        <i onclick="editTodo('.$todo_id.')" class="fas fa-edit"></i>
                                        <i class="fas fa-trash-o"></i>
                                        <i onclick="deleteTodo('.$todo_id.')" class="fas fa-trash"></i>
                                        <i class="fas fa-trash-o"></i>
                                    </div>
                                    </li>';

                            }
                            // background: #adb5bd!important; todoDeleteId
                            $data .= '</ul>';
                            echo $data;
                        }
                        
                    }

                    if (isset($_POST['taskName']) && isset($_POST['timeForTask'])) {
                        $taskName = $_POST['taskName'];
                        $timeForTask = $_POST['timeForTask'];

                        $addTodo = "INSERT INTO `todo` (`todo_id`, `todo_username`, `todo_task`, `todo_task_time`, `todo_position`, `todo_task_complete`) VALUES (NULL, '$student_username_session', '$taskName', '$timeForTask', 0, 0)";
                        $todoQuery = mysqli_query($connection,$addTodo);

                    }


                    if (isset($_POST['editTodoId']) && isset($_POST['editTaskName']) && isset($_POST['editTimeForTask'])) {
                        
                        $editTodoId = $_POST['editTodoId'];
                        $editTaskName = $_POST['editTaskName'];
                        $editTimeForTask = $_POST['editTimeForTask'];

                        $updateTodo = "UPDATE `todo` SET `todo_task` = '$editTaskName', `todo_task_time` = '$editTimeForTask' WHERE `todo`.`todo_id` = $editTodoId";
                        $todoQuery = mysqli_query($connection,$updateTodo);

                    }


                    if (isset($_POST['positionsArray'])) {
                        foreach($_POST['positionsArray'] as $position){
                            $index = $position[0];
                            $newPosition = $position[1];
                            $updateTodo = "UPDATE `todo` SET `todo_position` = '$newPosition' WHERE `todo`.`todo_id` = $index";
                            $todoQuery = mysqli_query($connection,$updateTodo);
                        }
                    }




?>