<?php
require 'vendor/autoload.php';
use sergeytsalkov\meekrodb;
use Josantonius\Session\Session;

Session::init();

DB::$user = 'tunezwallet';
DB::$password = 'admin@tunezwallet.io';
DB::$dbName = 'users';
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_POST['media'] && $_POST['media'] === 'youtube') {
  $update = DB::update('usersTable', array(
    'youtube' => test_input($_POST['address'])
  ), 'email=%s', Session::get('email'));
  if ($update) {
    Session::set('youtube', test_input($_POST['address']));
    echo ('Updated Successfully');
  } else {
    echo ('An error occured, please try again');
  }
} else if ($_POST['media'] && $_POST['media'] === 'telegram') {
  $update = DB::update('usersTable', array(
    'telegram' => test_input($_POST['address'])
  ), 'email=%s', Session::get('email'));
  if ($update) {
    Session::set('telegram', test_input($_POST['address']));
    echo ('Updated Successfully!');
  } else {
    echo ('An error occured, please try again');
  }
} else if ($_POST['media'] && $_POST['media'] === 'twitter') {
  $update = DB::update('usersTable', array(
    'twitter' => test_input($_POST['address'])
  ), 'email=%s', Session::get('email'));
  if ($update) {
    Session::set('twitter', test_input($_POST['address']));
    echo ('Updated Successfully');
  } else {
    echo ('An error occured, please try again');
  }
} else if ($_POST['media'] && $_POST['media'] === 'ethereum') {
  if (!DB::queryFirstRow("SELECT ethereum FROM usersTable WHERE
  ethereum=%s", test_input($_POST['address']))) {
    $update = DB::update('usersTable', array(
      'ethereum' => test_input($_POST['address'])
    ), 'email=%s', Session::get('email'));
    if ($update) {
      Session::set('ethereum', test_input($_POST['address']));
      echo ('Updated Successfully');
    } else {
      echo ('An error occured, please try again');
    }
  } else {
    echo ('Wallet address already exists!');
  }
}
?>