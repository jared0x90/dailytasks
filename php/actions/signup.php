<?
$signup_error = true;
$signup_error_reason = '';

if(! recaptcha_valid()){
  $signup_error_reason = LANGUAGE_SIGNUP_BAD_CAPTCHA;
}else{
  if(! isset($_REQUEST['email'])){
    $signup_error_reason = LANGUAGE_SIGNUP_NO_EMAIL;
  }else{
    if( ! filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
      $signup_error_reason = LANGUAGE_SIGNUP_BAD_EMAIL;
    }else{
      $signup_error = false;
    }
  }
}