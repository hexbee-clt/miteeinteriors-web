

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


if(!empty($_SESSION['otp'])){
// echo ("h");    

    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sugeeshvk541@gmail.com';                     //SMTP username
    $mail->Password   = 'bcgopzxcxiubrlbq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                    // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('sugeeshvk541@gmail.com', 'Mailer');
    $mail->addAddress($_SESSION['name'], 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('sugeeshvk541@gmail.com');
    // $mail->addBCC('sugeeshvk541@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                        //Set email format to HTML
    $mail->Subject = 'OTP';
    $mail->Body    = '<strong> OTP : </strong>' . $_SESSION['otp'] . '<strong> ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
    try {
        $mail->send();
        echo 'Your message was sent successfully!';
        // header("Location: thank-you.php");
        $message="Sucessfuly sent message";
    } catch (Exception $e) {
        echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
    }
    
} else {
    echo "There is a problem with the document!";

}
?>

<script>window.location.href = '../../../login/resetpassword.php';</script>