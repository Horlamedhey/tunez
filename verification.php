<?php
require 'vendor/autoload.php';
use sergeytsalkov\meekrodb;
use Josantonius\Session\Session;

Session::init();
DB::$user = 'tunezwallet';
DB::$password = 'admin@tunezwallet.io';
DB::$dbName = 'users';

if ($_GET['email'] && $_GET['code']) {
  DB::update('usersTable', array(
    'activated' => 'yes'
  ), 'ownReferralCode=%s' and 'email=%s', $_GET['code'], $_GET['email']);
  $user = DB::queryFirstRow("SELECT * FROM usersTable WHERE email=%s AND ownReferralCode=%s", $_GET['email'], $_GET['code']);
  Session::set($user);
  header('Location: dashboard.php?email=' . $_GET['email'] . '&code=' . $_GET['code']);
}