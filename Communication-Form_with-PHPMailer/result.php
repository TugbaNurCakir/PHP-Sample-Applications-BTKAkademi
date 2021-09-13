<?php
header("Content-Type: text/html; charset=utf-8");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//SECURITY FILTERING TO COMING INPUT

function Filtering($ComingValue){
    $Filtering1 = trim($ComingValue);
    $Filtering2 = strip_tags($Filtering1);
    $Filtering3 = htmlspecialchars($Filtering2, ENT_QUOTES);
    return $Filtering3;
}

// GET INPUT FROM FORM

$NameAndSurname= Filtering($_POST["name_surname"]);
$email = Filtering($_POST["email"]);
$topicOfMail = Filtering($_POST["topic"]);
$Message = Filtering($_POST["messageText"]);


//************The necessary codes for mail were copied from github.***************

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.hacettepe.edu.tr';                //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'username@hacettepe.edu.tr';              //SMTP username
    $mail->Password   = '****';                             //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $NameAndSurname);
    $mail->addAddress('username@hacettepe.edu.tr', 'Name Surname');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('username@hacettepe.edu.tr', 'Name Surname');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $topicOfMail;
    $mail->Body    = $Message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}









?>