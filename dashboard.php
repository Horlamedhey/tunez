<?php
require 'vendor/autoload.php';

use Josantonius\Session\Session;
use sergeytsalkov\meekrodb;

DB::$user = 'tunezwallet';
DB::$password = 'admin@tunezwallet.io';
DB::$dbName = 'users';
Session::init();
$activated = DB::queryFirstRow("SELECT activated FROM usersTable WHERE email=%s", Session::get('email'));
if ($activated['activated'] === no) {
  header("Location: confirmation.php");
}
// $referrals = DB::queryFirstRow("SELECT referrals FROM usersTable WHERE email=%s", Session::get('email'));
// if (!Session::get('email')) {
//   header("Location: index.php?loggedOut");
// }
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
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a href="index.php" class="simple-text logo-normal">
              <img width="90px" src="assets/images/logo.png" alt="logo">
              TunezWallet
            </a>
          </div>
          <div class="justify-content-end">
            <a class="navbar-brand" href="javascript:void(0)">
              <i class="fa fa-dashboard"></i>
              Dashboard
            </a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <h2>Horlasco34@gmail.com, Welcome to your dashboard.</h2>
          <h3>Note:</h3>
          <ol>
            <li>
              Join us on Telegram, Twitter and Youtube by clicking on the media icons below.
            </li>
            <li>
              As proof of joining our media channels, input your details in the respective media cards by clicking on the edit icon.
            </li>
            <li>You will not be able to input your wallet address until you satisfy 1 & 2 above.</li>
          </ol>
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-icon">
                  <div class="card-icon" style="background: #30A8DC;">
                    <i class="fa fa-telegram"></i>
                  </div>
                  <h4 class="card-title">Telegram Username</h4>
                  <p class="card-category" id="usercontent1">Horla</p>
                </div>
                <div class="card-footer">
                  <div id="stats1" class="stats">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <div id="username1" class="input-group input-group-sm mb-1" style="width: unset;">
                    <input value="Horla" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-icon">
                  <div class="card-icon" style="background: #00ACED;">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <h4 class="card-title">Twitter Handle</h4>
                  <p class="card-category" id="usercontent2">Horlasco34@yahoo.com</p>
                </div>
                <div class="card-footer">
                  <div class="stats" id="stats2">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <div id="username2" class="input-group input-group-sm mb-1" style="width: unset;">
                    <input value="Horlasco34@yahoo.com" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-youtube"></i>
                  </div>
                  <h4 class="card-title">Youtube Username</h4>
                  <p class="card-category" id="usercontent3">Variable92</p>
                </div>
                <div class="card-footer">
                  <div class="stats" id="stats3">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <div id="username3" class="input-group input-group-sm mb-1" style="width: unset;">
                    <input value="Variable92" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-icon">
                  <div class="card-icon" style="background: #444444; padding:15px 25px;">
                    <i class="mdi mdi-ethereum"></i>
                  </div>
                  <h4 class="card-title">Ethereum Address</h4>
                  <p class="card-category" id="usercontent4">Variable92</p>
                </div>
                <div class="card-footer">
                  <div class="stats" id="stats4" >
                    <i class="fa fa-pencil"></i>
                  </div>
                  <div id="username4" class="input-group input-group-sm mb-1" style="width: unset;">
                    <input value="Variable92" type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-success" style="background: #30A8DC; box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(70, 67, 154, 0.4);">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <p class="card-category">Tokens</p>
                  <h3 class="card-title">10,000
                    <small>TUNEZ</small>
                  </h3>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-warning" style="background: #00ACED; box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(70, 67, 154, 0.4);">
                </div>
                <div class="card-body">
                  <p class="card-category">Referrals</p>
                  <h3 class="card-title">127</h3>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                </div>
                <div class="card-body">
                  <p class="card-category">Referal Tokens</p>
                  <h3 class="card-title">
                    75,000
                    <small>TUNEZ</small>
                  </h3>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-12">
              <div class="card card-chart">
                <div class="card-header card-header-danger" style="background: #444444;   box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(70, 67, 54, 0.4);">
                </div>
                <div class="card-body">
                  <p class="card-category">Total Tokens</p>
                  <h3 class="card-title">
                    245,000
                    <small>TUNEZ</small>
                  </h3>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
          </div>
        </div>
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
  </div>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>