<?php
require 'vendor/autoload.php';

use sergeytsalkov\meekrodb;
use PHPMailer\PHPMailer\PHPMailer;

DB::$user = 'tunezwallet';
DB::$password = 'admin@tunezwallet.io';
DB::$dbName = 'users';

$email = $_GET['email'];
$code = DB::queryFirstRow("SELECT ownReferralCode FROM usersTable WHERE email=%s", $email);
$mail = new PHPMailer();
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->SMTPDebug = 2;
$mail->Host = "tunezwallet.com";  // specify main and backup server
$mail->Port = 465;
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@tunezwallet.com";  // SMTP username
$mail->Password = "admin@tunezwallet.io"; // SMTP password

$mail->setFrom("info@tunezwallet.com", "TunezWallet");
// $mail->FromName = ;
$mail->AddAddress($email);

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = 'Account Activation';
$mail->Body = 'Please Click On This link <a href="https://www.tunezwallet.com/verification.php">Verify.php?email=' . $email . '&code=' . $code['ownReferralCode'] . '</a>to activate your account.';
$mail->AltBody = 'Please Click On This link <a href="https://www.tunezwallet.com/verification.php">Verify.php?email=' . $email . '&code=' . $code['ownReferralCode'] . '</a>to activate your account.';

if (!$mail->Send()) {
  echo "Message could not be sent. 
  ";
  echo "Mailer Error: " . $mail->ErrorInfo;
  exit;
}

echo "Message Successfully Sent";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" href="assets/images/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    TunezWallet-Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="assets/images/logo.png">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700" />
  <link rel="stylesheet" href="assets/css/fontawesome-min.css">
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
  <style>
    .stats i, .card-icon {
      cursor: pointer;
    }
  </style>
</head>

<body class="dark-edition">
  <!--<div class="preloader" id="preloader">
    <svg class="xs-preload" viewBox="0 0 120 120" width="120px" height="120px">
      <circle class="inner" cx="60" cy="60" r="32" />
      <circle class="middle" cx="60" cy="60" r="38" />
      <circle class="outer" cx="60" cy="60" r="44" />
    </svg>
  </div>-->
  <div class="wrapper ">
    <div class="main-panel" style="float: left; width: 100%;">
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a href="index.php" class="simple-text logo-normal">
              <img width="90px" src="assets/images/logo.png" alt="logo">
              TunezWallet
            </a>
          </div>
        </div>
      </nav>
      <div class="content" style="display: flex; align-items: center;">
        <div class="container-fluid">
          <h1 style="text-align: center;">Please click the link in the mail sent to you for confirmation.
          </h1>
          <a href="" class="btn mt-3" style="margin: auto; display: block; width: fit-content;">Resend confirmation mail.</a>

        </div>
      </div>
      <footer class="xs-footer-sec">
      <!-- copyright area -->
      <div class="footer-copyright">
        <p>
          Copyright © 2018 TunezWallet
        </p>
      </div>

  </div><!-- container end -->
  </footer>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>