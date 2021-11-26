<?php
if(isset($_POST['submit']))
{
    $student_roll = $_POST['student_roll'];
    $student_pass = $_POST['student_pass'];
    echo $professor_user_id = $_POST['student_roll'];
    $professor_pass = $_POST['student_pass'];
    $admin_user_id = $_POST['student_roll'];
    $admin_pass = $_POST['student_pass'];
    //Check if ID is correct
    include "db.php";
    $query = "SELECT student_roll,student_pass FROM student WHERE student_roll = '$student_roll' AND student_pass = '$student_pass'";
    $result = mysqli_query($connection,$query);
    if(!$result){
        // header("Location: login.php?login=student_id");
        die('Query Failed' . mysqli_error($connection));
        
        exit();
        }
        echo $student = mysqli_fetch_assoc($result);
        if (isset($student)) {
        $student_roll = $student['student_roll'];
        if($student_roll !== NULL){

            ob_start();
            session_start();
            echo $_SESSION['student_username'] = $student_roll;

            if (isset($_POST['rememberme'])) {
                setcookie("emailcookie", $student_roll, time()+31104000);
                setcookie("passwordcookie", $student_pass, time()+31104000);

                header("Location: student/index.php");


            } else {

                header("Location: student/index.php");
            }
                        

        exit();
        }else {
            
        }
    }
        else{
            $query = "SELECT `professor`.`professor_username`,`professor`.`professor_pass` FROM `professor` HAVING `professor`.`professor_username` = '$professor_user_id' AND `professor`.`professor_pass` = '$professor_pass'";
            $result = mysqli_query($connection,$query);
            if(!$result){
                die('Query Failed' . mysqli_error($connection));
            
                exit(); 
            }
            echo $professor = mysqli_fetch_assoc($result);
            if (isset($professor)) {
            
            $professor_user_id = $professor['professor_username'];
            if($professor_user_id !== NULL){
                ob_start();
                session_start();
                echo $_SESSION['professor_username'] = $professor_user_id;
                header("Location: professor/index.php");
                exit();
            }else{
    
            }
        }
            else{
                $query = "SELECT admin_user_id,admin_pass FROM admin WHERE admin_user_id = '$admin_user_id' AND admin_pass = '$admin_pass'";
                $result = mysqli_query($connection,$query);
                if(!$result){
                    die('Query Failed' . mysqli_error($connection));
            
                    exit(); 
                }
                echo $admin = mysqli_fetch_assoc($result);
                if (isset($admin)) {
                
                $admin_user_id = $admin['admin_user_id'];
                if($admin_user_id !== NULL){
                    ob_start();
                    session_start();
                    echo $_SESSION['admin_username'] = $admin_user_id;
        
                    if (isset($_POST['rememberme'])) {
                        setcookie("emailcookie", $admin_user_id, time()+31104000);
                        setcookie("passwordcookie", $admin_pass, time()+31104000);
        
                        header("Location: admin/index.php");
        
        
                    } else {
        
                        header("Location: admin/index.php");
                    }
                                
        
                exit();
                }
                else{

                }
            }
                else{
                    header("Location: login.php?login=professor_id1");
                    exit();
                }
                header("Location: login.php?login=professor_id2");
                exit();
            }
            header("Location: login.php?login=professor_id3");
            exit();
        }
        // echo $professor_id;
    }





?>