<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_POST['email'] && $_POST['message']) {
  $email = test_input($_REQUEST['email']);
  $message = test_input($_REQUEST['message']);
  $mail = new PHPMailer();
  $mail->IsSMTP();                                      // set mailer to use SMTP
  $mail->Host = "tunezwallet.com";  // specify main and backup server
  $mail->SMTPAuth = true;     // turn on SMTP authentication
  $mail->Username = "info@tunezwallet.com";  // SMTP username
  $mail->Password = "admin@tunezwallet.io"; // SMTP password

  $mail->From = "info@tunezwallet.com";
  $mail->FromName = $email;
  $mail->AddAddress("info@tunezwallet.com");

  $mail->WordWrap = 50;                                 // set word wrap to 50 characters
  $mail->IsHTML(true);                                  // set email format to HTML

  $mail->Subject = 'Support';
  $mail->Body = '<html><body>
  <p>' . $message . '</p>
  </body></html>';
  $mail->AltBody = $message;

  if (!$mail->Send()) {
    echo "Message could not be sent! Please try again. 
  ";
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
  }

  echo "Message Successfully Sent!";
}
?>