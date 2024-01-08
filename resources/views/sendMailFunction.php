<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$sent= false;
function sendMail($email, $subject, $body,$file_name)
{
  global $sent;

  require_once 'PHPMailer/src/Exception.php';
  require_once 'PHPMailer/src/PHPMailer.php';
  require_once 'PHPMailer/src/SMTP.php';
  $mail= new PHPMailer(true);
  try{
      $mail->isSMTP();
      $mail->SMTPDebug = 0;
      $mail->Host = 'smtp.hostinger.com';
      $mail->Port = 587;
      $mail->SMTPAuth = true;
      $mail->Username = 'it@gulfspectrum.com.sa';
      $mail->Password = 'Yosef2012@';
      $mail->setFrom('it@gulfspectrum.com.sa', 'GulfSpectrum');
      $mail->addReplyTo('it@gulfspectrum.com.sa', 'GulfSpectrum');
      $mail->addAddress($email);
      $mail->Subject = $subject;
      // $mail->msgHTML(file_get_contents('message.html'), __DIR__);
      $mail->addAttachment($file_name);
      $mail->Body = $body;
      $mail-> isHTML(true);
      $mail->CharSet = 'UTF-8';



      if (!$mail->send()) {
          $sent= false;
      } else {
          $sent= true;
      }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}


function sendMailtow($email, $subject, $body)
{
  global $sent;

  require_once 'PHPMailer/src/Exception.php';
  require_once 'PHPMailer/src/PHPMailer.php';
  require_once 'PHPMailer/src/SMTP.php';
  $mail= new PHPMailer(true);
  try{
      $mail->isSMTP();
      $mail->SMTPDebug = 0;
      $mail->Host = 'smtp.hostinger.com';
      $mail->Port = 587;
      $mail->SMTPAuth = true;
      $mail->Username = 'it@gulfspectrum.com.sa';
      $mail->Password = 'Yosef2012@';
      $mail->setFrom('it@gulfspectrum.com.sa', 'GulfSpectrum');
      $mail->addReplyTo('it@gulfspectrum.com.sa', 'GulfSpectrum');
      $mail->addAddress($email);
      $mail->Subject = $subject;
      // $mail->msgHTML(file_get_contents('message.html'), __DIR__);

      $mail->Body = $body;
      $mail-> isHTML(true);
      $mail->CharSet = 'UTF-8';



      if (!$mail->send()) {
          $sent= false;
      } else {
          $sent= true;
      }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}


?>
