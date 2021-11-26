<?php

if(isset($_POST['reset-password-submit'])){

    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($password) || empty($passwordRepeat)){
    header("Location: ../login.php");
    exit();
    }elseif ($password != $passwordRepeat) {
    header("Location: ../login.php");
    exit(); 
    }

    $currentDate = date("U");

    require '../db.php';

    $sql = "SELECT * FROM pwd_reset WHERE pwd_reset_selector=? AND pwd_reset_expires >=?";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: 404.php");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
        mysqli_stmt_execute($stmt);        
    
        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            echo "You need to re-submit your reset request.";
            exit();
        }else{

            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row['pwd_reset_token']);

            if($tokenCheck === false){
                echo "You need to re-submit your reset request.";
                exit();
            }elseif ($tokenCheck === true) {
                
                $tokenEmail = $row['pwd_reset_email'];

                $sql = "SELECT * FROM student WHERE student_email=?;";
                $stmt = mysqli_stmt_init($connection);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: 404.php");
                    exit();
                }else{
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        header("Location: 404.php");
                        exit();
                    }else{

                        $sql = "UPDATE student SET student_pass=? WHERE student_email=?";
                        $stmt = mysqli_stmt_init($connection);
                        if (!mysqli_stmt_prepare($stmt,$sql)) {
                            header("Location: 404.php");
                            exit();
                        }else{
                            // $newPwdHash = password_hash($password, PASSWORD_DEFAULT); 
                            mysqli_stmt_bind_param($stmt, "ss", $password, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM pwd_reset WHERE pwd_reset_email=?";
                            $stmt = mysqli_stmt_init($connection);
                            if (!mysqli_stmt_prepare($stmt,$sql)) {
                                header("Location: 404.php");
                                exit();
                            }else{
                                mysqli_stmt_bind_param($stmt, "s" ,$tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../login.php?newpwd=passwordupdated");
                            }
                        }
                    }
                }
            }
        }
    }



}else{
    header("Location: login.php");
}