<?php
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['reset-request-submit'])){

    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "localhost/mehta/create-new-password.php?selector=$selector&validator=".bin2hex($token);

    $expires = date("U") + 1800;

    require 'db.php';

    $userEmail = $_POST['email'];

    $sql = "DELETE FROM pwd_reset WHERE pwd_reset_email=?";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: 404.php");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "s" ,$userEmail);
        mysqli_stmt_execute($stmt);        
    }

    $sql = "INSERT INTO pwd_reset (pwd_reset_email, pwd_reset_selector, pwd_reset_token, pwd_reset_expires) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: 404.php");
        exit();
    }else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);        
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);

    $to = $userEmail;

    $subject = 'Reset your password for ECI Connect';

    $message = '<p>We recieved a password reset request. The link to reset your password is below. if you did not make this request, you can ignore this email</p>';
    $message .= '<p>Here is your password reset link: </br>';
    $message .= '<a herf = "'.$url.'">' . $url . '</a></p>';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'devamparikh15@gmail.com';                     //SMTP username
    $mail->Password   = 'devam@15162000';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('devamparikh15@gmail.com', 'ECI Connect');
    // $mail->addAddress('chiragkakadia93@gmail.com', 'Chirag Patel');     //Add a recipient
    $mail->addAddress($to);               //Name is optional
    $mail->addReplyTo('devamparikh15@gmail.com');
    // $mail->addCC('chiragkakadia93@gmail.com');
    // $mail->addBCC('educrafters.rajkot@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("Location: reset-password.php?reset=success");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}else{
    header("Location: login.php");
}