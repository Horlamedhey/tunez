<?php
require 'vendor/autoload.php';

use Josantonius\Session\Session;
use sergeytsalkov\meekrodb;

DB::$user = 'tunebrrp_tunezwallet';
DB::$password = 'admin@tunezwallet.io';
DB::$dbName = 'tunebrrp_users';
Session::init();
$activated = DB::queryFirstRow("SELECT activated FROM usersTable WHERE email=%s", Session::get('email'));
if ($activated['activated'] === 'no') {
  header("Location: confirmation.php?email=" . Session::get('email'));
}
$referrals = DB::queryFirstRow("SELECT referrals FROM usersTable WHERE email=%s", Session::get('email'));
if (!Session::get('email')) {
  header("Location: index.php?loggedOut");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" href="assets/images/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="theme-color" content="#865603" />
  <title>
    TunezWallet-Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=1, shrink-to-fit=no' name='viewport' />
  <meta name="description" content="Introducing a platform for mass adoption of cryptocurrencies.">
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
  <div class="preloader" id="preloader">
    <svg class="xs-preload" viewBox="0 0 120 120" width="120px" height="120px">
      <circle class="inner" cx="60" cy="60" r="32" />
      <circle class="middle" cx="60" cy="60" r="38" />
      <circle class="outer" cx="60" cy="60" r="44" />
    </svg>
  </div>
  <div class="wrapper ">
    <div class="main-panel" style="float: left; width: 100%;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a href="index.php" class="simple-text logo-normal">
              <img width="90px" src="assets/images/logo.png" alt="Tunez-logo">
              TunezWallet
            </a>
          </div>
          <div class="justify-content-end">
            <a class="navbar-brand" href="logout.php">
              <i class="fa fa-sign-out"></i>
              Log Out
            </a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div style="z-index: 999999; display: none; position: fixed; top: 100px; width: 100%; text-align: center;" id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
              <span id="alertbox"></span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <h2><?php echo (Session::get('email')); ?>, Welcome to your dashboard.</h2>
          <h3>Note:</h3>
          <ol>
            <li>
              Your referral code is <code><?php echo (Session::get('ownReferralCode')); ?></code>, use it to earn 1,000 TUNEZ bonus per referral.
            </li>
            <li>
              Join us on Telegram, Twitter and Youtube by clicking on the media icons below.
            </li>
            <li>
              As proof of joining our media channels, input your details in the respective media cards by clicking on the edit icon.
            </li>
            <li>You will not be able to input your wallet address until you satisfy 2 & 3 above.</li>
          </ol>
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-icon">
                  <a href="https://t.me/tunez_chat" target="_blank">
                    <div class="card-icon" style="background: #30A8DC;">
                      <i class="fa fa-telegram"></i>
                    </div>
                  </a>
                  <h4 class="card-title">Telegram Username</h4>
                  <p class="card-category" id="usercontent1"><?php echo (Session::get('telegram')); ?></p>
                </div>
                <div class="card-footer">
                  <div id="stats1" class="stats">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <div id="username1" class="input-group input-group-sm mb-1" style="width: unset;">
                    <input id="telegraminput" value="<?php echo (Session::get('telegram')); ?>" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="telegramsave">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-icon">
                  <a href="https://twitter.com/Tunez_wallet" target="_blank">
                    <div class="card-icon" style="background: #00ACED;">
                      <i class="fa fa-twitter"></i>
                    </div>
                  </a>
                  <h4 class="card-title">Twitter Handle</h4>
                  <p class="card-category" id="usercontent2"><?php echo (Session::get('twitter')); ?></p>
                </div>
                <div class="card-footer">
                  <div class="stats" id="stats2">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <div id="username2" class="input-group input-group-sm mb-1" style="width: unset;">
                    <input id="twitterinput" value="<?php echo (Session::get('twitter')); ?>" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="twittersave">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <a href="https://www.youtube.com/channel/UCLVxEwLZj-JFYR_S2LvuviQ" target="_blank">
                    <div class="card-icon">
                      <i class="fa fa-youtube"></i>
                    </div>
                  </a>
                  <h4 class="card-title">Youtube Username</h4>
                  <p class="card-category" id="usercontent3"><?php echo (Session::get('youtube')); ?></p>
                </div>
                <div class="card-footer">
                  <div class="stats" id="stats3">
                    <i class="fa fa-pencil"></i>
                  </div>
                  <div id="username3" class="input-group input-group-sm mb-1" style="width: unset;">
                    <input id="youtubeinput" value="<?php echo (Session::get('youtube')); ?>" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="youtubesave">Save</button>
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
                  <p class="card-category" id="usercontent4"><?php echo (Session::get('ethereum')); ?></p>
                </div>
                <div class="card-footer">
                  <div class="stats" id="stats4" >
                    <i class="fa fa-pencil"></i>
                  </div>
                  <div id="username4" class="input-group input-group-sm mb-1" style="width: unset;">
                    <input id="ethereuminput" value="<?php echo (Session::get('ethereum')); ?>" type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="ethereumsave">Save</button>
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
                  <h3 class="card-title"><?php echo (Session::get('tokens')); ?>
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
                  <h3 class="card-title"><?php echo ($referrals['referrals']); ?></h3>
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
                    <?php echo ($referrals['referrals'] * 1000); ?>
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
                    <?php echo (Session::get('tokens') + ($referrals['referrals'] * 1000)); ?>
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
  <script>
    $(window).on('load', function () {
        $('#preloader').addClass('loaded');
    });
  
  /*media*/

  $('#telegramsave').on('click', () => {
    $('#telegramsave').html('...');
    $.ajax({
      type: 'POST',
      url: 'media.php',
      data: {
        address: $('#telegraminput').val(),
        media: 'telegram'
      },
      cache: false,
      success: (response) => {
        if (/Success/.test(response)) {
          $('#alert').css('display', 'block');
          $('#alertbox').html(`<strong>${response}</strong>`);
          $('#usercontent1').html($('#telegraminput').val());
          $('#username1').slideToggle();
          setTimeout(() => {
            $('#alert').css('display', 'none');
            $('#telegramsave').html('save');
            $('.info-group').removeClass('isActive');
          }, 1000);
        }
      }
    });
  });
  $('#twittersave').on('click', () => {
    $('#twittersave').html('...')
    $.ajax({
      type: 'POST',
      url: 'media.php',
      data: {
        address: $('#twitterinput').val(),
        media: 'twitter'
      },
      cache: false,
      success: (response) => {
        if (/Success/.test(response)) {
          $('#alert').css('display', 'block');
          $('#alertbox').html(`<strong>${response}</strong>`);
          $('#usercontent2').html($('#twitterinput').val());
          $('#username2').slideToggle();
          setTimeout(() => {
            $('#alert').css('display', 'none');
            $('#twittersave').html('save');
            $('.info-group').removeClass('isActive');
          }, 1000);
        }
      }
    });
  });
  $('#youtubesave').on('click', () => {
    $('#youtubesave').html('...')
    $.ajax({
      type: 'POST',
      url: 'media.php',
      data: {
        address: $('#youtubeinput').val(),
        media: 'youtube'
      },
      cache: false,
      success: (response) => {
        if (/Success/.test(response)) {
          $('#alert').css('display', 'block');
          $('#alertbox').html(`<strong>${response}</strong>`);
          $('#usercontent3').html($('#youtubeinput').val());
          $('#username3').slideToggle();
          setTimeout(() => {
            $('#alert').css('display', 'none');
            $('#youtubesave').html('save');
            $('.info-group').removeClass('isActive');
          }, 1000);
        }
      }
    });
  });
  $('#ethereumsave').on('click', () => {
    if (document.getElementById('usercontent1').innerHTML !== '' && document.getElementById('usercontent2').innerHTML !== '') {
      $('#ethereumsave').html('...')
      $.ajax({
        type: 'POST',
        url: 'media.php',
        data: {
          address: $('#ethereuminput').val(),
          media: 'ethereum'
        },
        cache: false,
        success: (response) => {
          if (/Success/.test(response)) {
            $('#alert').css('display', 'block');
            $('#alertbox').html(`<strong>${response}</strong>`);
            $('#usercontent4').html($('#ethereuminput').val());
            $('#username4').slideToggle();
            setTimeout(() => {
              $('#alert').css('display', 'none');
              $('#ethereumsave').html('save');
              $('.info-group').removeClass('isActive');
            }, 1000);
          }
        }
      });
    } else {
      $('#alert').css('display', 'block');
      $('#alertbox').html(`<strong>Please complete the tasks in NOTE #2 & #3.</strong>`);
      setTimeout(() => {
        $('#alert').css('display', 'none');
        $('#youtubesave').html('save');
        $('.info-group').removeClass('isActive');
      }, 3000);
    }
  });
  </script>
  <script src="assets/js/dashboard.js"></script>
</body>

</html>