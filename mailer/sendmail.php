<?php
session_start();
if (isset($_POST['getpass'])) {
    $email = $_POST['email'];
    $_SESSION['get_email'] = $email;
   $ramcheck = rand(1,99999);
    $_SESSION['ramcheck'] = $ramcheck;

}
include  "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
include  "PHPMailer/src/OAuth.php";
include  "PHPMailer/src/POP3.php";
include  "PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);  
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'hiepdt2909@gmail.com';                 // SMTP username
        $mail->Password = 'eqldkrsejsvlgatj';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
     
        //Recipients
        $mail->setFrom('hiepdt2909@gmail.com', 'Outstock Shop');
        $mail->addAddress($email, 'Hi '.$email.'');     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('khis2boo32@gmail.com', 'Feedback');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
     
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
     
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reset password';
        $mail->Body    = " http://localhost/project/index.php?action=$ramcheck&email=$email";
        $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
     
        $mail->send();
        echo 'Message has been sent';
        
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    
}
header("location: ../index.php?action=login");
?>