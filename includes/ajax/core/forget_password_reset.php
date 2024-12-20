<?php

/**
 * ajax -> core -> forget password reset
 * 
* Desarrollado por Jaime, Felipe y Gabriel
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check user logged in
if ($user->_logged_in) {
  return_json(['callback' => 'window.location.reload();']);
}

try {

  // forget password reset
  $user->forget_password_reset($_POST['email'], $_POST['reset_key'], $_POST['password'], $_POST['confirm']);

  // return
  modal("SUCCESS", __("Done"), __("Your password has been changed you can login now"));
} catch (Exception $e) {
  return_json(['error' => true, 'message' => $e->getMessage()]);
}
